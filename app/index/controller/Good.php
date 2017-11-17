<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
use wxpay\WxPayApi;
use wxpay\WxPayConfig;
use wxpay\WxPayNotify;
use wxpay\PayNotifyCallBack;
use wxpay\data\JsApiPay;
use wxpay\data\WxPayUnifiedOrder;
use think\Log;
use lib\class_wechat;

class Good extends Controller
{

    //商品详情
    public function detail(){
        $user = Session::get('user');
        $id = input('id');
        $goods = Db::name('goods')->where('ID', $id)->find();
        $shopuser = Db::name('user')->where('openid', $user['openid'])->find();
        $size = explode("、",$goods['size']);
        $color = explode("、", $goods['color']);
        $goodsname = $goods['goodsname'];
        $comment = Db::query("select * from jzk_comment where goodsname LIKE  '%$goodsname%'");
        //购买记录
        $shoporder = Db::name('shoporder')->where("flag=1")->select();
        $length = count($shoporder);
        $record = array();

        for($i=0; $i<$length; $i++){
            $goodsname = explode(',', substr($shoporder[$i]['goodsname'], 0, -1));

            if(in_array($goods['goodsname'], $goodsname)){
                $username = Db::name('user')->where('WID', $shoporder[$i]['WID'])->find();
                $record[$i]['name'] = $username['nickname'];
                $record[$i]['date'] = $shoporder[$i]['time'];
            }
        }
        $this->assign('goods', $goods);
        $this->assign('color', $color);
        $this->assign('size', $size);
        $this->assign('shopuser', $shopuser);
        $this->assign('record', $record);
        $this->assign('comment', $comment);
        return $this->fetch();
    }
    //商品立即购买
    public function pay(){
        if(request()->isAjax()){
            $id = input('id');
            $goodsnum = input('goodsnum');
            $goods = Db::name('goods')->where('ID', $id)->find();
            $ordernumber = order_shop();
            $data = array(
                "goodsname" => $goods['goodsname'],
                "photo" => $goods['photo'],
                "goodsprice" => $goods['goodsprice'],
                "goodsscore" => $goods['score'],
                "num" => $goodsnum,
                "total" => $goods['goodsprice']*$goodsnum,
                "score"   => $goods['score']*$goodsnum,
                "flag" => 0,
                "shopflag" => 0,
                "ordernumber" => $ordernumber,
                "time" => date("Y-m-d H:i:s", time()),
                "size"    => input('size').",",
                "color"   => input('color').",",
                "WID"   => input('wid'),
            );
            $data['size'] = substr($data['size'], 0, -1);
            $data['color'] = substr($data['color'], 0, -1);
            $result = Db::name('shoporder')->insert($data);

            //商品库存更新
            $stock = $goods['goodsnum'] - $goodsnum;
            Db::name('goods')->where('ID', $id)->setField('goodsnum', $goodsnum);

            $return = array(
                "id" => $result,
                "order" => $data['ordernumber'],
            );
            return $return;
        }
    }
    //商品分类
    public function category(){
        $pcate = Db::name('cate')->where("pid = 0")->select();
        $scate = Db::name('cate')->where('pid != 0')->select();

        //ajax无刷新分类显示商品
        if(request()->isAjax()){
            $id = input('id');
            $good = Db::name('goods')->where('type', $id)->select();
            return $good;
        }
        $this->assign('pcate', $pcate);
        $this->assign('scate', $scate);
        return $this->fetch();
    }
    //商品搜索
    public function search(){
        if(request()->isAjax()){
            $text = input('text');
//            $goods = Db::name('goods')->where('goodsname','like', $text)->select();
            $goods = Db::query("select * from jzk_goods where goodsname LIKE '%$text%'");
            return $goods;
        }
    }
    //商品存入购物车
    public function setin(){
        if(request()->isAjax()){
            $id = input('id');
            $goodsnum = input('goodsnum');
            $goods = Db::name('goods')->where('ID', $id)->find();
            $data = array(
                "goodsid" => $id,
                "num" => $goodsnum,
                "score"   => $goods['score'],
                "price"   => $goods['goodsprice'],
                "size"    => input('size'),
                "color"   => input('color'),
                "WID"   => input('wid'),
            );
            $result = Db::name('shopcart')->insert($data);
            return $result;
        }
    }
    //购物车
    public function shopcart(){
        $mem = Session::get('user');
        $user = Db::name('user')->where('openid', $mem['openid'])->find();
        $goods = Db::name('shopcart')->where('WID',$user['WID'])->where("shopflag=1")->select();
        foreach ($goods as $k => $value){
            $good = Db::name('goods')->where('ID', $value['goodsid'])->find();
            $value = $value + $good;
            $type = Db::name('cate')->field('typename')->where('ID', $value['type'])->find();
            $value['type'] = $type['typename'];
            $goods[$k] = $value;
        }

        //每日签到判断
        $qiandao = Db::name('qiandao')->where('WID', $user['WID'])->find();
        if($qiandao == null){
            $flag = 1;
        }else{
            $time = strtotime($qiandao['time']);
            $now = strtotime(date("Y-m-d", time()));
            if($now - $time > 86400){
                $flag = 1;
            }else{
                $flag = 2;
            }
        }

        $this->assign('mem', $mem);
        $this->assign('flag', $flag);
        $this->assign('user', $user);
        $this->assign("goods", $goods);
        return $this->fetch();
    }

