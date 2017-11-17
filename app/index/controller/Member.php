<?php
namespace app\index\controller;
use think\Paginator;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;
use lib\class_wechat;
use wxpay\WxPayApi;
use wxpay\WxPayConfig;
use wxpay\WxPayNotify;
use wxpay\PayNotifyCallBack;
use wxpay\data\JsApiPay;
use wxpay\data\WxPayUnifiedOrder;
use think\Log;

class Member extends common
{
    public function _initialize()
    {
        return ;
    }
    //个人中心首页
    public function index(){
        if(!empty(Session::get('user'))) {
            $result = Session::get('user');
        }else {
            $code = input('code');
            $Wechat = new class_wechat();
            $result = $Wechat->_callback($code);
        }
        Session::set('user',$result);
        $mem = $result;
        $user = Db::name('user')->where('openid', $mem['openid'])->find();
        if($user == null){
            echo "<script>alert('您还没有注册，请先注册！');window.location.href='".url('login/reg', ['c'=>'index', 'a'=>'shop'])."'</script>";
        }else{
            $myorder = Db::name('order')->where('WID', $user['WID'])->select();
            $accept = Db::name('accept')->where('WID', $user['WID'])->select();
            $shoporder = Db::name('shoporder')->where('WID', $user['WID'])->select();
            $shopcart = Db::name('shopcart')->where('WID', $user['WID'])->select();
            $extend = Db::name('extend')->where("EventKey", $user['ID'])->select();
            $data = array(
                "myorder" => count($myorder),
                "accept" => count($accept),
                "shoporder" => count($shoporder),
                "shopcart" => count($shopcart),
                "extend" => count($extend),
            );

            //每日签到判断
            $qiandao = Db::name('qiandao')->where('WID', $user['WID'])->find();
            if($qiandao == null){
                $flag = 1;
            }else{
                $time = strtotime($qiandao['time']);
                $now = strtotime(date("Y-m-d", time()));
                if($now - $time >= 86400){
                    $flag = 1;
                }else{
                    $flag = 2;
                }
            }

            $this->assign('mem', $mem);
            $this->assign('flag', $flag);
            $this->assign('user', $user);
            $this->assign('data', $data);
            return $this->fetch();
        }

    }

    //每日签到
    public function qiandao(){
        if(request()->isAjax()){
            $wid = input('wid');
            $qiandao = Db::name('qiandao')->where('WID', $wid)->find();
            $user = Db::name('user')->where('WID', $wid)->find();
            $score = Db::name('jifen')->where('ID', 1)->find();
            if($qiandao == null){
                $data = array(
                    "WID" => $wid,
                    "time" => date("Y-m-d", time()),
                );
                Db::name('user')->where('WID', $wid)->setField('score', $user['score']+$score['qiandao']);
                $result = Db::name("qiandao")->insert($data);
            }else{
                $now = date("Y-m-d", time());
                Db::name('user')->where('WID', $wid)->setField('score', $user['score']+$score['qiandao']);
                Db::name('qiandao')->where('WID', $wid)->setField('time', $now);
                $result = 1;
            }
            $return = array(
                "id" => $result,
                "score" => $score['qiandao'],
            );
            return $return;
        }
    }

    //我的推广二维码
    public function myqrcode(){
        $mem = Session::get('user');
        $user = Db::name('user')->where('openid', $mem['openid'])->find();

        //获取用户二维码，并且存入到服务器上
        $weObj = new class_wechat();
        $file = "./public/uploads/qrcode/".$user['ID'].".jpg";
        $weObj->getQRCode($user['ID'], $file, class_wechat::QRCODE_TYPE_TEMP);
        $qrcode = "/public/uploads/qrcode/".$user['ID'].".jpg";

        //每日签到判断
        $qiandao = Db::name('qiandao')->where('WID', $user['WID'])->find();
        if($qiandao == null){
            $flag = 1;
        }else{
            $time = strtotime($qiandao['time']);
            $now = strtotime(date("Y-m-d", time()));
            if($now - $time >= 86400){
                $flag = 1;
            }else{
                $flag = 2;
            }
        }

        $this->assign('qrcode', $qrcode);
        $this->assign('mem', $mem);
        $this->assign('flag', $flag);
        $this->assign('user', $user);
        return $this->fetch();
    }

