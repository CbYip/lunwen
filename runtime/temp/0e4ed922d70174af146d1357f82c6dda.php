<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:52:"D:\phpStudy\WWW\lunwen/app/index\view\good\city.html";i:1503630591;s:56:"D:\phpStudy\WWW\lunwen/app/index\view\public\header.html";i:1504094349;s:56:"D:\phpStudy\WWW\lunwen/app/index\view\public\footer.html";i:1504581856;}*/ ?>
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
            <a href="#title-link" class="">选择城市</a>
        </h1>
        <div class="am-header-right am-header-nav">
            <a href="#right-link" class="">
                <i class="am-header-icon  am-icon-home"></i>
            </a>
        </div>
    </header>

    <div class="gray-panel">
        <div class="my-search-title-panel">定位城市：<i class="am-icon-crosshairs"></i> <span id="myarea">广州市</span></div>
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
            <p class="my-search-titp-p">热门城市</p>
            <hr data-am-widget="divider" style="" class="am-divider-default am-margin-bottom-sm"/>
            <table class="am-table am-table-bordered am-margin-bottom-xs">
                <tr>
                    <td width="25%">北京</td>
                    <td width="25%">上海</td>
                    <td width="25%">广州</td>
                    <td width="25%">深圳</td>
                </tr>
                <tr>
                    <td>天津</td>
                    <td>西安</td>
                    <td>重庆</td>
                    <td>杭州</td>
                </tr>
                <tr>
                    <td>南京</td>
                    <td>武汉</td>
                    <td>成都</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="my-search-title-panel">
            <p class="my-search-titp-p">全部城市</p>
            <hr data-am-widget="divider" style="" class="am-divider-default am-margin-bottom-sm"/>
            <table class="am-table am-table-bordered am-margin-bottom-xs letter-table">
                <tr>
                    <td width="20%"><a href="#">A</a></td>
                    <td width="20%"><a href="#">B</a></td>
                    <td width="20%"><a href="#">C</a></td>
                    <td width="20%"><a href="#">D</a></td>
                    <td width="20%"><a href="#">E</a></td>
                </tr>
                <tr>
                    <td><a href="#">F</a></td>
                    <td><a href="#">G</a></td>
                    <td><a href="#">H</a></td>
                    <td><a href="#">I</a></td>
                    <td><a href="#">J</a></td>
                </tr>
                <tr>
                    <td><a href="#">K</a></td>
                    <td><a href="#">L</a></td>
                    <td><a href="#">N</a></td>
                    <td><a href="#">M</a></td>
                    <td><a href="#">O</a></td>
                </tr>
                <tr>
                    <td><a href="#">O</a></td>
                    <td><a href="#">Q</a></td>
                    <td><a href="#">R</a></td>
                    <td><a href="#">S</a></td>
                    <td><a href="#">T</a></td>
                </tr>
                <tr>
                    <td><a href="#">U</a></td>
                    <td><a href="#">V</a></td>
                    <td><a href="#">W</a></td>
                    <td><a href="#">X</a></td>
                    <td><a href="#">Y</a></td>
                </tr>
                <tr>
                    <td><a href="#">Z</a></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

        </div>
        <div class="my-search-title-panel">
            <ul class="city-ul">
                <li class="letter">A</li>
                <li><a href="#">鞍山</a></li>
                <li><a href="#">安庆</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">更多...</a></li>
            </ul>
            <ul class="city-ul">
                <li class="letter">B</li>
                <li><a href="#">鞍山</a></li>
                <li><a href="#">安庆</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">安阳</a></li>
                <li><a href="#">更多...</a></li>
            </ul>
        </div>
    </div>

    <div data-am-widget="gotop" class="am-gotop am-gotop-fixed">
        <a href="#top" title="">
            <img class="am-gotop-icon-custom" src="__IMG__/default/goTop.gif" />
        </a>
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