    //购物车删除订单
    public function delete(){
        $id = input('id');
        $result = Db::name('shopcart')->where('ID', $id)->delete();
        return $result;
    }


    //购物车结账功能
    public function shoporder(){
        if(request()->isAjax()){
            $temp = input('temp');
            $data = array(
                "num"   => input('num'),
                "total" => input('total'),
                "score" => input('score'),
                "WID" => input('wid'),
                "time" => date("Y-m-d H:i:s"),
                "size" => input('size'),
                "color" => input('color'),
                "yunfei" => input('yunfei'),
            );
            //去除字符串最后一位字符
            $data['num'] = substr($data['num'], 0, -1);
            $data['size'] = substr($data['size'], 0, -1);
            $data['color'] = substr($data['color'], 0, -1);
            //获得商品具体信息
            $good = explode(",", substr($temp, 0 , -1));
            $num = explode(",", $data['num']);
            $length = count($good);
            for($i=0; $i<$length; $i++){
                $goods = Db::name('goods')->where('ID', $good[$i])->find();

                //减库存
                $stock = $goods['goodsnum'] - $num[$i];
                Db::name('goods')->where('ID', $good[$i])->setField('goodsnum', $stock);


                $name[$i] = $goods['goodsname'];
                $photo[$i] = $goods['photo'];
                $goodsprice[$i] = $goods['goodsprice'];
                $goodsscore[$i] = $goods['score'];
            }

            $data['goodsname'] = implode(',', $name);
            $data['photo'] = implode(',', $photo);
            $data['goodsprice'] = implode(',', $goodsprice);
            $data['goodsscore'] = implode(',', $goodsscore);


            $data['ordernumber'] = order_shop();
            $result = Db::name('shoporder')->insert($data);

            //清空购物车已提交订单的商品
            $tempid = substr($temp,0, strlen($temp)-1);
            $id = explode(',', $tempid);
            foreach ($id as $k => $value){
                $del = Db::name('shopcart')->where('goodsid', $value)->delete();
            }
            $return = array(
                "order" => $data['ordernumber'],
                "flag" => $result,
            );
            return $return;
        }
    }

