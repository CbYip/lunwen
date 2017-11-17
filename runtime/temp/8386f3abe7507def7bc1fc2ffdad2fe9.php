<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:58:"D:\WebTest\lunwen\lunwen/app/index\view\good\category.html";i:1505374712;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\header.html";i:1504925608;s:62:"D:\WebTest\lunwen\lunwen/app/index\view\public\header_nav.html";i:1504834694;s:58:"D:\WebTest\lunwen\lunwen/app/index\view\public\footer.html";i:1505263784;}*/ ?>
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
            <a href="#title-link" class="">商品分类</a>
        </h1>
        <div class="am-header-right am-header-nav">
            <a href="<?php echo url('good/shopcart'); ?>" class="">
                <i class="am-header-icon  am-icon-shopping-cart"></i>
            </a>
        </div>
    </header>

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
    <section data-am-widget="accordion" class="am-accordion am-accordion-gapped" data-am-accordion='{"multiple": true}'>
        <?php if(is_array($pcate) || $pcate instanceof \think\Collection || $pcate instanceof \think\Paginator): $i = 0; $__LIST__ = $pcate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <dl class="am-accordion-item">
            <dt class="am-accordion-title"><?php echo $vo['typename']; ?></dt>
            <dd class="am-accordion-bd am-collapse ">
                <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
                <div class="am-accordion-content">
                    <dl class="my-category-dl">
                        <?php if(is_array($scate) || $scate instanceof \think\Collection || $scate instanceof \think\Paginator): $i = 0; $__LIST__ = $scate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
                        <dd>
                            <a href="#" class="type"><?php echo $vo1['typename']; ?></a>
                            <input type="hidden" class="id" value="<?php echo $vo1['ID']; ?>" />
                        </dd>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </dl>
                </div>
            </dd>
        </dl>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </section>
    <div class="am-cf am-g store-background">
        <ul class="am-avg-sm-2 my-shop-product-list">
        </ul>
    </div>
    <div data-am-widget="gotop" class="am-gotop am-gotop-fixed">
        <a href="#top" title="">
            <img class="am-gotop-icon-custom" src="__IMG__/default/goTop.gif" />
        </a>
    </div>
    <script type="text/javascript">
        //商品分类查询
        $(".type").click(function () {
            var id = $(this).parent().children('.id').val();
            $.ajax({
               type: "post",
               url: "<?php echo url('good/category'); ?>",
               data: {"id":id},
               dataType: "json",
               success:function (data) {
                   $(".my-shop-product-list").empty();
                   var json = eval(data);
                   var content = "";
                   for(var i = 0;i<json.length;i++){
                       var result = json[i];
                       var str = '<?php echo url('good/detail'); ?>';
                       var url = str + '?id=' + result.ID;
                       content += '<li>\n' +
                           '                   <div class="am-panel am-panel-default">\n' +
                           '                        <div class="am-panel-bd">\n' +
                           '                            <img class="am-img-responsive img" src="' + result.photo + '" style="width: 170px; height: 200px;"/>\n' +
                           '                            <h3><a href="<?php echo url('good/detail', ['id' => $vo['ID']]); ?>">' + result.goodsname + '</a></h3>\n' +
                           '                            <div>\n' +
                           '                                <span class="list-product-price-span2">￥' + result.goodsprice + '</span>\n' +
                           '                                <span class="list-product-sorce-span">销量<br/>' + result.sales + '</span>\n' +
                           '                            </div>\n' +
                           '                            <hr data-am-widget="divider" style="" class="am-divider am-divider-default am-cf"/>\n' +
                           '                            <ol class="am-avg-sm-2 product-list-share">\n' +
                           '                                <li class="am-text-sm">积分：' + result.score + '</li>\n' +
                           '                                <li><button class="am-btn am-btn-danger am-btn-xs index-addcart-btn" onClick="window.location.href=\' ' + url + ' \'">立即购买</button></li>\n' +
                           '                            </ol>\n' +
                           '                        </div>\n' +
                           '                    </div>\n' +
                           '                </li>';
                   }
                   $(".my-shop-product-list").append(content);
               } 
            });
        })

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
                        content += '<li>\n' +
                            '                   <div class="am-panel am-panel-default">\n' +
                            '                        <div class="am-panel-bd">\n' +
                            '                            <img class="am-img-responsive img" src="' + result.photo + '" style="width: 170px; height: 200px;"/>\n' +
                            '                            <h3><a href="<?php echo url('good/detail', ['id' => $vo['ID']]); ?>">' + result.goodsname + '</a></h3>\n' +
                            '                            <div>\n' +
                            '                                <span class="list-product-price-span2">￥' + result.goodsprice + '</span>\n' +
                            '                                <span class="list-product-sorce-span">销量<br/>' + result.sales + '</span>\n' +
                            '                            </div>\n' +
                            '                            <hr data-am-widget="divider" style="" class="am-divider am-divider-default am-cf"/>\n' +
                            '                            <ol class="am-avg-sm-2 product-list-share">\n' +
                            '                                <li class="am-text-sm">积分：' + result.score + '</li>\n' +
                            '                                <li><button class="am-btn am-btn-danger am-btn-xs index-addcart-btn" onClick="window.location.href=\' ' + url + ' \'">立即购买</button></li>\n' +
                            '                            </ol>\n' +
                            '                        </div>\n' +
                            '                    </div>\n' +
                            '                </li>';
                    }
                    $(".my-shop-product-list").append(content);
                }
            })
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
            <a href="<?php echo url('index/order'); ?>" class="">
                <span class=" am-icon-edit"></span>
                <span class="am-navbar-label">论文</span>
            </a>
        </li>
        <li>
            <a href="<?php echo url('good/shopcart'); ?>" class="">
                <span class="am-icon-shopping-cart"></span>
                <span class="am-navbar-label">购物车</span>
            </a>
        </li>
        <li>
            <a href="<?php echo url('index/shop'); ?>" class="">
                <span class="am-icon-suitcase"></span>
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

