<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:59:"D:\WebTest\lunwen\lunwen/app/index\view\member\myorder.html";i:1507692897;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\header.html";i:1505983138;s:55:"D:\WebTest\lunwen\lunwen/app/index\view\public\nav.html";i:1507700617;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\footer.html";i:1509409424;}*/ ?>
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
            <a href="javascript:;" onclick="window.location.href='<?php echo url('member/index'); ?>'">
                <i class="am-header-icon am-icon-chevron-left"></i>
            </a>
        </div>
        <h1 class="am-header-title">
            <a href="#title-link" class="">我的订单</a>
        </h1>
        <div class="am-header-right am-header-nav">
            <a href="<?php echo url('index/order'); ?>" class="">
                <i class="am-header-icon am-icon-home"></i>
            </a>
        </div>
    </header>
    <div class="uchome-info">
    <div class="uchome-info-uimg">
        <img src="<?php echo $mem['headimgurl']; ?>" />
    </div>
    <div class="uchome-info-uinfo">
        <p><?php echo $mem['nickname']; ?>，欢迎光临！</p>
        <p>注册时间：<span class="red"><?php echo $user['date']; ?></span></p>
        <p>微信会员ID：<span class="red wid"><?php echo $user['WID']; ?></span></p>
        <p>积分：<span class="red qiandao"><?php echo $user['score']; ?></span></p>
    </div>
</div>
<div class="am-cf uchome-nav">
    <ul class="am-avg-sm-5">
        <?php if($flag == 1): ?>
        <li class="qian"><a href="#" id="qiandao">今日签到</a></li>
        <?php else: ?>
        <li><a href="#">已签到</a></li>
        <?php endif; ?>
        <li><a href="<?php echo url('member/myuser'); ?>">我的资料</a></li>
        <li><a href="<?php echo url('member/myqrcode'); ?>">我的二维码</a></li>
        <li><a href="<?php echo url('member/partners'); ?>">我的推广</a></li>
    </ul>
</div>
<script type="text/javascript">
    $('#qiandao').click(function () {
        var wid = $('.wid').text();
        $.ajax({
            type: "post",
            url: "<?php echo url('member/qiandao'); ?>",
            data: {"wid":wid},
            dataType: "json",
            success:function (data) {
                var json = eval(data);
                var qiandao = $('.qiandao').text();
                var jifen = parseInt(qiandao) + parseInt(json.score);
                var content = "";
                var score = "";
                if(json.id == 1){
                    $(".qiandao").empty();
                    $(".qian").empty();

                    content = '<a href="#">已签到</a>';
                    score = jifen;

                    $(".qiandao").append(score);
                    $(".qian").append(content);
                }
            }
        })
    })
