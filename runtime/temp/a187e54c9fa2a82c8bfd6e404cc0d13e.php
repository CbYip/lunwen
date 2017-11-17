<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:62:"D:\WebTest\lunwen\lunwen/admin/index\view\goods\goods_add.html";i:1507857967;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\header.html";i:1506646436;s:58:"D:\WebTest\lunwen\lunwen/admin/index\view\public\left.html";i:1507431544;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\footer.html";i:1504506358;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>易起论文</title>
    <meta name="description" content="易起论文">
    <meta name="keywords" content="易起论文">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="stylesheet" href="__CSS__/amazeui.min.css"/>
    <link rel="stylesheet" href="__CSS__/admin.css">
    <link rel="stylesheet" href="__CSS__/app.css">
    <script src="__JS__/echarts.min.js"></script>
    <script src="__JS__/jquery.min.js"></script>
</head>

<body data-type="index">
<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <a href="javascript:;" class="tpl-logo">
            <img src="__IMG__/logo.png" alt="">
        </a>
    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
            data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
            class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span
                    class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="tpl-header-list-user-nick">超级管理员</span><span class="tpl-header-list-user-ico"> <img
                        src="__IMG__/user01.png"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="<?php echo url('index/admin'); ?>"><span class="am-icon-bell-o"></span> 资料</a></li>
                    <li class="logout"><a href=""><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li class="logout"><a href="###" class="tpl-header-list-link"><span
                    class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
        </ul>
    </div>
</header>
<script type="text/javascript">
    $('.logout').click(function () {
        $.ajax({
            url:"<?php echo url('index/logout'); ?>",
            success:function (data) {
                if(data == 1){
                    alert("您已成功退出易起论文后台登录！");
                    window.location.href="<?php echo url('login/login'); ?>";
                }
            }
        })
    })

</script>
<div class="tpl-page-container tpl-page-header-fixed">
<div class="tpl-left-nav tpl-left-nav-hover">
    <div class="tpl-left-nav-title">
        BASIC LINK 列表
    </div>
    <div class="tpl-left-nav-list">
        <ul class="tpl-left-nav-menu">
            <li class="tpl-left-nav-item">
                <a href="<?php echo url('index/index'); ?>" class="nav-link">
                    <i class="am-icon-home"></i>
                    <span>首页</span>
                </a>
            </li>
            <li class="tpl-left-nav-item">
                <a href="<?php echo url('index/chart'); ?>" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-bar-chart"></i>
                    <span>用户管理</span>
                </a>
            </li>
            <li class="tpl-left-nav-item">
                <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-table"></i>
                    <span>论文管理</span>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                </a>
                <ul class="tpl-left-nav-sub-menu">
                    <li>
                        <a href="<?php echo url('table/order_list'); ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>订单列表</span>
                        </a>

                        <!--<a href="<?php echo url('table/img_list'); ?>">-->
                            <!--<i class="am-icon-angle-right"></i>-->
                            <!--<span>图片表格</span>-->
                            <!--<i class="tpl-left-nav-content tpl-badge-success">-->
                                <!--18-->
                            <!--</i>-->

                            <!--<a href="<?php echo url('form/news_form'); ?>">-->
                                <!--<i class="am-icon-angle-right"></i>-->
                                <!--<span>消息列表</span>-->
                                <!--<i class="tpl-left-nav-content tpl-badge-primary">-->
                                    <!--5-->
                                <!--</i>-->


                                <!--<a href="<?php echo url('form/news_list'); ?>">-->
                                    <!--<i class="am-icon-angle-right"></i>-->
                                    <!--<span>文字列表</span>-->
                                <!--</a>-->
                    <!--</li>-->
                </ul>
            </li>
            <li class="tpl-left-nav-item">
                <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-wpforms"></i>
                    <span>商城管理</span>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                </a>
                <ul class="tpl-left-nav-sub-menu" style="display: none;">
                    <li>
                        <a href="<?php echo url('goods/goods_type'); ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>商品分类</span>
                        </a>
                        <a href="<?php echo url('goods/goods_list'); ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>商品列表</span>
                        </a>
                        <a href="<?php echo url('goods/shoporder_list'); ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>商品订单列表</span>
                        </a>
                        <a href="<?php echo url('goods/comment_list'); ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>评论列表管理</span>
                        </a>
                        <!--<a href="<?php echo url('form/amaze_form'); ?>">-->
                            <!--<i class="am-icon-angle-right"></i>-->
                            <!--<span>Amaze UI 表单</span>-->
                            <!--<i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>-->
                        <!--</a>-->

                        <!--<a href="<?php echo url('form/line_form'); ?>">-->
                            <!--<i class="am-icon-angle-right"></i>-->
                            <!--<span>线条表单</span>-->
                        <!--</a>-->
                    </li>
                </ul>
            </li>
            <!--<li class="tpl-left-nav-item">-->
                <!--<a href="<?php echo url('login/login'); ?>" class="nav-link tpl-left-nav-link-list">-->
                    <!--<i class="am-icon-key"></i>-->
                    <!--<span>登录</span>-->

                <!--</a>-->
            <!--</li>-->
        </ul>
    </div>
