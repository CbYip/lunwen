<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"D:\WebTest\lunwen\lunwen/app/index\view\member\accept_detail.html";i:1505114333;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\header.html";i:1505983138;s:55:"D:\WebTest\lunwen\lunwen/app/index\view\public\nav.html";i:1507700617;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\footer.html";i:1509409424;}*/ ?>
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
            <li><a href="/">首页</a></li>
            <li>订单详情</li>
        </ol>
    </div>
    <div class="am-cf cart-panel">
        <input type="hidden" id="ID" value="<?php echo $detail['ID']; ?>"/>
        <div class="withdrawals-panel">
            <p class="groupby-t-p"><span class="am-fr"><?php echo $detail['ftime']; ?></span>订单号：<?php echo $detail['order']; ?></p>
            <input type="hidden" id="order" value="<?php echo $detail['order']; ?>" />
            <hr  class="am-divider am-divider-default am-cf"/>
            <div class="groupby-info-panle">
                <h2>题目：<?php echo $detail['title']; ?></h2>
                <p class="dt">姓名：<?php echo $detail['username']; ?></p>
                <p class="dt">联系方式：<?php echo $detail['usertel']; ?></p>
                <?php if($detail['service'] == 1): ?>
                <p class="dt">订单类型：<span class="am-text-success">文稿代写</span></p>
                <p class="dt">文稿字数：<?php echo $detail['word']; ?></p>
                <p class="dt">文稿类型：<?php echo $detail['type']; ?></p>
                <p class="dt">专业方向：<?php echo $detail['major']; ?></p>
                <p class="dt" id="ctime">完成时间：<?php echo $detail['ctime']; ?></p>
                <p class="dt" id="require">具体需求：<?php echo $detail['require']; ?></p>
                <?php elseif($detail['service'] == 2): ?>
                <p class="dt">订单类型：<span class="am-text-success">期刊发表</span></p>
                <p class="dt">论文字数：<?php echo $detail['word']; ?></p>
                <?php if($detail['level'] == 0): ?>
                <p class="dt">期刊级别：省级期刊</p>
                <?php elseif($detail['level'] == 1): ?>
                <p class="dt">期刊级别：国家级级期刊</p>
                <?php elseif($detail['level'] == 2): ?>
                <p class="dt">期刊级别：科技核心期刊</p>
                <?php elseif($detail['level'] == 3): ?>
                <p class="dt">期刊级别：中文核心期刊</p>
                <?php elseif($detail['level'] == 4): ?>
                <p class="dt">期刊级别：cssci核心期刊</p>
                <?php elseif($detail['level'] == 5): ?>
                <p class="dt">期刊级别：EI/SCI期刊</p>
                <?php else: ?>
                <p class="dt">期刊级别：暂不确定</p>
                <?php endif; ?>
                <p class="dt" id="ctime">发表日期：<?php echo $detail['ctime']; ?></p>
                <p class="dt" id="require">其他要求：<?php echo $detail['require']; ?></p>
                <?php elseif($detail['service'] == 3): ?>
                <p class="dt">订单类型：<span class="am-text-success">论文修改</span></p>
                <p class="dt">论文字数：<?php echo $detail['word']; ?></p>
                <p class="dt" id="ctime">完成时间：<?php echo $detail['ctime']; ?></p>
                <p class="dt" id="require">修改意见：<?php echo $detail['require']; ?></p>
                <?php else: ?>
                <p class="dt">订单类型：<span class="am-text-success">包写包发</span></p>
                <p class="dt">论文字数：<?php echo $detail['word']; ?></p>
                <p class="dt" id="ctime">发表时间：<?php echo $detail['ctime']; ?></p>
                <p class="dt" id="require">具体需求：<?php echo $detail['require']; ?></p>
                <?php endif; ?>
                <p id="btn"><button type="button" id="demand" class="am-btn am-btn-primary am-btn-xs am-btn-success am-radius order-detail-btn">我要接单</button></p>
            </div>
        </div>
        <script type="text/javascript">
            $('#demand').click(function () {
                var order = $('#order').val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo url('member/accept_detail'); ?>",
                    data: {"order":order},
                    dataType: "json",
                    success: function (data) {
                        if(data == 1){
                            window.location.reload();
                            return ;
                        }else{
                            alert("订单接受失败");
                        }
                    }
                })
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
