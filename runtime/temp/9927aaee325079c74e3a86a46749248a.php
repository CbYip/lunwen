<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:64:"D:\WebSite\Test_php\lunwen\lunwen/app/index\view\index\shop.html";i:1505053922;s:67:"D:\WebSite\Test_php\lunwen\lunwen/app/index\view\public\header.html";i:1504925608;s:71:"D:\WebSite\Test_php\lunwen\lunwen/app/index\view\public\header_nav.html";i:1504834694;s:67:"D:\WebSite\Test_php\lunwen\lunwen/app/index\view\public\footer.html";i:1505115093;}*/ ?>
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
        <div class="am-header-left am-header-nav am-dropdown"  data-am-dropdown>
            <a href="javascript:;" class="am-dropdown-toggle"  data-am-dropdown-toggle>
                <i class="am-header-icon am-icon-th-large"></i>
            </a>
            <ul class="am-dropdown-content">
    <li><a href="<?php echo url('member/myorder'); ?>">论文订单</a></li>
    <li><a href="<?php echo url('index/order'); ?>">论文服务</a></li>
    <li><a href="<?php echo url('index/shop'); ?>">商城</a></li>
    <li><a href="<?php echo url('member/index'); ?>">个人中心</a></li>
    <li><a href="<?php echo url('good/shopcart'); ?>">购物车 </a></li>
</ul>
        </div>
        <h1 class="am-header-title">
            <a href="#title-link" class="">易起商城</a>
        </h1>
        <div class="am-header-right am-header-nav">
            <a href="<?php echo url('good/shopcart'); ?>" class="">
                <i class="am-header-icon  am-icon-shopping-cart"></i>
            </a>
        </div>
    </header>
    <!-- banner -->
    <div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{&quot;directionNav&quot;:false}'>
        <ul class="am-slides">
            <li>
                <img src="__IMG__/admin/a4.png">
            </li>
            <li>
                <img src="__IMG__/admin/a6.png">
            </li>
            <li>
                <img src="__IMG__/admin/a7.png">
            </li>
            <li>
                <img src="__IMG__/admin/a8.png">
            </li>
        </ul>
    </div>
    <div class="am-g">
        <div class="am-u-sm-3 text-center">
            <a href="<?php echo url('good/category'); ?>"><img src="__IMG__/default/icon1.png" height="34"/>
            <p>分类</p></a>
        </div>
        <div class="am-u-sm-3 text-center">
            <a href="<?php echo url('member/shoporder'); ?>"><img src="__IMG__/default/icon2.png" height="34"/>
            <p>订单</p></a>
        </div>
        <div class="am-u-sm-3 text-center">
            <a href="<?php echo url('member/partners'); ?>"><img src="__IMG__/default/icon3.png" height="34"/>
            <p>推广</p></a>
        </div>
        <div class="am-u-sm-3 text-center">
            <a href="<?php echo url('good/shopcart'); ?>"><img src="__IMG__/default/money.png" height="34"/>
            <p>购物车</p></a>
        </div>
    </div>
    <!-- store -->
    <div class="am-cf am-g store-background">
        <ul class="am-avg-sm-2 my-shop-product-list">
            <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                <div class="am-panel am-panel-default">
                    <div class="am-panel-bd">
                        <img class="am-img-responsive img" src="<?php echo $vo['photo']; ?>" style="width: 170px; height: 200px;"/>
                        <h3><a href="<?php echo url('good/detail', ['id' => $vo['ID']]); ?>"><?php echo $vo['goodsname']; ?></a></h3>
                        <div>
                            <span class="list-product-price-span2">￥<?php echo $vo['goodsprice']; ?></span>
                            <span class="list-product-sorce-span">销量<br/><?php echo $vo['sales']; ?></span>
                        </div>
                        <hr data-am-widget="divider" style="" class="am-divider am-divider-default am-cf"/>
                        <ol class="am-avg-sm-2 product-list-share">
                            <li class="am-text-sm">积分：<?php echo $vo['score']; ?></li>
                            <li><button class="am-btn am-btn-danger am-btn-xs index-addcart-btn" onClick="window.location.href='<?php echo url('good/detail', ['id' => $vo['ID']]); ?>'">立即购买</button></li>
                        </ol>
                    </div>
                </div>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
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
            <a href="<?php echo url('index/order'); ?>" class="">
                <span class=" am-icon-edit"></span>
                <span class="am-navbar-label">论文</span>
            </a>
        </li>
        <li>
            <a href="<?php echo url('good/shopcart'); ?>" class="">
                <span class="am-icon-shopping-cart"></span>
                <span class="am-navbar-label">购物车</span>
            </a>
        </li>
        <li>
            <a href="<?php echo url('index/shop'); ?>" class="">
                <span class="am-icon-suitcase"></span>
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

