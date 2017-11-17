<?php

namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;

class common extends Controller
{
    public function nav(){
        $result = Session::get('user');
        $user = Db::name('user')->where('openid', $result['openid'])->find($result);
        $this->assign('user', $user);
        return $this->fetch();
    }
}