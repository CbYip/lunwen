<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:58:"D:\phpStudy\WWW\lunwen/app/index\view\member\myqrcode.html";i:1503907919;s:56:"D:\phpStudy\WWW\lunwen/app/index\view\public\header.html";i:1504094349;s:53:"D:\phpStudy\WWW\lunwen/app/index\view\public\nav.html";i:1503908556;s:56:"D:\phpStudy\WWW\lunwen/app/index\view\public\footer.html";i:1504082054;}*/ ?>
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
    <link rel="stylesheet" href="__CSS__/style.css"/>
    <link rel="stylesheet" href="__CSS__/amazeui.datetimepicker.css"/>
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

    <div class="my-nav-bar">
        <ol class="am-breadcrumb">
            <li><a href="#">首页</a></li>
            <li><a href="#">我的推广名片</a></li>
        </ol>
    </div>
    <div class="am-cf cart-panel">
        <div class="withdrawals-panel">
            <div class="am-cf qrcode-title-panel">
                <div class="qrcode-face"><img src="__IMG__/default/img1.jpg" class="am-img-responsive" /></div>
                <div class="qrcode-myinfo">
                    <p>我是 某某某</p>
                    <p>我为某某某代言</p>
                </div>
            </div>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
            <p class="am-text-center">我的推广二维码</p>
            <p class="am-text-center"><img src="__IMG__/default/qrcode.jpg" class="qrcode-qrcode" /></p>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
            <p class="am-text-left">我的推广代码</p>
            <form class="am-form">
                <div class="am-form-group">
                    <textarea class="" rows="3" id="doc-ta-1">http://www.apple.com/abc?id=123456789</textarea>
                </div>
                <div class="am-form-group">
                    <p class="am-text-right"><a class="am-btn am-btn-danger am-show-sm-only am-btn-sm am-radius" href="javascript:;" onClick="jQuery.AMUI.share.open();">立即分享</a></p>
                    <p class="am-text-right"><a class="am-btn am-btn-danger am-show-lg-up am-btn-sm am-radius" href="javascript:;" onClick="jQuery.AMUI.share.open();">立即分享</a></p>
                </div>
            </form>
        </div>
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
            <a href="tel:15818318048" class="">
                <span class=" am-icon-phone"></span>
                <span class="am-navbar-label">电话</span>
            </a>
        </li>
        <li>
            <a href="<?php echo url('index/order'); ?>" class="">
                <span class=" am-icon-list-ul"></span>
                <span class="am-navbar-label">论文</span>
            </a>
        </li>
        <li>
            <a href="#" class="">
                <span class=" am-icon-map-marker"></span>
                <span class="am-navbar-label">地图</span>
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
        var month = date.getMonth();
        var day = date.getDate();
        var now = year + "-" + month + "-" + day;
        $('#datetimepicker').datetimepicker({
            format: 'yyyy-mm-dd ',
            minView: '2',
            viewSelect: '2',
            language: 'zh-CN',
            todayBtn: true,
            startDate: now,
        });
        $('#datetimepicker').datetimepicker('show');
    })
</script>
</body>
</html>