</div>
<div class="tpl-content-wrapper">
    <div class="tpl-content-page-title">
        商品分类添加
    </div>
    <ol class="am-breadcrumb">
        <li><a href="/admin.php" class="am-icon-home">首页</a></li>
        <li class="am-active">分类添加</li>
    </ol>
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 表单
            </div>
            <div class="am-u-md-9" style="text-align: center">
                <span>往下增加
                    <select id="doc-select-2">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                    个商品添加栏
                </span>
            </div>
        </div>
        <div class="tpl-block ">
            <div class="am-g tpl-amazeui-form">
                <div class="am-u-sm-12 am-u-md-9">
                    <form class="am-form am-form-horizontal" method="post" enctype="multipart/form-data" >
                        <div class="am-form-group">
                            <label for="goodsname" class="am-u-sm-3 am-form-label">商品名 / goodsNames</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="typename" name="goodsname[]" placeholder="添加商品名称">
                            </div>
                        </div>
                        <div class="am-form-group" id="type">
                            <label for="typename" class="am-u-sm-3 am-form-label">所属分类 / typeClassic</label>
                            <div class="am-u-sm-9">
                                <select id="doc-select-1" name="type[]">
                                    <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $vo['ID']; ?>"><?php echo $vo['typename']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="goodsnum" class="am-u-sm-3 am-form-label">库存 / goodsnum</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="typename" name="goodsnum[]" placeholder="添加商品库存">
                                <small>只需要填写商品数量，不用带单位</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="goodsprice" class="am-u-sm-3 am-form-label">单价 / goodsprice</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="typename" name="goodsprice[]" placeholder="添加商品单价">
                                <small>只需要填写商品单价，不用带单位</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="score" class="am-u-sm-3 am-form-label">积分 / score</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="typename" name="score[]" placeholder="添加商品积分">
                                <small>只需要填写商品积分，不用带单位</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="size" class="am-u-sm-3 am-form-label">尺寸 / size</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="typename" name="size[]" placeholder="添加商品尺寸">
                                <small>支持自定义尺寸，以中文的"、"作尺寸间的分离。例：XL、L</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="color" class="am-u-sm-3 am-form-label">颜色 / color</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="typename" name="color[]" placeholder="添加商品颜色">
                                <small>支持自定义颜色，以中文的"、"作尺颜色间的分离。例：红色、绿色</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="delivery" class="am-u-sm-3 am-form-label">运费 / delivery</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="typename" name="delivery[]" placeholder="添加快递费用">
                                <small>自定义快递费用，例如：包邮或18元</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="detail" class="am-u-sm-3 am-form-label">详情 / detail</label>
                            <div class="am-u-sm-9">
                                <textarea type="text" class="typename" rows="8" name="detail[]" placeholder="添加商品详情信息"></textarea>
                            </div>
                        </div>
                        <div class="am-form-group" id="photo">
                            <label for="photo" class="am-u-sm-3 am-form-label">图片上传 / photo</label>
                            <div class="am-u-sm-9">
                                <input type="file" id="doc-ipt-file-1" name="photo[]">
                                <small class="am-form-help">请选择要上传的文件...</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary">添加</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#doc-select-2').change(function () {
        var length = $(this).val();
        var content = "";
        for(var i = 0; i< length; i++){
            content += '<br/>' +
                '<div class="am-form-group">\n' +
                '                            <label for="goodsname" class="am-u-sm-3 am-form-label">商品名 / goodsNames</label>\n' +
                '                            <div class="am-u-sm-9">\n' +
                '                                <input type="text" class="typename" name="goodsname[]" placeholder="添加商品名称">\n' +
                '                            </div>\n' +
                '                        </div>\n' +
                '                        <div class="am-form-group" id="type">\n' +
                '                            <label for="typeClassic" class="am-u-sm-3 am-form-label">所属分类 / typeClassic</label>\n' +
                '                            <div class="am-u-sm-9">\n' +
                '                                <select id="doc-select-1" name="type[]">\n' +
                '                                    <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>\n' +
                '                                    <option value="<?php echo $vo['ID']; ?>"><?php echo $vo['typename']; ?></option>\n' +
                '                                    <?php endforeach; endif; else: echo "" ;endif; ?>\n' +
                '                                </select>\n' +
                '                            </div>\n' +
                '                        </div>\n' +
                '                        <div class="am-form-group">\n' +
                '                            <label for="goodsnum" class="am-u-sm-3 am-form-label">库存 / goodsnum</label>\n' +
                '                            <div class="am-u-sm-9">\n' +
                '                                <input type="text" class="typename" name="goodsnum[]" placeholder="添加商品库存">\n' +
                '                                <small>只需要填写商品数量，不用带单位</small>\n'+
                '                            </div>\n' +
                '                        </div>\n' +
                '                        <div class="am-form-group">\n' +
                '                            <label for="goodsprice" class="am-u-sm-3 am-form-label">单价 / goodsprice</label>\n' +
                '                            <div class="am-u-sm-9">\n' +
                '                                <input type="text" class="typename" name="goodsprice[]" placeholder="添加商品单价">\n' +
                '                                <small>只需要填写商品单价，不用带单位</small>\n'+
                '                            </div>\n' +
                '                        </div>\n' +
                '                        <div class="am-form-group">\n' +
                '                            <label for="score" class="am-u-sm-3 am-form-label">积分 / score</label>\n' +
                '                            <div class="am-u-sm-9">\n' +
                '                                <input type="text" class="typename" name="score[]" placeholder="添加商品积分">\n' +
                '                                <small>只需要填写商品积分，不用带单位</small>\n'+
                '                            </div>\n' +
                '                        </div>\n' +
                '                        <div class="am-form-group">\n' +
                '                            <label for="size" class="am-u-sm-3 am-form-label">尺寸 / size</label>\n' +
                '                            <div class="am-u-sm-9">\n' +
                '                                <input type="text" class="typename" name="size[]" placeholder="添加商品尺寸">\n' +
                '                                <small>支持自定义尺寸，以中文的"、"作尺寸间的分离。例：XL、L</small>\n' +
                '                            </div>\n' +
                '                        </div>\n' +
                '                        <div class="am-form-group">\n' +
                '                            <label for="color" class="am-u-sm-3 am-form-label">颜色 / color</label>\n' +
                '                            <div class="am-u-sm-9">\n' +
                '                                <input type="text" class="typename" name="color[]" placeholder="添加商品颜色">\n' +
                '                                <small>支持自定义颜色，以中文的"、"作尺颜色间的分离。例：红色、绿色</small>\n' +
                '                            </div>\n' +
                '                        </div>\n' +
                '                        <div class="am-form-group">\n' +
                '                            <label for="delivery" class="am-u-sm-3 am-form-label">快递费 / delivery</label>\n' +
                '                            <div class="am-u-sm-9">\n' +
                '                                <input type="text" class="typename" name="delivery[]" placeholder="添加快递费用">\n' +
                '                                <small>自定义快递费用，例如：包邮或18元</small>\n' +
                '                            </div>\n' +
                '                        </div>\n' +
                '                        <div class="am-form-group">\n' +
                '                            <label for="detail" class="am-u-sm-3 am-form-label">详情 / detail</label>\n' +
                '                            <div class="am-u-sm-9">\n' +
                '                                <textarea type="text" class="typename" rows="8" name="detail[]" placeholder="添加商品详情信息"></textarea>\n' +
                '                            </div>\n' +
                '                        </div>\n'+
                '                        <div class="am-form-group">\n' +
                '                            <label for="photo" class="am-u-sm-3 am-form-label">图片上传 / photo</label>\n' +
                '                            <div class="am-u-sm-9">\n' +
                '                                <input type="file" id="doc-ipt-file-1" name="photo[]">\n' +
                '                                <small class="am-form-help">请选择要上传的文件...</small>\n' +
                '                            </div>\n' +
                '                        </div>';
        }
        $('#photo').after(content);
    })
</script>
</div>
<script src="__JS__/jquery.min.js"></script>
<script src="__JS__/amazeui.min.js"></script>
<script src="__JS__/iscroll.js"></script>
<script src="__JS__/app.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".tpl-left-nav-list a").each(function(){
            $this = $(this);
            if($this[0].href==String(window.location)){
                $this.addClass("active");
            }
        });
    });
</script>
</body>

</html>