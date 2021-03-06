<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:58:"D:\phpStudy\WWW\lunwen/app/index\view\member\withdraw.html";i:1503640385;s:56:"D:\phpStudy\WWW\lunwen/app/index\view\public\header.html";i:1503629693;s:56:"D:\phpStudy\WWW\lunwen/app/index\view\public\footer.html";i:1503627502;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>商家首页</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="__CSS__/amazeui.min.css"/>
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
            <a href="#title-link" class="">会员中心</a>
        </h1>
        <div class="am-header-right am-header-nav">
            <a href="#right-link" class="">
                <i class="am-header-icon  am-icon-home"></i>
            </a>
        </div>
    </header>
    <div class="uchome-info">
        <div class="uchome-info-uimg">
            <img src="__IMG__/default/img1.jpg" />
        </div>
        <div class="uchome-info-uinfo">
            <p>王小丫，欢迎光临！[<a href="#" class="white">退出登录</a>]</p>
            <p>帐号：XiaoyaWang，余额：<span class="red">￥20000.00</span></p>
            <p>积分：<span class="red">2531</span>，消息：<a href="#" class="red">12</a></p>
        </div>
    </div>
    <!--头部导航-->
    <div class="am-cf uchome-nav">
        <ul class="am-avg-sm-5">
            <li><a href="#">今日签到</a></li>
            <li><a href="#">我的资料</a></li>
            <li><a href="#">我的二维码</a></li>
            <li><a href="#">升级为商家</a></li>
            <li><a href="#">我的伙伴</a></li>
        </ul>
    </div>
    <div class="my-nav-bar">
        <ol class="am-breadcrumb">
            <li><a href="#">首页</a></li>
            <li><a href="#">提现</a></li>
        </ol>
    </div>

    <div class="cart-panel">
        <h3>提现</h3>
        <div class="withdrawals-panel"><span class="am-fr"><a class="am-text-success" href="#"><span class="am-fr am-icon-chevron-right"></span>银行卡</a></span>请管理您的收款银行，以便提现</div>
        <div class="withdrawals-panel">
            <p><span class="am-fr red2 bold">￥8888</span>账户余额（能提现金额）</p>
            <p><span class="am-fr red2 bold">￥8888</span>冻结的佣金（订单未完成）</p>
            <hr  class="am-divider am-divider-default" />
            <p class="am-text-center"><button type="button" class="am-btn am-btn-danger am-round">申请提现</button></p>
        </div>
        <h3>提现记录</h3>
        <div class="withdrawals-panel">
            <table class="am-table am-table-striped am-table-hover comm-table">
                <thead>
                <tr>
                    <th>订单</th>
                    <th>日期</th>
                    <th>金额</th>
                    <th>状态</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>20150607111</td>
                    <td>2015-06-07</td>
                    <td>￥300.00</td>
                    <td>已成功</td>
                </tr>
                <tr>
                    <td>20150607110</td>
                    <td>2015-06-06</td>
                    <td>￥300.00</td>
                    <td>待审核</td>
                </tr>
                </tbody>
            </table>
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
            <a href="/wap/" class="">
                <span class="am-icon-home"></span>
                <span class="am-navbar-label">首页</span>
            </a>
        </li>
        <li>
            <a href="###" class="">
                <span class=" am-icon-phone"></span>
                <span class="am-navbar-label">电话</span>
            </a>
        </li>
        <li>
            <a href="###" class="">
                <span class=" am-icon-comments"></span>
                <span class="am-navbar-label">聊天</span>
            </a>
        </li>
        <li>
            <a href="#" class="">
                <span class=" am-icon-map-marker"></span>
                <span class="am-navbar-label">地图</span>
            </a>
        </li>
        <li style="position:relative">
            <a href="javascript:;" onClick="showFooterNav();" class="">
                <span class="am-icon-user"></span>
                <span class="am-navbar-label">会员</span>
            </a>
            <div class="footer-nav" id="footNav">
                <span class=" am-icon-bank"><a href="#">买家中心</a></span>
                <span class="am-icon-suitcase"><a href="#">卖家中心</a></span>
                <span class="am-icon-usd"><a href="#">我的钱包</a></span>
                <span class="am-icon-user"><a href="#">个人资料</a></span>
                <span class="am-icon-th-list"><a href="#">帮助中心</a></span>
                <span class="am-icon-comments"><a href="#">消息中心</a></span>
                <span class="am-icon-power-off"><a href="#">安全退出</a></span>
            </div>
        </li>
    </ul>
    <script>
        function showFooterNav(){
            $("#footNav").toggle();
        }
    </script>
</div>
</div>
</body>
</html>
