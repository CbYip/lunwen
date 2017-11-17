<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:54:"D:\WebTest\lunwen\lunwen/app/index\view\login\reg.html";i:1505294425;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\header.html";i:1505983138;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\footer.html";i:1509409424;}*/ ?>
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
        <h1 class="am-header-title">
            <a href="#title-link" class="">用户注册</a>
        </h1>
    </header>
    <!--头部导航-->
    <div class="uchome-info" style="text-align: center;">
        <div class="uchome-info-uimg" style="width: 100%;">
            <img src="<?php echo $user['headimgurl']; ?>" style="margin: 22px 0 0 0;"/>
            <input type="hidden" id="headimg" value="<?php echo $user['headimgurl']; ?>" />
        </div>
    </div>

    <div class="cart-panel">
        <form class="am-form">
            <input type="hidden" id="openid" value="<?php echo $user['openid']; ?>" />
            <input type="hidden" id="WID" value="<?php echo $wid; ?>" />
            <input type="hidden" id="nickname" value="<?php echo $user['nickname']; ?>"/>
            <input type="hidden" id="a" value="<?php echo $data['a']; ?>" />
            <input type="hidden" id="c" value="<?php echo $data['c']; ?>" />
            <div class="am-form-group am-form-icon">
                <i class="am-icon-user" style="color:#329cd9"></i>
                <input type="text" name="username" class="am-form-field  my-radius" placeholder="请输入您的姓名">
            </div>
            <div class="am-form-group am-form-icon">
                <i class="am-icon-envelope" style="color:#78c3ca"></i>
                <input type="email" name="email" class="am-form-field  my-radius" placeholder="请输入邮箱号码">
            </div>
            <div class="am-form-group am-form-icon">
                <i class="am-icon-phone" style="color:#f09513"></i>
                <input type="text" name="tel" class="am-form-field  my-radius" placeholder="请输入联系电话">
            </div>
            <p class="am-text-center"><button type="button" class="am-btn am-btn-danger am-radius am-btn-block" id="reg">立即注册</button></p>
        </form>
    </div>

    <script type="text/javascript">
        $('#reg').click(function () {
            var headimg = $('#headimg').val();
            var openid = $('#openid').val();
            var wid = $("#WID").val();
            var nickname = $("#nickname").val();
            var username = $("input[name=username]").val();
            var email = $("input[name=email]").val();
            var tel = $("input[name=tel]").val();

            //验证中文字符
            var pattern = /^[\u4E00-\u9FA5]{2,4}$/;
            //验证手机号码
            var tele = /^1[34578]\d{9}$/;

            if(username == "" || pattern.test(username) == false){
                alert("请输入您的姓名！");
                return false;
            }else if(tel.length != "11" || tele.test(tel) == false){
                alert("请输入正确的手机号码！");
                return false;
            }else{
                $.ajax({
                    type: "post",
                    url: "<?php echo url('login/reg'); ?>",
                    data:{"headimg":headimg, "openid":openid, "wid":wid,"nickname":nickname,"username":username,"email":email,"tel":tel},
                    dataType: "json",
                    success:function (data) {
                        var a =$("#a").val();
                        var c =$("#c").val();
                        if(data == 1){
                            var str = "/index.php/index/";
                            var url = str + c + "/" + a;
                            window.location.href = url;
                        }else{
                            alert("注册失败！");
                            return false;
                        }
                    }
                })
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

