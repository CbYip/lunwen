<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:55:"D:\WebTest\lunwen\lunwen/app/index\view\index\shop.html";i:1505982295;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\header.html";i:1505983138;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\footer.html";i:1509409424;}*/ ?>
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
    <!-- banner -->
    <div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{&quot;directionNav&quot;:false}'>
        <ul class="am-slides">
            <li>
                <img src="__IMG__/admin/a4.png">
            </li>
            <li>
                <img src="__IMG__/admin/a6.png">
            </li>
            <li>
                <img src="__IMG__/admin/a7.png">
            </li>
            <li>
                <img src="__IMG__/admin/a8.png">
            </li>
        </ul>
    </div>
    <!-- store -->
    <!-- search -->
    <div class="gray-panel">
        <div class="my-search-title-panel">
            <div class="am-input-group">
                <input type="text" class="am-form-field am-radius" id="text">
                <span class="am-input-group-btn">
                <button class="am-btn am-radius" type="button" id="btn"><span class="am-icon-search"></span></button>
              </span>
            </div>
        </div>
    </div>
    <!-- search -->
    <div class="am-cf am-g">
        <ul class="am-avg-sm-2 my-shop-product-list">
            <input type="hidden" class="num" value="<?php echo $num; ?>" />
            <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li onclick="window.location.href='<?php echo url('good/detail', ['id' => $vo['ID']]); ?>'">
                <div class="am-panel-default">
                    <div class="am-panel-bd">
                        <img class="am-img-responsive img" src="<?php echo $vo['photo']; ?>" style="width: 150px; height: 150px;"/>
                        <h3 style="text-align: center; font-size: 1.4rem;"><a href="<?php echo url('good/detail', ['id' => $vo['ID']]); ?>"><?php echo $vo['goodsname']; ?></a></h3>
                    </div>
                </div>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <script type="text/javascript">
        //搜索查询
        $("#btn").click(function () {
            var text = $('#text').val();
            $.ajax({
                type: "post",
                url: "<?php echo url('good/search'); ?>",
                data: {"text": text},
                dataType: "json",
                success:function (data) {
                    $(".my-shop-product-list").empty();
                    var json = eval(data);
                    var content = "";
                    for(var i = 0;i<json.length;i++){
                        var result = json[i];
                        var str = '<?php echo url('good/detail'); ?>';
                        var url = str + '?id=' + result.ID;
                        content += '<li onclick="window.location.href=\' '+ url +'\'">\n' +
                            '                <div class="am-panel-default">\n' +
                            '                    <div class="am-panel-bd">\n' +
                            '                        <img class="am-img-responsive img" src="' + result.photo + '" style="width: 150px; height: 150px;"/>\n' +
                            '                        <h3 style="text-align: center; font-size: 1.4rem;"><a href="<?php echo url('good/detail', ['id' => $vo['ID']]); ?>">' + result.goodsname + '</a></h3>\n' +
                            '                    </div>\n' +
                            '                </div>\n' +
                            '       </li>'
                    }
                    $(".my-shop-product-list").append(content);
                }
            })
        })
    </script>
    <!--上拉加载 下拉刷新-->
    <script src="__JS__/dropload.min.js"></script>
    <script type="text/javascript">
        // dropload
        $('.am-g').dropload({
            scrollArea: window,
            loadDownFn: function (me) {
                // 拼接HTML
                var num = $(".num").val();
                var content = '';
                $.ajax({
                    type: 'post',
                    url: "<?php echo url('index/page'); ?>",
                    data: {"num":num},
                    dataType: 'json',
                    success: function (data) {
                        var json = eval(data);
                        if (json.length > 0 && json.length < 6) {
                            for (var i = 0; i < json.length; i++) {
                                var result = json[i];
                                var str = '<?php echo url('good/detail'); ?>';
                                var url = str + '?id=' + result.ID;
                                content += '<li onclick="window.location.href=\' '+ url +'\'">\n' +
                                    '                <div class="am-panel-default">\n' +
                                    '                    <div class="am-panel-bd">\n' +
                                    '                        <img class="am-img-responsive img" src="' + result.photo + '" style="width: 150px; height: 150px;"/>\n' +
                                    '                        <h3 style="text-align: center; font-size: 1.4rem;"><a href="<?php echo url('good/detail', ['id' => $vo['ID']]); ?>">' + result.goodsname + '</a></h3>\n' +
                                    '                    </div>\n' +
                                    '                </div>\n' +
                                    '       </li>'
                            }
                            // 如果没有数据
                        } else {
                            // 锁定
                            me.lock();
                            // 无数据
                            me.noData();
                        }
                        // 为了测试，延迟1秒加载
                        setTimeout(function () {
                            //更改记录值
                            var num = $(".num").val();
                            num = num + json.length;
                            $(".num").val(num);
                            // 插入数据到页面，放到最后面
                            $('.my-shop-product-list').append(content);
                            // 每次数据插入，必须重置
                            me.resetload();
                        }, 1000);
                    },
                    error: function (xhr, type) {
                        alert('Ajax error!');
                        // 即使加载出错，也得重置
                        me.resetload();
                    }
                });
            }
        });
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

