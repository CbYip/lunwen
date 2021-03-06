<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:60:"D:\phpStudy\WWW\lunwen/app/index\view\search\searchshop.html";i:1503633299;s:56:"D:\phpStudy\WWW\lunwen/app/index\view\public\header.html";i:1503629693;s:56:"D:\phpStudy\WWW\lunwen/app/index\view\public\footer.html";i:1503627502;}*/ ?>
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
            <a href="#title-link" class="">商家</a>
        </h1>
        <div class="am-header-right am-header-nav">
            <a href="#right-link" class="">
                <i class="am-header-icon  am-icon-home"></i>
            </a>
        </div>
    </header>

    <div class="am-cf">
        <ul class="am-nav am-nav-pills am-nav-justify">
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown am-dropdown-toggle" data-am-dropdown="{justify: '#doc-dropdown-justify'}" href="javascript:;">
                    地区 <span class="am-icon-caret-down"></span>
                </a>
                <div class="am-dropdown-content" id="areaPanel">
                    <div class="gray-panel">
                        <div class="my-search-title-panel">定位区域：<i class="am-icon-crosshairs"></i> <span id="myarea">广州市</span></div>
                        <script>
                            $(function() {
                                var geolocation = new $.AMUI.Geolocation();
                                var $myarea = $('#myarea');
                                geolocation.get({timeout: 7000}).then(function(position){
                                    // console.log(position.coords);
                                    var contentString = '你的位置：\n\t纬度 ' + position.coords.latitude +
                                        '，\n\t经度 ' + position.coords.longitude + '，\n\t精确度 ' +
                                        position.coords.accuracy;
                                    $myarea.html(contentString);
                                }, function(err) {
                                    $myarea.html('获取地理位置时发生错误，错误信息：<br>' + err);
                                });
                            });
                        </script>
                        <div class="my-search-title-panel">
                            <p class="my-search-titp-p">商区城市：广州市</p>
                            <hr data-am-widget="divider" style="" class="am-divider-default am-margin-bottom-sm"/>
                            <table class="am-table am-table-bordered am-margin-bottom-xs">
                                <tr>
                                    <td width="25%">全城区域</td>
                                    <td width="25%">越秀区</td>
                                    <td width="25%">天河区</td>
                                    <td width="25%">南沙区</td>
                                </tr>
                                <tr>
                                    <td>番禺区</td>
                                    <td>珠海区</td>
                                    <td>荔湾区</td>
                                    <td>黄埔区</td>
                                </tr>
                                <tr>
                                    <td>增城区</td>
                                    <td>花都区</td>
                                    <td>从化区</td>
                                    <td>白云区</td>
                                </tr>
                            </table>
                        </div>
                    </div>

            </li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    商家分类 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#">分类1</a></li>
                    <li><a href="#">分类2</a></li>
                </ul>
            </li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    默认排序 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#">排序1</a></li>
                    <li><a href="#">排序2</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="my-search-title-panel">
        <div class="withdrawals-panel">
            <div class="groupby-img-panle"><a href="#"><img src="__IMG__/default/img3.jpg" class="am-img-responsive" /></a></div>
            <div class="groupby-info-panle">
                <h3><a href="#">广州XXX店</a></h3>
                <p>地址：广州市天河区XXX</p>
                <p>主营：宝贝</p>
                <p>共有：<span class="am-text-success">10</span>件宝贝      最近成交：<span class="am-text-danger">10</span>件</p>
                <p><i class="am-icon-map-marker"></i> 1.2公里</p>
            </div>
        </div>
        <div class="withdrawals-panel">
            <div class="groupby-img-panle"><a href="#"><img src="__IMG__/default/img3.jpg" class="am-img-responsive" /></a></div>
            <div class="groupby-info-panle">
                <h3><a href="#">广州XXX店</a></h3>
                <p>地址：广州市天河区XXX</p>
                <p>主营：宝贝</p>
                <p>共有：<span class="am-text-success">10</span>件宝贝      最近成交：<span class="am-text-danger">10</span>件</p>
                <p><i class="am-icon-map-marker"></i> 1.2公里</p>
            </div>
        </div>
        <div class="withdrawals-panel">
            <div class="groupby-img-panle"><a href="#"><img src="__IMG__/default/img3.jpg" class="am-img-responsive" /></a></div>
            <div class="groupby-info-panle">
                <h3><a href="#">广州XXX店</a></h3>
                <p>地址：广州市天河区XXX</p>
                <p>主营：宝贝</p>
                <p>共有：<span class="am-text-success">10</span>件宝贝      最近成交：<span class="am-text-danger">10</span>件</p>
                <p><i class="am-icon-map-marker"></i> 1.2公里</p>
            </div>
        </div>
        <div class="withdrawals-panel">
            <div class="groupby-img-panle"><a href="#"><img src="__IMG__/default/img3.jpg" class="am-img-responsive" /></a></div>
            <div class="groupby-info-panle">
                <h3><a href="#">广州XXX店</a></h3>
                <p>地址：广州市天河区XXX</p>
                <p>主营：宝贝</p>
                <p>共有：<span class="am-text-success">10</span>件宝贝      最近成交：<span class="am-text-danger">10</span>件</p>
                <p><i class="am-icon-map-marker"></i> 1.2公里</p>
            </div>
        </div>
        <div class="withdrawals-panel">
            <div class="groupby-img-panle"><a href="#"><img src="__IMG__/default/img3.jpg" class="am-img-responsive" /></a></div>
            <div class="groupby-info-panle">
                <h3><a href="#">广州XXX店</a></h3>
                <p>地址：广州市天河区XXX</p>
                <p>主营：宝贝</p>
                <p>共有：<span class="am-text-success">10</span>件宝贝      最近成交：<span class="am-text-danger">10</span>件</p>
                <p><i class="am-icon-map-marker"></i> 1.2公里</p>
            </div>
        </div>
        <ul data-am-widget="pagination" class="am-pagination am-pagination-select">
            <li class="am-pagination-prev ">
                <a href="#" class="">上一页</a>
            </li>
            <li class="am-pagination-select">
                <select>
                    <option value="#" class="">1 / 3</option>
                    <option value="#" class="">2 / 3</option>
                    <option value="#" class="">3 / 3</option>
                </select>
            </li>
            <li class="am-pagination-next ">
                <a href="#" class="">下一页</a>
            </li>
        </ul>
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
