<?php

namespace app\index\controller;
use think\Controller;
class Form extends Controller
{
    //amaze表单
    public function amaze_form(){
        return $this->fetch();
    }

    //线性表单
    public function line_form(){
        return $this->fetch();
    }

    //新闻表单
    public function news_form(){
        return $this->fetch();
    }

    //新闻列表
    public function news_list(){
        return $this->fetch();
    }
}