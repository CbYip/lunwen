<?php

namespace app\index\controller;
use app\index\controller\common;
use think\Db;
use think\Session;
use lib\class_wechat;

class Goods extends common
{
    //商品管理列表
    public function goods_list(){
        $type = Db::name('cate')->where('pid','=','0')->select();
        $goods = Db::name('goods')->order("ID asc")->paginate(10);
        foreach ($goods as $k => $value){
            $value['time'] = date("Y-m-d H:i:s", $value['time']);
            $type2 = Db::name('cate')->where("ID", $value['type'])->find();
            $value['type'] = $type2['typename'];
            $goods[$k] = $value;
        }
        $this->assign('type', $type);
        $this->assign('goods', $goods);
        return $this->fetch();
    }

    //添加商品
    public function goods_add(){
        $type = Db::name('cate')->where('pid', '=', '0')->select();
        if(request()->isPost()){
            $goods = model('Goods');
            //获取批量添加商品的信息
            $goodsname = $_POST['goodsname'];
            $type1 = $_POST['type'];
            $goodsnum = $_POST['goodsnum'];
            $goodsprice = $_POST['goodsprice'];
            $score = $_POST['score'];
            $size = $_POST['size'];
            $color = $_POST['color'];
            $delivery = $_POST['delivery'];
            $detail = $_POST['detail'];

            //获取表单上传的图片，在模型中进行处理
            $photo = request()->file('photo');
            $images = $goods->upload($photo);
            for($i = 0; $i < count($goodsname); $i++){
                if($goodsname[$i] == ""){
                    continue;
                }else{
                    $data[$i] = ['goodsname' => $goodsname[$i], 'type' => $type1[$i], 'goodsnum' => $goodsnum[$i], 'goodsprice' => $goodsprice[$i], 'score' => $score[$i], 'size' => $size[$i], 'color' => $color[$i], 'delivery' => $delivery[$i], 'detail' => $detail[$i], 'photo' => $images[$i], 'time' => time()];
                }
            }
            $result = Db::name('goods')->insertAll($data);
            if($result){
                $this->redirect('goods/goods_list');
                exit;
            }else{
                $this->redirect('goods/goods_list');
                exit;
            }
        }
        $this->assign('type', $type);
        return $this->fetch();
    }

    //商品分类
    public function goods_type(){
        $type = Db::name('cate')->paginate(10);
        foreach ($type as $k => $value){
            $value['time'] = date("Y-m-d H:i:s", $value['time']);
            if($value['pid'] == "0"){
                $value['pid'] = "父类";
            }else{
                $name = Db::name('cate')->field('typename')->where('ID', $value['pid'])->find();
                $value['pid'] = $name['typename'];
            }
            $type[$k] = $value;
        }
        $this->assign('type', $type);
        return $this->fetch();
    }

    //添加商品分类(批量添加)
    public function type_add(){
        $ptype = Db::name('cate')->where('pid', 0)->select();
        if(request()->isPost()){
            $type = $_POST['typename'];
            $classic = $_POST['type'];
            for($i = 0; $i < count($type); $i++){
                if($type[$i] == ""){
                    continue;
                }else{
                    $data[$i] = ['typename' => $type[$i], 'pid' => $classic[$i], 'author' => 'admin', 'time' => time()];
                }
            }
            $result = Db::name('cate')->insertAll($data);
            //添加成功后用重定向跳转新页面避免重复提交
            if($result){
                $this->redirect('goods/type_add',"商品分类添加成功");
                exit();
            }else{
                $this->redirect('goods/type_add');
                exit();
            }
        }
        $this->assign('type', $ptype);
        return $this->fetch();
    }

    //商品分类添加查看
    public function type_edit(){
        $id = input('id');
        $type = Db::name('cate')->where('ID', $id)->find();
        $class = Db::name('cate')->select();

        //分类修改
        if(request()->isPost()){
            $id = input('id');
            $data = array(
                'typename' => input('typename'),
                'pid' => input('type'),
            );
            $result = Db::name('cate')->where('ID', $id)->setField($data);
            $this->redirect('goods/goods_type');
        }
        $this->assign('type', $type);
        $this->assign('class', $class);
        return $this->fetch();
    }

