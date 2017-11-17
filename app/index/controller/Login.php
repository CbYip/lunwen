<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/12
 * Time: 9:36
 */

namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
use lib\class_wechat;

class Login extends Controller
{
    //用户注册服务
    public function reg(){
        $user = Session::get('user');
        $WID = weChatid();
        $data = array(
            "c" => input('c'),
            "a" => input('a'),
        );
        if(request()->isAjax()){
            $data = array(
                "WID" => input('wid'),
                "openid" => input('openid'),
                "name" => input('username'),
                "nickname" => input('nickname'),
                "tel" => input('tel'),
                "headimgurl" => input('headimg'),
                "score" => "0",
                "email" => input('email'),
                "date" => date("Y-m-d", time()),
            );
            $result = Db::name('user')->insert($data);
            return $result;
        }
        $this->assign('user', $user);
        $this->assign('data', $data);
        $this->assign('wid', $WID);
        return $this->fetch();
    }
}