</script>
    <div class="my-nav-bar">
        <ol class="am-breadcrumb">
            <li><a href="<?php echo url('member/index'); ?>">首页</a></li>
            <li>我的订单</li>
        </ol>
    </div>
    <div class="am-cf cart-panel">
        <?php if(is_array($order) || $order instanceof \think\Collection || $order instanceof \think\Paginator): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class="withdrawals-panel">
            <input type="hidden" value="<?php echo $vo['ID']; ?>" id="id">
            <p class="groupby-t-p"><span class="am-fr"><?php echo $vo['ftime']; ?></span>订单号：<?php echo $vo['order']; ?></p>
            <hr  class="am-divider am-divider-default am-cf"/>
            <div class="groupby-info-panle">
                <h3><a href="<?php echo url('member/order_detail',['id'=>$vo['ID']]); ?>">题目：<?php echo $vo['title']; ?></a></h3>
                <div class="am-u-sm-6">
                    <p>金额：<span class="red2 bold"><?php echo $vo['price']; ?></span> 元 </p>
                    <p>姓名：<?php echo $vo['username']; ?> </p>
                    <p>电话号码： <?php echo $vo['usertel']; ?></p>
                    <p>题目：<?php echo $vo['title']; ?></p>
                    <?php if($vo['flag'] == 0): ?>
                    <p><a href="<?php echo url('member/order_detail',['id'=>$vo['ID']]); ?>" class="am-btn am-btn-primary am-btn-xs am-btn-danger am-radius">订单详情</a></p>
                    <?php elseif($vo['flag'] == 1): ?>
                    <p><a href="<?php echo url('member/pay',['id'=>$vo['ID']]); ?>" class="am-btn am-btn-primary am-btn-xs am-btn-success am-radius">付款</a> <a href="<?php echo url('member/order_detail',['id'=>$vo['ID']]); ?>" class="am-btn am-btn-primary am-btn-xs am-btn-danger am-radius">订单详情</a></p>
                    <?php else: ?>
                    <p><button class="am-btn am-btn-primary am-btn-xs am-btn-success am-radius delete">取消订单</button> <a href="<?php echo url('member/order_detail',['id'=>$vo['ID']]); ?>" class="am-btn am-btn-primary am-btn-xs am-btn-danger am-radius">订单详情</a></p>
                    <?php endif; ?>
                </div>
                <div class="am-u-sm-6">
                    <?php if($vo['service'] == 1): ?>
                    <p>订单类型：<span class="am-text-secondary">文稿代写</span></p>
                        <?php if($vo['complete'] == 0): ?>
                        <p>项目进度：<span class="am-text-secondary">项目未开工</span></p>
                        <?php elseif($vo['complete'] == 1): ?>
                        <p>项目进度：<span class="am-text-secondary">项目开工</span></p>
                        <?php elseif($vo['complete'] == 2): ?>
                        <p>项目进度：<span class="am-text-secondary">完成初稿</span></p>
                        <?php elseif($vo['complete'] == 3): ?>
                        <p>项目进度：<span class="am-text-secondary">修改反馈</span></p>
                        <?php else: ?>
                        <p>项目进度：<span class="am-text-secondary">项目完成</span></p>
                        <?php endif; ?>
                    <p>完成时间：<?php echo $vo['ctime']; ?> </p>
                    <?php elseif($vo['service'] == 2): ?>
                    <p>订单类型：<span class="am-text-secondary">期刊发表</span></p>
                        <?php if($vo['complete'] == 0): ?>
                        <p>项目进度：<span class="am-text-secondary">稿件未送审</span></p>
                        <?php elseif($vo['complete'] == 1): ?>
                        <p>项目进度：<span class="am-text-secondary">稿件送审中</span></p>
                        <?php elseif($vo['complete'] == 2): ?>
                        <p>项目进度：<span class="am-text-secondary">稿件已录用</span></p>
                        <?php elseif($vo['complete'] == 3): ?>
                        <p>项目进度：<span class="am-text-secondary">稿件待出刊</span></p>
                        <?php elseif($vo['complete'] == 4): ?>
                        <p>项目进度：<span class="am-text-secondary">稿件已出刊</span></p>
                        <?php elseif($vo['complete'] == 5): ?>
                        <p>项目进度：<span class="am-text-secondary">稿件返修</span></p>
                        <?php else: ?>
                        <p>项目进度：<span class="am-text-secondary">退稿</span></p>
                        <?php endif; ?>
                    <p>完成时间：<?php echo $vo['fatime']; ?> </p>
                    <?php elseif($vo['service'] == 3): ?>
                    <p>订单类型：<span class="am-text-secondary">论文修改</span></p>
                        <?php if($vo['complete'] == 0): ?>
                        <p>项目进度：<span class="am-text-secondary">项目未开工</span></p>
                        <?php elseif($vo['complete'] == 1): ?>
                        <p>项目进度：<span class="am-text-secondary">项目开工</span></p>
                        <?php elseif($vo['complete'] == 2): ?>
                        <p>项目进度：<span class="am-text-secondary">完成初稿</span></p>
                        <?php elseif($vo['complete'] == 3): ?>
                        <p>项目进度：<span class="am-text-secondary">修改反馈</span></p>
                        <?php else: ?>
                        <p>项目进度：<span class="am-text-secondary">项目完成</span></p>
                        <?php endif; ?>
                    <p>完成时间：<?php echo $vo['ctime']; ?> </p>
                    <?php else: ?>
                    <p>订单类型：<span class="am-text-secondary">包写包发</span></p>
                        <?php if($vo['complete'] == 0): ?>
                        <p>项目进度：<span class="am-text-secondary">项目未开工</span></p>
                        <?php elseif($vo['complete'] == 1): ?>
                        <p>项目进度：<span class="am-text-secondary">稿件写作中</span></p>
                        <?php elseif($vo['complete'] == 2): ?>
                        <p>项目进度：<span class="am-text-secondary">稿件完成</span></p>
                        <?php elseif($vo['complete'] == 3): ?>
                        <p>项目进度：<span class="am-text-secondary">稿件送审中</span></p>
                        <?php elseif($vo['complete'] == 4): ?>
                        <p>项目进度：<span class="am-text-secondary">稿件已录用</span></p>
                        <?php elseif($vo['complete'] == 5): ?>
                        <p>项目进度：<span class="am-text-secondary">稿件待出刊</span></p>
                        <?php else: ?>
                        <p>项目进度：<span class="am-text-secondary">稿件已出刊</span></p>
                        <?php endif; ?>
                    <p>完成时间：<?php echo $vo['fatime']; ?> </p>
                    <?php endif; if($vo['flag'] == 0): ?>
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
        <ul class="am-pagination am-pagination-centered">
            <?php echo $order->render(); ?>
        </ul>
        <script type="text/javascript">
            $('.delete').click(function () {
                if(confirm("是否取消订单？")){
                    $('.delete').fadeOut(500);
                    var id = $(this).parent().parent().parent().parent().children("#id").val();
                    $.ajax({
                        type: "post",
                        url: "<?php echo url('member/order_delete'); ?>",
                        data: {"id":id},
                        dataType: "json",
                        success:function (data) {
                            if(data == 1){
                                alert("订单取消成功！");
                                window.location.reload();
                            }else {
                                alert("订单取消失败！");
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
