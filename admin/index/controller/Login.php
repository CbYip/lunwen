<?php

namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;

class Login extends Controller
{
    //登录界面
    public function login(){
        if(request()->isAjax()){
            $data = array(
                'acount' => input("acount"),
                'password' => md5(input('password')),
            );
            $result = Db::name('admin')->where($data)->find();
            if($result){
                Session::set('id', $result['ID']);
                return 1;
            }else{
                return 0;
            }
        }
        return $this->fetch();
    }
}