<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"D:\WebTest\lunwen\lunwen/admin/index\view\table\order_list_detail.html";i:1506134190;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\header.html";i:1506646436;s:58:"D:\WebTest\lunwen\lunwen/admin/index\view\public\left.html";i:1507431544;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\footer.html";i:1504506358;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>易起论文</title>
    <meta name="description" content="易起论文">
    <meta name="keywords" content="易起论文">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="stylesheet" href="__CSS__/amazeui.min.css"/>
    <link rel="stylesheet" href="__CSS__/admin.css">
    <link rel="stylesheet" href="__CSS__/app.css">
    <script src="__JS__/echarts.min.js"></script>
    <script src="__JS__/jquery.min.js"></script>
</head>

<body data-type="index">
<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <a href="javascript:;" class="tpl-logo">
            <img src="__IMG__/logo.png" alt="">
        </a>
    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
            data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
            class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span
                    class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="tpl-header-list-user-nick">超级管理员</span><span class="tpl-header-list-user-ico"> <img
                        src="__IMG__/user01.png"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="<?php echo url('index/admin'); ?>"><span class="am-icon-bell-o"></span> 资料</a></li>
                    <li class="logout"><a href=""><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li class="logout"><a href="###" class="tpl-header-list-link"><span
                    class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
        </ul>
    </div>
</header>
<script type="text/javascript">
    $('.logout').click(function () {
        $.ajax({
            url:"<?php echo url('index/logout'); ?>",
            success:function (data) {
                if(data == 1){
                    alert("您已成功退出易起论文后台登录！");
                    window.location.href="<?php echo url('login/login'); ?>";
                }
            }
        })
    })

</script>
<div class="tpl-page-container tpl-page-header-fixed">
<div class="tpl-left-nav tpl-left-nav-hover">
    <div class="tpl-left-nav-title">
        BASIC LINK 列表
    </div>
    <div class="tpl-left-nav-list">
        <ul class="tpl-left-nav-menu">
            <li class="tpl-left-nav-item">
                <a href="<?php echo url('index/index'); ?>" class="nav-link">
                    <i class="am-icon-home"></i>
                    <span>首页</span>
                </a>
            </li>
            <li class="tpl-left-nav-item">
                <a href="<?php echo url('index/chart'); ?>" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-bar-chart"></i>
                    <span>用户管理</span>
                </a>
            </li>
            <li class="tpl-left-nav-item">
                <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-table"></i>
                    <span>论文管理</span>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                </a>
                <ul class="tpl-left-nav-sub-menu">
                    <li>
                        <a href="<?php echo url('table/order_list'); ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>订单列表</span>
                        </a>

                        <!--<a href="<?php echo url('table/img_list'); ?>">-->
                            <!--<i class="am-icon-angle-right"></i>-->
                            <!--<span>图片表格</span>-->
                            <!--<i class="tpl-left-nav-content tpl-badge-success">-->
                                <!--18-->
                            <!--</i>-->

                            <!--<a href="<?php echo url('form/news_form'); ?>">-->
                                <!--<i class="am-icon-angle-right"></i>-->
                                <!--<span>消息列表</span>-->
                                <!--<i class="tpl-left-nav-content tpl-badge-primary">-->
                                    <!--5-->
                                <!--</i>-->


                                <!--<a href="<?php echo url('form/news_list'); ?>">-->
                                    <!--<i class="am-icon-angle-right"></i>-->
                                    <!--<span>文字列表</span>-->
                                <!--</a>-->
                    <!--</li>-->
                </ul>
            </li>
            <li class="tpl-left-nav-item">
                <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-wpforms"></i>
                    <span>商城管理</span>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                </a>
                <ul class="tpl-left-nav-sub-menu" style="display: none;">
                    <li>
                        <a href="<?php echo url('goods/goods_type'); ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>商品分类</span>
                        </a>
                        <a href="<?php echo url('goods/goods_list'); ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>商品列表</span>
                        </a>
                        <a href="<?php echo url('goods/shoporder_list'); ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>商品订单列表</span>
                        </a>
                        <a href="<?php echo url('goods/comment_list'); ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>评论列表管理</span>
                        </a>
                        <!--<a href="<?php echo url('form/amaze_form'); ?>">-->
                            <!--<i class="am-icon-angle-right"></i>-->
                            <!--<span>Amaze UI 表单</span>-->
                            <!--<i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>-->
                        <!--</a>-->

                        <!--<a href="<?php echo url('form/line_form'); ?>">-->
                            <!--<i class="am-icon-angle-right"></i>-->
                            <!--<span>线条表单</span>-->
                        <!--</a>-->
                    </li>
                </ul>
            </li>
            <!--<li class="tpl-left-nav-item">-->
                <!--<a href="<?php echo url('login/login'); ?>" class="nav-link tpl-left-nav-link-list">-->
                    <!--<i class="am-icon-key"></i>-->
                    <!--<span>登录</span>-->

                <!--</a>-->
            <!--</li>-->
        </ul>
    </div>