    //生成订单订单
    public function checkout(){
        $user = Session::get('user');
        $wid = Db::name('user')->where('openid', $user['openid'])->find();
        $ordernumber = input('order');
        $shoporder = Db::name('shoporder')->where("ordernumber", $ordernumber)->where('flag', 0)->find();
        $address = Db::name('address')->where('WID', $wid['WID'])->select();
        $name = $shoporder['goodsname'];
        $num  = $shoporder['num'];
        $photo = $shoporder['photo'];
        $goodsprice = $shoporder['goodsprice'];
        $goodsscore = $shoporder['goodsscore'];

        //获取商品的名称和购买的数量，并且合并为二维数组
        $name = explode(',', $name);
        $num = explode(',', $num);
        $photo = explode(',', $photo);
        $goodsprice = explode(',', $goodsprice);
        $goodsscore = explode(',', $goodsscore);
        $order = two_array($name, $num, $photo, $goodsprice, $goodsscore);

        $money = $shoporder['total'] + $shoporder['yunfei'];

        //微信支付
        //①、获取用户openid
        $tools = new JsApiPay();
        $openId = $tools->GetOpenid();

        //②、统一下单
        $input = new WxPayUnifiedOrder();
        $input->SetBody($shoporder['goodsname']);
        $input->SetAttach($shoporder['goodsname']);
        $input->SetOut_trade_no(WxPayConfig::MCHID . date("YmdHis"));
        $input->SetTotal_fee($money * 100);
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetGoods_tag("test");
        $input->SetNotify_url("http://lunwen.jiezanke.com/index.php/index/good/notify/id/".$shoporder['ordernumber']);
        $input->SetTrade_type("JSAPI");
        $input->SetOpenid($openId);
        $order1 = WxPayApi::unifiedOrder($input);
        $jsApiParameters = $tools->GetJsApiParameters($order1);

//        //获取共享收货地址js函数参数
//        $editAddress = $tools->GetEditAddressParameters();

        //③、在支持成功回调通知中处理成功之后的事宜，见 notify.php
        /**
         * 注意：
         * 1、当你的回调地址不可访问的时候，回调通知会失败，可以通过查询订单来确认支付是否成功
         * 2、jsapi支付时需要填入用户openid，WxPay.JsApiPay.php中有获取openid流程 （文档可以参考微信公众平台“网页授权接口”，
         * 参考http://mp.weixin.qq.com/wiki/17/c0f37d5704f0b64713d5d2c37b468d75.html）
         */

        $this->assign('order', $order);
        $this->assign('wid', $wid);
        $this->assign('shoporder', $shoporder);
        $this->assign('address', $address);
        $this->assign('jsApiParameters', $jsApiParameters);
        return $this->fetch();
    }

    //添加收获地址
    public function address(){
        $order = input('order');
        $wid = input('wid');
        if(request()->isAjax()){
            $data = array(
                "name" => input('name'),
                "tel" => input("tel"),
                "city" => input('city'),
                "citydetail" => input('citydetail'),
                "wuliu" => input('wuliu'),
                "WID" => input('wid'),
            );
            $result = Db::name('address')->insert($data);
            return $result;
        }
        $this->assign('wid', $wid);
        $this->assign('order', $order);
        return $this->fetch();
    }

    //编辑收货地址
    public function edit(){
        $id = input('id');
        $order = input('order');
        $address = Db::name('address')->where('ID', $id)->find();

        //编辑更新
        if(request()->isAjax()){
            $wid = input('wid');
            $data = array(
                "name" => input('name'),
                "tel" => input("tel"),
                "city" => input('city'),
                "citydetail" => input('citydetail'),
                "wuliu" => input('wuliu'),
            );
            $result = Db::name('address')->where('WID', $wid)->setField($data);
            return $result;
        }
        $this->assign('address', $address);
        $this->assign('order', $order);
        return $this->fetch();
    }
    //删除收货地址
    public function deladd(){
        if(request()->isAjax()){
            $id = input('id');
            $result = Db::name('address')->where('id', $id)->delete();
            return $result;
        }
    }
    //确认收货
    public function receipt(){
        if(request()->isAjax()){
            $order = input('order');
            $result = Db::name('shoporder')->where('ordernumber', $order)->setField("shopflag", 2);
            return $result;
        }
    }

