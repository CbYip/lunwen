<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"D:\WebSite\Test_php\lunwen\lunwen/app/index\view\member\shoporder.html";i:1505118215;s:67:"D:\WebSite\Test_php\lunwen\lunwen/app/index\view\public\header.html";i:1504925608;s:64:"D:\WebSite\Test_php\lunwen\lunwen/app/index\view\public\nav.html";i:1505054576;s:67:"D:\WebSite\Test_php\lunwen\lunwen/app/index\view\public\footer.html";i:1505115093;}*/ ?>
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
            <a href="<?php echo url('member/index'); ?>" class="">
                <i class="am-header-icon am-icon-chevron-left"></i>
            </a>
        </div>
        <h1 class="am-header-title">
            <a href="#title-link" class="">商城订单</a>
        </h1>
        <div class="am-header-right am-header-nav">
            <a href="<?php echo url('good/shopcart'); ?>" class="">
                <i class="am-header-icon  am-icon-shopping-cart"></i>
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
            <li>商城订单</li>
        </ol>
    </div>
    <div class="am-cf cart-panel">
        <?php if(is_array($shoporder) || $shoporder instanceof \think\Collection || $shoporder instanceof \think\Paginator): $i = 0; $__LIST__ = $shoporder;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="withdrawals-panel ">
                <p class="groupby-t-p"><span class="am-fr"><?php echo $vo['time']; ?></span>订单号：<?php echo $vo['ordernumber']; ?></p>
                <input type="hidden" id="order" value="<?php echo $vo['ordernumber']; ?>" />
                <?php foreach($vo['goods'] as $vo1): ?>
                <hr  class="am-divider am-divider-default am-cf"/>
                <div class="groupby-img-panle"><a href="#"><img src="<?php echo $vo1['photo']; ?>" class="am-img-responsive img" /></a></div>
                <div class="groupby-info-panle info-width">
                    <h3><?php echo $vo1['goodsname']; ?></h3>
                    <p>单价：<span class="red2 bold"><?php echo $vo1['goodsprice']; ?></span> 元 &nbsp; &nbsp;&nbsp;  积分：<span class="am-text-success"><?php echo $vo1['score']; ?></span></p>
                    <?php if($vo['shopflag'] == 0): ?>
                    <p>订单状态：未发货&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;数量：<?php echo $vo1['num']; ?></p>
                    <?php elseif($vo['shopflag'] == 1): ?>
                    <p>订单状态：已发货&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;数量：<?php echo $vo1['num']; ?></p>
                    <?php else: ?>
                    <p>订单状态：已收货&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;数量：<?php echo $vo1['num']; ?></p>
                    <?php endif; if($vo['flag'] == 0): ?>
                    <p>状态：<span class="am-text-success">未付款</span></p>
                    <?php else: ?>
                    <p>状态：<span class="am-text-success">已付款</span></p>
                    <?php endif; ?>
                </div>
                <?php endforeach; if($vo['flag'] == 0): ?>
                <p><a href="<?php echo url('good/checkout', ['order' => $vo['ordernumber']]); ?>" class="am-btn am-btn-primary am-btn-xs am-btn-success am-radius">付款</a> <a href="#" class="am-btn am-btn-primary am-btn-xs am-btn-danger am-radius detail">订单详情</a></p>
                <?php elseif(($vo['flag'] == 1) and ($vo['shopflag'] == 0)): ?>
                <p><a href="#" class="am-btn am-btn-primary am-btn-xs am-btn-success am-radius  ">催促发货</a> <a href="#" class="am-btn am-btn-primary am-btn-xs am-btn-danger am-radius detail">订单详情</a></p>
                <?php elseif(($vo['flag'] == 1) and ($vo['shopflag'] == 1)): ?>
                <p><a href="#" class="am-btn am-btn-primary am-btn-xs am-btn-success am-radius receipt">确认收货</a> <a href="#" class="am-btn am-btn-primary am-btn-xs am-btn-danger am-radius detail">订单详情</a></p>
                <?php elseif(($vo['flag'] == 1) and ($vo['shopflag'] == 2)): ?>
                <p><a href="#" class="am-btn am-btn-primary am-btn-xs am-btn-success am-radius comment">评价</a> <a href="#" class="am-btn am-btn-primary am-btn-xs am-btn-danger am-radius detail">订单详情</a></p>
                <?php endif; ?>
            </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div style="">
        <?php echo $shoporder->render(); ?>
        </div>
    </div>
    <script type="text/javascript">
        $('.detail').click(function () {
            var order = $(this).parent().parent().children('#order').val();
            var str = "<?php echo url('member/shoporder_detail'); ?>";
            var url = str + "?order=" + order;
            window.location.href=url;
        })

        //确认收货
        $('.receipt').click(function () {
            var order = $(this).parent().parent().children("#order").val();
            var r = confirm("是否确认收货？");
            if(r == true){
                $.ajax({
                    type: "post",
                    url: "<?php echo url('good/receipt'); ?>",
                    data: {"order":order},
                    dataType: "json",
                    success:function (data) {
                        if(data != 0){
                            window.location.reload();
                        }else {
                            return false;
                        }
                    }
                })
            }else{
                return false;
            }
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
