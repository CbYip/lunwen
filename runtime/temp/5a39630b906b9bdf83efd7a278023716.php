<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:58:"D:\WebTest\lunwen\lunwen/app/index\view\good\checkout.html";i:1507859824;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\header.html";i:1505983138;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\footer.html";i:1505984543;}*/ ?>
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
            <a href="#left-link" class="" onclick="window.history.go(-1);">
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
                    <input type="hidden" id="order" value="<?php echo $shoporder['ordernumber']; ?>" />
                    <input type="hidden" id="goodid" value="<?php echo $shoporder['goodsname']; ?>" />
                    <input type="hidden" id="score" value="<?php echo $shoporder['score']; ?>" />
                    <input type="hidden" id="wid" value="<?php echo $shoporder['WID']; ?>" />
                    <input type="hidden" id="user_score" value="<?php echo $wid['score']; ?>" />
                    <?php if(is_array($order) || $order instanceof \think\Collection || $order instanceof \think\Paginator): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li>
                        <div class="imgpanel"><img src="<?php echo $vo['photo']; ?>" class="am-img-responsive img" /></div>
                        <div class="infopanel">
                            <h3><?php echo $vo['goodsname']; ?></h3>
                            <p>价格：<span class="red2 bold"><?php echo $vo['goodsprice']; ?></span> 元  X <?php echo $vo['num']; ?> &nbsp;&nbsp;&nbsp; </p>
                            <p>积分：<span class="red2 bold"><?php echo $vo['goodsscore']; ?></span></p>
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="cart_foot">总价：<span class="red2 bold" id="total_amount"><?php echo $shoporder['total']; ?></span>元；总积分：<span class="red2 bold" id="total_jifen"><?php echo $shoporder['score']; ?></span>&nbsp;&nbsp;运费：<span class="red2 bold" id="total_yunfei"><?php echo $shoporder['yunfei']; ?></span>元</div>
        </div>
        <div class="my-search-title-panel am-text-sm am-margin-bottom-sm"><i class="am-icon-lightbulb-o am-text-danger"></i> 提示：实际的运费可能因为收货地址的不同而有差异，具体以提交之后与卖家协商为准</div>
        <div class="paoduct-title-panel">
            <h2 class="checkout-h2"><span class="am-badge am-round am-badge-warning ">2</span> 确认收货地址 <span style="float: right"><a href="<?php echo url('good/address', ['order' => $shoporder['ordernumber'], 'wid' => $wid['WID']]); ?>">添加</a> </span></h2>
            <p><i class="am-icon-location-arrow"></i> 收货地址</p>
            <?php if(is_array($address) || $address instanceof \think\Collection || $address instanceof \think\Paginator): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
            <div class="address" id="address">
                <input type="hidden" id="addid" value="<?php echo $vo1['ID']; ?>">
                <p>姓名：<?php echo $vo1['name']; ?></p>
                <p>手机电话：<?php echo $vo1['tel']; ?></p>
                <p>收货地址：<?php echo $vo1['city']; ?> <span><?php echo $vo1['citydetail']; ?></span></p>
                <p class="address-btn"><button type="button" class="am-btn am-btn-primary am-radius edit">编辑</button><button type="button" class="am-btn am-btn-danger am-radius delete">删除</button></p>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
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
            <h2 class="checkout-h2"><span class="am-badge am-round am-badge-warning ">3</span> 支付方式</h2>
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

        //删除收货地址
        $('.delete').click(function () {
            var id = $(this).parent().parent().children('#addid').val();
            $.ajax({
                type:"post",
                url:"<?php echo url('good/deladd'); ?>",
                data:{'id': id},
                dataType:"json",
                success:function (data) {
                    if(data != 0){
                        window.location.reload();
                    }else{
                        alert("无法删除收货地址！");
                        return false;
                    }
                }
            })
        })

        //编辑收货地址
        $(".edit").click(function () {
            var id = $(this).parent().parent().children('#addid').val();
            var orderid = $('#order').val();
            var str = "<?php echo url('good/edit'); ?>";
            var url = str + "?id=" + id + "&order=" + orderid;
            window.location.href=url;
        })

    </script>
    <script type="text/javascript">
        window.i = 0;

        //调用微信JS api 支付
        function onBridgeReady() {
            WeixinJSBridge.invoke(
                'getBrandWCPayRequest',
                <?php echo $jsApiParameters; ?>,
                function (res) {
                    if (res.err_msg == "get_brand_wcpay_request:ok") {
                        update();
                    }
                    // 使用以上方式判断前端返回,微信团队郑重提示:res.err_msg将在用户支付成功后返回    ok，但并不保证它绝对可靠。
                    if (res.err_msg == "get_brand_wcpay_request:cancel") {
                    }
                }
            );
        }

        function callpay() {
            var addid = $('.click').children("#addid").val();
            var user_score = $("#user_score").val();
            var score = $('#score').val();
            if(addid == undefined) {
                alert('请选择收货地址！');
                return false;
            }else if(parseInt(user_score) < parseInt(score)){
                alert("您的个人积分不足！");
                return false;
            }else{
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
        }

        function update() {
            //异步传入后台进行付款处理
            var orderid = $('#order').val();
            var goodid = $('#goodid').val();
            var addid = $('.click').children("#addid").val();
            var score = $('#score').val();
            var wid = $('#wid').val();
            var str = "<?php echo url('good/paytip'); ?>";
            var url = str + "?orderid=" + orderid + "&goodid=" + goodid + "&addid=" + addid + "&score=" + score + "&wid=" + wid;
            window.location.href = url;
        }
    </script>
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

