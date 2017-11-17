<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:63:"D:\WebTest\lunwen\lunwen/admin/index\view\goods\goods_edit.html";i:1507858265;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\header.html";i:1506646436;s:58:"D:\WebTest\lunwen\lunwen/admin/index\view\public\left.html";i:1507431544;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\footer.html";i:1504506358;}*/ ?>
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
        商品详情
    </div>
    <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">首页</a></li>
        <li class="am-active">商品详情</li>
    </ol>
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 表单
            </div>
        </div>
        <div class="tpl-block ">
            <div class="am-g tpl-amazeui-form">
                <div class="am-u-sm-12 am-u-md-9">
                    <form class="am-form am-form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="am-form-group">
                            <label for="goods_name" class="am-u-sm-3 am-form-label">商品名 / goods_name</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="goods_name" name="goods_name" value="<?php echo $good['goodsname']; ?>">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="goods_num" class="am-u-sm-3 am-form-label">库存 / goods_num</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="goods_num" name="goods_num" value="<?php echo $good['goodsnum']; ?>">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="Score" class="am-u-sm-3 am-form-label">积分 / Score</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="Score" name="score" value="<?php echo $good['score']; ?>">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="Goods_price" class="am-u-sm-3 am-form-label">单价 / Goods_price</label>
                            <div class="am-u-sm-9">
                                <input type="text"  id="Goods_price" name="goods_price" value="<?php echo $good['goodsprice']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="delivery" class="am-u-sm-3 am-form-label">运费 / Delivery</label>
                            <div class="am-u-sm-9">
                                <input type="text"  id="delivery" name="delivery" value="<?php echo $good['delivery']; ?>">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="type" class="am-u-sm-3 am-form-label">商品分类 / Type</label>
                            <div class="am-u-sm-9">
                                <select id="doc-select-1" name="type">
                                    <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($good['type'] == $vo['ID']): ?>
                                    <option value="<?php echo $vo['ID']; ?>" selected><?php echo $vo['typename']; ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo $vo['ID']; ?>"><?php echo $vo['typename']; ?></option>
                                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="sales" class="am-u-sm-3 am-form-label">销量 / Sales</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="sales" name="sales" value="<?php echo $good['sales']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="orders" class="am-u-sm-3 am-form-label">订单量 / Orders</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="orders" name="orders" value="<?php echo $good['orders']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="comment" class="am-u-sm-3 am-form-label">评论量 / Comment</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="comment" name="comment" value="<?php echo $good['comment']; ?>">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="Size" class="am-u-sm-3 am-form-label">尺寸 / Size</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="Size" name="size" value="<?php echo $good['size']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="color" class="am-u-sm-3 am-form-label">颜色 / Color</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="color" name="color" value="<?php echo $good['color']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="detail" class="am-u-sm-3 am-form-label">详情 / Detail</label>
                            <div class="am-u-sm-9">
                                <textarea rows="6" id="detail" name="detail"><?php echo $good['detail']; ?></textarea>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="Photo" class="am-u-sm-3 am-form-label">商品图 / Photo</label>
                            <div class="am-u-sm-9">
                                <img class="photo" name="photo" name="" src="<?php echo $good['photo']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group" id="photo">
                            <label for="photo" class="am-u-sm-3 am-form-label">商品图更改 / update</label>
                            <div class="am-u-sm-9">
                                <input type="file" id="doc-ipt-file-1" name="update" value="图片上传">
                                <small class="am-form-help">请选择要上传的图片...</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                                <button type="button" class="am-btn am-btn-warning" onclick="window.history.go(-1)">返&nbsp;&nbsp;回</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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