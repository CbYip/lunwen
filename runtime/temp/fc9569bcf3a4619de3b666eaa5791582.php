<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:67:"D:\WebTest\lunwen\lunwen/admin/index\view\goods\shoporder_list.html";i:1506587018;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\header.html";i:1506646436;s:58:"D:\WebTest\lunwen\lunwen/admin/index\view\public\left.html";i:1507431544;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\footer.html";i:1504506358;}*/ ?>
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
        商品列表
    </div>
    <ol class="am-breadcrumb">
        <li><a href="/admin.php" class="am-icon-home">首页</a></li>
        <li class="am-active">商品列表</li>
    </ol>
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 列表
            </div>
        </div>
        <div class="tpl-block">
            <div>
                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                            <!--<button type="button" class="am-btn am-btn-default am-btn-success" onclick="window.location.href='<?php echo url('goods/goods_add'); ?>'"><span class="am-icon-plus"></span> 新增</button>-->
                            <button type="button" class="am-btn am-btn-default am-btn-danger delete"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                    </div>
                </div>
                <div class="am-u-sm-12 am-u-md-3">
                    <div class="am-form-group">
                        <select id="selectType" >
                            <option value="a" selected>订单状态</option>
                            <option value="0">未付款</option>
                            <option value="1">已付款</option>
                        </select>
                    </div>
                </div>
                <div class="am-u-sm-12 am-u-md-3">
                    <div class="am-form-group">
                        <select id="selectType1">
                            <option value="b" selected>商品状态</option>
                            <option value="0">未发货</option>
                            <option value="1">已发货</option>
                            <option value="2">已收货</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="am-g">
                <div class="am-u-sm-12">
                    <form class="am-form">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr>
                                <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                <th class="table-id">ID</th>
                                <th class="table-title">商品名称</th>
                                <th class="table-num">数量</th>
                                <th class="table-price am-hide-sm-only">总价</th>
                                <th class="table-date am-hide-sm-only">总积分</th>
                                <th class="table-type">订单编号</th>
                                <th class="table-flag">订单状态</th>
                                <th class="table-sales">商品状态</th>
                                <th class="table-comment">收货人姓名</th>
                                <th class="table-comment">收货联系方式</th>
                                <th class="table-comment">收货地址</th>
                                <th class="table-orders">订单生成日期</th>
                                <th class="table-size">尺寸</th>
                                <th class="table-color">颜色</th>
                                <th class="table-type">操作</th>
                            </tr>
                            </thead>
                            <tbody class="shoplist">
                            <?php if(is_array($shoporder) || $shoporder instanceof \think\Collection || $shoporder instanceof \think\Paginator): $i = 0; $__LIST__ = $shoporder;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td><input type="checkbox" class="check"></td>
                                <td><?php echo $i;?></td>
                                <td><?php echo $vo1['goodsname']; ?></td>
                                <td><?php echo $vo1['num']; ?></td>
                                <td class="am-hide-sm-only"><?php echo $vo1['total']; ?></td>
                                <td><?php echo $vo1['score']; ?></td>
                                <td class="am-hide-sm-only"><?php echo $vo1['ordernumber']; ?></td>
                                <?php if($vo1['flag'] == 0): ?>
                                <td class="caozuo">未付款</td>
                                <?php else: ?>
                                <td class="caozuo">已付款</td>
                                <?php endif; if($vo1['shopflag'] == 0): ?>
                                <td class="shang">未发货</td>
                                <?php elseif($vo1['shopflag'] == 1): ?>
                                <td class="shang">已发货</td>
                                <?php else: ?>
                                <td class="shang">已收货</td>
                                <?php endif; ?>
                                <td><?php echo $vo1['addname']; ?></td>
                                <td><?php echo $vo1['addtel']; ?></td>
                                <td><?php echo $vo1['addcity']; ?>&nbsp;<?php echo $vo1['addcitydetail']; ?></td>
                                <td><?php echo $vo1['time']; ?></td>
                                <td><?php echo $vo1['size']; ?></td>
                                <td><?php echo $vo1['color']; ?></td>
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <input type="hidden" id="ID" name="id" value="<?php echo $vo1['ID']; ?>"/>
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary edit"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-success pay"><span class="am-icon-arrow-circle-o-up"></span> 付款</button>
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning fahuo"><span class="am-icon-mail-forward"></span> 发货</button>
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning shouhuo"><span class="am-icon-mail-reply"></span> 收货</button>
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only del"><span class="am-icon-trash-o"></span> 删除</button>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                        <div class="am-cf">
                            <div class="am-fr">
                                <?php echo $shoporder->render(); ?>
                            </div>
                        </div>
                        <hr>

                    </form>
                </div>

            </div>
        </div>
        <div class="tpl-alert"></div>
    </div>
