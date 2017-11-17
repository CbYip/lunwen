<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:62:"D:\phpStudy\WWW\lunwen/app/index\view\member\order_detail.html";i:1504167268;s:56:"D:\phpStudy\WWW\lunwen/app/index\view\public\header.html";i:1504094349;s:53:"D:\phpStudy\WWW\lunwen/app/index\view\public\nav.html";i:1503908556;s:56:"D:\phpStudy\WWW\lunwen/app/index\view\public\footer.html";i:1504230244;}*/ ?>
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
    <link rel="stylesheet" href="__CSS__/style.css"/>
    <link rel="stylesheet" href="__CSS__/amazeui.datetimepicker.css"/>
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
            <a href="#title-link" class="">我的订单</a>
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
            <li><a href="<?php echo url('member/myorder'); ?>">我的订单</a></li>
        </ol>
    </div>
    <div class="am-cf cart-panel">
        <input type="hidden" id="ID" value="<?php echo $detail['ID']; ?>"/>
        <div class="withdrawals-panel">
            <p class="groupby-t-p"><span class="am-fr"><?php echo $detail['ftime']; ?></span>订单号：<?php echo $detail['order']; ?></p>
            <hr  class="am-divider am-divider-default am-cf"/>
            <div class="groupby-info-panle">
                订单进度：
                <?php if($detail['complete'] == 0): ?>
                <div class="am-progress am-progress-striped am-progress-sm am-active ">
                    <div class="am-progress-bar am-progress-bar-danger"  style="width: 5%"></div>
                </div>
                <?php elseif($detail['complerte'] == 1): ?>
                <div class="am-progress am-progress-striped am-progress-sm am-active ">
                    <div class="am-progress-bar am-progress-bar-danger"  style="width: 50%"></div>
                </div>
                <?php else: ?>
                <div class="am-progress am-progress-striped am-progress-sm am-active ">
                    <div class="am-progress-bar am-progress-bar-danger"  style="width: 100%"></div>
                </div>
                <?php endif; ?>
                <span class="am-u-sm-4">未被接单</span>
                <span class="am-u-sm-4" style="text-align: center;">已被接单</span>
                <span class="am-u-sm-4" style="text-align: right;">订单完成</span>
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
                <p id="btn"><button type="button" id="demand" class="am-btn am-btn-primary am-btn-xs am-btn-danger am-radius order-detail-btn">需求修改</button></p>
            </div>
        </div>
        <script type="text/javascript">
            $('#demand').click(function () {
                var text = $('#require').text();
                var require = text.substr(0,5);
                var req = text.substr(5);
                var content = "";
                var btn = "";
                content = "<p class='dt'>" + require + "<textarea style='width: 75%'  rows=\"5\" id='req'>" + req + "</textarea></p>";
                btn += "<button type=\"button\" id=\"sub\" class=\"am-btn am-btn-primary am-btn-xs am-btn-danger am-radius order-detail-btn\">提交</button>";
                btn += "<button type=\"button\" id=\"reset\" class=\"am-btn am-btn-primary am-btn-xs am-btn-success am-radius order-detail-btn\" style='margin-left: 1%;' onclick='window.location.reload()'>取消</button>";
                $('#require').remove();
                $('#demand').remove();
                $('#ctime').append(content);
                $('#btn').append(btn);
            })
        </script>
        <script type="text/javascript">
            $('#btn').on('click','#sub', function () {
                var content = $('#req').val();
                var id = $('#ID').val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo url('member/order_detail'); ?>",
                    data: {"content":content, "id":id},
                    dataType: "json",
                    success: function (data) {
                        if(data == 1){
                            window.location.reload();
                            return ;
                        }
                    }
                })
            });
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
            <a href="<?php echo url('index/index'); ?>" class="">
                <span class="am-icon-home"></span>
                <span class="am-navbar-label">订单</span>
            </a>
        </li>
        <li>
            <a href="<?php echo url('index/order'); ?>" class="">
                <span class=" am-icon-list-ul"></span>
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
            <a href="#" class="">
                <span class=" am-icon-map-marker"></span>
                <span class="am-navbar-label">地图</span>
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
        var month = date.getMonth();
        var day = date.getDate();
        var now = year + "-" + month + "-" + day;
        $('#datetimepicker').datetimepicker({
            format: 'yyyy-mm-dd ',
            minView: '2',
            viewSelect: '2',
            language: 'zh-CN',
            todayBtn: true,
            startDate: now,
        });
        $('#datetimepicker').datetimepicker('show');
    })
</script>
</body>
</html>
