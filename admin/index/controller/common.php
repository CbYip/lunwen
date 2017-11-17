<?php

namespace app\index\controller;
use think\Controller;
use think\Session;

class common extends Controller
{
    //初始化检测用户登录状态
    public function _initialize(){
        $id = Session::get('id');
        if(!isset($id)){
            echo "<script>alert('您还没有登录，请先登录！');window.location.href='".url('login/login')."'</script>";
        }
    }
}