</div>
<script type="text/javascript">
    //编辑按钮
    $('.shoplist').on("click",".edit",function () {
        var ID = $(this).parent().children('#ID').val();
        url = "<?php echo url('goods/shoplist_detail'); ?>";
        str = url + '?id=' +ID;
        window.location.href=str;
    })

    //全选或取消
    $(".tpl-table-fz-check").click(function () {
            if($(this).is(":checked")){
                $('.check').prop("checked", true);
            }else{
                $('.check').prop("checked", false);
            }
        }
    )

    //批量删除
    $(".delete").click(function () {
        var temp = "";
        $(".check:checked").each(function () {
            var tablerow = $(this).parent().parent("tr");
            var id = tablerow.find("input[name='id']").val();
            temp += id + ",";
        });
        $.ajax({
            type: "post",
            url: "<?php echo url('goods/delete_all'); ?>",
            data: {'temp':temp},
            datatype: "json",
            success:function (data) {
                if(data == 0){
                    alert("删除失败!");
                    window.location.href="<?php echo url('goods/goods_type'); ?>";
                }else{
                    alert("删除成功！");
                    window.location.reload();
                }
            }
        })
    })

    //单个删除
    $('.shoplist').on('click','.del',function () {
        var id = $(this).parent().children("#ID").val();
        $.ajax({
            type: "post",
            url: "<?php echo url('goods/delete_one'); ?>",
            data: {"id":id},
            dataType:"json",
            success:function (data) {
                if(data != 0){
                    alert("删除成功！");
                    window.location.reload();
                }else{
                    alert("删除失败！");
                    window.location.reload();
                }
            }
        });
    })

    //付款按钮事件
    $('.shoplist').on("click", ".pay", function () {
        var id = $(this).parent().children("#ID").val();
        var flag = 1;
        var caozuo = $(this).parent().parent().parent().parent().children('.caozuo');
        $.ajax({
            type: "post",
            url: "<?php echo url('goods/pay'); ?>",
            data: {"id":id, "flag":flag},
            success:function (data) {
                if(data != 0){
                    caozuo.empty();
                    alert("付款成功！");
                    var content = "已付款";
                    caozuo.append(content);
                }else{
                    alert("付款失败，该用户个人积分不足！");
                    return false;
                }
            }
        })
    })

    //商品发货按钮事件
    $('.shoplist').on("click", ".fahuo", function () {
        var id = $(this).parent().children("#ID").val();
        var flag = 1;
        var caozuo = $(this).parent().parent().parent().parent().children('.shang');
        var fukuan = $(this).parent().parent().parent().parent().children('.caozuo');
        if(caozuo.text() == '已收货' || fukuan.text() == '未付款'){
            alert("该商品已经收货或未付款，请勿重复点击！");
            return false;
        }else if(caozuo.text() == '已发货'){
            alert("该商品已经发货，请勿点击重复点击！");
            return false;
        }else{
            $.ajax({
                type: "post",
                url: "<?php echo url('goods/fashou'); ?>",
                data: {"id":id, "flag":flag},
                success:function (data) {
                    if(data != 0){
                        caozuo.empty();
                        alert("商品发货成功！");
                        var content = "已发货";
                        caozuo.append(content);
                    }else{
                        alert("商品发货失败！");
                        return false;
                    }
                }
            })
        }
    })

    //商品收货按钮事件
    $('.shoplist').on("click", ".shouhuo", function () {
        var id = $(this).parent().children("#ID").val();
        var flag = 2;
        var caozuo = $(this).parent().parent().parent().parent().children('.shang');
        var fukuan = $(this).parent().parent().parent().parent().children('.caozuo');
        if(caozuo.text() == '未发货' || fukuan.text() == '未付款'){
            alert("该商品还未发货或未付款，请勿点击收货按钮！");
            return false;
        }else if(caozuo.text() == '已收货'){
            alert("该商品已经收货，请勿重复点击收货按钮！");
            return false;
        } else{
            $.ajax({
                type: "post",
                url: "<?php echo url('goods/fashou'); ?>",
                data: {"id":id, "flag":flag},
                success:function (data) {
                    if(data != 0){
                        caozuo.empty();
                        alert("商品收货成功！");
                        var content = "已收货";
                        caozuo.append(content);
                    }else{
                        alert("商品收货失败！");
                        return false;
                    }
                }
            })
        }
    })

    //商品订单分类筛选
    $("#selectType").change(function () {
        var id = $(this).val();
        var sid = $("#selectType1").val();
        $.ajax({
            type: "post",
            url: "<?php echo url('goods/select_shop'); ?>",
            data: {"id":id, "sid":sid},
            success:function (data) {
                var json = eval(data);
                var content = "";
                $('.shoplist').empty();
                var length = json.length;
                for(var i = 0; i<length; i++){
                    content += '<tr>\n' +
                        '                                <td><input type="checkbox" class="check"></td>\n' +
                        '                                <td><?php echo $i;?></td>\n' +
                        '                                <td>'+ json[i].goodsname +'</td>\n' +
                        '                                <td>'+ json[i].num +'</td>\n' +
                        '                                <td class="am-hide-sm-only">'+ json[i].total +'</td>\n' +
                        '                                <td>'+ json[i].score +'</td>\n' +
                        '                                <td class="am-hide-sm-only">'+ json[i].ordernumber +'</td>';
                    if(json[i].flag == 0){
                        content += '<td class="caozuo">未付款</td>';
                    }else{
                        content += '<td class="caozuo">已付款</td>';
                    }

                    if(json[i].shopflag == 0){
                        content += '<td class="shang">未发货</td>';
                    }else if(json[i].shopflag == 1){
                        content += '<td class="shang">已发货</td>';
                    }else{
                        content += '<td class="shang">已收货</td>';
                    }
                    content += '                         <td>'+ json[i].addname +'</td>\n' +
                        '                                <td>'+ json[i].addtel+'</td>\n' +
                        '                                <td>'+ json[i].addcity+'&nbsp;'+ json[i].addcitydetail+'</td>\n' +
                        '                                <td>'+ json[i].time+'</td>\n' +
                        '                                <td>'+ json[i].size+'</td>\n' +
                        '                                <td>'+ json[i].color+'</td>\n' +
                        '                                <td>\n' +
                        '                                    <div class="am-btn-toolbar">\n' +
                        '                                        <div class="am-btn-group am-btn-group-xs">\n' +
                        '                                            <input type="hidden" id="ID" name="id" value="<?php echo $vo1['ID']; ?>"/>\n' +
                        '                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary edit"><span class="am-icon-pencil-square-o"></span> 编辑</button>\n' +
                        '                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-success pay"><span class="am-icon-arrow-circle-o-up"></span> 付款</button>\n' +
                        '                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning fahuo"><span class="am-icon-mail-forward"></span> 发货</button>\n' +
                        '                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning shouhuo"><span class="am-icon-mail-reply"></span> 收货</button>\n' +
                        '                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only del"><span class="am-icon-trash-o"></span> 删除</button>\n' +
                        '                                        </div>\n' +
                        '                                    </div>\n' +
                        '                                </td>\n' +
                        '\n' +
                        '                            </tr>';
                }
                $('.shoplist').append(content);
            }
        });
    })

    //商品订单分类筛选
    $("#selectType1").change(function () {
        var id = $("#selectType").val();
        var sid = $(this).val();
        $.ajax({
            type: "post",
            url: "<?php echo url('goods/select_shop'); ?>",
            data: {"id":id, "sid":sid},
            success:function (data) {
                var json = eval(data);
                var content = "";
                $('.shoplist').empty();
                var length = json.length;
                for(var i = 0; i<length; i++){
                    content += '<tr>\n' +
                        '                                <td><input type="checkbox" class="check"></td>\n' +
                        '                                <td><?php echo $i;?></td>\n' +
                        '                                <td>'+ json[i].goodsname +'</td>\n' +
                        '                                <td>'+ json[i].num +'</td>\n' +
                        '                                <td class="am-hide-sm-only">'+ json[i].total +'</td>\n' +
                        '                                <td>'+ json[i].score +'</td>\n' +
                        '                                <td class="am-hide-sm-only">'+ json[i].ordernumber +'</td>';
                    if(json[i].flag == 0){
                        content += '<td class="caozuo">未付款</td>';
                    }else{
                        content += '<td class="caozuo">已付款</td>';
                    }

                    if(json[i].shopflag == 0){
                        content += '<td class="shang">未发货</td>';
                    }else if(json[i].shopflag == 1){
                        content += '<td class="shang">已发货</td>';
                    }else{
                        content += '<td class="shang">已收货</td>';
                    }
                    content += '                         <td>'+ json[i].addname +'</td>\n' +
                        '                                <td>'+ json[i].addtel+'</td>\n' +
                        '                                <td>'+ json[i].addcity+'&nbsp;'+ json[i].addcitydetail+'</td>\n' +
                        '                                <td>'+ json[i].time+'</td>\n' +
                        '                                <td>'+ json[i].size+'</td>\n' +
                        '                                <td>'+ json[i].color+'</td>\n' +
                        '                                <td>\n' +
                        '                                    <div class="am-btn-toolbar">\n' +
                        '                                        <div class="am-btn-group am-btn-group-xs">\n' +
                        '                                            <input type="hidden" id="ID" name="id" value="<?php echo $vo1['ID']; ?>"/>\n' +
                        '                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary edit"><span class="am-icon-pencil-square-o"></span> 编辑</button>\n' +
                        '                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-success pay"><span class="am-icon-arrow-circle-o-up"></span> 付款</button>\n' +
                        '                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning fahuo"><span class="am-icon-mail-forward"></span> 发货</button>\n' +
                        '                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning shouhuo"><span class="am-icon-mail-reply"></span> 收货</button>\n' +
                        '                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only del"><span class="am-icon-trash-o"></span> 删除</button>\n' +
                        '                                        </div>\n' +
                        '                                    </div>\n' +
                        '                                </td>\n' +
                        '\n' +
                        '                            </tr>';
                }
                $('.shoplist').append(content);
            }
        });
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