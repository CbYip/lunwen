<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:55:"D:\phpStudy\WWW\lunwen/app/index\view\member\index.html";i:1504487185;s:56:"D:\phpStudy\WWW\lunwen/app/index\view\public\header.html";i:1504925608;s:53:"D:\phpStudy\WWW\lunwen/app/index\view\public\nav.html";i:1503908556;s:56:"D:\phpStudy\WWW\lunwen/app/index\view\public\footer.html";i:1504928247;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>易起论文</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="__CSS__/amazeui.min.css"/>
    <link rel="stylesheet" href="__CSS__/amazeui.datetimepicker.css"/>
    <link rel="stylesheet" href="__CSS__/LArea.css">
    <link rel="stylesheet" href="__CSS__/style.css"/>
    <script src="__JS__/jquery.min.js"></script>
    <script src="__JS__/amazeui.min.js"></script>
</head>



<body>
<div class="container">
    <header data-am-widget="header" class="am-header am-header-default my-header">
        <div class="am-header-left am-header-nav">
            <a href="#left-link" class="">
                <i class="am-header-icon am-icon-chevron-left"></i>
            </a>
        </div>
        <h1 class="am-header-title">
            <a href="#title-link" class="">个人中心</a>
        </h1>
        <div class="am-header-right am-header-nav">
            <a href="#right-link" class="">
                <i class="am-header-icon  am-icon-home"></i>
            </a>
        </div>
    </header>
    <!--头部导航-->
    <div class="uchome-info">
    <div class="uchome-info-uimg">
        <img src="__IMG__/default/img1.jpg" />
    </div>
    <div class="uchome-info-uinfo">
        <p>王小丫，欢迎光临！</p>
        <p>注册时间：<span class="red">2017-6-30</span></p>
        <p>余额：<span class="red">￥20000.00</span></p>
        <p>积分：<span class="red">2531</span></p>
    </div>
</div>
<div class="am-cf uchome-nav">
    <ul class="am-avg-sm-5">
        <li><a href="">今日签到</a></li>
        <li><a href="<?php echo url('member/myuser'); ?>">我的资料</a></li>
        <li><a href="<?php echo url('member/myqrcode'); ?>">我的二维码</a></li>
        <li><a href="<?php echo url('member/partners'); ?>">我的伙伴</a></li>
    </ul>
</div>

    <div class="am-cf uchome-apps">
        <ul class="am-avg-sm-3 uchome-apps-ul">
            <li><a href="<?php echo url('member/myorder'); ?>"><p class="imgp"><img src="__IMG__/default/uhomeapp1.png" class="am-img-responsive" /></p><p class="namep">我的订单</p><p class="lastp">0笔</p></a></li>
            <li><a href="<?php echo url('member/order_accept'); ?>"><p class="imgp"><img src="__IMG__/default/uhomeapp2.png" class="am-img-responsive" /></p><p class="namep">我接订单</p><p class="lastp">0笔</p></a></li>
            <li><a href="#"><p class="imgp"><img src="__IMG__/default/uhomeapp3.png" class="am-img-responsive" /></p><p class="namep">商城订单</p><p class="lastp">0笔</p></a></li>
            <li><a href="<?php echo url('good/shopcart'); ?>"><p class="imgp"><img src="__IMG__/default/uhomeapp4.png" class="am-img-responsive" /></p><p class="namep">购物车</p><p class="lastp">0件</p></a></li>
            <li><a href="<?php echo url('member/mycollect'); ?>"><p class="imgp"><img src="__IMG__/default/uhomeapp7.png" class="am-img-responsive" /></p><p class="namep">我的收藏</p><p class="lastp">0件</p></a></li>
            <li><a href="<?php echo url('member/popularize'); ?>"><p class="imgp"><img src="__IMG__/default/uhomeapp9.png" class="am-img-responsive" /></p><p class="namep">我的推广</p><p class="lastp">160</p></a></li>
            <li><a href="<?php echo url('member/partners'); ?>"><p class="imgp"><img src="__IMG__/default/uhomeapp11.png" class="am-img-responsive" /></p><p class="namep">我的伙伴</p><p class="lastp">0位</p></a></li>
            <li><a href="<?php echo url('member/messagelist'); ?>"><p class="imgp"><img src="__IMG__/default/uhomeapp12.png" class="am-img-responsive" /></p><p class="namep">我的消息</p><p class="lastp">0条</p></a></li>
            <li><a href="#"><p class="imgp"><img src="__IMG__/default/uhomeapp13.png" class="am-img-responsive" /></p><p class="namep">金币充值</p><p class="lastp">￥0</p></a></li>
        </ul>
    </div>
<footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{  }">
    <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
    <div class="am-footer-miscs ">
        <p>CopyRight©2014 AllMobilize Inc.</p>
        <p>京ICP备13033158</p>
    </div>
</footer>
<!--底部-->
<div data-am-widget="navbar" class="am-navbar am-cf my-nav-footer " id="">
    <ul class="am-navbar-nav am-cf am-avg-sm-4 my-footer-ul">
        <li>
            <a href="<?php echo url('index/index'); ?>" class="">
                <span class="am-icon-home"></span>
                <span class="am-navbar-label">首页</span>
            </a>
        </li>
        <li>
            <a href="<?php echo url('index/order'); ?>" class="">
                <span class=" am-icon-edit"></span>
                <span class="am-navbar-label">论文</span>
            </a>
        </li>
        <li>
            <a href="<?php echo url('index/shop'); ?>" class="">
                <span class="am-icon-cart-plus"></span>
                <span class="am-navbar-label">商城</span>
            </a>
        </li>

        <li>
            <a href="<?php echo url('good/category'); ?>" class="">
                <span class="am-icon-list-ul"></span>
                <span class="am-navbar-label">分类</span>
            </a>
        </li>
        <li>
            <a href="<?php echo url('member/index'); ?>" onClick="showFooterNav();" class="">
                <span class="am-icon-user"></span>
                <span class="am-navbar-label">个人</span>
            </a>
        </li>
    </ul>
    <script>
        function showFooterNav() {
            $("#footNav").toggle();
        }
    </script>
</div>
</div>
<script src="__JS__/jquery.min.js"></script>
<script src="__JS__/amazeui.datetimepicker.min.js"></script>
<script src="__JS__/amazeui.datetimepicker.zh-CN.js"></script>
<script type="text/javascript">
    $('.am-form').on('click','#datetimepicker', function () {
        var date = new Date();
        var year = date.getFullYear();
        var month = date.getMonth()+1;
        var day = date.getDate();
        var now = year + "-" + month + "-" + day;
        $('#datetimepicker').datetimepicker({
            format: 'yyyy-mm-dd',
            minView: '2',
            viewSelect: '2',
            language: 'zh-CN',
            todayBtn: true,
            startDate: now,
            autoclose: true,
        });
        $('#datetimepicker').datetimepicker('show');
    })
</script>

</body>
</html>