    //我的资料
    public function myuser(){
        $mem = Session::get('user');
        $user = Db::name('user')->where('openid', $mem['openid'])->find();

        //保存修改
        if(request()->isAjax()){
            $wid = input('wid');
            $data = array(
                "name" => input('name'),
                "tel" => input('tel'),
            );
            $result = Db::name('user')->where('WID', $wid)->setField($data);
            return $result;
        }

        //每日签到判断
        $qiandao = Db::name('qiandao')->where('WID', $user['WID'])->find();
        if($qiandao == null){
            $flag = 1;
        }else{
            $time = strtotime($qiandao['time']);
            $now = strtotime(date("Y-m-d", time()));
            if($now - $time >= 86400){
                $flag = 1;
            }else{
                $flag = 2;
            }
        }
        $this->assign('mem', $mem);
        $this->assign('flag', $flag);
        $this->assign('user', $user);
        return $this->fetch();
    }

    //我的推广
    public function partners(){
        $mem = Session::get('user');
        $user = Db::name('user')->where('openid', $mem['openid'])->find();
        $partner = Db::name('extend')->where('EventKey', $user['ID'])->select();
        $parts = array();
        foreach ($partner as $k => $value){
            $part = Db::name('user')->where('openid', $value['Fopenid'])->find();
            $parts[$k] = $part;
        }
        $count = count($partner);

        //每日签到判断
        $qiandao = Db::name('qiandao')->where('WID', $user['WID'])->find();
        if($qiandao == null){
            $flag = 1;
        }else{
            $time = strtotime($qiandao['time']);
            $now = strtotime(date("Y-m-d", time()));
            if($now - $time >= 86400){
                $flag = 1;
            }else{
                $flag = 2;
            }
        }

        $this->assign('mem', $mem);
        $this->assign('user', $user);
        $this->assign('flag', $flag);
        $this->assign('partner', $partner);
        $this->assign('parts', $parts);
        $this->assign('count', $count);
        return $this->fetch();
    }


    //论文订单
    public function myorder(){
        if(!empty(Session::get('user'))){
            $result = Session::get('user');
        }else {
            $code = input('code');
            $Wechat = new class_wechat();
            $result = $Wechat->_callback($code);
        }
        Session::set('user',$result);
        $user = Db::name('user')->where('openid', $result['openid'])->find();
        if($user == null){
            echo "<script>alert('您还没有注册，请先注册！');window.location.href='".url('login/reg', ['c'=>'index', 'a'=>'shop'])."'</script>";
        }else{
            $myorder = Db::name('order')->where('WID', $user['WID'])->order('ID desc')->paginate(3);
            foreach ($myorder as $k => $order){
                $order['ftime'] = date("Y-m-d H:i:s", $order['ftime']);
                $order['ctime'] = date("Y-m-d", $order['ctime']);
                $myorder[$k] = $order;
            }

            //每日签到判断
            $qiandao = Db::name('qiandao')->where('WID', $user['WID'])->find();
            if($qiandao == null){
                $flag = 1;
            }else{
                $time = strtotime($qiandao['time']);
                $now = strtotime(date("Y-m-d", time()));
                if($now - $time >= 86400){
                    $flag = 1;
                }else{
                    $flag = 2;
                }
            }
            $this->assign('mem', $result);
            $this->assign('flag', $flag);
            $this->assign('user', $user);
            $this->assign("order", $myorder);
            return $this->fetch();
        }
    }

