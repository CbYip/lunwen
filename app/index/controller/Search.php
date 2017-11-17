<?php
namespace app\index\controller;
use think\Controller;
class Search extends Controller
{
    public function _initialize()
    {
        return ;
    }

    //商家搜索
    public function searchshop(){
        return $this->fetch();
    }
}