    //商品编辑
    public function goods_edit(){
        $id = input('id');
        $goods = Db::name('goods')->where('ID', $id)->find();
        $type = Db::name('cate')->select();
        if(request()->isPost()){
            $good = model('Goods');
            $id = input('id');
            $data = array(
                "goodsname" => input('goods_name'),
                "goodsnum" => input('goods_num'),
                "goodsprice" => input('goods_price'),
                "score" => input('score'),
                "type" => input('type'),
                "sales" =>  input('sales'),
                "orders" => input('orders'),
                "comment" => input('comment'),
                "delivery" => input('delivery'),
                "size" => input('size'),
                "color" => input('color'),
                "detail" => input('detail'),
            );
            //获取表单上传的图片，在模型中进行处理
            $update = request()->file('update');
            if($update != null){
                $images = $good->upload1($update);
                $data['photo'] = $images;
            }
            Db::name('goods')->where('ID', $id)->setField($data);
            $this->redirect("goods/goods_edit", ['id' => $id]);
        }
        $this->assign('good', $goods);
        $this->assign('type', $type);
        return $this->fetch();
    }

    //商品分类批量删除
    public function mdelete(){
        if(request()->isAjax()){
            $temp = input('temp');
            $newtemp = substr($temp,0,strlen($temp)-1);
            $temparr = explode(",", $newtemp);
//            $sql = "delete * from jzk_goods where id IN";
//            $result = Db::query($sql);
            $result = Db::name('cate')->delete($temparr);
            return $result;
        }
    }
    //单个分类删除
    public function mdel(){
        if(request()->isAjax()){
            $id = input('id');
            $result = Db::name('cate')->delete($id);
            return $id;
        }
    }

    //商品批量删除
    public function gdelete(){
        if(request()->isAjax()){
            $temp = input('temp');
            $newtemp = substr($temp,0,strlen($temp)-1);
            $temparr = explode(",", $newtemp);
//            $sql = "delete * from jzk_goods where id IN";
//            $result = Db::query($sql);
            $result = Db::name('goods')->delete($temparr);
            return $result;
        }
    }

    //商品单个删除
    public function gdel(){
        if(request()->isAjax()){
            $id = input('id');
            $result = Db::name('goods')->delete($id);
            return $id;
        }
    }

    //商品上架或下架
    public function caozuo(){
        if(request()->isAjax()){
            $id = input('id');
            $flag = input('flag');
            $result = Db::name('goods')->where('ID', $id)->setField('flag', $flag);
            return $result;
        }
    }

    //商品分类筛选
    public function type(){
        if (request()->isAjax()){
            $id = input('id');
            if($id == 0){
                $result = Db::name('goods')->select();
            }else{
                $result = Db::name('goods')->where('type', $id)->select();
            }
            return $result;
        }
    }

    //商品订单列表
    public function shoporder_list(){
        $shoporder = Db::name('shoporder')->paginate(10);
        $this->assign('shoporder', $shoporder);
        return $this->fetch();
    }

    //商品订单详情
    public function shoplist_detail(){
        $id = input('id');
        $shoporder = Db::name('shoporder')->where('ID', $id)->find();
        if(request()->isPost()){
            $data = array(
                "goodsname" => input('goodsname'),
                "num" => input('num'),
                "score" => input('score'),
                "total" => input('total'),
                "yunfei"=> input('freight'),
                "flag" => input('flag'),
                "shopflag" => input('shopflag'),
                "ordernumber" => input('ordernumber'),
                "time" => input('time'),
                "addname" => input('addname'),
                "addtel" => input('addtel'),
                "addcity" => input('addcity'),
                "addcitydetail" => input('addcitydetail'),
                "size" => input('size'),
                "color" => input('color'),
                "wuliu" => input('wuliu'),
                "wu" => input('wu'),
                "wuliunum" => input('wuliunum'),
            );
            $result = Db::name('shoporder')->where('ordernumber', $data['ordernumber'])->setField($data);
            if ($result){
                echo "<script>alert('修改成功！');window.location.href='".url('goods/shoporder_list')."'</script>";
            }
        }
        $this->assign('shoporder', $shoporder);
        return $this->fetch();
    }

