<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"D:\WebTest\lunwen\lunwen/admin/index\view\goods\shoplist_detail.html";i:1506578589;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\header.html";i:1506646436;s:58:"D:\WebTest\lunwen\lunwen/admin/index\view\public\left.html";i:1507431544;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\footer.html";i:1504506358;}*/ ?>
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
        商品订单详情
    </div>
    <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">首页</a></li>
        <li class="am-active">商品订单详情</li>
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
                            <label for="goodsname" class="am-u-sm-3 am-form-label">商品名 / goods_name</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="goodsname" name="goodsname" value="<?php echo $shoporder['goodsname']; ?>">
                                <small>提示：如果多商品的订单，商品名称以英文的","作为分隔符，以下的属性也是如此。</small>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="num" class="am-u-sm-3 am-form-label">数量 / goods_num</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="num" name="num" value="<?php echo $shoporder['num']; ?>">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="Score" class="am-u-sm-3 am-form-label">积分 / Score</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="Score" name="score" value="<?php echo $shoporder['score']; ?>">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="total" class="am-u-sm-3 am-form-label">总价 / Total</label>
                            <div class="am-u-sm-9">
                                <input type="text"  id="total" name="total" value="<?php echo $shoporder['total']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="freight" class="am-u-sm-3 am-form-label">运费 / Freight</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="freight" name="freight" value="<?php echo $shoporder['yunfei']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="flag" class="am-u-sm-3 am-form-label">订单状态 / Flag</label>
                            <div class="am-u-sm-9">
                                <select id="doc-select-1" name="flag">
                                    <?php if($shoporder['flag'] == 0): ?>
                                    <option value="0" selected>未付款</option>
                                    <option value="1">已付款</option>
                                    <?php else: ?>
                                    <option value="0">未付款</option>
                                    <option value="1" selected>已付款</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="Shopflag" class="am-u-sm-3 am-form-label">商品状态 / Shopflag</label>
                            <div class="am-u-sm-9">
                                <select id="doc-select-2" name="shopflag">
                                    <?php if($shoporder['shopflag'] == 0): ?>
                                    <option value="0" selected>未发货</option>
                                    <option value="1">已发货</option>
                                    <option value="1">已收货</option>
                                    <?php elseif($shoporder['shopflag'] == 1): ?>
                                    <option value="0">未发货</option>
                                    <option value="1" selected>已发货</option>
                                    <option value="2">已收货</option>
                                    <?php else: ?>
                                    <option value="0" selected>未发货</option>
                                    <option value="1">已发货</option>
                                    <option value="1">已收货</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="Ordernumber" class="am-u-sm-3 am-form-label">订单编号 / Ordernumber</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="ordernumber" name="ordernumber" value="<?php echo $shoporder['ordernumber']; ?>" readonly>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="time" class="am-u-sm-3 am-form-label">订单日期 / Time</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="time" name="time" value="<?php echo $shoporder['time']; ?>" readonly>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="addname" class="am-u-sm-3 am-form-label">收货人 / Addname</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="addname" name="addname" value="<?php echo $shoporder['addname']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="addtel" class="am-u-sm-3 am-form-label">联系方式 / Addtel</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="addtel" name="addtel" value="<?php echo $shoporder['addtel']; ?>">
                        </div>
                        </div>
                        <div class="am-form-group">
                            <label for="detail" class="am-u-sm-3 am-form-label">省市区 / Address</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="addcity" name="addcity" value="<?php echo $shoporder['addcity']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="addcitydetail" class="am-u-sm-3 am-form-label">详细地址 / Address</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="addcitydetail" name="addcitydetail" value="<?php echo $shoporder['addcitydetail']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="Size" class="am-u-sm-3 am-form-label">尺寸 / Size</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="Size" name="size" value="<?php echo $shoporder['size']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="color" class="am-u-sm-3 am-form-label">颜色 / Color</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="color" name="color" value="<?php echo $shoporder['color']; ?>">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="wuliu" class="am-u-sm-3 am-form-label">期望物流 / Expect logistics</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="wuliu" name="wuliu" value="<?php echo $shoporder['wuliu']; ?>" />
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="wu" class="am-u-sm-3 am-form-label">发货物流 / Delivery logistics</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="photo" name="wu"  value="<?php echo $shoporder['wu']; ?>" />
                                <small>填写相应的物流信息，再点击列表页的发货按钮。</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="wuliunum" class="am-u-sm-3 am-form-label">物流编号 / Tracking number</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="wuliunum" name="wuliunum" value="<?php echo $shoporder['wuliunum']; ?>" />
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