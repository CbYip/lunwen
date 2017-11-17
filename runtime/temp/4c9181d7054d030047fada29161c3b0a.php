<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:54:"D:\phpStudy\WWW\lunwen/app/index\view\index\order.html";i:1504094342;s:56:"D:\phpStudy\WWW\lunwen/app/index\view\public\header.html";i:1504923000;s:56:"D:\phpStudy\WWW\lunwen/app/index\view\public\footer.html";i:1504922996;}*/ ?>
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
    <link rel="stylesheet" href="__CSS__/amazeui.chosen.css"/>
    <link rel="stylesheet" href="__CSS__/style.css"/>
    <link rel="stylesheet" href="__CSS__/amazeui.datetimepicker.css"/>
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
            <div style="display:none">

            </div>
            <ul class="am-dropdown-content">
                <li><a href="/">首页</a></li>
                <li><a href="#">关于我们</a></li>
                <li><a href="#">商城</a></li>
                <li><a href="#">收银台</a></li>
            </ul>
        </div>
        <h1 class="am-header-title">
            <a href="#title-link" class="">易起论文</a>
        </h1>
        <div class="am-header-right am-header-nav">
            <a href="#right-link" class="">
                <i class="am-header-icon  am-icon-share-alt"></i>
            </a>
        </div>
    </header>

    <div class="am-cf am-g">
        <form class="am-form" name="order_form" method="post" onsubmit="getElementById('submit').disabled=true;">
            <fieldset>
                <legend>论文服务</legend>
                <input type="hidden" name="WID" value="">
                <div class="am-form-group">
                    <label for="doc-ipt-email-1">姓名</label>
                    <input type="text" name="username" class="" id="doc-ipt-email-1" placeholder="输入您的姓名">
                </div>

                <div class="am-form-group">
                    <label for="doc-ipt-pwd-1">联系方式</label>
                    <input type="text" name="usertel" class="" id="doc-ipt-pwd-1" placeholder="输入您的号码">
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

            //验证中文字符
            var pattern = /^[\u4E00-\u9FA5]{2,4}$/;
            //验证手机号码
            var tel = /^1[34578]\d{9}$/;

            if(username == "" || pattern.test(username) == false){
                alert("请输入您的姓名！");
                return false;
            }else if(usertel.length != "11" || tel.test(usertel) == false){
                alert("请输入正确的手机号码！");
                return false;
            }else if(service == "-请选择-"){
                alert("请选择您的论文服务选项！")
                return false;
            }else if(word == ""){
                alert("请输入您的字数要求！");
                return false
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
            }else{
                alert("订单提交成功！");
                $.ajax({
                    type: 'POST',
                    url: "<?php echo url('index/order'); ?>",
                    data: $(".am-form").serialize(),
                    dataType: 'json',
                    success: function (data) {
                        if(data == 1){
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
<script src="__JS__/amazeui.chosen.js"></script>
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

