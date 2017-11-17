<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:63:"D:\WebTest\lunwen\lunwen/admin/index\view\table\order_list.html";i:1507858442;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\header.html";i:1506646436;s:58:"D:\WebTest\lunwen\lunwen/admin/index\view\public\left.html";i:1507431544;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\footer.html";i:1504506358;}*/ ?>
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
        论文订单列表
    </div>
    <ol class="am-breadcrumb">
        <li><a href="/admin.php" class="am-icon-home">首页</a></li>
        <li class="am-active">论文订单列表</li>
    </ol>
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 列表
            </div>
        </div>
        <div class="tpl-block">
            <div>
                <div class="am-u-sm-12 am-u-md-2">
                    <div class="am-form-group">
                        <select id="selectType">
                            <option value="0">所有类别</option>
                            <option value="1">文稿代写</option>
                            <option value="2">期刊发表</option>
                            <option value="3">论文修改</option>
                            <option value="4">包写包发</option>
                        </select>
                    </div>
                </div>
                <div class="am-u-sm-12 am-u-md-2">
                    <div class="am-form-group">
                        <select id="orderType">
                            <option value="a">订单状态</option>
                            <option value="0">已付款</option>
                            <option value="1">未付款</option>
                            <option value="2">待审核</option>
                        </select>
                    </div>
                </div>
                <div id="nav"></div>
            </div>
            <div class="am-g">
                <div class="am-u-sm-12">
                    <form class="am-form">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr>
                                <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                <th class="table-id">ID</th>
                                <th class="table-order">订单号</th>
                                <th class="table-title">题目</th>
                                <th class="table-type">订单类型</th>
                                <th class="table-complete">项目进度</th>
                                <th class="table-author am-hide-sm-only">姓名</th>
                                <th class="table-tel">电话</th>
                                <th class="table-email">邮箱</th>
                                <th class="table-nickname">微信名</th>
                                <th class="table-price">金额</th>
                                <th class="table-flag">订单状态</th>
                                <th class="table-date am-hide-sm-only">完成日期</th>
                                <th class="table-set">操作</th>
                            </tr>
                            </thead>
                            <tbody class="or">
                            <?php
                                  $i=1;
                                if(is_array($order) || $order instanceof \think\Collection || $order instanceof \think\Paginator): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td><?php echo $i;?></td>
                                <td class="order"><a href="<?php echo url('table/order_list_detail',['order' => $vo['order']]); ?>"><?php echo $vo['order']; ?></a></td>
                                <td><?php echo $vo['title']; ?></td>
                                <?php if($vo['service'] == 1): ?>
                                <td>文稿代写</td>
                                    <?php if($vo['complete'] == 0): ?>
                                    <td>项目未开工</td>
                                    <?php elseif($vo['complete'] == 1): ?>
                                    <td>项目开工</td>
                                    <?php elseif($vo['complete'] == 2): ?>
                                    <td>完成初稿</td>
                                    <?php elseif($vo['complete'] == 3): ?>
                                    <td>修改反馈</td>
                                    <?php else: ?>
                                    <td>项目完成</td>
                                    <?php endif; elseif($vo['service'] == 2): ?>
                                <td>期刊发表</td>
                                    <?php if($vo['complete'] == 0): ?>
                                    <td>稿件未送审</td>
                                    <?php elseif($vo['complete'] == 1): ?>
                                    <td>稿件送审中</td>
                                    <?php elseif($vo['complete'] == 2): ?>
                                    <td>稿件已录用</td>
                                    <?php elseif($vo['complete'] == 3): ?>
                                    <td>稿件待出刊</td>
                                    <?php elseif($vo['complete'] == 4): ?>
                                    <td>稿件已出刊</td>
                                    <?php elseif($vo['complete'] == 5): ?>
                                    <td>稿件返修</td>
                                    <?php else: ?>
                                    <td>退稿</td>
                                    <?php endif; elseif($vo['service'] == 3): ?>
                                <td>论文修改</td>
                                    <?php if($vo['complete'] == 0): ?>
                                    <td>项目未开工</td>
                                    <?php elseif($vo['complete'] == 1): ?>
                                    <td>项目开工</td>
                                    <?php elseif($vo['complete'] == 2): ?>
                                    <td>完成初稿</td>
                                    <?php elseif($vo['complete'] == 3): ?>
                                    <td>修改反馈</td>
                                    <?php else: ?>
                                    <td>项目完成</td>
                                    <?php endif; elseif($vo['service'] == 4): ?>
                                <td>包写包发</td>
                                    <?php if($vo['complete'] == 0): ?>
                                    <td>项目未开工</td>
                                    <?php elseif($vo['complete'] == 1): ?>
                                    <td>稿件写作中</td>
                                    <?php elseif($vo['complete'] == 2): ?>
                                    <td>稿件完成</td>
                                    <?php elseif($vo['complete'] == 3): ?>
                                    <td>稿件送审中</td>
                                    <?php elseif($vo['complete'] == 4): ?>
                                    <td>稿件已录用</td>
                                    <?php elseif($vo['complete'] == 5): ?>
                                    <td>稿件待出刊</td>
                                    <?php else: ?>
                                    <td>稿件已出刊</td>
                                    <?php endif; endif; ?>
                                <td class="am-hide-sm-only"><?php echo $vo['username']; ?></td>
                                <td><?php echo $vo['usertel']; ?></td>
                                <td><?php echo $vo['email']; ?></td>
                                <td><?php echo $vo['nickname']; ?></td>
                                <td class="am-hide-sm-only"><?php echo $vo['price']; ?></td>
                                    <?php if($vo['flag'] == 0): ?>
                                    <td class="shenhe">已付款</td>
                                    <?php elseif($vo['flag'] == 1): ?>
                                    <td class="shenhe">未付款</td>
                                    <?php else: ?>
                                    <td class="shenhe">待审核</td>
                                <?php endif; if(($vo['service'] == 2) or ($vo['service'] == 4)): ?>
                                <td><?php echo $vo['fatime']; ?></td>
                                <?php else: ?>
                                <td><?php echo $vo['ctime']; ?></td>
                                <?php endif; ?>
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary edit"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-success pay"><span class="am-icon-cny"></span>付款</button>
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning check"><span class="am-icon-check"></span>审核</button>
                                            <?php if(($vo['service'] == 1) or ($vo['service'] == 3)): ?>
                                            <div class="am-dropdown" data-am-dropdown>
                                                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-primary am-dropdown-toggle" data-am-dropdown-toggle>
                                                    <span class="am-icon-caret-down"></span>项目进度
                                                </button>
                                                <ul class="am-dropdown-content">
                                                    <li><a href="javascript;" class="schedule1" value="0" onclick="return false">项目未开工</a></li>
                                                    <li><a href="javascript;" class="schedule1" value="1" onclick="return false">项目开工</a></li>
                                                    <li><a href="javascript;" class="schedule1" value="2" onclick="return false">完成初稿</a></li>
                                                    <li><a href="javascript;" class="schedule1" value="3" onclick="return false">修改反馈</a></li>
                                                    <li><a href="javascript;" class="schedule1" value="4" onclick="return false">项目完成</a></li>
                                                </ul>
                                            </div>
                                            <?php elseif($vo['service'] == 2): ?>
                                            <div class="am-dropdown" data-am-dropdown>
                                                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-primary am-dropdown-toggle" data-am-dropdown-toggle>
                                                    <span class="am-icon-caret-down"></span>项目进度
                                                </button>
                                                <ul class="am-dropdown-content">
                                                    <li><a href="javascript;" class="schedule2" value="0" onclick="return false">稿件未送审</a></li>
                                                    <li><a href="javascript;" class="schedule2" value="1" onclick="return false">稿件送审中</a></li>
                                                    <li><a href="javascript;" class="schedule2" value="2" onclick="return false">稿件已录用</a></li>
                                                    <li><a href="javascript;" class="schedule2" value="3" onclick="return false">稿件待出刊</a></li>
                                                    <li><a href="javascript;" class="schedule2" value="4" onclick="return false">稿件已出刊</a></li>
                                                    <li><a href="javascript;" class="schedule2" value="5" onclick="return false">稿件返修</a></li>
                                                    <li><a href="javascript;" class="schedule2" value="6" onclick="return false">退稿</a></li>
                                                </ul>
                                            </div>
                                            <?php else: ?>
                                            <div class="am-dropdown" data-am-dropdown>
                                                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-primary am-dropdown-toggle" data-am-dropdown-toggle>
                                                    <span class="am-icon-caret-down"></span>项目进度
                                                </button>
                                                <ul class="am-dropdown-content">
                                                    <li><a href="javascript;" class="schedule3" value="0" onclick="return false">项目未开工</a></li>
                                                    <li><a href="javascript;" class="schedule3" value="1" onclick="return false">稿件写作中</a></li>
                                                    <li><a href="javascript;" class="schedule3" value="2" onclick="return false">稿件完成</a></li>
                                                    <li><a href="javascript;" class="schedule3" value="3" onclick="return false">稿件送审中</a></li>
                                                    <li><a href="javascript;" class="schedule3" value="4" onclick="return false">稿件已录用</a></li>
                                                    <li><a href="javascript;" class="schedule3" value="5" onclick="return false">稿件待出刊</a></li>
                                                    <li><a href="javascript;" class="schedule3" value="6" onclick="return false">稿件已出刊</a></li>
                                                </ul>
                                            </div>
                                            <?php endif; ?>
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger  delete"><span class="am-icon-trash-o"></span> 删除</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                        <div class="am-cf">
                            <div class="am-fr">
                                <?php echo $order->render(); ?>
                            </div>
                        </div>
                        <hr>
                    </form>
                </div>

            </div>
        </div>
        <div class="tpl-alert"></div>
    </div>
    <script type="text/javascript">
        //分类筛选
        $('#selectType').change(function () {
            var id = $('#selectType').val();
            var result = "";
            $("#nav").empty();
            if(id == "1" || id == "3"){
                result = '<div class="am-u-sm-12 am-u-md-2">\n' +
                    '                    <div class="am-form-group">\n' +
                    '                        <select id="rateType">\n' +
                    '                            <option value="b">项目进度</option>\n' +
                    '                            <option value="0">项目未开工</option>\n' +
                    '                            <option value="1">项目开工</option>\n' +
                    '                            <option value="2">完成初稿</option>\n' +
                    '                            <option value="3">修改反馈</option>\n' +
                    '                            <option value="4">项目完成</option>\n' +
                    '                        </select>\n' +
                    '                    </div>\n' +
                    '                </div>';
            }else if(id == "2"){
                result = '<div class="am-u-sm-12 am-u-md-2">\n' +
                    '                    <div class="am-form-group">\n' +
                    '                        <select id="rateType">\n' +
                    '                            <option value="b">项目进度</option>\n' +
                    '                            <option value="0">稿件未送审</option>\n' +
                    '                            <option value="1">稿件送审中</option>\n' +
                    '                            <option value="2">稿件已录用</option>\n' +
                    '                            <option value="3">稿件待出刊</option>\n' +
                    '                            <option value="4">稿件已出刊</option>\n' +
                    '                            <option value="5">稿件返修</option>\n' +
                    '                            <option value="6">退稿</option>\n' +
                    '                        </select>\n' +
                    '                    </div>\n' +
                    '                </div>';
            }else if(id == "4"){
                result = '<div class="am-u-sm-12 am-u-md-2">\n' +
                    '                    <div class="am-form-group">\n' +
                    '                        <select id="rateType">\n' +
                    '                            <option value="b">项目进度</option>\n' +
                    '                            <option value="0">项目未开工</option>\n' +
                    '                            <option value="1">稿件写作中</option>\n' +
                    '                            <option value="2">稿件完成</option>\n' +
                    '                            <option value="3">稿件送审中</option>\n' +
                    '                            <option value="4">稿件已录用</option>\n' +
                    '                            <option value="5">稿件待出刊</option>\n' +
                    '                            <option value="6">稿件已出刊</option>\n' +
                    '                        </select>\n' +
                    '                    </div>\n' +
                    '                </div>';
            }
            $("#nav").append(result);
            var oid = $('#orderType').val();
            var rid = $('#rateType').val();
            $.ajax({
                type: "POST",
                url: "<?php echo url('table/order_list'); ?>",
                data: {"id":id, "oid":oid, "rid":rid},
                dataType: "json",
                success:function (data) {
                    var json = eval(data);
                    var content = "";
                    $(".or").empty();
                    $(".am-cf").empty();
                    for(var i=0;i<json.length;i++){
                        b = i + 1;
                        content +=
                            '<tr>' +
                            '<td><input type="checkbox"></td>' +
                            '<td>' + b + '</td>' +
                            '<td class="order"><a href="<?php echo url('table/order_list_detail',['order' => $vo['order']]); ?>">' + json[i].order +'</a></td>' +
                            '<td>' + json[i].title + '</td>';
                        if(json[i].service == "1"){
                            content += '<td>文稿代写</td>';
                            if(json[i].complete == "0"){
                                content += '<td>项目未开工</td>\n';
                            }else if(json[i].complete == "1"){
                                content += '<td>项目开工</td>\n';
                            }else if(json[i].complete == "2"){
                                content += '<td>完成初稿</td>\n';
                            }else if(json[i].complete == "3"){
                                content += '<td>修改反馈</td>\n';
                            }else{
                                content += '<td>项目完成</td>\n';
                            }
                        }else if(json[i].service == "2"){
                            content += '<td>期刊发表</td>';
                            if(json[i].complete == "0"){
                                content += '<td>稿件未送审</td>\n';
                            }else if(json[i].complete == "1"){
                                content += '<td>稿件送审中</td>\n';
                            }else if(json[i].complete == "2"){
                                content += '<td>稿件已录用</td>\n';
                            }else if(json[i].complete == "3"){
                                content += '<td>稿件待出刊</td>\n';
                            }else if(json[i].complete == "4"){
                                content += '<td>稿件已出刊</td>\n';
                            }else if(json[i].complete == "5"){
                                content += '<td>稿件返修</td>\n';
                            }else{
                                content += '<td>退稿</td>\n';
                            }
                        }else if(json[i].service == "3"){
                            content += '<td>论文修改</td>';
                            if(json[i].complete == "0"){
                                content += '<td>项目未开工</td>\n';
                            }else if(json[i].complete == "1"){
                                content += '<td>项目开工</td>\n';
                            }else if(json[i].complete == "2"){
                                content += '<td>完成初稿</td>\n';
                            }else if(json[i].complete == "3"){
                                content += '<td>修改反馈</td>\n';
                            }else{
                                content += '<td>项目完成</td>\n';
                            }
                        }else{
                            content += '<td>包写包发</td>';
                            if(json[i].complete == "0"){
                                content += '<td>项目未开工</td>\n';
                            }else if(json[i].complete == "1"){
                                content += '<td>稿件写作中</td>\n';
                            }else if(json[i].complete == "2"){
                                content += '<td>稿件完成</td>\n';
                            }else if(json[i].complete == "3"){
                                content += '<td>稿件送审中</td>\n';
                            }else if(json[i].complete == "4"){
                                content += '<td>稿件已录用</td>\n';
                            }else if(json[i].complete == "5"){
                                content += '<td>稿件待出刊</td>\n';
                            }else{
                                content += '<td>稿件已出刊</td>\n';
                            }
                        }
                        content += '<td class="am-hide-sm-only">' + json[i].username +'</td>' +
                            '<td>' + json[i].usertel + '</td>' +
                            '<td class="am-hide-sm-only">' + json[i].price + '</td>';
                        if(json[i].flag == "0"){
                            content += '<td class="shenhe">已付款</td>';
                        }else if(json[i].flag == "1"){
                            content += '<td class="shenhe">未付款</td>';
                        }else{
                            content += '<td class="shenhe">待审核</td>';
                        }

                        if(json[i].service == "2" || json[i].service == "4"){
                            content += '<td>' + json[i].fatime + '</td>';
                        }else{
                            content += '<td>' + json[i].ctime + '</td>';
                        }
                        if(json[i].service == "1" || json[i].service == "3"){
                            content += '<td>\n' +
                                '        <div class="am-btn-toolbar">\n' +
                                '            <div class="am-btn-group am-btn-group-xs">\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary edit"><span class="am-icon-pencil-square-o"></span> 编辑</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-success pay"><span class="am-icon-cny"></span>付款</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning check"><span class="am-icon-check"></span>审核</button>\n' +
                                '                <div class="am-dropdown doc-dropdown-js">\n' +
                                '                                                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-primary am-dropdown-toggle" data-am-dropdown-toggle>\n' +
                                '                                                    <span class="am-icon-caret-down"></span>项目进度\n' +
                                '                                                </button>\n' +
                                '                                                <ul class="am-dropdown-content">\n' +
                                '                                                    <li><a href="javascript;" class="schedule1" value="0" onclick="return false">项目未开工</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule1" value="1" onclick="return false">项目开工</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule1" value="2" onclick="return false">完成初稿</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule1" value="3" onclick="return false">修改反馈</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule1" value="4" onclick="return false">项目完成</a></li>\n' +
                                '                                                </ul>\n' +
                                '                                            </div>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger  delete"><span class="am-icon-trash-o"></span> 删除</button>\n' +
                                '            </div>\n' +
                                '        </div>\n' +
                                '    </td>' +
                                '</tr>';
                        }else if(json.service == "2"){
                            content += '<td>\n' +
                                '        <div class="am-btn-toolbar">\n' +
                                '            <div class="am-btn-group am-btn-group-xs">\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary edit"><span class="am-icon-pencil-square-o"></span> 编辑</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-success pay"><span class="am-icon-cny"></span>付款</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning check"><span class="am-icon-check"></span>审核</button>\n' +
                                '                <div class="am-dropdown doc-dropdown-js">\n' +
                                '                                                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-primary am-dropdown-toggle" data-am-dropdown-toggle>\n' +
                                '                                                    <span class="am-icon-caret-down"></span>项目进度\n' +
                                '                                                </button>\n' +
                                '                                                <ul class="am-dropdown-content">\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="0" onclick="return false">稿件未送审</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="1" onclick="return false">稿件送审中</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="2" onclick="return false">稿件已录用</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="3" onclick="return false">稿件待出刊</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="4" onclick="return false">稿件已出刊</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="5" onclick="return false">稿件返修</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="6" onclick="return false">退稿</a></li>\n' +
                                '                                                </ul>\n' +
                                '                                            </div>\n'+
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger  delete"><span class="am-icon-trash-o"></span> 删除</button>\n' +
                                '            </div>\n' +
                                '        </div>\n' +
                                '    </td>' +
                                '</tr>';
                        }else{
                            content += '<td>\n' +
                                '        <div class="am-btn-toolbar">\n' +
                                '            <div class="am-btn-group am-btn-group-xs">\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary edit"><span class="am-icon-pencil-square-o"></span> 编辑</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-success pay"><span class="am-icon-cny"></span>付款</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning check"><span class="am-icon-check"></span>审核</button>\n' +
                                '                <div class="am-dropdown doc-dropdown-js">\n' +
                                '                                                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-primary am-dropdown-toggle" data-am-dropdown-toggle>\n' +
                                '                                                    <span class="am-icon-caret-down"></span>项目进度\n' +
                                '                                                </button>\n' +
                                '                                                <ul class="am-dropdown-content">\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="0" onclick="return false">项目未开工</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="1" onclick="return false">稿件写作中</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="2" onclick="return false">稿件完成</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="3" onclick="return false">稿件送审中</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="4" onclick="return false">稿件已录用</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="5" onclick="return false">稿件待出刊</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="6" onclick="return false">稿件已出刊</a></li>\n' +
                                '                                                </ul>\n' +
                                '                                            </div>\n'+
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger  delete"><span class="am-icon-trash-o"></span> 删除</button>\n' +
                                '            </div>\n' +
                                '        </div>\n' +
                                '    </td>' +
                                '</tr>';
                        }
                    }
                    $(".or").append(content);
                    $('.doc-dropdown-js').dropdown({justify: '.doc-dropdown-justify-js'});
                }
            })
        })
        $('#orderType').change(function () {
            var id = $('#selectType').val();
            var oid = $('#orderType').val();
            var rid = $('#rateType').val();
            $.ajax({
                type: "POST",
                url: "<?php echo url('table/order_list'); ?>",
                data: {"id":id, "oid":oid, "rid":rid},
                dataType: "json",
                success:function (data) {
                    var json = eval(data);
                    var content = "";
                    $(".or").empty();
                    $(".am-cf").empty();
                    for(var i=0;i<json.length;i++){
                        b = i + 1;
                        content +=
                            '<tr>' +
                            '<td><input type="checkbox"></td>' +
                            '<td>' + b + '</td>' +
                            '<td class="order"><a href="<?php echo url('table/order_list_detail',['order' => $vo['order']]); ?>">' + json[i].order +'</a></td>' +
                            '<td>' + json[i].title + '</td>';
                        if(json[i].service == "1"){
                            content += '<td>文稿代写</td>';
                            if(json[i].complete == "0"){
                                content += '<td>项目未开工</td>\n';
                            }else if(json[i].complete == "1"){
                                content += '<td>项目开工</td>\n';
                            }else if(json[i].complete == "2"){
                                content += '<td>完成初稿</td>\n';
                            }else if(json[i].complete == "3"){
                                content += '<td>修改反馈</td>\n';
                            }else{
                                content += '<td>项目完成</td>\n';
                            }
                        }else if(json[i].service == "2"){
                            content += '<td>期刊发表</td>';
                            if(json[i].complete == "0"){
                                content += '<td>稿件未送审</td>\n';
                            }else if(json[i].complete == "1"){
                                content += '<td>稿件送审中</td>\n';
                            }else if(json[i].complete == "2"){
                                content += '<td>稿件已录用</td>\n';
                            }else if(json[i].complete == "3"){
                                content += '<td>稿件待出刊</td>\n';
                            }else if(json[i].complete == "4"){
                                content += '<td>稿件已出刊</td>\n';
                            }else if(json[i].complete == "5"){
                                content += '<td>稿件返修</td>\n';
                            }else{
                                content += '<td>退稿</td>\n';
                            }
                        }else if(json[i].service == "3"){
                            content += '<td>论文修改</td>';
                            if(json[i].complete == "0"){
                                content += '<td>项目未开工</td>\n';
                            }else if(json[i].complete == "1"){
                                content += '<td>项目开工</td>\n';
                            }else if(json[i].complete == "2"){
                                content += '<td>完成初稿</td>\n';
                            }else if(json[i].complete == "3"){
                                content += '<td>修改反馈</td>\n';
                            }else{
                                content += '<td>项目完成</td>\n';
                            }
                        }else{
                            content += '<td>包写包发</td>';
                            if(json[i].complete == "0"){
                                content += '<td>项目未开工</td>\n';
                            }else if(json[i].complete == "1"){
                                content += '<td>稿件写作中</td>\n';
                            }else if(json[i].complete == "2"){
                                content += '<td>稿件完成</td>\n';
                            }else if(json[i].complete == "3"){
                                content += '<td>稿件送审中</td>\n';
                            }else if(json[i].complete == "4"){
                                content += '<td>稿件已录用</td>\n';
                            }else if(json[i].complete == "5"){
                                content += '<td>稿件待出刊</td>\n';
                            }else{
                                content += '<td>稿件已出刊</td>\n';
                            }
                        }
                        content += '<td class="am-hide-sm-only">' + json[i].username +'</td>' +
                            '<td>' + json[i].usertel + '</td>' +
                            '<td class="am-hide-sm-only">' + json[i].price + '</td>';
                        if(json[i].flag == "0"){
                            content += '<td class="shenhe">已付款</td>';
                        }else if(json[i].flag == "1"){
                            content += '<td class="shenhe">未付款</td>';
                        }else{
                            content += '<td class="shenhe">待审核</td>';
                        }

                        if(json[i].service == "2" || json[i].service == "4"){
                            content += '<td>' + json[i].fatime + '</td>';
                        }else{
                            content += '<td>' + json[i].ctime + '</td>';
                        }
                        if(json[i].service == "1" || json[i].service == "3"){
                            content += '<td>\n' +
                                '        <div class="am-btn-toolbar">\n' +
                                '            <div class="am-btn-group am-btn-group-xs">\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary edit"><span class="am-icon-pencil-square-o"></span> 编辑</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-success pay"><span class="am-icon-cny"></span>付款</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning check"><span class="am-icon-check"></span>审核</button>\n' +
                                '                <div class="am-dropdown doc-dropdown-js">\n' +
                                '                                                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-primary am-dropdown-toggle" data-am-dropdown-toggle>\n' +
                                '                                                    <span class="am-icon-caret-down"></span>项目进度\n' +
                                '                                                </button>\n' +
                                '                                                <ul class="am-dropdown-content">\n' +
                                '                                                    <li><a href="javascript;" class="schedule1" value="0" onclick="return false">项目未开工</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule1" value="1" onclick="return false">项目开工</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule1" value="2" onclick="return false">完成初稿</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule1" value="3" onclick="return false">修改反馈</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule1" value="4" onclick="return false">项目完成</a></li>\n' +
                                '                                                </ul>\n' +
                                '                                            </div>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger  delete"><span class="am-icon-trash-o"></span> 删除</button>\n' +
                                '            </div>\n' +
                                '        </div>\n' +
                                '    </td>' +
                                '</tr>';
                        }else if(json.service == "2"){
                            content += '<td>\n' +
                                '        <div class="am-btn-toolbar">\n' +
                                '            <div class="am-btn-group am-btn-group-xs">\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary edit"><span class="am-icon-pencil-square-o"></span> 编辑</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-success pay"><span class="am-icon-cny"></span>付款</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning check"><span class="am-icon-check"></span>审核</button>\n' +
                                '                <div class="am-dropdown doc-dropdown-js">\n' +
                                '                                                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-primary am-dropdown-toggle" data-am-dropdown-toggle>\n' +
                                '                                                    <span class="am-icon-caret-down"></span>项目进度\n' +
                                '                                                </button>\n' +
                                '                                                <ul class="am-dropdown-content">\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="0" onclick="return false">稿件未送审</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="1" onclick="return false">稿件送审中</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="2" onclick="return false">稿件已录用</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="3" onclick="return false">稿件待出刊</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="4" onclick="return false">稿件已出刊</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="5" onclick="return false">稿件返修</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="6" onclick="return false">退稿</a></li>\n' +
                                '                                                </ul>\n' +
                                '                                            </div>\n'+
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger  delete"><span class="am-icon-trash-o"></span> 删除</button>\n' +
                                '            </div>\n' +
                                '        </div>\n' +
                                '    </td>' +
                                '</tr>';
                        }else{
                            content += '<td>\n' +
                                '        <div class="am-btn-toolbar">\n' +
                                '            <div class="am-btn-group am-btn-group-xs">\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary edit"><span class="am-icon-pencil-square-o"></span> 编辑</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-success pay"><span class="am-icon-cny"></span>付款</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning check"><span class="am-icon-check"></span>审核</button>\n' +
                                '                <div class="am-dropdown doc-dropdown-js">\n' +
                                '                                                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-primary am-dropdown-toggle" data-am-dropdown-toggle>\n' +
                                '                                                    <span class="am-icon-caret-down"></span>项目进度\n' +
                                '                                                </button>\n' +
                                '                                                <ul class="am-dropdown-content">\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="0" onclick="return false">项目未开工</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="1" onclick="return false">稿件写作中</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="2" onclick="return false">稿件完成</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="3" onclick="return false">稿件送审中</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="4" onclick="return false">稿件已录用</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="5" onclick="return false">稿件待出刊</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="6" onclick="return false">稿件已出刊</a></li>\n' +
                                '                                                </ul>\n' +
                                '                                            </div>\n'+
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger  delete"><span class="am-icon-trash-o"></span> 删除</button>\n' +
                                '            </div>\n' +
                                '        </div>\n' +
                                '    </td>' +
                                '</tr>';
                        }
                    }
                    $(".or").append(content);
                    $('.doc-dropdown-js').dropdown({justify: '.doc-dropdown-justify-js'});
                }
            })
        })
        $('#nav').on("change", "#rateType", function () {
            var id = $('#selectType').val();
            var oid = $('#orderType').val();
            var rid = $('#rateType').val();
            $.ajax({
                type: "POST",
                url: "<?php echo url('table/order_list'); ?>",
                data: {"id":id, "oid":oid, "rid":rid},
                dataType: "json",
                success:function (data) {
                    var json = eval(data);
                    var content = "";
                    $(".or").empty();
                    $(".am-cf").empty();
                    for(var i=0;i<json.length;i++){
                        b = i + 1;
                        content +=
                            '<tr>' +
                            '<td><input type="checkbox"></td>' +
                            '<td>' + b + '</td>' +
                            '<td class="order"><a href="<?php echo url('table/order_list_detail',['order' => $vo['order']]); ?>">' + json[i].order +'</a></td>' +
                            '<td>' + json[i].title + '</td>';
                        if(json[i].service == "1"){
                            content += '<td>文稿代写</td>';
                            if(json[i].complete == "0"){
                                content += '<td>项目未开工</td>\n';
                            }else if(json[i].complete == "1"){
                                content += '<td>项目开工</td>\n';
                            }else if(json[i].complete == "2"){
                                content += '<td>完成初稿</td>\n';
                            }else if(json[i].complete == "3"){
                                content += '<td>修改反馈</td>\n';
                            }else{
                                content += '<td>项目完成</td>\n';
                            }
                        }else if(json[i].service == "2"){
                            content += '<td>期刊发表</td>';
                            if(json[i].complete == "0"){
                                content += '<td>稿件未送审</td>\n';
                            }else if(json[i].complete == "1"){
                                content += '<td>稿件送审中</td>\n';
                            }else if(json[i].complete == "2"){
                                content += '<td>稿件已录用</td>\n';
                            }else if(json[i].complete == "3"){
                                content += '<td>稿件待出刊</td>\n';
                            }else if(json[i].complete == "4"){
                                content += '<td>稿件已出刊</td>\n';
                            }else if(json[i].complete == "5"){
                                content += '<td>稿件返修</td>\n';
                            }else{
                                content += '<td>退稿</td>\n';
                            }
                        }else if(json[i].service == "3"){
                            content += '<td>论文修改</td>';
                            if(json[i].complete == "0"){
                                content += '<td>项目未开工</td>\n';
                            }else if(json[i].complete == "1"){
                                content += '<td>项目开工</td>\n';
                            }else if(json[i].complete == "2"){
                                content += '<td>完成初稿</td>\n';
                            }else if(json[i].complete == "3"){
                                content += '<td>修改反馈</td>\n';
                            }else{
                                content += '<td>项目完成</td>\n';
                            }
                        }else{
                            content += '<td>包写包发</td>';
                            if(json[i].complete == "0"){
                                content += '<td>项目未开工</td>\n';
                            }else if(json[i].complete == "1"){
                                content += '<td>稿件写作中</td>\n';
                            }else if(json[i].complete == "2"){
                                content += '<td>稿件完成</td>\n';
                            }else if(json[i].complete == "3"){
                                content += '<td>稿件送审中</td>\n';
                            }else if(json[i].complete == "4"){
                                content += '<td>稿件已录用</td>\n';
                            }else if(json[i].complete == "5"){
                                content += '<td>稿件待出刊</td>\n';
                            }else{
                                content += '<td>稿件已出刊</td>\n';
                            }
                        }
                        content += '<td class="am-hide-sm-only">' + json[i].username +'</td>' +
                            '<td>' + json[i].usertel + '</td>' +
                            '<td class="am-hide-sm-only">' + json[i].price + '</td>';
                        if(json[i].flag == "0"){
                            content += '<td class="shenhe">已付款</td>';
                        }else if(json[i].flag == "1"){
                            content += '<td class="shenhe">未付款</td>';
                        }else{
                            content += '<td class="shenhe">待审核</td>';
                        }

                        if(json[i].service == "2" || json[i].service == "4"){
                            content += '<td>' + json[i].fatime + '</td>';
                        }else{
                            content += '<td>' + json[i].ctime + '</td>';
                        }
                        if(json[i].service == "1" || json[i].service == "3"){
                            content += '<td>\n' +
                                '        <div class="am-btn-toolbar">\n' +
                                '            <div class="am-btn-group am-btn-group-xs">\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary edit"><span class="am-icon-pencil-square-o"></span> 编辑</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-success pay"><span class="am-icon-cny"></span>付款</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning check"><span class="am-icon-check"></span>审核</button>\n' +
                                '                <div class="am-dropdown doc-dropdown-js">\n' +
                                '                                                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-primary am-dropdown-toggle" data-am-dropdown-toggle>\n' +
                                '                                                    <span class="am-icon-caret-down"></span>项目进度\n' +
                                '                                                </button>\n' +
                                '                                                <ul class="am-dropdown-content">\n' +
                                '                                                    <li><a href="javascript;" class="schedule1" value="0" onclick="return false">项目未开工</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule1" value="1" onclick="return false">项目开工</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule1" value="2" onclick="return false">完成初稿</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule1" value="3" onclick="return false">修改反馈</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule1" value="4" onclick="return false">项目完成</a></li>\n' +
                                '                                                </ul>\n' +
                                '                                            </div>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger  delete"><span class="am-icon-trash-o"></span> 删除</button>\n' +
                                '            </div>\n' +
                                '        </div>\n' +
                                '    </td>' +
                                '</tr>';
                        }else if(json.service == "2"){
                            content += '<td>\n' +
                                '        <div class="am-btn-toolbar">\n' +
                                '            <div class="am-btn-group am-btn-group-xs">\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary edit"><span class="am-icon-pencil-square-o"></span> 编辑</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-success pay"><span class="am-icon-cny"></span>付款</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning check"><span class="am-icon-check"></span>审核</button>\n' +
                                '                <div class="am-dropdown doc-dropdown-js">\n' +
                                '                                                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-primary am-dropdown-toggle" data-am-dropdown-toggle>\n' +
                                '                                                    <span class="am-icon-caret-down"></span>项目进度\n' +
                                '                                                </button>\n' +
                                '                                                <ul class="am-dropdown-content">\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="0" onclick="return false">稿件未送审</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="1" onclick="return false">稿件送审中</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="2" onclick="return false">稿件已录用</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="3" onclick="return false">稿件待出刊</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="4" onclick="return false">稿件已出刊</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="5" onclick="return false">稿件返修</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule2" value="6" onclick="return false">退稿</a></li>\n' +
                                '                                                </ul>\n' +
                                '                                            </div>\n'+
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger  delete"><span class="am-icon-trash-o"></span> 删除</button>\n' +
                                '            </div>\n' +
                                '        </div>\n' +
                                '    </td>' +
                                '</tr>';
                        }else{
                            content += '<td>\n' +
                                '        <div class="am-btn-toolbar">\n' +
                                '            <div class="am-btn-group am-btn-group-xs">\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary edit"><span class="am-icon-pencil-square-o"></span> 编辑</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-success pay"><span class="am-icon-cny"></span>付款</button>\n' +
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning check"><span class="am-icon-check"></span>审核</button>\n' +
                                '                <div class="am-dropdown doc-dropdown-js">\n' +
                                '                                                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-primary am-dropdown-toggle" data-am-dropdown-toggle>\n' +
                                '                                                    <span class="am-icon-caret-down"></span>项目进度\n' +
                                '                                                </button>\n' +
                                '                                                <ul class="am-dropdown-content">\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="0" onclick="return false">项目未开工</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="1" onclick="return false">稿件写作中</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="2" onclick="return false">稿件完成</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="3" onclick="return false">稿件送审中</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="4" onclick="return false">稿件已录用</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="5" onclick="return false">稿件待出刊</a></li>\n' +
                                '                                                    <li><a href="javascript;" class="schedule3" value="6" onclick="return false">稿件已出刊</a></li>\n' +
                                '                                                </ul>\n' +
                                '                                            </div>\n'+
                                '                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger  delete"><span class="am-icon-trash-o"></span> 删除</button>\n' +
                                '            </div>\n' +
                                '        </div>\n' +
                                '    </td>' +
                                '</tr>';

                        }
                    }
                    $(".or").append(content);
                    $('.doc-dropdown-js').dropdown({justify: '.doc-dropdown-justify-js'});
                }
            })
        })
    </script>
    <script type="text/javascript">
        //编辑按钮事件
        $('.or').on('click', '.edit', function () {
            var order = $(this).parent().parent().parent().parent().children('.order').text();
            url = "<?php echo url('table/order_list_detail'); ?>";
            str = url + '?order=' +order;
            window.location.href=str;
        })

        //付款按钮事件
        $('.or').on('click', '.pay', function () {
            var order = $(this).parent().parent().parent().parent().children('.order').text();
            var pay = $(this).parent().parent().parent().parent().children('.shenhe');
            $.ajax({
                type:"POST",
                url:"<?php echo url('table/pay'); ?>",
                data: {"order":order},
                dataType: "json",
                success:function (data) {
                    if(data != 0){
                        pay.empty();
                        alert("付款成功！");
                        var content = "已付款";
                        pay.append(content);
                    }else{
                        alert("该订单已经付款了，请勿再点击付款按钮！");
                    }
                }
            })
        })

        //审核按钮事件
        $('.or').on('click', '.check', function () {
            var order = $(this).parent().parent().parent().parent().children('.order').text();
            var shenhe = $(this).parent().parent().parent().parent().children('.shenhe');
            $.ajax({
                type:"POST",
                url:"<?php echo url('table/check'); ?>",
                data: {"order":order},
                dataType: "json",
                success:function (data) {
                    if(data != 0){
                        shenhe.empty();
                        alert("审核成功！");
                        var content = "未付款";
                        shenhe.append(content);
                    }else{
                        alert("已审核了，请勿重复审核!");
                        return false;
                    }
                }
            })
        })
        //文稿代写或论文修改项目进度按钮事件
        $(".or").on("click", ".schedule1", function () {
            var id = $(this).attr('value');
            var order = $(this).parent().parent().parent().parent().parent().parent().parent().children('.order').text();
            $.ajax({
                type: "post",
                url: "<?php echo url('table/schedule'); ?>",
                data: {"id":id, "order":order},
                dataType: "json",
                success:function (data) {
                    if(data != 0 ){
                        alert("项目进度更改成功！");
                        window.location.reload();
                    }else{
                        alert("项目进度更改失败！");
                        return false;
                    }
                }
            });
        })

        //期刊发表项目进度按钮事件
        $(".or").on("click", ".schedule2", function () {
            var id = $(this).attr('value');
            var order = $(this).parent().parent().parent().parent().parent().parent().parent().children('.order').text();
            $.ajax({
                type: "post",
                url: "<?php echo url('table/schedule'); ?>",
                data: {"id":id, "order":order},
                dataType: "json",
                success:function (data) {
                    if(data != 0 ){
                        alert("项目进度更改成功！");
                        window.location.reload();
                    }else{
                        alert("项目进度更改失败！");
                        return false;
                    }
                }
            });
        })

        //包写包发项目进度按钮事件
        $(".or").on("click", ".schedule3", function () {
            var id = $(this).attr('value');
            var order = $(this).parent().parent().parent().parent().parent().parent().parent().children('.order').text();
            $.ajax({
                type: "post",
                url: "<?php echo url('table/schedule'); ?>",
                data: {"id":id, "order":order},
                dataType: "json",
                success:function (data) {
                    if(data != 0 ){
                        alert("项目进度更改成功！");
                        window.location.reload();
                    }else{
                        alert("项目进度更改失败！");
                        return false;
                    }
                }
            });
        })

        //删除按钮事件
        $('.or').on('click', '.delete', function () {
            var order = $(this).parent().parent().parent().parent().children('.order').text();
            $.ajax({
                type:"POST",
                url:"<?php echo url('table/delete'); ?>",
                data: {"order":order},
                dataType: "json",
                success:function (data) {
                    if(data == 1){
                        window.location.reload();
                    }else{
                        alert("订单删除失败!");
                    }
                }
            })
        })

    </script>
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