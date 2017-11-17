<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"D:\WebSite\Test_php\lunwen\lunwen/app/index\view\good\address.html";i:1505042096;s:67:"D:\WebSite\Test_php\lunwen\lunwen/app/index\view\public\header.html";i:1504925608;s:67:"D:\WebSite\Test_php\lunwen\lunwen/app/index\view\public\footer.html";i:1504928247;}*/ ?>
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
            <a href="" class="" onclick="window.history.go(-1)">
                <i class="am-header-icon am-icon-chevron-left"></i>
            </a>
        </div>
        <h1 class="am-header-title">
            <a href="#title-link" class="">收获地址</a>
        </h1>
        <div class="am-header-right am-header-nav">
            <a href="/" class="">
                <i class="am-header-icon  am-icon-home"></i>
            </a>
        </div>
    </header>
        <div class="paoduct-title-panel">
            <h2 class="checkout-h2">添加收货地址</h2>
            <p><i class="am-icon-location-arrow"></i> 收货地址</p>
            <form class="am-form am-form-inline">
                <input type="hidden" id="order" value="<?php echo $order; ?>" />
                <p>
                    <div class="content-block">
                        <input id="demo1" type="text" readonly="" placeholder="城市选择"  value="">
                    </div>
                </p>
                <div class="am-form-group">
                    <input type="text" id="citydetail" class="am-form-field am-radius" placeholder="详细地址">
                </div>
                <hr data-am-widget="divider" style="" class="am-divider-default am-margin-bottom-sm"/>
                <div class="am-form-group am-form-icon">
                    <i class="am-icon-user"></i>
                    <input type="text" id="name" class="am-form-field am-radius" placeholder="真实姓名">
                </div>
                <div class="am-form-group am-form-icon">
                    <i class="am-icon-phone"></i>
                    <input type="text" id="tel" class="am-form-field am-radius" placeholder="手机号码">
                </div>
                <div class="am-form-group am-form-icon">
                    <i class="am-icon-ship"></i>
                    <input type="text" id="wuliu" class="am-form-field am-radius" placeholder="期望物流(留空或乱填为选择默认物流)">
                </div>
                <button type="button" class="am-btn am-btn-danger" id="submit">添加保存</button>
            </form>
        </div>
    </div>
<script src="__JS__/LAreaData1.js"></script>
<script src="__JS__/LAreaData2.js"></script>
<script src="__JS__/LArea.js"></script>
<script type="text/javascript">
    var area1 = new LArea();
    area1.init({
        'trigger': '#demo1', //触发选择控件的文本框，同时选择完毕后name属性输出到该位置
        'valueTo': '#value1', //选择完毕后id属性输出到该位置
        'keys': {
            id: 'id',
            name: 'name'
        }, //绑定数据源相关字段 id对应valueTo的value属性输出 name对应trigger的value属性输出
        'type': 1, //数据源类型
        'data': LAreaData //数据源
    });
    area1.value=[1,13,3];//控制初始位置，注意：该方法并不会影响到input的value
    var area2 = new LArea();
    area2.init({
        'trigger': '#demo2',
        'valueTo': '#value2',
        'keys': {
            id: 'value',
            name: 'text'
        },
        'type': 2,
        'data': [provs_data, citys_data, dists_data]
    });
</script>
<script type="text/javascript">
    $("#submit").click(function () {
        var city = $('#demo1').val();
        var citydetail = $('#citydetail').val();
        var code = $('#code').val();
        var name = $('#name').val();
        var tel = $('#tel').val();
        var wuliu = $('#wuliu').val();
        var order = $('#order').val();
        //验证中文字符
        var pattern = /^[\u4E00-\u9FA5]{2,4}$/;
        //验证手机号码
        var tele = /^1[34578]\d{9}$/;

        if(name == "" || pattern.test(name) == false){
            alert("请输入您的姓名！");
            return false;
        }else if(tel.length != "11" || tele.test(tel) == false){
            alert("请输入正确的手机号码！");
            return false;
        }else if(city == ""){
            alert("请选择地址信息！")
            return false;
        }else if(citydetail == ""){
            alert("请输入您的详细地址！");
            return false
        }else {
            $.ajax({
                type: "post",
                url: "<?php echo url('good/address'); ?>",
                data: {"city": city, "citydetail": citydetail, "code": code, "name": name, "tel": tel, "wuliu": wuliu},
                dataType: "json",
                success: function (data) {
                    if (data == 1) {
                        alert("地址添加成功！");
                        var str = "<?php echo url('good/checkout'); ?>";
                        var url = str + "?order=" + order;
                        window.location.href=url;
                    } else {
                        alert("地址添加失败！")
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

