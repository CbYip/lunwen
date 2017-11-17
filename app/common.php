<?php
use think\Db;
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/*
 * 不重复的订单编号，以年月日加4位随机数
 */
function order_number(){
    $date = date("Ymd");
    $num = rand(1000,9999);
    $order = $date.$num;
    $result = Db::name('order')->find($order);
    if($result == Null){
        return $order;
    }else{
        $this->order_number();
    }
}

/*
 * 不重复的商品订单编号，以年月日加4位随机数
 */
function order_shop(){
    $date = date("Ymd");
    $num = rand(1000,9999);
    $order = $date.$num;
    $result = Db::name('shoporder')->find($order);
    if($result == Null){
        return $order;
    }else{
        $this->order_shop();
    }
}

/*
 * 不重复的商品订单编号，以年月日加4位随机数
 */
function order_shop1(){
    $date = date("Ymd");
    $num = rand(1000,9999);
    $order = $date.$num;
    $result = Db::name('buyshoporder')->find($order);
    if($result == Null){
        return $order;
    }else{
        $this->order_shop();
    }
}

/*
 * 生成订单一维数组拼接成二维数组
 */
function two_array($a, $b, $c, $d, $e){
    $first = $a;
    $second = $b;
    $third = $c;
    $fourth = $d;
    $fifth = $e;
    $result = array();
    foreach ($first as $k => $value){
        $result[$k]['goodsname'] = $first[$k];
        $result[$k]['num'] = $second[$k];
        $result[$k]['photo'] = $third[$k];
        $result[$k]['goodsprice'] = $fourth[$k];
        $result[$k]['goodsscore'] = $fifth[$k];
    }
    return $result;
}

function arr($a, $b){
    $first = $a;
    $second = $b;
    $result = array();
    foreach ($first as $k => $value){
        $result[$k]['goodsname'] = $first[$k];
        $result[$k]['num'] = $second[$k];
    }
    return $result;
}
/*
 * 微信会员编号
 */
function weChatid(){
    $first = 1;
    $second = rand(100000,999999);
    $WID = $first.$second;
    $result = Db::name('user')->find($WID);
    if($result == null){
        return $WID;
    }else{
        $this->weChatid();
    }
}