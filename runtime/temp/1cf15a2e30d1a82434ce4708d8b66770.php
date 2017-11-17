<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:55:"D:\WebTest\lunwen\lunwen/app/index\view\member\pay.html";i:1507899424;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\header.html";i:1505983138;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\footer.html";i:1509409424;}*/ ?>
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
        <div class="am-header-left am-header-nav">
            <a href="javascript:;" class="" onclick="window.history.go(-1);">
                <i class="am-header-icon am-icon-chevron-left"></i>
            </a>
        </div>
        <h1 class="am-header-title">
            <a href="#title-link" class="">提交订单</a>
        </h1>
        <div class="am-header-right am-header-nav">
            <a href="<?php echo url('good/checkout'); ?>" class="">
                <i class="am-header-icon  am-icon-shopping-cart"></i>
            </a>
        </div>
    </header>
    <div class="gray-panel">
        <div class="paoduct-title-panel">
            <h2 class="checkout-h2"><span class="am-badge am-round am-badge-warning ">1</span> 确认订单信息</h2>
            <div class="cart-list-panel">
                <ul class="am-avg-sm-1 cart-panel-ul">
                    <li>
                        <div class="infopanel">
                            <h3>订单号：<?php echo $list['order']; ?></h3>
                            <p>金额：<span class="red2 bold"><?php echo $list['price']; ?></span> 元</p>
                            <p>姓名：<span class="red2 bold"><?php echo $list['username']; ?></span></p>
                            <p>联系方式：<span class="red2 bold"><?php echo $list['usertel']; ?></span></p>
                            <p>题目：<span class="red2 bold"><?php echo $list['title']; ?></span>
                            <?php if($list['service'] == 1): ?>
                            <p>服务类型：<span class="red2 bold">文稿代写</span></p>
                            <p>完成时间：<span class="red2 bold"><?php echo date("Y-m-d", $list['ctime']); ?></span></p>
                            <?php elseif($list['service'] == 2): ?>
                            <p>服务类型：<span class="red2 bold">论文发表</span></p>
                            <p>完成时间：<span class="red2 bold"><?php echo $list['fatime']; ?></span></p>
                            <?php elseif($list['service'] == 3): ?>
                            <p>服务类型：<span class="red2 bold">论文修改</span></p>
                            <p>完成时间：<span class="red2 bold"><?php echo date("Y-m-d", $list['ctime']); ?></span></p>
                            <?php else: ?>
                            <p>服务类型：<span class="red2 bold">包写包发</span></p>
                            <p>完成时间：<span class="red2 bold"><?php echo $list['fatime']; ?></span></p>
                            <?php endif; ?>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cart_foot">总价：<span class="red2 bold" id="total_amount"><?php echo $list['price']; ?></span>元</div>
        </div>
        <div class="my-search-title-panel am-text-sm am-margin-bottom-sm">
            <i class="am-icon-lightbulb-o am-text-danger"></i>
            提示：确认无误之后可以进行微信支付，如若要进行其他支付方式，可以在公众号的客服中心->汇款方式进行转账支付，在转账中备注好订单号，姓名，联系方式。待收到您的款项后我们会安排工作人员对您的付款信息进行更新。
        </div>

        <script>
            $(document).ready(function(e) {
                $(".address").click(function(){
                    $(".address").removeClass('click');
                    $(this).addClass('click');
                });
            });
        </script>
        <div class="paoduct-title-panel">
            <h2 class="checkout-h2"><span class="am-badge am-round am-badge-warning ">2</span> 支付方式</h2>
            <ul class="am-list am-text-sm my-pay-ul">
                <li><a href="javascript:;" rel="1" class="hover"><span class="am-fr"><i class="am-icon-check-circle"></i>&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;<img src="__IMG__/default/wechat.png" class="payimg" />&nbsp;&nbsp;&nbsp;&nbsp;微信支付</a></li>
            </ul>
            <script>
                $(document).ready(function(e) {
                    $(".my-pay-ul li > a").click(function(){
                        $(".my-pay-ul li > a").removeClass('hover');
                        $(".my-pay-ul li > a i").removeClass('am-icon-check-circle').addClass('am-icon-circle-thin');
                        $(this).addClass('hover');
                        var val = $(this).attr('rel');
                        $("#paytype").val(val);
                        $(this).find('i').removeClass('am-icon-circle-thin').addClass('am-icon-check-circle');

                    });
                });
            </script>
            <div>
                <ul class="am-avg-sm-2 am-text-center ">
                    <li class="am-text-center am-padding-sm order-submit"><button type="button" class="am-btn am-btn-danger am-btn-block am-radius" onclick="callpay();">提交订单</button></li>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        //调用微信JS api 支付
        function onBridgeReady() {
            WeixinJSBridge.invoke(
                'getBrandWCPayRequest',
                <?php echo $jsApiParameters; ?>,
                function (res) {
                    if (res.err_msg == "get_brand_wcpay_request:ok") {
                        window.location.href="<?php echo url('member/myorder'); ?>";
                    }
                    // 使用以上方式判断前端返回,微信团队郑重提示:res.err_msg将在用户支付成功后返回    ok，但并不保证它绝对可靠。
                    if (res.err_msg == "get_brand_wcpay_request:cancel") {
                    }
                }
            );
        }

        function callpay() {
                if (typeof WeixinJSBridge == "undefined") {
                    if (document.addEventListener) {
                        document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
                    } else if (document.attachEvent) {
                        document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
                        document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
                    }
                } else {
                    onBridgeReady();
                }
        }
    </script>
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