    //商品付款按钮事件
    public function pay()
    {
        if (request()->isAjax()) {

            $id = input('id');
            $flag = input('flag');

            //判断个人积分是否足够
            $shoporder = Db::name('shoporder')->where('ID', $id)->find();
            $user = Db::name('user')->where('WID', $shoporder['WID'])->find();
            $fanli = Db::name('jifen')->where('ID = 1')->find();

            if ($user['score'] - $shoporder['score'] < 0) {
                $result = 0;
            } else {
                $score = $user['score'] - ($shoporder['score'] - (int)round($shoporder['score']*($fanli['shop']/100)));
                Db::name('user')->where('WID', $shoporder['WID'])->setField('score', $score);

                //为推荐人加积分
                $tui_user = Db::name('extend')->where('Fopenid', $user['openid'])->find();

                if($tui_user != null){
                   $tui_user_score = Db::name('user')->where('ID', $tui_user['EventKey'])->find();
                   $tui_score = $tui_user_score['score'] + (int)round($shoporder['score']*($fanli['tuijian']/100));
                   Db::name('user')->where('ID', $tui_user['EventKey'])->setField('score', $tui_score);
                }

                $result = Db::name('shoporder')->where('ID', $id)->setField('flag', $flag);
            }

            //更新商品状态
            $goodsname = explode(',', $shoporder['goodsname']);
            $goodsnum = explode(',', $shoporder['num']);

            //合并为二维数组
            $update = shoporder_arr($goodsname, $goodsnum);
            foreach ($update as $k => $value){
                $good = Db::name('goods')->where('goodsname', $goodsname)->select();
                $data = array(
                    'sales'  => $good['sales'] + $value['goodsnum'],
                    'orders' => $good['orders'] + 1,
                );
                Db::name('goods')->where('goodsname', $goodsname)->setField('data');
            }
            if($result != 0){
                $template = array(
                    'touser' => $user['openid'],
                    'template_id' => "__YobErg2e91k5Ls-AtMRKpkRxbgKTYFV6MA3VZFAAc",
                    'topcolor' => '#FF0000',
                    'data' => array(
                        'first'=> array('value'=>"尊敬的用户，我们已经收到您的款项，正在外您准备商品，请稍后。", 'color'=>"#00f"),
                        'keyword1' => array('value' => $shoporder['total'].'，积分：'.$shoporder['score'], 'color'=>"#FF0000"),
                        'keyword2' => array('value' => $shoporder['ordernumber'], 'color'=>"#000"),
                        'remark' => array('value'=>"如若有什么问题，可以通过公众号及时联系易起客服。",'color'=>'#000'),
                    )
                );
                $wechat = new class_wechat();
                $wechat->send_template_message(json_encode($template));
            }
            return $result;
        }
    }

    //商品发货或收货按钮事件
    public function fashou(){
        if(request()->isAjax()){
            $id = input('id');
            $flag = input('flag');
            $shoporder = Db::name('shoporder')->where('ID', $id)->find();
            $user = Db::name('user')->where('WID', $shoporder['WID'])->find();
            if($flag == '1'){
                $template = array(
                    'touser' => $user['openid'],
                    'template_id' => "D3JmYtz7z4jHtGXPNFhGfNA6-nJXJk18bFq8R1eKIL4",
                    'topcolor' => '#FF0000',
                    'data' => array(
                        'first'=> array('value'=>"您的订单已经发货，请注意查收。", 'color'=>"#00f"),
                        'keyword1' => array('value' => $shoporder['goodsname'], 'color'=>"#FF0000"),
                        'keyword2' => array('value' => $shoporder['ordernumber'], 'color'=>"#000"),
                        'keyword3' => array('value' => "易起商城", 'color'=>"#000"),
                        'remark' => array('value'=>"如若有什么问题，可以通过公众号及时联系易起客服。",'color'=>'#000'),
                    )
                );
                $wechat = new class_wechat();
                $wechat->send_template_message(json_encode($template));
            }else if($flag == '2'){
                $template = array(
                    'touser' => $user['openid'],
                    'template_id' => "eNE7S2W4w1hYCbA_10VAc4S0n-9UvhqylgdbIz8Iels",
                    'topcolor' => '#FF0000',
                    'data' => array(
                        'first'=> array('value'=>"您的订单已经自动确认收货。", 'color'=>"#00f"),
                        'keyword1' => array('value' => $shoporder['ordernumber'], 'color'=>"#FF0000"),
                        'keyword2' => array('value' => $shoporder['total'], 'color'=>"#000"),
                        'keyword3' => array('value' => date('Y-m-d H:i:s', time()), 'color'=>"#000"),
                        'remark' => array('value'=>"如若有什么问题，可以通过公众号及时联系易起客服。",'color'=>'#000'),
                    )
                );
                $wechat = new class_wechat();
                $wechat->send_template_message(json_encode($template));
            }
            $result = Db::name('shoporder')->where('ID', $id)->setField('shopflag', $flag);
            return $result;
        }
    }