</div>
<div class="tpl-content-wrapper">
    <div class="tpl-content-page-title">
        论文订单列表
    </div>
    <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">首页</a></li>
        <li class="am-active">论文订单列表</li>
    </ol>
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 表单
            </div>
        </div>
        <div class="tpl-block ">
            <div class="am-g tpl-amazeui-form">
                <div class="am-u-sm-12 am-u-md-9">
                    <form class="am-form am-form-horizontal" method="post">
                        <div class="am-form-group">
                            <label for="order" class="am-u-sm-3 am-form-label">订单号 / Order</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="order" name="order" value="<?php echo $detail['order']; ?>" readonly="readonly">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="title" class="am-u-sm-3 am-form-label">题目 / Title</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="title" name="Title" value="<?php echo $detail['title']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="username" class="am-u-sm-3 am-form-label">姓名 / Name</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="username" name="Name" value="<?php echo $detail['username']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="usertel" class="am-u-sm-3 am-form-label">联系方式 / Tel</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="usertel" name="Tel" value="<?php echo $detail['usertel']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="username" class="am-u-sm-3 am-form-label">金额 / Price</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="price" name="Price" value="<?php echo $detail['price']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="word" class="am-u-sm-3 am-form-label">字数要求 / Word</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="word" name="Word" value="<?php echo $detail['word']; ?>">
                            </div>
                        </div>
                        <?php if($detail['service'] == 1): ?>
                            <div class="am-form-group">
                                <label for="service" class="am-u-sm-3 am-form-label">服务条项 / Service</label>
                                <div class="am-u-sm-9">
                                    <select id="doc-select-1" name="service" >
                                        <option value="1" selected="selected">文稿代写</option>
                                        <option value="2">期刊发表</option>
                                        <option value="3">论文修改</option>
                                        <option value="4">包写包发</option>
                                    </select>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="ctime" class="am-u-sm-3 am-form-label">完成时间 / Ctime</label>
                                <div class="am-u-sm-9">
                                    <input type="text" id="ctime" name="Ctime" value="<?php echo $detail['ctime']; ?>">
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="Type" class="am-u-sm-3 am-form-label">文稿要求 / Type</label>
                                <div class="am-u-sm-9">
                                        <input type="text" id="Type" name="Type" value="<?php echo $detail['type']; ?>">
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="major" class="am-u-sm-3 am-form-label">专业方向 / Major</label>
                                <div class="am-u-sm-9">
                                    <input type="text" id="major" name="Major" value="<?php echo $detail['major']; ?>">
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="require" class="am-u-sm-3 am-form-label">具体需求 / Require</label>
                                <div class="am-u-sm-9">
                                    <textarea type="text" name="Require" id="require"><?php echo $detail['require']; ?></textarea>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="repeat" class="am-u-sm-3 am-form-label">重复率要求 / Repeat</label>
                                <div class="am-u-sm-9">
                                    <textarea type="text" name="repeat" id="repeat"><?php echo $detail['repeat']; ?></textarea>
                                </div>
                            </div>
                        <?php elseif($detail['service'] == 2): ?>
                            <div class="am-form-group">
                                <label for="service" class="am-u-sm-3 am-form-label">服务条项 / Service</label>
                                <div class="am-u-sm-9">
                                    <select id="doc-select-1" name="service" >
                                        <option value="1">文稿代写</option>
                                        <option value="2" selected="selected">期刊发表</option>
                                        <option value="3">论文修改</option>
                                        <option value="4">包写包发</option>
                                    </select>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="fatime" class="am-u-sm-3 am-form-label">发表时间 / Fatime</label>
                                <div class="am-u-sm-9">
                                    <input type="text" id="fatime" name="fatime" value="<?php echo $detail['fatime']; ?>">
                                </div>
                            </div>
                            <?php if($detail['level'] == 0): ?>
                                <div class="am-form-group">
                                    <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                    <div class="am-u-sm-9">
                                        <select id="doc-select-2" name="level" >
                                            <option value="0" selected="selected">省级期刊</option>
                                            <option value="1">国家级期刊</option>
                                            <option value="2">科技核心期刊</option>
                                            <option value="3">中文核心期刊</option>
                                            <option value="4">cssci核心期刊</option>
                                            <option value="5">EI/SCI核心期刊</option>
                                            <option value="6">暂不确定</option>
                                        </select>
                                    </div>
                                </div>
                            <?php elseif($detail['level'] == 1): ?>
                                <div class="am-form-group">
                                    <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                    <div class="am-u-sm-9">
                                        <select id="doc-select-2" name="level" >
                                            <option value="0">省级期刊</option>
                                            <option value="1" selected="selected">国家级期刊</option>
                                            <option value="2">科技核心期刊</option>
                                            <option value="3">中文核心期刊</option>
                                            <option value="4">cssci核心期刊</option>
                                            <option value="5">EI/SCI核心期刊</option>
                                            <option value="6">暂不确定</option>
                                        </select>
                                    </div>
                                </div>
                            <?php elseif($detail['level'] == 2): ?>
                                <div class="am-form-group">
                                    <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                    <div class="am-u-sm-9">
                                        <select id="doc-select-2" name="level" >
                                            <option value="0">省级期刊</option>
                                            <option value="1">国家级期刊</option>
                                            <option value="2" selected="selected">科技核心期刊</option>
                                            <option value="3">中文核心期刊</option>
                                            <option value="4">cssci核心期刊</option>
                                            <option value="5">EI/SCI核心期刊</option>
                                            <option value="6">暂不确定</option>
                                        </select>
                                    </div>
                                </div>
                            <?php elseif($detail['level'] == 3): ?>
                                <div class="am-form-group">
                                    <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                    <div class="am-u-sm-9">
                                        <select id="doc-select-2" name="level" >
                                            <option value="0">省级期刊</option>
                                            <option value="1">国家级期刊</option>
                                            <option value="2">科技核心期刊</option>
                                            <option value="3" selected="selected">中文核心期刊</option>
                                            <option value="4">cssci核心期刊</option>
                                            <option value="5">EI/SCI核心期刊</option>
                                            <option value="6">暂不确定</option>
                                        </select>
                                    </div>
                                </div>
                            <?php elseif($detail['level'] == 4): ?>
                                <div class="am-form-group">
                                    <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                    <div class="am-u-sm-9">
                                        <select id="doc-select-2" name="level" >
                                            <option value="0">省级期刊</option>
                                            <option value="1">国家级期刊</option>
                                            <option value="2">科技核心期刊</option>
                                            <option value="3">中文核心期刊</option>
                                            <option value="4" selected="selected">cssci核心期刊</option>
                                            <option value="5">EI/SCI核心期刊</option>
                                            <option value="6">暂不确定</option>
                                        </select>
                                    </div>
                                </div>
                            <?php elseif($detail['level'] == 5): ?>
                                <div class="am-form-group">
                                    <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                    <div class="am-u-sm-9">
                                        <select id="doc-select-2" name="level" >
                                            <option value="0">省级期刊</option>
                                            <option value="1">国家级期刊</option>
                                            <option value="2">科技核心期刊</option>
                                            <option value="3">中文核心期刊</option>
                                            <option value="4">cssci核心期刊</option>
                                            <option value="5" selected="selected">EI/SCI核心期刊</option>
                                            <option value="6">暂不确定</option>
                                        </select>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="am-form-group">
                                    <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                    <div class="am-u-sm-9">
                                        <select id="doc-select-2" name="level" >
                                            <option value="0">省级期刊</option>
                                            <option value="1">国家级期刊</option>
                                            <option value="2">科技核心期刊</option>
                                            <option value="3">中文核心期刊</option>
                                            <option value="4">cssci核心期刊</option>
                                            <option value="5">EI/SCI核心期刊</option>
                                            <option value="6" selected="selected">暂不确定</option>
                                        </select>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="am-form-group">
                                <label for="require" class="am-u-sm-3 am-form-label">其他要求 / Require</label>
                                <div class="am-u-sm-9">
                                    <textarea type="text" id="require" name="Require"><?php echo $detail['require']; ?></textarea>
                                </div>
                            </div>
                        <?php elseif($detail['service'] == 3): ?>
                            <div class="am-form-group">
                                <label for="service" class="am-u-sm-3 am-form-label">服务条项 / Service</label>
                                <div class="am-u-sm-9">
                                    <select id="doc-select-1" name="service" >
                                        <option value="1">文稿代写</option>
                                        <option value="2">期刊发表</option>
                                        <option value="3" selected="selected">论文修改</option>
                                        <option value="4">包写包发</option>
                                    </select>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="ctime" class="am-u-sm-3 am-form-label">修改完成时间 / Ctime</label>
                                <div class="am-u-sm-9">
                                    <input type="text" id="ctime" name="Ctime" value="<?php echo $detail['ctime']; ?>">
                                </div>
                            </div>
                            <?php if($detail['modify'] == 0): ?>
                            <div class="am-form-group">
                                <label for="modify" class="am-u-sm-3 am-form-label">论文修改类型 / Modify</label>
                                <div class="am-u-sm-9">
                                    <select id="doc-select-2" name="modify" >
                                        <option value="0" selected="selected">按意见修改内容</option>
                                        <option value="1">降低论文重复率</option>
                                        <option value="2">修改论文格式</option>
                                        <option value="3">整体润色修改</option>
                                        <option value="4">其他修改</option>
                                    </select>
                                </div>
                            </div>
                            <?php elseif($detail['modify'] == 1): ?>
                            <div class="am-form-group">
                                <label for="modify" class="am-u-sm-3 am-form-label">论文修改类型 / Modify</label>
                                <div class="am-u-sm-9">
                                    <select id="doc-select-2" name="modify" >
                                        <option value="0">按意见修改内容</option>
                                        <option value="1" selected="selected">降低论文重复率</option>
                                        <option value="2">修改论文格式</option>
                                        <option value="3">整体润色修改</option>
                                        <option value="4">其他修改</option>
                                    </select>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="nowrep" class="am-u-sm-3 am-form-label">当前重复率 / Nowrep</label>
                                <div class="am-u-sm-9">
                                    <textarea type="text" name="nowrep" id="nowrep"><?php echo $detail['nowrep']; ?></textarea>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="repeat" class="am-u-sm-3 am-form-label">修改后重复率 / Repeat</label>
                                <div class="am-u-sm-9">
                                    <textarea type="text" name="repeat" id="repeat"><?php echo $detail['repeat']; ?></textarea>
                                </div>
                            </div>
                            <?php elseif($detail['modify'] == 2): ?>
                            <div class="am-form-group">
                                <label for="modify" class="am-u-sm-3 am-form-label">论文修改类型 / Modify</label>
                                <div class="am-u-sm-9">
                                    <select id="doc-select-2" name="modify" >
                                        <option value="0">按意见修改内容</option>
                                        <option value="1">降低论文重复率</option>
                                        <option value="2" selected="selected">修改论文格式</option>
                                        <option value="3">整体润色修改</option>
                                        <option value="4">其他修改</option>
                                    </select>
                                </div>
                            </div>
                            <?php elseif($detail['modify'] == 3): ?>
                            <div class="am-form-group">
                                <label for="modify" class="am-u-sm-3 am-form-label">论文修改类型 / Modify</label>
                                <div class="am-u-sm-9">
                                    <select id="doc-select-2" name="modify" >
                                        <option value="0">按意见修改内容</option>
                                        <option value="1">降低论文重复率</option>
                                        <option value="2">修改论文格式</option>
                                        <option value="3" selected="selected">整体润色修改</option>
                                        <option value="4">其他修改</option>
                                    </select>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="am-form-group">
                                <label for="modify" class="am-u-sm-3 am-form-label">论文修改类型 / Modify</label>
                                <div class="am-u-sm-9">
                                    <select id="doc-select-2" name="modify" >
                                        <option value="0">按意见修改内容</option>
                                        <option value="1">降低论文重复率</option>
                                        <option value="2">修改论文格式</option>
                                        <option value="3">整体润色修改</option>
                                        <option value="4" selected="selected">其他修改</option>
                                    </select>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="am-form-group">
                                <label for="require" class="am-u-sm-3 am-form-label">修改意见 / Require</label>
                                <div class="am-u-sm-9">
                                    <textarea type="text" id="require" name="Require"><?php echo $detail['require']; ?></textarea>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="am-form-group">
                                <label for="service" class="am-u-sm-3 am-form-label">服务条项 / Service</label>
                                <div class="am-u-sm-9">
                                    <select id="doc-select-1" name="service" >
                                        <option value="1">文稿代写</option>
                                        <option value="2">期刊发表</option>
                                        <option value="3">论文修改</option>
                                        <option value="4" selected="selected">包写包发</option>
                                    </select>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="fatime" class="am-u-sm-3 am-form-label">发表时间 / Fatime</label>
                                <div class="am-u-sm-9">
                                    <input type="text" id="fatime" name="fatime" value="<?php echo $detail['fatime']; ?>">
                                </div>
                            </div>
                            <?php if($detail['level'] == 0): ?>
                            <div class="am-form-group">
                                <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                <div class="am-u-sm-9">
                                    <select id="doc-select-2" name="level" >
                                        <option value="0" selected="selected">省级期刊</option>
                                        <option value="1">国家级期刊</option>
                                        <option value="2">科技核心期刊</option>
                                        <option value="3">中文核心期刊</option>
                                        <option value="4">cssci核心期刊</option>
                                        <option value="5">EI/SCI核心期刊</option>
                                        <option value="6">暂不确定</option>
                                    </select>
                                </div>
                            </div>
                            <?php elseif($detail['level'] == 1): ?>
                            <div class="am-form-group">
                                <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                <div class="am-u-sm-9">
                                    <select id="doc-select-2" name="level" >
                                        <option value="0">省级期刊</option>
                                        <option value="1" selected="selected">国家级期刊</option>
                                        <option value="2">科技核心期刊</option>
                                        <option value="3">中文核心期刊</option>
                                        <option value="4">cssci核心期刊</option>
                                        <option value="5">EI/SCI核心期刊</option>
                                        <option value="6">暂不确定</option>
                                    </select>
                                </div>
                            </div>
                            <?php elseif($detail['level'] == 2): ?>
                            <div class="am-form-group">
                                <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                <div class="am-u-sm-9">
                                    <select id="doc-select-2" name="level" >
                                        <option value="0">省级期刊</option>
                                        <option value="1">国家级期刊</option>
                                        <option value="2" selected="selected">科技核心期刊</option>
                                        <option value="3">中文核心期刊</option>
                                        <option value="4">cssci核心期刊</option>
                                        <option value="5">EI/SCI核心期刊</option>
                                        <option value="6">暂不确定</option>
                                    </select>
                                </div>
                            </div>
                            <?php elseif($detail['level'] == 3): ?>
                            <div class="am-form-group">
                                <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                <div class="am-u-sm-9">
                                    <select id="doc-select-2" name="level" >
                                        <option value="0">省级期刊</option>
                                        <option value="1">国家级期刊</option>
                                        <option value="2">科技核心期刊</option>
                                        <option value="3" selected="selected">中文核心期刊</option>
                                        <option value="4">cssci核心期刊</option>
                                        <option value="5">EI/SCI核心期刊</option>
                                        <option value="6">暂不确定</option>
                                    </select>
                                </div>
                            </div>
                            <?php elseif($detail['level'] == 4): ?>
                            <div class="am-form-group">
                                <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                <div class="am-u-sm-9">
                                    <select id="doc-select-2" name="level" >
                                        <option value="0">省级期刊</option>
                                        <option value="1">国家级期刊</option>
                                        <option value="2">科技核心期刊</option>
                                        <option value="3">中文核心期刊</option>
                                        <option value="4" selected="selected">cssci核心期刊</option>
                                        <option value="5">EI/SCI核心期刊</option>
                                        <option value="6">暂不确定</option>
                                    </select>
                                </div>
                            </div>
                            <?php elseif($detail['level'] == 5): ?>
                            <div class="am-form-group">
                                <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                <div class="am-u-sm-9">
                                    <select id="doc-select-2" name="level" >
                                        <option value="0">省级期刊</option>
                                        <option value="1">国家级期刊</option>
                                        <option value="2">科技核心期刊</option>
                                        <option value="3">中文核心期刊</option>
                                        <option value="4">cssci核心期刊</option>
                                        <option value="5" selected="selected">EI/SCI核心期刊</option>
                                        <option value="6">暂不确定</option>
                                    </select>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="am-form-group">
                                <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                <div class="am-u-sm-9">
                                    <select id="doc-select-2" name="level" >
                                        <option value="0">省级期刊</option>
                                        <option value="1">国家级期刊</option>
                                        <option value="2">科技核心期刊</option>
                                        <option value="3">中文核心期刊</option>
                                        <option value="4">cssci核心期刊</option>
                                        <option value="5">EI/SCI核心期刊</option>
                                        <option value="6" selected="selected">暂不确定</option>
                                    </select>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="am-form-group">
                                <label for="require" class="am-u-sm-3 am-form-label">具体要求 / Require</label>
                                <div class="am-u-sm-9">
                                    <textarea type="text" id="require" name="Require"><?php echo $detail['require']; ?></textarea>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<script src="__JS__/jquery.min.js"></script>
<script src="__JS__/amazeui.min.js"></script>
<script src="__JS__/iscroll.js"></script>
<script src="__JS__/app.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".tpl-left-nav-list a").each(function(){
            $this = $(this);
            if($this[0].href==String(window.location)){
                $this.addClass("active");
            }
        });
    });
</script>
</body>

</html>