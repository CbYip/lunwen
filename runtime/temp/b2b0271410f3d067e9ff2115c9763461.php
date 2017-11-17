<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:63:"D:\WebTest\lunwen\lunwen/admin/index\view\goods\goods_list.html";i:1506417450;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\header.html";i:1506646436;s:58:"D:\WebTest\lunwen\lunwen/admin/index\view\public\left.html";i:1507431544;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\footer.html";i:1504506358;}*/ ?>
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
                            <button type="button" class="am-btn am-btn-default am-btn-success" onclick="window.location.href='<?php echo url('goods/goods_add'); ?>'"><span class="am-icon-plus"></span> 新增</button>
                            <button type="button" class="am-btn am-btn-default am-btn-danger delete"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                    </div>
                </div>
                <div class="am-u-sm-12 am-u-md-3">
                    <div class="am-form-group">
                        <select id="selectType">
                            <option value="0">所有类别</option>
                            <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $vo['ID']; ?>"><?php echo $vo['typename']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
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
                                <th class="table-num">库存</th>
                                <th class="table-price am-hide-sm-only">单价</th>
                                <th class="table-date am-hide-sm-only">单积分</th>
                                <th class="table-type">品牌</th>
                                <th class="table-flag">商品状态</th>
                                <th class="table-sales">销量</th>
                                <th class="table-orders">订单</th>
                                <th class="table-comment">评论</th>
                                <th class="table-type">操作</th>
                            </tr>
                            </thead>
                            <tbody class="shoplist">
                            <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td><input type="checkbox" class="check"></td>
                                <td><?php echo $i;?></td>
                                <td><a href="<?php echo url('goods/edit', ['id' => $vo1['ID']]); ?>"><?php echo $vo1['goodsname']; ?></a></td>
                                <td><?php echo $vo1['goodsnum']; ?></td>
                                <td class="am-hide-sm-only"><?php echo $vo1['goodsprice']; ?></td>
                                <td><?php echo $vo1['score']; ?></td>
                                <td class="am-hide-sm-only"><?php echo $vo1['type']; ?></td>
                                <?php if($vo1['flag'] == 0): ?>
                                <td class="caozuo">未上架</td>
                                <?php else: ?>
                                <td class="caozuo">已上架</td>
                                <?php endif; ?>
                                <td><?php echo $vo1['sales']; ?></td>
                                <td><?php echo $vo1['orders']; ?></td>
                                <td><?php echo $vo1['comment']; ?></td>
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <input type="hidden" id="ID" name="id" value="<?php echo $vo1['ID']; ?>"/>
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary edit"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-success up"><span class="am-icon-arrow-circle-o-up"></span> 上架</button>
                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning down"><span class="am-icon-arrow-circle-o-down"></span> 下架</button>
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
                                <?php echo $goods->render(); ?>
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
    $('.edit').click(function () {
        var ID = $(this).parent().children('#ID').val();
        url = "<?php echo url('goods/goods_edit'); ?>";
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
            url: "<?php echo url('goods/gdelete'); ?>",
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
    $('.shoplist').on(  'click','.del',function () {
        var id = $(this).parent().children("#ID").val();
        $.ajax({
            type: "post",
            url: "<?php echo url('goods/gdel'); ?>",
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

    //上架
    $('.shoplist').on("click", ".up", function () {
        var id = $(this).parent().children("#ID").val();
        var flag = 1;
        var caozuo = $(this).parent().parent().parent().parent().children('.caozuo');
        $.ajax({
            type: "post",
            url: "<?php echo url('goods/caozuo'); ?>",
            data: {"id":id, "flag":flag},
            success:function (data) {
                if(data != 0){
                    caozuo.empty();
                    alert("商品上架成功！");
                    var content = "已上架";
                    caozuo.append(content);
                }else{
                    alert("商品上架失败！");
                    return false;
                }
            }
        })
    })

    //商品下架
    $('.shoplist').on("click", ".down", function () {
        var id = $(this).parent().children("#ID").val();
        var flag = 0;
        var caozuo = $(this).parent().parent().parent().parent().children('.caozuo');
        $.ajax({
            type: "post",
            url: "<?php echo url('goods/caozuo'); ?>",
            data: {"id":id, "flag":flag},
            success:function (data) {
                if(data != 0){
                    caozuo.empty();
                    alert("商品下架成功！");
                    var content = "未上架";
                    caozuo.append(content);
                }else{
                    alert("商品下架失败！");
                    return false;
                }
            }
        })
    })

    //商品分类筛选
    $("#selectType").change(function () {
        var id = $(this).val();
        $.ajax({
           type: "post",
           url: "<?php echo url('goods/type'); ?>",
            data: {"id":id},
            success:function (data) {
                var json = eval(data);
                var content = "";
                $('.shoplist').empty();
                for(var i = 0; i<json.length; i++){
                    var str = "<?php echo url('goods/edit'); ?>";
                    var url = str + "?id=" + json[i].ID;
                    content += '<tr>\n' +
                        '                                <td><input type="checkbox" class="check"></td>\n' +
                        '                                <td><?php echo $i;?></td>\n' +
                        '                                <td><a href="'+ url +'">'+ json[i].goodsname +'</a></td>\n' +
                        '                                <td>'+ json[i].goodsnum +'</td>\n' +
                        '                                <td class="am-hide-sm-only">'+ json[i].goodsprice +'</td>\n' +
                        '                                <td>'+ json[i].score +'</td>\n' +
                        '                                <td class="am-hide-sm-only">'+ json[i].type +'</td>';
                    if(json[i].flag == 0){
                        content += '<td class="caozuo">未上架</td>';
                    }else{
                        content += '<td class="caozuo">已上架</td>';
                    }
                    content += '<td>'+ json[i].sales +'</td>\n' +
                        '                                <td>'+ json[i].orders +'</td>\n' +
                        '                                <td>'+ json[i].comment +'</td>\n' +
                        '                                <td>\n' +
                        '                                    <div class="am-btn-toolbar">\n' +
                        '                                        <div class="am-btn-group am-btn-group-xs">\n' +
                        '                                            <input type="hidden" id="ID" name="id" value="<?php echo $vo1['ID']; ?>"/>\n' +
                        '                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary edit"><span class="am-icon-pencil-square-o"></span> 编辑</button>\n' +
                        '                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-success up"><span class="am-icon-arrow-circle-o-up"></span> 上架</button>\n' +
                        '                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-warning down"><span class="am-icon-arrow-circle-o-down"></span> 下架</button>\n' +
                        '                                            <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only del"><span class="am-icon-trash-o"></span> 删除</button>\n' +
                        '                                        </div>\n' +
                        '                                    </div>\n' +
                        '                                </td>\n' +
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