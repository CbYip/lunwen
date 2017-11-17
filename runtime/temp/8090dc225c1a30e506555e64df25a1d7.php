<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"D:\WebSite\Test_php\lunwen\lunwen/app/index\view\member\shoporder_detail.html";i:1505098292;s:67:"D:\WebSite\Test_php\lunwen\lunwen/app/index\view\public\header.html";i:1504925608;s:64:"D:\WebSite\Test_php\lunwen\lunwen/app/index\view\public\nav.html";i:1505054576;s:67:"D:\WebSite\Test_php\lunwen\lunwen/app/index\view\public\footer.html";i:1505115093;}*/ ?>
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
            <a href="#title-link" class="">订单详情</a>
        </h1>
        <div class="am-header-right am-header-nav">
            <a href="/" class="">
                <i class="am-header-icon  am-icon-home"></i>
            </a>
        </div>
    </header>
    <div class="uchome-info">
    <div class="uchome-info-uimg">
        <img src="__IMG__/default/img1.jpg" />
    </div>
    <div class="uchome-info-uinfo">
        <p>王小丫，欢迎光临！</p>
        <p>注册时间：<span class="red">2017-6-30</span></p>
        <p>积分：<span class="red">2531</span></p>
    </div>
</div>
<div class="am-cf uchome-nav">
    <ul class="am-avg-sm-5">
        <li><a href="">今日签到</a></li>
        <li><a href="<?php echo url('member/myuser'); ?>">我的资料</a></li>
        <li><a href="<?php echo url('member/partners'); ?>">我的伙伴</a></li>
    </ul>
</div>
    <div class="my-nav-bar">
        <ol class="am-breadcrumb">
            <li><a href="<?php echo url('member/index'); ?>">首页</a></li>
            <li><a href="<?php echo url('member/shoporder'); ?>">商城订单</a></li>
        </ol>
    </div>
    <div class="am-cf cart-panel">
        <input type="hidden" id="order" value="<?php echo $detail['ordernumber']; ?>"/>
        <div class="withdrawals-panel">
            <p class="groupby-t-p"><span class="am-fr"><?php echo $detail['time']; ?></span>订单号：<?php echo $detail['ordernumber']; ?></p>
            <hr  class="am-divider am-divider-default am-cf"/>
            <div class="groupby-info-panle">
                订单进度：
                <?php if($detail['shopflag'] == 0): ?>
                <div class="am-progress am-progress-striped am-progress-sm am-active ">
                    <div class="am-progress-bar am-progress-bar-danger"  style="width: 5%"></div>
                </div>
                <?php elseif($detail['shopflag'] == 1): ?>
                <div class="am-progress am-progress-striped am-progress-sm am-active ">
                    <div class="am-progress-bar am-progress-bar-danger"  style="width: 50%"></div>
                </div>
                <?php else: ?>
                <div class="am-progress am-progress-striped am-progress-sm am-active ">
                    <div class="am-progress-bar am-progress-bar-danger"  style="width: 100%"></div>
                </div>
                <?php endif; ?>
                <span class="am-u-sm-4">未发货</span>
                <span class="am-u-sm-4" style="text-align: center;">已发货</span>
                <span class="am-u-sm-4" style="text-align: right;">已收货</span>
                <p class="dt">总价：<?php echo $detail['total']; ?></p>
                <p class="dt">总积分：<?php echo $detail['score']; ?></p>
                <p class="dt">姓名：<?php echo $address['name']; ?></p>
                <p class="dt">联系方式：<?php echo $address['tel']; ?></p>
                <p class="dt">收货地址：<?php echo $address['city']; ?> &nbsp; <?php echo $address['citydetail']; ?></p>
                <p class="dt">物流编号：<?php echo $detail['wuliu']; ?></p>
                <p class="dt">物流：<?php echo $detail['wu']; ?></p>
                <?php if($detail['shopflag'] == 1): ?>
                <p id="btn"><button type="button" id="demand" class="am-btn am-btn-primary am-btn-xs am-btn-success am-radius order-detail-btn">确认收货</button></p>
                <?php endif; ?>
            </div>
        </div>
        <script type="text/javascript">
            $('#demand').click(function () {
                var order = $('#order').val();
                var r = confirm("是否确认收货？");
                if(r == true){
                    $.ajax({
                        type: "POST",
                        url: "<?php echo url('good/receipt'); ?>",
                        data: {"order":order},
                        dataType: "json",
                        success:function (data) {
                            if(data != 0){
                                window.location.href="<?php echo url('member/shoporder'); ?>";
                            }else{
                                alert("收货失败！");
                                return false;
                            }
                        }
                    })
                }else{
                    return false;
                }
            })
        </script>
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