    //商品订单单个删除
    public function delete_one(){
        if(request()->isAjax()){
            $id = input('id');
            $shoporder = Db::name('shoporder')->where('ID', $id)->find();
            $goodsname = explode(',', $shoporder['goodsname']);
            $num = explode(',', $shoporder['num']);
            $length = count($num);
            for ($i = 0; $i < $length; $i++){
                $good = Db::name('goods')->where('goodsname', $goodsname[$i])->find();
                Db::name('goods')->where('goodsname', $goodsname[$i])->setField('goodsnum', $good['goodsnum'] + $num[$i]);
            }
            $result = Db::name('shoporder')->delete($id);
            return $result;
        }
    }

    //商品订单批量删除
    public function delete_all(){
        if(request()->isAjax()){
            $temp = input('temp');
            $newtemp = substr($temp,0,strlen($temp)-1);
            $temparr = explode(",", $newtemp);
            $length = count($temparr);
            for($i = 0; $i < $length; $i++){
                $shoporder = Db::name('shoporder')->where('ID', $temparr[$i])->find();
                $goodsname = explode(',', $shoporder['goodsname']);
                $goodsnum = explode(',', $shoporder['num']);
                $leng = count($goodsnum);
                for($j = 0; $j < $leng; $j++){
                    $good = Db::name('goods')->where('goodsname', $goodsname[$j])->find();
                    Db::name('goods')->where('goodsname', $goodsname[$j])->setField('goodsnum', $good['goodsnum'] + $goodsnum[$i]);
                }
            }
            $result = Db::name('shoporder')->delete($temparr);
            return $result;
        }
    }

    //商品订单分类筛选
    public function select_shop(){
        if(request()->isAjax()){
            $flag = input('id');
            $shopflag = input('sid');
            if($flag == 'a' && $shopflag == 'b'){
                $result = Db::name('shoporder')->select();
            }elseif ($flag != 'a' && $shopflag == 'b'){
                $result = Db::name('shoporder')->where('flag', $flag)->select();
            }elseif ($flag == 'a' && $shopflag != 'b'){
                $result = Db::name('shoporder')->where('shopflag', $shopflag)->select();
            }else{
                $result = Db::name('shoporder')->where('flag', $flag)->where('shopflag', $shopflag)->select();
            }
            return $result;
        }
    }

    //商品评论列表
    public function comment_list(){
        $comment = Db::name('comment')->paginate(10);
        foreach ($comment as $k => $value){
            $user = Db::name('user')->where('WID', $value['WID'])->find();
            $value['name'] = $user['name'];
            $comment[$k] = $value;
        }
        $this->assign('comment', $comment);
        return $this->fetch();
    }

    //批量删除商品评论
    public function comment_del_all(){
        if(request()->isAjax()){
            $temp = input('temp');
            $newtemp = substr($temp,0,strlen($temp)-1);
            $temparr = explode(",", $newtemp);
            $result = Db::name('comment')->delete($temparr);
            return $result;
        }
    }

    //单个删除商品评论
    public function comment_one(){
        if(request()->isAjax()){
            $id = input('id');
            $result = Db::name('comment')->delete($id);
            return $result;
        }
    }
}