    //订单详情
    public function order_detail(){
        $id = input('id');
        $detail = Db::name('order')->where('id', $id)->find();

        $mem = Session::get('user');
        $user = Db::name('user')->where('openid', $mem['openid'])->find();

        //更改需求
        if(request()->isAjax()){
            $content = input('content');
            $id = input('id');
            $result = Db::name('order')->where("id", $id)->setField(['require'=>$content, 'flag' => 2]);
            return $result;
        }
        $detail['ftime'] = date("Y-m-d H:i:s", $detail['ftime']);
        $detail['ctime'] = date("Y-m-d", $detail['ctime']);

        //每日签到判断
        $qiandao = Db::name('qiandao')->where('WID', $user['WID'])->find();
        if($qiandao == null){
            $flag = 1;
        }else{
            $time = strtotime($qiandao['time']);
            $now = strtotime(date("Y-m-d", time()));
            if($now - $time >= 86400){
                $flag = 1;
            }else{
                $flag = 2;
            }
        }
        $this->assign('mem', $mem);
        $this->assign('user', $user);
        $this->assign('flag', $flag);
        $this->assign('detail', $detail);
        return $this->fetch();
    }

    //删除论文订单
    public function order_delete(){
        if(request()->isAjax()){
            $id = input('id');
            $result = Db::name('order')->where('id', $id)->delete();
            return $result;
        }
    }

    //我接的订单
    public function order_accept(){
        $order = Db::name('accept')->select();
        var_dump($order);
        foreach ($order as $k => $value){
            $value = Db::name('order')->where('order', $value['order'])->find();
            $order[$k] = $value;
        }
        var_dump($order);
        $this->assign('order', $order);
        return $this->fetch();
    }

    //我接的订单详情
    public function accept_detail(){
        $id = input('id');
        $detail = Db::name('order')->where('id', $id)->find();
        $detail['ftime'] = date("Y-m-d H:i:s", $detail['ftime']);
        $detail['ctime'] = date("Y-m-d", $detail['ctime']);
        //接的订单
        if(request()->isAjax()){
            $id = input('id');
            Db::name('order')->where('id', $id)->setField('complete', 1);
            $order = Db::name('order')->where('id', $id)->find();
            $data = array(
                "WID" => $order['WID'],
                "order" => $order['order'],
            );
            $result = Db::name('accept')->insert($data);
            return $result;
        }
        var_dump($detail);
        $this->assign('detail', $detail);
        return $this->fetch();
    }

    //商城订单
    public function shoporder(){
        $mem = Session::get('user');
        $user = Db::name('user')->where('openid', $mem['openid'])->find();
        $shoporders = Db::name('shoporder')->where('WID', $user['WID'])->order("ID desc")->paginate(5);
        foreach ($shoporders as $key => $shoporder){
            $name = $shoporder['goodsname'];
            $num  = $shoporder['num'];
            $photo  = $shoporder['photo'];
            $goodsprice = $shoporder['goodsprice'];
            $goodsscore  = $shoporder['goodsscore'];

            //获取商品的id和购买的数量，并且合并为二维数组
            $name = explode(',', $name);
            $num = explode(',', $num);
            $photo = explode(',', $photo);
            $goodsprice = explode(',', $goodsprice);
            $goodsscore = explode(',', $goodsscore);

            $order = two_array($name, $num, $photo, $goodsprice, $goodsscore);

            $shoporder['goods'] = $order;
            $shoporders[$key] = $shoporder;
        }

        //每日签到判断
        $qiandao = Db::name('qiandao')->where('WID', $user['WID'])->find();
        if($qiandao == null){
            $flag = 1;
        }else{
            $time = strtotime($qiandao['time']);
            $now = strtotime(date("Y-m-d", time()));
            if($now - $time >= 86400){
                $flag = 1;
            }else{
                $flag = 2;
            }
        }

        $this->assign('mem', $mem);
        $this->assign('flag', $flag);
        $this->assign('user', $user);
        $this->assign('shoporder', $shoporders);
        return $this->fetch();
    }

