<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:60:"D:\WebTest\lunwen\lunwen/app/index\view\member\partners.html";i:1505361386;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\header.html";i:1505983138;s:55:"D:\WebTest\lunwen\lunwen/app/index\view\public\nav.html";i:1507700617;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\footer.html";i:1509409424;}*/ ?>
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
            <a href="" class="" onclick="window.history.go(-1)">
                <i class="am-header-icon am-icon-chevron-left"></i>
            </a>
        </div>
        <h1 class="am-header-title">
            <a href="#title-link" class="">我的推广</a>
        </h1>
        <div class="am-header-right am-header-nav">
            <a href="<?php echo url('good/shopcart'); ?>" class="">
                <i class="am-header-icon  am-icon-shopping-cart"></i>
            </a>
        </div>
    </header>
    <!--头部导航-->
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
            <li>我的推广</li>
        </ol>
    </div>
    <div class="am-cf cart-panel">
        <div class="withdrawals-panel">
            <div class="partners-title-panel">
                <div class="partners-title-panel-title"><span class="am-fr"><?php echo $count; ?>人</span><i class="am-icon-chevron-circle-right"></i>我的伙伴</div>
            </div>
            <table class="am-table am-table-striped am-table-hover comm-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>用户名</th>
                    <th>日期</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($partner) || $partner instanceof \think\Collection || $partner instanceof \think\Paginator): $i = 0; $__LIST__ = $partner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(is_array($parts) || $parts instanceof \think\Collection || $parts instanceof \think\Paginator): $i = 0; $__LIST__ = $parts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;if($vo['Fopenid'] == $vo1['openid']): ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $vo1['nickname']; ?></td>
                            <td><?php echo $vo['Etime']; ?></td>
                        </tr>
                        <?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
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
