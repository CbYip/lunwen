<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;
use lib\class_wechat;

class Index extends Controller
{

    public function _initialize()
    {
        parent::_initialize();
        \think\Url::root('/index.php');
    }

    //首页
    public function index()
    {
        $myorder = Db::name('order')->where('flag', 0)->where('complete',0)->select();
        foreach ($myorder as $k => $value){
            $value['ftime'] = date("Y-m-d H:i:s", $value['ftime']);
            $value['ctime'] = date("Y-m-d", $value['ctime']);
            $myorder[$k] = $value;
        }
        $this->assign('order', $myorder);
        return $this->fetch();
    }

    //积分商城
    public function shop()
    {
        if(!empty(Session::get('user'))) {
            $result = Session::get('user');
        }else {
            $code = input('code');
            $Wechat = new class_wechat();
            $result = $Wechat->_callback($code);
        }
        Session::set('user',$result);
        $res = Db::name('user')->where('openid', $result['openid'])->find();
        if($res == null){
            echo "<script>alert('您还没有注册，请先注册！');window.location.href='".url('login/reg', ['c'=>'index', 'a'=>'shop'])."'</script>";
        }else{
            $goods = Db::name('goods')->where("flag = 1")->order("ID desc")->limit(6)->select();
            $num = count($goods);
            $this->assign('goods', $goods);
            $this->assign('num', $num);
            return $this->fetch();
        }
    }

    //上拉加载分页
    public function page(){
        if(request()->isAjax()){
            $num = input('num') + 6;
            $goods = Db::name('goods')->order("ID desc")->limit($num, 6)->select();
            return $goods;
        }
    }

    //信息提示页
    public function tip(){
        return $this->fetch();
    }

    //论文订单服务
    public function order(){
        if(!empty(Session::get('user'))) {
            $result = Session::get('user');
        }else {
            $code = input('code');
            $Wechat = new class_wechat();
            $result = $Wechat->_callback($code);
        }
        Session::set('user',$result);
        $res = Db::name('user')->where('openid', $result['openid'])->find();
        if($res == null){
            echo "<script>alert('您还没有注册，请先注册！');window.location.href='".url('login/reg', ['c'=>'index', 'a'=>'shop'])."'</script>";
        }else{
            $this->assign('user', $res);
            if(request()->isAjax()){
                $data = array(
                    "username" => input('username'),
                    "usertel" => input('usertel'),
                    "service" => input('service'),
                    "title"   => input('title'),
                    "word"    => input('word'),
                    "ctime"   => strtotime(input('ctime')),
                    "ftime"   => time(),
                    "fatime"  => input('fatime'),
                    "type"    => input('type'),
                    "major"   => input('major'),
                    "require" => input('require'),
                    "level"   => input('level'),
                    "flag"    => "2",
                    "WID"     => input('wid'),
                    "modify"  => input('modify'),
                    "nowrep"  => input('nowrep'),
                    "repeat"  => input('reply'),
                    "email"   => input('email'),
                    "nickname"=> input('nickname'),
                );
                $data['order'] = order_number();
                if($data['ctime'] == false){
                    $data['ctime'] = 0;
                }
                $result = Db::name('order')->insert($data);

                //发送模板消息
                if($result == "1"){
                    $template = array(
                        'touser' => "ojWxNwpnuMbkEmjWW0XF6wjJKT3k",
                        'template_id' => "Oipv0s_00tXvTzobQMFMlD4kuAU0dTXhYHuDYqylE8k",
                        'topcolor' => '#FF0000',
                        'data' => array(
                            'first'=> array('value'=>"您收到一笔新的订单。", 'color'=>"#00f"),
                            'tradeDateTime' => array('value' => date("Y-m-d H:i:s", $data['ftime']), 'color'=>"#FF0000"),
                            'orderType' => array('value' => "论文订单", 'color'=>"#000"),
                            'customerInfo' => array('value' => "电话：".$data['usertel']."，姓名：".$data['username'], 'color'=>"#000"),
                            'orderItemName' => array('value' => "订单编号", 'color'=>"#000"),
                            'orderItemData' => array('value' => $data['order'], 'color'=>"#000"),
                            'remark' => array('value'=>"请及时处理！",'color'=>'#000'),
                        )
                    );
                    $wechat = new class_wechat();
                    $wechat->send_template_message(json_encode($template));
                }

                return 1;
            }
            $this->assign('user_wx', $result['nickname']);
            return $this->fetch();
        }
    }

    //联系方式
    public function contact(){
        if(!empty(Session::get('user'))) {
            $result = Session::get('user');
        }else {
            $code = input('code');
            $Wechat = new class_wechat();
            $result = $Wechat->_callback($code);
        }
        Session::set('user',$result);
        $contact = Db::name('set')->where("ID = 6")->find();
        $contact['content'] = json_decode($contact['content']);
        $this->assign('contact', $contact['content'][0]);
        return $this->fetch();
    }

    //汇款方式
    public function transfer(){
        if(!empty(Session::get('user'))) {
            $result = Session::get('user');
        }else {
            $code = input('code');
            $Wechat = new class_wechat();
            $result = $Wechat->_callback($code);
        }
        Session::set('user',$result);
        $contact = Db::name('set')->where("ID = 5")->find();
        $contact['content'] = json_decode($contact['content']);
        $this->assign('contact', $contact['content'][0]);
        return $this->fetch();
    }

    //业务介绍
    public function business(){
        if(!empty(Session::get('user'))) {
            $result = Session::get('user');
        }else {
            $code = input('code');
            $Wechat = new class_wechat();
            $result = $Wechat->_callback($code);
        }
        Session::set('user',$result);
        $contact = Db::name('set')->where("ID = 7")->find();
        $contact['content'] = json_decode($contact['content']);
        $this->assign('contact', $contact['content'][0]);
        return $this->fetch();
    }
}
