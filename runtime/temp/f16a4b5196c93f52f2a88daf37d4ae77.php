<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:58:"D:\WebTest\lunwen\lunwen/admin/index\view\index\index.html";i:1509009087;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\header.html";i:1506646436;s:58:"D:\WebTest\lunwen\lunwen/admin/index\view\public\left.html";i:1507431544;s:60:"D:\WebTest\lunwen\lunwen/admin/index\view\public\footer.html";i:1504506358;}*/ ?>
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
<script type="text/javascript" charset="utf-8" src="__JS__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__JS__/ueditor/ueditor.all.min.js"></script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="__JS__/ueditor/lang/zh-cn/zh-cn.js"></script>

<div class="tpl-content-wrapper">
    <div class="tpl-content-page-title">
        易起论文微信公众号后台
    </div>
    <ol class="am-breadcrumb">
        <li><a href="/" class="am-icon-home">首页</a></li>
        <li class="am-active">内容</li>
    </ol>
    <div class="tpl-content-scope">
        <div class="note note-info">
            <h3>易起论文
                <span class="close" data-close="note"></span>
            </h3>
            <p> 老牌论文网站易起论文网，提供论文资讯、文秘写作，论文发表、在线订单，积分商城等服务。</p>
            <p><span class="label label-danger">提示:</span> 易起论文官方微信号：lunwenchina
            </p>
        </div>
    </div>

    <div class="row">
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
            <div class="dashboard-stat blue">
                <div class="visual">
                    <i class="am-icon-comments-o"></i>
                </div>
                <div class="details">
                    <div class="number"> <?php echo $data['user']; ?></div>
                    <div class="desc"> 用户管理</div>
                </div>
                <a class="more" href="<?php echo url('index/chart'); ?>"> 查看更多
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
            <div class="dashboard-stat red">
                <div class="visual">
                    <i class="am-icon-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number"> <?php echo $data['order']; ?></div>
                    <div class="desc"> 论文订单</div>
                </div>
                <a class="more" href="<?php echo url('table/order_list'); ?>"> 查看更多
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="am-icon-apple"></i>
                </div>
                <div class="details">
                    <div class="number"> <?php echo $data['goods']; ?></div>
                    <div class="desc"> 积分商品</div>
                </div>
                <a class="more" href="<?php echo url('goods/goods_list'); ?>"> 查看更多
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
            <div class="dashboard-stat purple">
                <div class="visual">
                    <i class="am-icon-android"></i>
                </div>
                <div class="details">
                    <div class="number"> <?php echo $data['shoporder']; ?></div>
                    <div class="desc"> 商品订单</div>
                </div>
                <a class="more" href="<?php echo url('goods/shoporder_list'); ?>"> 查看更多
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="am-u-md-6 am-u-sm-12 row-mb">
            <div class="tpl-portlet">
                <div class="tpl-portlet-title">
                    <div class="tpl-caption font-green ">
                        <span>后台设置</span>
                    </div>
                </div>
                <div id="wrapper" class="wrapper">
                    <form class="am-form am-form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="am-form-group">
                            <label for="welcome" class="am-u-sm-3 am-form-label">微信公众号欢迎语：</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="welcome" name="welcome" value="<?php echo $jifen['welcome']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="shop" class="am-u-sm-3 am-form-label">购物返积分：</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="shop" name="shop" value="<?php echo $jifen['shop']; ?>">
                                <small>只需设置数字，不需带单位。</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="tuijian" class="am-u-sm-3 am-form-label">推荐人返积分：</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="tuijian" name="tuijian" value="<?php echo $jifen['tuijian']; ?>">
                                <small>只需设置数字，不需带单位。</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="lunwen" class="am-u-sm-3 am-form-label">论文订单返积分：</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="lunwen" name="lunwen" value="<?php echo $jifen['lunwen']; ?>">
                                <small>只需设置数字，不需带单位。</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="qiandao" class="am-u-sm-3 am-form-label">签到积分：</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="qiandao" name="qiandao" value="<?php echo $jifen['qiandao']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary">保存设置</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                    <p>公众号关键字回复：</p>
                    <form class="am-form am-form-horizontal" method="post" enctype="multipart/form-data">
                        <?php if(is_array($keywords) || $keywords instanceof \think\Collection || $keywords instanceof \think\Paginator): $i = 0; $__LIST__ = $keywords;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="am-form-group">
                            <input type="hidden" name="id" value="<?php echo $vo['id']; ?>" />
                            <div class="am-u-sm-3">
                                <input type="text" id="title<?php echo $vo['id']; ?>" name="title" value="<?php echo $vo['keywords']; ?>">
                            </div>
                            <div class="am-u-sm-9">
                                <input type="text" id="content<?php echo $vo['id']; ?>" name="content" value="<?php echo $vo['content']; ?>">
                            </div>
                            <div class="am-form-group">
                                <div class="am-u-sm-9 am-u-sm-push-3">
                                    <button type="button" class="am-btn am-btn-primary key">保存设置</button>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="am-u-md-6 am-u-sm-12 row-mb">
            <div class="tpl-portlet">
                <div class="tpl-portlet-title">
                    <div class="tpl-caption font-red ">
                        <i class="am-icon-bar-chart"></i>
                        <span> 用户积分前8排行</span>
                    </div>
                </div>
                <div class="tpl-scrollable wrapper">
                    <table class="am-table tpl-table">
                        <thead>
                        <tr class="tpl-table-uppercase">
                            <th>用户</th>
                            <th>余额</th>
                            <th>积分</th>
                            <th>联系方式</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($user_rank) || $user_rank instanceof \think\Collection || $user_rank instanceof \think\Paginator): $i = 0; $__LIST__ = $user_rank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td>
                                <a class="user-name" href="<?php echo url('index/chart'); ?>"><?php echo $vo['name']; ?></a>
                            </td>
                            <td>￥<?php echo $vo['balance']; ?></td>
                            <td><?php echo $vo['score']; ?></td>
                            <td class="font-green bold"><?php echo $vo['tel']; ?></td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="am-u-md-6 am-u-sm-12 row-mb">
            <div class="tpl-portlet">
                <div class="tpl-portlet-title">
                    <div class="tpl-caption font-red ">
                        <i class="am-icon-comments-o"></i>
                        <span>联系方式</span>
                    </div>
                </div>
                <div class="tpl-scrollable">
                    <input type="hidden" id="contact" value='<?php echo $contact; ?>' />
                    <input type="hidden" id="transfer" value='<?php echo $transfer; ?>' />
                    <input type="hidden" id="business" value='<?php echo $business; ?>' />
                    <script type="text/plain" id="editor" style="height: 500px;"></script>
                    <div class="am-u-sm-9" style="margin-top: 1%;">
                        <button type="button" class="am-btn am-btn-primary save1">保存修改</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="am-u-md-6 am-u-sm-12 row-mb">
            <div class="tpl-portlet">
                <div class="tpl-portlet-title">
                    <div class="tpl-caption font-red">
                        <i class="am-icon-cny"></i>
                        <span>合作期刊</span>
                    </div>
                </div>
                <div class="tpl-scrollable">
                    <script type="text/plain" id="editor2" style="height: 500px;"></script>
                    <div class="am-u-sm-9" style="margin-top: 1%;">
                        <button type="button" class="am-btn am-btn-primary save2"> 保存修改</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="am-u-md-6 am-u-sm-12 row-mb" style="float: left;">
            <div class="tpl-portlet">
                <div class="tpl-portlet-title">
                    <div class="tpl-caption font-red">
                        <i class="am-icon-tag"></i>
                        <span>业务介绍</span>
                    </div>
                </div>
                <div class="tpl-scrollable">
                    <script type="text/plain" id="editor3" style="height: 500px;"></script>
                    <div class="am-u-sm-9" style="margin-top: 1%;">
                        <button type="button" class="am-btn am-btn-primary save3"> 保存修改</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor', {
        initialFrameHeight:500,
        scaleEnabled:true,
    });
    var ue1 = UE.getEditor('editor2', {
        nitialFrameHeight:500,
        scaleEnabled:true,
    });
    var ue2 = UE.getEditor('editor3', {
        nitialFrameHeight:500,
        scaleEnabled:true,
    });

    $(document).ready(function(){
        var proinfo=$("#contact").val();
        ue.ready(function () { //编辑器初始化完成再赋值
            ue.execCommand('inserthtml', proinfo); //赋值给UEditor
        });
    });

    $(document).ready(function(){
        var proinfo=$("#transfer").val();
        ue1.ready(function () {
            ue1.execCommand('inserthtml', proinfo);
        });
    });

    $(document).ready(function () {
        var proinfo = $("#business").val();
        ue2.ready(function () {
            ue2.execCommand('inserthtml', proinfo);
        });
    });

    //联系方式修改
    $(".save1").click(function () {
        var arr = [];
        var id = "6";
        arr.push(ue.getContent());
        $.ajax({
            type: "post",
            url: "<?php echo url('index/contact'); ?>",
            data: {"content":arr, "id":id},
            success: function (data) {
                if(data == 1){
                    alert("修改成功！");
                    window.location.reload();
                }else{
                    alert("您没有进行任何修改！");
                    return false;
                }
            }
        })
    })

    //汇款方式
    $(".save2").click(function () {
        var arr = [];
        var id= "5";
        arr.push(ue1.getContent());
        $.ajax({
            type: "post",
            url: "<?php echo url('index/contact'); ?>",
            data: {"content":arr, "id":id},
            success: function (data) {
                if(data == 1){
                    alert("修改成功！");
                    window.location.reload();
                }else{
                    alert("您没有进行任何修改！");
                    return false;
                }
            }
        })
    })

    //业务介绍
    $(".save3").click(function () {
        var arr = [];
        var id= "7";
        arr.push(ue2.getContent());
        $.ajax({
            type: "post",
            url: "<?php echo url('index/contact'); ?>",
            data: {"content":arr, "id":id},
            success: function (data) {
                if(data == 1){
                    alert("修改成功！");
                    window.location.reload();
                }else{
                    alert("您没有进行任何修改！");
                    return false;
                }
            }
        })
    })
</script>
<script>
    $('.key').click(function () {
        var id = $(this).parent().parent().parent().children("input[name=id]").val();
        var keywords = $(this).parent().parent().parent().children().children("input[name=title]").val();
        var content = $(this).parent().parent().parent().children().children("input[name=content]").val();

        $.ajax({
            type: "post",
            url: "<?php echo url('index/keywords'); ?>",
            data: {"id":id, "keywords":keywords, "content":content},
            dataType: "json",
            success:function (data) {
                if(data != 0){
                    alert("修改成功！");
                    window.location.reload();
                }else{
                    alert("修改失败！");
                    return false;
                }
            }
        })
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
