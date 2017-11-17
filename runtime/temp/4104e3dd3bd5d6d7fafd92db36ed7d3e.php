<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:56:"D:\phpStudy\WWW\lunwen/app/index\view\good\shopcart.html";i:1504940054;s:56:"D:\phpStudy\WWW\lunwen/app/index\view\public\header.html";i:1504925608;s:53:"D:\phpStudy\WWW\lunwen/app/index\view\public\nav.html";i:1503908556;s:56:"D:\phpStudy\WWW\lunwen/app/index\view\public\footer.html";i:1504928247;}*/ ?>
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
            <a href="#title-link" class="">购物车</a>
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
            <li><a href="<?php echo url('member/index'); ?>">首页</a></li>
            <li class="am-active">购物车</li>
        </ol>
    </div>
    <div class="am-cf cart-panel">
        <div class="cart-list-panel">
            <ul class="am-avg-sm-1 cart-panel-ul">
                <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li>
                    <div class="shopcheck">
                        <span>
                            <input type="checkbox" class="check">
                            <input type="hidden" class="goodsid" value="<?php echo $vo['goodsid']; ?>">
                        </span>
                    </div>
                    <div class="imgpanel"><a href="#"><img src="<?php echo $vo['photo']; ?>" class="am-img-responsive img"/></a></div>
                    <div class="infopanel">
                        <h3><a href="#"><?php echo $vo['goodsname']; ?></a></h3>
                        <p>品牌：<?php echo $vo['type']; ?></p>
                        <p>价格：<span class="red2 bold price"><?php echo $vo['price']; ?></span> 元 X <input class="am-input-sm txt-qty num" type="number" value="<?php echo $vo['num']; ?>"/></p>
                        <p>积分：<span class="red2 bold score"><?php echo $vo['score']; ?></span></p>
                        <p><span class="am-fr"><a class="am-badge am-badge-danger am-round delete">删除</a></span>库存：<span
                                class="red2 bold"><?php echo $vo['goodsnum']; ?></span> 件</p>
                    </div>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <div class="cart_foot">全选/取消<input type="checkbox" class="checkall"> <span class="all">共选中<span class="red2 bold"
                                                                                  id="total_good">0</span>种商品；总价：<span
            class="red2 bold" id="total_amount">0.00</span>元；总积分：<span class="red2 bold" id="total_jifen">0</span></span></div>
    <div class="cart-tool">
        <a class="am-btn am-btn-sm am-btn-success" href="<?php echo url('index/shop'); ?>">
            <i class="am-icon-chevron-left"></i>
            返回
        </a>
        <a class="am-btn am-btn-sm am-btn-warning" id="pay" href="#">
            <i class="am-icon-shopping-cart"></i>
            结账
        </a>
    </div>
    <script type="text/javascript">
        //选择
        $('.check').click(function () {
            if ($(this).is(":checked")) {
                $(this).prop("checked", true);
            } else {
                $(this).prop("checked", false);
            }
            //计算选中的商品、总价和总积分
            var checknum = $(".check:checked").length;
            var content = "";
            var totalprice = 0;
            var totalscore = 0;
            //清空
            $('.all').empty();
            //计算总价和总积分
            $('.check:checked').each(function () {
                var num = $(this).parent().parent().parent().children(".infopanel").children().children('.num').val();
                var price = $(this).parent().parent().parent().children(".infopanel").children().children('.price').text();
                var score = $(this).parent().parent().parent().children(".infopanel").children().children('.score').text();
                totalprice += price * num;
                totalscore += score * num;
            })
            totalprice = parseFloat(totalprice.toFixed(2));
            content = '共选中<span class="red2 bold"\n' +
                '              id="total_good">'+checknum+'</span>种商品；总价：<span\n' +
                '            class="red2 bold" id="total_amount">'+totalprice+'</span>元；总积分：<span class="red2 bold" id="total_jifen">'+totalscore+'</span>';
            $('.all').append(content);
        })

        //全选或者取消
        $(".checkall").click(function () {
                if ($(this).is(":checked")) {
                    $('.check').prop("checked", true);
                } else {
                    $('.check').prop("checked", false);
                }
                //计算选中的商品、总价和总积分
                var checknum = $(".check:checked").length;
                var content = "";
                var totalprice = 0;
                var totalscore = 0;
                //清空
                $('.all').empty();
                //计算总价和总积分
                $('.check:checked').each(function () {
                    var num = $(this).parent().parent().parent().children(".infopanel").children().children('.num').val();
                    var price = $(this).parent().parent().parent().children(".infopanel").children().children('.price').text();
                    var score = $(this).parent().parent().parent().children(".infopanel").children().children('.score').text();
                    totalprice += price * num;
                    totalscore += score * num;
                })
                content = '共选中<span class="red2 bold"\n' +
                    '              id="total_good">'+checknum+'</span>种商品；总价：<span\n' +
                    '            class="red2 bold" id="total_amount">'+totalprice+'</span>元；总积分：<span class="red2 bold" id="total_jifen">'+totalscore+'</span>';
                $('.all').append(content);
            }
        )

        //提交生成订单
        $('#pay').click(function () {
            var temp = "";
            var num = "";
            var total = $('#total_amount').text();
            var score = $('#total_jifen').text();
            var select = $('#total_good').text();
            if(select == 0){
                alert("您还没有选择商品！");
                return false;
            }else{
                $(".check:checked").each(function () {
                    var tablerow = $(this).parent();
                    var tablenum = $(this).parent().parent().parent().children(".infopanel").children().children(".num").val();
                    var id = tablerow.find("input[class='goodsid']").val();
                    temp += id + ",";
                    num += tablenum + ",";
                });
            }
            $.ajax({
                type:"post",
                url:"<?php echo url('good/shoporder'); ?>",
                data:{'temp':temp, "num":num,"total":total, "score":score},
                dataType:"json",
                success:function (data) {
                    var json = eval(data);
                    if(json.flag == 1){
                        var str = "<?php echo url('good/checkout'); ?>";
                        var url = str + "?order=" + json.order;
                        window.location.href=url;
                    }else{
                        alert("结账失败！");
                        window.location.reload();
                    }
                }
            })
        })

        //删除订单
        $('.delete').click(function () {
            var id = $(this).parent().parent().parent().parent().children(".shopcheck").children().children(".goodsid").val();
            $.ajax({
                type:"post",
                url:"<?php echo url('good/delete'); ?>",
                data:{'id':id},
                dataType:"json",
                success:function (data) {
                    if(data != 0){
                        window.location.reload();
                    }else{
                        window.history.go("-1");
                    }
                }
            })
        })
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