    //付款成功提示页面
    public function paytip(){
        $orderid = input('orderid');
        $goodname = input('goodid');
        $addid = input('addid');
        $score = input('score');
        $wid = input('wid');

        //扣除个人积分，并且对积分进行返积分
        $user = Db::name('user')->where('WID', $wid)->find();
        $fanli = Db::name('jifen')->where('ID', 1)->find();
        //计算购物商品返积分
        $shop = $score - (int)round($score * ($fanli['shop']/100));
        $user['score'] = $user['score'] - $shop;
        Db::name('user')->where('WID', $wid)->setField('score', $user['score']);

        //推荐用户购买，对推荐人进行积分的增加
        $openid = Session::get('user');
        $extend = Db::name('extend')->where('Fopenid', $openid['openid'])->find();
        //判断是否通过推荐关注公众号的
        if($extend != null){
            $ex_user = Db::name('user')->where('ID', $extend['EventKey'])->find();
            $ex_shop = $ex_user['score'] + (int)round($score * ($fanli['tuijian']/100));
            Db::name('user')->where('ID', $extend['EventKey'])->setField('score', $ex_shop);
        }

        //对订单量进行增加，库存减少
        $shoporder = Db::name('shoporder')->where('ordernumber', $orderid)->find();
        $num = substr($shoporder['num'],0, -1);
        $temp = explode(',', $goodname);
        $num = explode(',', $num);
        $order = arr($temp, $num);
        foreach ($order as $k => $value ){
            $good = Db::name('goods')->where('goodsname', $value['goodsname'])->find();
            $sales = $good['sales'] + $value['num'];
            $orders = $good['orders'] + 1;
            $res = Db::name('goods')->where('goodsname', $value['goodsname'])->setField(["sales" => $sales, "orders" => $orders]);
        }

        //更新订单状态
        $address = Db::name('address')->where('ID', $addid)->find();
        $result = Db::name('shoporder')->where('ordernumber', $orderid)->setField(["flag" => 1, "addname" => $address['name'], "addtel" => $address['tel'], "addcity" => $address['city'], "addcitydetail" => $address['citydetail'], "wuliu" => $address['wuliu']]);

        //发送消息模板
        $template = array(
            'touser' => "ojWxNwpnuMbkEmjWW0XF6wjJKT3k",
            'template_id' => "Oipv0s_00tXvTzobQMFMlD4kuAU0dTXhYHuDYqylE8k",
            'topcolor' => '#FF0000',
            'data' => array(
                'first'=> array('value'=>"您收到一笔新的订单。", 'color'=>"#00f"),
                'tradeDateTime' => array('value' => date("Y-m-d H:i:s", time()), 'color'=>"#FF0000"),
                'orderType' => array('value' => "商城订单", 'color'=>"#000"),
                'customerInfo' => array('value' => "电话：".$address['tel']."，姓名：".$address['name'], 'color'=>"#000"),
                'orderItemName' => array('value' => "订单编号", 'color'=>"#000"),
                'orderItemData' => array('value' => $orderid, 'color'=>"#000"),
                'remark' => array('value'=>"请及时处理！",'color'=>'#000'),
            )
        );
        $wechat = new class_wechat();
        $wechat->send_template_message(json_encode($template));


        return $this->fetch();
    }

    /**
     * 异步接收订单返回信息，订单成功付款后，处理订单状态并批量生成用户的二维码
     * @param int $id 订单编号
     */
    public function notify($id = 0)
    {
        $notify = new PayNotifyCallBack();
        $notify->handle(true);


        //找到匹配签名的订单
        $order = $id;
        if (!isset($order)) {
            Log::write('未找到订单，id= ' . $id);
        }
        $succeed = ($notify->GetReturn_code() == 'SUCCESS') ? true : false;
        if ($succeed) {

            Log::write('订单' . $order . '生成二维码成功');

            Log::write('订单' . $order . '状态更新成功');
        } else {
            Log::write('订单' . $id . '支付失败');
        }
    }
}