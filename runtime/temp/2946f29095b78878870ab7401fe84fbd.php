<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"D:\WebTest\lunwen\lunwen/admin/index\view\login\login.html";i:1504851656;}*/ ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>易起后台</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="__CSS__/amazeui.min.css" />
    <link rel="stylesheet" href="__CSS__/admin.css">
    <link rel="stylesheet" href="__CSS__/app.css">
</head>

<body data-type="login">

<div class="am-g myapp-login">
    <div class="myapp-login-logo-block  tpl-login-max">
        <div class="myapp-login-logo-text">
            <div class="myapp-login-logo-text">
                BASIC LINK<span> Login</span> <i class="am-icon-skyatlas"></i>

            </div>
        </div>

        <div class="login-font">
            <i>Log In </i>
        </div>
        <div class="am-u-sm-10 login-am-center">
            <form class="am-form">
                <fieldset>
                    <div class="am-form-group">
                        <input type="text" class="" id="doc-ipt-email-1" name="acount" placeholder="输入帐号">
                    </div>
                    <div class="am-form-group">
                        <input type="password" class="" id="doc-ipt-pwd-1" name="password" placeholder="输入密码">
                    </div>
                    <p><button type="button" class="am-btn am-btn-default" id="btn">登录</button></p>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<script src="__JS__/jquery.min.js"></script>
<script src="__JS__/amazeui.min.js"></script>
<script src="__JS__/app.js"></script>
<script type="text/javascript">
    $("#btn").click(function () {
        var acount = $("input[name='acount']").val();
        var password = $("input[name='password']").val();
        $.ajax({
            type: "Post",
            url: "<?php echo url('login/login'); ?>",
            data: {"acount":acount, "password":password},
            dataType: "json",
            success:function (data) {
                if(data == 0){
                    alert("登录失败！");
                    window.location.reload();
                }else{
                    alert("登陆成功！");
                    window.location.href="<?php echo url('index/index'); ?>";
                }
            }
        })
    })
    $(document).keypress(function (e) {
        var acount = $("input[name='acount']").val();
        var password = $("input[name='password']").val();
        var eCode = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
        if(eCode == 13){
            $.ajax({
                type: "Post",
                url: "<?php echo url('login/login'); ?>",
                data: {"acount":acount, "password":password},
                dataType: "json",
                success:function (data) {
                    if(data == 0){
                        alert("登录失败！");
                        window.location.reload();
                    }else{
                        alert("登陆成功！");
                        window.location.href="<?php echo url('index/index'); ?>";
                    }
                }
            })
        }
    })
</script>
</body>

</html>