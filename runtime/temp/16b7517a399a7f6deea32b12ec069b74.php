<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:56:"D:\WebTest\lunwen\lunwen/app/index\view\index\index.html";i:1505053824;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\header.html";i:1505983138;s:62:"D:\WebTest\lunwen\lunwen/app/index\view\public\header_nav.html";i:1504834694;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\footer.html";i:1509409424;}*/ ?>
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
    <link rel="stylesheet" href="__CSS__/dropload.css"/>
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
            <div style="display:none">

            </div>
            <ul class="am-dropdown-content">
    <li><a href="<?php echo url('member/myorder'); ?>">论文订单</a></li>
    <li><a href="<?php echo url('index/order'); ?>">论文服务</a></li>
    <li><a href="<?php echo url('index/shop'); ?>">商城</a></li>
    <li><a href="<?php echo url('member/index'); ?>">个人中心</a></li>
    <li><a href="<?php echo url('good/shopcart'); ?>">购物车 </a></li>
</ul>
        </div>
        <h1 class="am-header-title">
            <a href="#title-link" class="">易起论文</a>
        </h1>
    </header>
    <!-- banner -->
    <div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{&quot;directionNav&quot;:false}'>
        <ul class="am-slides">
            <li>
                <img src="__IMG__/bing-1.jpg">
            </li>
            <li>
                <img src="__IMG__/bing-2.jpg">
            </li>
            <li>
                <img src="__IMG__/bing-3.jpg">
            </li>
            <li>
                <img src="__IMG__/bing-4.jpg">
            </li>
        </ul>
    </div>
    <div class="am-cf cart-panel">
        <?php if(is_array($order) || $order instanceof \think\Collection || $order instanceof \think\Paginator): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class="withdrawals-panel">
            <input type="hidden" value="<?php echo $vo['ID']; ?>" id="id">
            <p class="groupby-t-p"><span class="am-fr"><?php echo $vo['ftime']; ?></span>订单号：<?php echo $vo['order']; ?></p>
            <hr  class="am-divider am-divider-default am-cf"/>
            <div class="groupby-info-panle">
                <h3><a href="<?php echo url('member/accept_detail',['id'=>$vo['ID']]); ?>">题目：<?php echo $vo['title']; ?></a></h3>
                <div class="am-u-sm-6">
                    <p>金额：<span class="red2 bold"><?php echo $vo['price']; ?></span> 元 </p>
                    <p>姓名：<?php echo $vo['username']; ?> </p>
                    <p>完成时间：<?php echo $vo['ctime']; ?> </p>
                    <p><a href="<?php echo url('member/accept_detail',['id'=>$vo['ID']]); ?>" class="am-btn am-btn-primary am-btn-xs am-btn-danger am-radius">订单详情</a> <button id="sub" class="am-btn am-btn-primary am-btn-xs am-btn-success am-radius">我要接单</button></p>
                </div>
                <div class="am-u-sm-6">
                    <?php if($vo['service'] == 1): ?>
                    <p>订单类型：<span class="am-text-success">&nbsp;文稿代写</span></p>
                    <?php elseif($vo['service'] == 2): ?>
                    <p>订单类型：<span class="am-text-success">&nbsp;期刊发表</span></p>
                    <?php elseif($vo['service'] == 3): ?>
                    <p>订单类型：<span class="am-text-success">&nbsp;论文修改</span></p>
                    <?php else: ?>
                    <p>订单类型：<span class="am-text-success">&nbsp;包写包发</span></p>
                    <?php endif; ?>
                    <p>电话号码： <?php echo $vo['usertel']; ?></p>
                    <?php if($vo['flag'] == 0): ?>
                    <p>状态：<span class="am-text-success">已付款</span></p>
                    <?php elseif($vo['flag'] == 1): ?>
                    <p>状态：<span class="red2">未付款</span></p>
                    <?php else: ?>
                    <p>状态：<span class="red2">待审核</span></p>
                    <?php endif; ?>
                </div>

            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <!--<ul class="am-pagination am-pagination-centered">-->
        <!--<li class="am-disabled"><a href="#">&laquo;</a></li>-->
        <!--<li class="am-active"><a href="#">1</a></li>-->
        <!--<li><a href="#">2</a></li>-->
        <!--<li><a href="#">3</a></li>-->
        <!--<li><a href="#">4</a></li>-->
        <!--<li><a href="#">5</a></li>-->
        <!--<li><a href="#">&raquo;</a></li>-->
        <!--</ul>-->
        <script type="text/javascript">
            $('#sub').click(function () {
                if(confirm("是否接受订单")){
                    $('#sub').fadeOut(500);
                    var id = $('#id').val();
                    $.ajax({
                        type: "post",
                        url: "<?php echo url('member/accept_detail'); ?>",
                        dataType: "json",
                        data: {"id":id},
                        success:function (data) {
                            if(data == 1){
                                alert("订单接受成功！");
                                window.location.reload();
                            }else {
                                alert("订单接受失败！");
                            }
                        }
                    })
                }else{
                    return false;
                }
            });
        </script>
    </div>

<footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{  }">
    <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
    <div class="am-footer-miscs ">
        <!--<p>CopyRight©2014 AllMobilize Inc.</p>-->
        <!--<p>京ICP备13033158</p>-->
    </div>
</footer>
<!--底部-->
<div data-am-widget="navbar" class="am-navbar am-cf my-nav-footer " id="">
    <ul class="am-navbar-nav am-cf am-avg-sm-4 my-footer-ul">
        <li>
            <a href="<?php echo url('index/shop'); ?>" class="">
                <span class="am-icon-home"></span>
                <span class="am-navbar-label">首页</span>
            </a>
        </li>
        <li>
            <a href="<?php echo url('member/myorder'); ?>" class="">
                <span class="am-icon-clipboard"></span>
                <span class="am-navbar-label">订单</span>
            </a>
        </li>
        <li>
            <a href="<?php echo url('good/shopcart'); ?>" class="">
                <span class="am-icon-shopping-cart"></span>
                <span class="am-navbar-label">购物车</span>
            </a>
        </li>
        <li>
            <a href="<?php echo url('member/index'); ?>" onClick="showFooterNav();" class="">
                <span class="am-icon-user"></span>
                <span class="am-navbar-label">我的</span>
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
<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
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

