<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:56:"D:\WebTest\lunwen\lunwen/app/index\view\index\order.html";i:1507857713;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\header.html";i:1505983138;s:62:"D:\WebTest\lunwen\lunwen/app/index\view\public\header_nav.html";i:1504834694;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\footer.html";i:1510887208;}*/ ?>
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
        <div class="am-header-left am-header-nav am-dropdown"  data-am-dropdown>
            <a href="javascript:;" class="am-dropdown-toggle"  data-am-dropdown-toggle>
                <i class="am-header-icon am-icon-th-large"></i>
            </a>
            <ul class="am-dropdown-content">
    <li><a href="<?php echo url('member/myorder'); ?>">论文订单</a></li>
    <li><a href="<?php echo url('index/order'); ?>">论文服务</a></li>
    <li><a href="<?php echo url('index/shop'); ?>">商城</a></li>
    <li><a href="<?php echo url('member/index'); ?>">个人中心</a></li>
    <li><a href="<?php echo url('good/shopcart'); ?>">购物车 </a></li>
</ul>
        </div>
        <h1 class="am-header-title">
            <a href="#title-link" class="">易起论文</a>
        </h1>
    </header>

    <div class="am-cf am-g">
        <form class="am-form" name="order_form" method="post" onsubmit="document.getElementById('submit').disabled=true;">
            <fieldset>
                <legend>论文服务</legend>
                <input type="hidden" name="wid" value="<?php echo $user['WID']; ?>">
                <input type="hidden" name="nickname" value="<?php echo $user_wx; ?>" />
                <p>微信会员ID：<?php echo $user['WID']; ?></p>
                <div class="am-form-group">
                    <label for="doc-ipt-email-1">姓名</label>
                    <input type="text" name="username" class="" id="doc-ipt-email-1" placeholder="输入您的姓名">
                </div>

                <div class="am-form-group">
                    <label for="doc-ipt-pwd-1">联系方式</label>
                    <input type="text" name="usertel" class="" id="doc-ipt-pwd-1" placeholder="输入您的号码">
                </div>
                <div class="am-form-group">
                    <label for="email">邮箱</label>
                    <input type="text" name="email" class="" id="email" placeholder="输入您的邮箱">
                </div>
                <div class="am-form-group">
                    <label for="doc-select-1">请选择论文服务项</label><br>
                    <select id="doc-select-1" name="service" >
                        <option value="0">-请选择-</option>
                        <option value="1">文稿代写</option>
                        <option value="2">期刊发表</option>
                        <option value="3">论文修改</option>
                        <option value="4">包写包发</option>
                    </select>
                    <span class="am-form-caret"></span>
                </div>
                <div id="form_list">
                </div>
                <p><button type="button" id="submit" name="submit" class="am-btn am-btn-default" >提交</button></p>
            </fieldset>
        </form>
    </div>
    <script type="text/javascript" src="__JS__/form_list.js"></script>
    <script type="text/javascript">
        //论文修改类型
        $('#form_list').on('change', '#doc-select-3',function () {
            var type = $('#doc-select-3').val();
            var content = "";
            if(type == 1){
                content += '<div class="am-form-group">\n' +
                    '           <label for="doc-ipt-email-1">当前重复率</label>\n' +
                    '              <input type="text" name="nowrep" class="" id="doc-ipt-email-1" placeholder="请把检测报告发到邮箱">\n' +
                    '      </div>';
                content += '<div class="am-form-group">\n' +
                    '           <label for="doc-ipt-email-1">修改后重复率</label>\n' +
                    '              <input type="text" name="reply" class="" id="doc-ipt-email-1" placeholder="如重复率降低到15%内">\n' +
                    '      </div>';
                $('.repeat').append(content);
            }else {
                $('.repeat').empty();
            }
        })
        //论文订单提交
        $('#submit').click(function () {
            var username = $('input[name=username]').val();
            var usertel = $('input[name=usertel]').val();
            var service = $('#doc-select-1 option:selected').text();
            var title = $('input[name=word]').val();
            var word = $('input[name=word]').val();
            var ctime = $('input[name=word]')
            var type = $('input[name=type]').val();
            var major = $('input[name=major]').val();
            var require = $('input[name=username]').val();
            var level = $('#doc-select-2 option:selected').text();
            var nowrep = $('input[name=nowrep]').val();
            var email = $('input[name=email]').val();
            var repeat = $('input[name=reply]').val(); // 重复率要求或修改后重复率

            //验证中文字符
            var pattern = /^[\u4E00-\u9FA5]{2,4}$/;
            //验证手机号码
            var tel = /^1[34578]\d{9}$/;
            //验证邮箱
            var email2 = /^[\d,a-z]([\w\.\-]+)@([a-z0-9\-]+).([a-z\.]+[a-z])$/i;

            if(username == "" || pattern.test(username) == false){
                alert("请输入您的姓名！");
                return false;
            }else if(usertel.length != "11" || tel.test(usertel) == false){
                alert("请输入正确的手机号码！");
                return false;
            }else if(service == "-请选择-"){
                alert("请选择您的论文服务选项！");
                return false;
            }else if(word == ""){
                alert("请输入您的字数要求！");
                return false;
            }else if(email == "" || email2.test(email) == false){
                alert("请输入正确的邮箱！");
                return false;
            }else if(type == ""){
                alert("请输入您的文稿类型！");
                return false;
            }else if(major == ""){
                alert("请输入您的专业类型!");
                return false;
            }else if(require == ""){
                alert("请输入您的需求!");
                return false;
            }else if(ctime == ""){
                alert("请选择您的时间！");
                return false;
            }else if(nowrep == ""){
                alert("请输入您的当前重复率");
                return false;
            }else if(repeat == ""){
                alert("请输入您的修改后的重复率");
                return false;
            }else{
                $.ajax({
                    type: 'POST',
                    url: "<?php echo url('index/order'); ?>",
                    data: $(".am-form").serialize(),
                    dataType: 'json',
                    success: function (data) {
                        if(data == 1){
                            alert("订单提交成功！");
                            window.location.reload();
                        }else{
                            return false;
                        }
                    }
                })
            }
        });
    </script>
<footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{  }">
    <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
    <div class="am-footer-miscs ">
        <p>CopyRight©2017 易起论文网.</p>
        <p>浙ICP备17053202</p>
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

