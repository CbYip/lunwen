<?php
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


/**
 * 更新商品状态
 * @param $a 商品名
 * @param $b 商品数量
 * @return array
 */
function shoporder_arr($a, $b){
    $first = $a;
    $second = $b;
    $result = array();
    foreach ($first as $k => $value){
        $result[$k]['goodsname'] = $first[$k];
        $result[$k]['goodsnum'] = $second[$k];
    }
    return $result;
}
