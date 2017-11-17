<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"D:\WebTest\lunwen\lunwen/admin/index\view\index\chart_detail.html";i:1506589853;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\header.html";i:1506646436;s:58:"D:\WebTest\lunwen\lunwen/admin/index\view\public\left.html";i:1507431544;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\footer.html";i:1504506358;}*/ ?>
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
        用户管理详情
    </div>
    <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">首页</a></li>
        <li class="am-active">用户管理详情</li>
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
                    <form class="am-form am-form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="am-form-group">
                            <label for="name" class="am-u-sm-3 am-form-label">注册名 / Name</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="WID" class="am-u-sm-3 am-form-label">微信会员ID / WID</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="WID" name="WID" value="<?php echo $user['WID']; ?>" readonly>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="nickname" class="am-u-sm-3 am-form-label">注册微信名 / Nickame</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="nickname" name="nickname" value="<?php echo $user['nickname']; ?>">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="tel" class="am-u-sm-3 am-form-label">注册电话 / Tel</label>
                            <div class="am-u-sm-9">
                                <input type="text"  id="tel" name="tel" value="<?php echo $user['tel']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="balance" class="am-u-sm-3 am-form-label">余额 / Balance</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="balance" name="balance" value="<?php echo $user['balance']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="score" class="am-u-sm-3 am-form-label">积分 / Score</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="score" name="score" value="<?php echo $user['score']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="email" class="am-u-sm-3 am-form-label">注册邮箱 / Email</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="email" name="email" value="<?php echo $user['email']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="date" class="am-u-sm-3 am-form-label">注册时间 / Date</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="date" name="date" value="<?php echo $user['date']; ?>" readonly>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                                <button type="button" class="am-btn am-btn-warning" onclick="window.history.go(-1)">返&nbsp;&nbsp;回</button>
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