    //商城订单详情
    public function shoporder_detail(){
        $mem = Session::get('user');
        $user = Db::name('user')->where('openid', $mem['openid'])->find();
        $order2 = input('order');
        $detail = Db::name('shoporder')->where('ordernumber', $order2)->find();


        //每日签到判断
        $qiandao = Db::name('qiandao')->where('WID', $user['WID'])->find();
        if($qiandao == null){
            $flag = 1;
        }else{
            $time = strtotime($qiandao['time']);
            $now = strtotime(date("Y-m-d", time()));
            if($now - $time >= 86400){
                $flag = 1;
            }else{
                $flag = 2;
            }
        }

        $this->assign('mem', $mem);
        $this->assign('flag', $flag);
        $this->assign('detail', $detail);
        $this->assign('user', $user);
        return $this->fetch();
    }

    //论文订单付款
    public function pay(){
        session_start();
        $order_id = input('id');
        $list = Db::name('order')->where('ID', $order_id)->find();

        //微信支付
        //①、获取用户openid
        $tools = new JsApiPay();
        $openId = $tools->GetOpenid();

        //②、统一下单
        $input = new WxPayUnifiedOrder();
        $input->SetBody('test');
        $input->SetAttach("订单编号：".$list['order']);
        $input->SetOut_trade_no(WxPayConfig::MCHID . date("YmdHis"));
        $input->SetTotal_fee($list['price'] * 100);
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetGoods_tag("test");
        $input->SetNotify_url("http://lunwen.jiezanke.com/index.php/index/member/notify/id/".$list['order']);
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

        $this->assign('list', $list);
        $this->assign('jsApiParameters', $jsApiParameters);
        return $this->fetch();
    }
    //取消商城订单
    public function cancel(){
        if(request()->isAjax()){
            $order = input('order');
            $shoporder = Db::name('shoporder')->where('ordernumber', $order)->find();
            $num = explode(',', $shoporder['num']);
            $goodsname = explode(',', $shoporder['goodsname']);
            $length = count($num);
            for($i = 0; $i < $length; $i++){
                $goods = Db::name('goods')->where('goodsname', $goodsname[$i])->find();
                $goodsnum = $goods['goodsnum'] + $num[$i];
                Db::name('goods')->where('goodsname', $goodsname[$i])->setField('goodsnum', $goodsnum);
            }
            $result = Db::name('shoporder')->where('ordernumber', $order)->delete();
            return $result;
        }
    }

    //商品评价
    public function comment(){
        if(request()->isAjax()){
            $data = array(
                "order" => input('order'),
                'WID'   => input('wid'),
                'comment' => input('content'),
                'headimg' => input('headimg'),
                'goodsname' => input('goodsname'),
                'username'=> input('username'),
                'time'  => date("Y-m-d", time()),
            );
            $result = Db::name('comment')->insert($data);
            Db::name('shoporder')->where('ordernumber', $data['order'])->setField('comment', 1);
            return $result;
        }
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
            $jifen = Db::name('jifen')->where('ID=1')->find();
            $list = Db::name('order')->where('order', $order)->find();
            $user = Db::name('user')->where('WID', $list['WID'])->find();

            $add_score = $user['score'] + (int)round($list['price'] * ($jifen['lunwen']/100));

            //返积分
            $result = Db::name('order')->where('order', $order)->setField('flag', 0);
            Db::name('user')->where('WID', $list['WID'])->setField('score', $add_score);

            //推荐人加积分
            $extend = Db::name('extend')->where('Fopenid', $user['openid'])->find();
            $extend_user = Db::name('user')->where('ID', $extend['EventKey'])->find();
            $extend_user_score = $extend_user['score'] + (int)round($list['price'] * ($jifen['tuijian']/100));
            Db::name('user')->where('ID', $extend['EventKey'])->setField('score', $extend_user_score);

            Log::write('订单'.$result);
        } else {
            Log::write('订单' . $id . '支付失败');
        }
    }
}
