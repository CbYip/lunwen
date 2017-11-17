<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:56:"D:\WebTest\lunwen\lunwen/app/index\view\good\detail.html";i:1507859534;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\header.html";i:1505983138;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\footer.html";i:1509409424;}*/ ?>
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
    <!-- banner -->
    <div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{&quot;directionNav&quot;:false}'>
        <ul class="am-slides">
            <li>
                <img src="<?php echo $goods['photo']; ?>" style="height: 100%;">
            </li>
        </ul>
    </div>
    <div class="gray-panel">
        <div class="paoduct-title-panel">
            <h1 class="product-h1"><?php echo $goods['goodsname']; ?>&nbsp;&nbsp;&nbsp;<span class="red">¥<?php echo $goods['goodsprice']; ?></span>&nbsp;&nbsp;积分：<span class="red gs"><?php echo $goods['score']; ?></span>&nbsp;&nbsp;运费：<span class="red gs">¥<?php echo $goods['delivery']; ?></span></h1>
            <input type="hidden" id="goodsid" value="<?php echo $goods['ID']; ?>">
            <input type="hidden" id="wid" value="<?php echo $shopuser['WID']; ?>" />
            <input type="hidden" id="score" value="<?php echo $shopuser['score']; ?>" />
            <!--<p><span class="am-fr product-title-gray-text"><i class="am-icon-star"></i>收藏</span><span class="bold">价格：</span><span class="red2">￥60.00</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="product-title-gray-text">积分：300积分</span></p>-->
        </div>
        <div class="my-search-title-panel">
            <ul class="am-avg-sm-4 am-text-center am-text-sm">
                <li class="am-text-center">销量<br /><?php echo $goods['sales']; ?>件</li>
                <li class="am-text-center">库存<br /><?php echo $goods['goodsnum']; ?>件</li>
                <li class="am-text-center">订单<br /><?php echo $goods['orders']; ?>个</li>
                <li class="am-text-center">评价<br /><?php echo $goods['comment']; ?>条</li>
            </ul>
        </div>
        <div class="my-search-title-panel">
            <p class="my-search-titp-p am-text-sm bold">尺码</p>
            <p class="size-p" id="sizep">
                <?php if(is_array($size) || $size instanceof \think\Collection || $size instanceof \think\Paginator): $i = 0; $__LIST__ = $size;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <span data-size="<?php echo $vo; ?>"><?php echo $vo; ?></span>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </p>
            <script>
                $(document).ready(function(e) {
                    $("#sizep span").click(function(){
                        $("#sizep span").removeClass('click');
                        $(this).addClass('click');
                        var s = $(this).attr('data-size');
                        $("#size").val(s);
                    });
                    $("#colorp span").click(function(){
                        $("#colorp span").removeClass('click');
                        $(this).addClass('click');
                        var s = $(this).attr('data-color');
                        $("#color").val(s);
                    });

                });
            </script>
            <hr data-am-widget="divider" style="" class="am-divider-default am-margin-bottom-sm"/>
            <p class="my-search-titp-p am-text-sm bold">颜色分类</p>
            <p class="size-p" id="colorp">
                <?php if(is_array($color) || $color instanceof \think\Collection || $color instanceof \think\Paginator): $i = 0; $__LIST__ = $color;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <span data-color="<?php echo $vo; ?>"><?php echo $vo; ?></span>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </p>
            <hr data-am-widget="divider" style="" class="am-divider-default am-margin-bottom-sm"/>
            <p class="my-search-titp-p am-text-sm bold">数量</p>
            <div style="overflow:hidden">
                <form class="am-form-inline" role="form">
                    <button type="button" class="am-btn am-btn-default" style="float:left" onClick="subtractQty();" ><i class="am-icon-minus"></i></button>
                    <input type="number" name="txtQty" id="txtQty" class="am-form-field txt-qty am-text-center am-text-sm" value="1" style=" width:60px; margin-right:0px; height:37px; display:inline; float:left" readonly>
                    <button type="button" class="am-btn am-btn-default" style="float:left" onClick="addQty();"><i class="am-icon-plus"></i></button>
                </form>
            </div>
            <hr data-am-widget="divider" style="" class="am-divider-default am-margin-bottom-sm"/>
            <div>
                <ul class="am-avg-sm-2 am-text-center">
                    <li class="am-text-center am-padding-sm"><button type="button" class="am-btn am-btn-success am-btn-block am-radius" id="shopcart">加入购物车</button></li>
                    <li class="am-text-center am-padding-sm"><button type="button" class="am-btn am-btn-danger am-btn-block am-radius" id="buy">立即购买</button></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 商品详情 -->
    <div data-am-widget="tabs" class="am-tabs am-tabs-d2">
        <ul class="am-tabs-nav am-cf">
            <li class="am-active">
                <a href="[data-tab-panel-0]">详情</a>
            </li>
            <li class="">
                <a href="[data-tab-panel-1]">交易记录</a>
            </li>
            <li class="">
                <a href="[data-tab-panel-2]">评价</a>
            </li>
        </ul>
        <div class="am-tabs-bd">
            <div data-tab-panel-0 class="am-tab-panel am-active"><?php echo $goods['detail']; ?></div>
            <div data-tab-panel-1 class="am-tab-panel ">

                <ul class="am-list am-list-static am-list-border am-list-striped am-text-sm">
                    <?php if($record == null): ?>
                    <p style="text-align: center;">暂无购买记录</p>
                    <?php else: if(is_array($record) || $record instanceof \think\Collection || $record instanceof \think\Paginator): $i = 0; $__LIST__ = $record;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li><?php echo $vo['name']; ?>于<?php echo $vo['date']; ?>购买成功</li>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </ul>

            </div>
            <div data-tab-panel-2 class="am-tab-panel ">
                <div class="am-cf am-padding-sm" >
                    <ul class="am-comments-list am-comments-list-flip">
                        <?php if(is_array($comment) || $comment instanceof \think\Collection || $comment instanceof \think\Paginator): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="am-comment">
                            <a href="">
                                <img class="am-comment-avatar" src="<?php echo $vo['headimg']; ?>" alt=""/> <!-- 头像 -->
                            </a>

                            <div class="am-comment-main">
                                <header class="am-comment-hd">
                                    <div class="am-comment-meta">
                                        <a href="#link-to-user" class="am-comment-author"><?php echo $vo['username']; ?></a>
                                        <time  title="最后的通信时间" class="am-fr"><?php echo $vo['time']; ?></time>
                                    </div>
                                </header>
                                <div class="am-comment-bd am-text-sm">
                                    <?php echo $vo['comment']; ?>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        function checkIsInteger(str)
        {
            //如果为空，则通过校验
            if(str == "")
                return true;
            if(/^(\-?)(\d+)$/.test(str))
                return true;
            else
                return false;
        }
        var errordialog=function(c){
            alert(c)
        }

        //检验商品数量
        function checkCounts(id) {
            var Counts = $("#" + id).val();
            if (Counts == "") {
                errordialog("请填写数量!");
                return false;
            }
            else if (!checkIsInteger(Counts)) {
                errordialog("商品数量不是整数!");
                return false;
            }
            else if (Counts < 1) {
                errordialog("商品数量不能小于1!");
                return false;
            }
            else {
                return true;
            }
        }

        function addQty(){
            checkCounts('txtQty');
            var qty = parseInt($('#txtQty').val());
            $('#txtQty').val(qty+1);
        }
        function subtractQty(){
            checkCounts('txtQty');
            var qty = parseInt($('#txtQty').val());
            if(qty <=1){
                errordialog("商品数量不能小于1");
                return;
            }
            $('#txtQty').val(qty-1);
        }
    </script>
    <script type="text/javascript">

        //加入购物车
        $('#shopcart').click(function () {
            var id = $('#goodsid').val();
            var goodsnum = $('#txtQty').val();
            var size = $('#sizep').parent().children("#sizep").children('.click').text();
            var color = $('#colorp').children('.click').text();
            var wid = $("#wid").val();
            var score = $('#score').val();
            var gs = $('.gs').text();
            if(size == ""){
                alert("请选择商品尺寸！");
                return false;
            }else if(color == ""){
                alert("请选择商品颜色");
                return false;
            }else if(parseInt(score) < parseInt(gs)){
                alert("您的个人积分不足！");
                return false;
            }else{
                $.ajax({
                    type: "post",
                    url:"<?php echo url('good/setin'); ?>",
                    data: {'id':id, 'goodsnum':goodsnum, 'size':size, 'color':color, 'wid':wid},
                    dataType: "json",
                    success:function (data) {
                        if(data == 1){
                            alert("加入购物车成功！");
                            window.location.reload();
                        }else{
                            alert("加入购物车失败！");
                            window.location.reload();
                        }
                    }
                });
            }
      })

        //立即购买
        $("#buy").click(function () {
            var r = confirm("是否立即购买此商品!");
            if(r == true){
                var id = $('#goodsid').val();
                var goodsnum = $('#txtQty').val();
                var size = $('#sizep').parent().children("#sizep").children('.click').text();
                var color = $('#colorp').children('.click').text();
                var wid = $("#wid").val();
                var score = $('#score').val();
                var gs = $('.gs').text();
                if(size == ""){
                    alert("请选择商品尺寸！");
                    return false;
                }else if(color == ""){
                    alert("请选择商品颜色");
                    return false;
                }else if(parseInt(score) < parseInt(gs)){
                    alert("您的个人积分不足！");
                    return false;
                }else {
                    $.ajax({
                        type: "post",
                        url:"<?php echo url('good/pay'); ?>",
                        data: {'id':id, 'goodsnum':goodsnum, 'size':size, 'color':color, 'wid':wid},
                        dataType: "json",
                        success:function (data) {
                            var json = eval(data);
                            if(json.id == 1){
                                var str = "<?php echo url('good/checkout'); ?>";
                                var url = str + "?order=" + json.order;
                                window.location.href = url;
                            }else{
                                window.location.reload();
                            }
                        }
                    });
                }
            }else{
                return false;
            }

        })


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
