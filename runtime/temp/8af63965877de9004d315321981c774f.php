<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:59:"D:\phpStudy\WWW\lunwen/admin/index\view\table\img_list.html";i:1503890527;s:58:"D:\phpStudy\WWW\lunwen/admin/index\view\public\header.html";i:1504506287;s:56:"D:\phpStudy\WWW\lunwen/admin/index\view\public\left.html";i:1504603765;s:58:"D:\phpStudy\WWW\lunwen/admin/index\view\public\footer.html";i:1504506358;}*/ ?>
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
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-bell-o"></span> 提醒 <span
                        class="am-badge tpl-badge-success am-round">5</span></span>
                </a>
                <ul class="am-dropdown-content tpl-dropdown-content">
                    <li class="tpl-dropdown-content-external">
                        <h3>你有 <span class="tpl-color-success">5</span> 条提醒</h3><a href="###">全部</a></li>
                    <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span
                            class="am-icon-btn am-icon-plus tpl-dropdown-ico-btn-size tpl-badge-success"></span>
                        【预览模块】移动端 查看时 手机、电脑框隐藏。</a>
                        <span class="tpl-dropdown-list-fr">3小时前</span>
                    </li>
                    <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span
                            class="am-icon-btn am-icon-check tpl-dropdown-ico-btn-size tpl-badge-danger"></span>
                        移动端，导航条下边距处理</a>
                        <span class="tpl-dropdown-list-fr">15分钟前</span>
                    </li>
                    <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span
                            class="am-icon-btn am-icon-bell-o tpl-dropdown-ico-btn-size tpl-badge-warning"></span>
                        追加统计代码</a>
                        <span class="tpl-dropdown-list-fr">2天前</span>
                    </li>
                </ul>
            </li>
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-comment-o"></span> 消息 <span
                        class="am-badge tpl-badge-danger am-round">9</span></span>
                </a>
                <ul class="am-dropdown-content tpl-dropdown-content">
                    <li class="tpl-dropdown-content-external">
                        <h3>你有 <span class="tpl-color-danger">9</span> 条新消息</h3><a href="###">全部</a></li>
                    <li>
                        <a href="#" class="tpl-dropdown-content-message">
                                <span class="tpl-dropdown-content-photo">
                      <img src="__IMG__/user02.png" alt=""> </span>
                            <span class="tpl-dropdown-content-subject">
                      <span class="tpl-dropdown-content-from"> 禁言小张 </span>
                                <span class="tpl-dropdown-content-time">10分钟前 </span>
                                </span>
                            <span class="tpl-dropdown-content-font"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </span>
                        </a>
                        <a href="#" class="tpl-dropdown-content-message">
                                <span class="tpl-dropdown-content-photo">
                      <img src="__IMG__/user03.png" alt=""> </span>
                            <span class="tpl-dropdown-content-subject">
                      <span class="tpl-dropdown-content-from"> Steam </span>
                                <span class="tpl-dropdown-content-time">18分钟前</span>
                                </span>
                            <span class="tpl-dropdown-content-font"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-calendar"></span> 进度 <span
                        class="am-badge tpl-badge-primary am-round">4</span></span>
                </a>
                <ul class="am-dropdown-content tpl-dropdown-content">
                    <li class="tpl-dropdown-content-external">
                        <h3>你有 <span class="tpl-color-primary">4</span> 个任务进度</h3><a href="###">全部</a></li>
                    <li>
                        <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">Amaze UI 用户中心 v1.2 </span>
                                <span class="percent">45%</span>
                                </span>
                            <span class="progress">
                        <div class="am-progress tpl-progress am-progress-striped"><div
                                class="am-progress-bar am-progress-bar-success" style="width:45%"></div></div>
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">新闻内容页 </span>
                                <span class="percent">30%</span>
                                </span>
                            <span class="progress">
                       <div class="am-progress tpl-progress am-progress-striped"><div
                               class="am-progress-bar am-progress-bar-secondary" style="width:30%"></div></div>
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">管理中心 </span>
                                <span class="percent">60%</span>
                                </span>
                            <span class="progress">
                        <div class="am-progress tpl-progress am-progress-striped"><div
                                class="am-progress-bar am-progress-bar-warning" style="width:60%"></div></div>
                    </span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span
                    class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="tpl-header-list-user-nick">禁言小张</span><span class="tpl-header-list-user-ico"> <img
                        src="__IMG__/user01.png"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
                    <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li><a href="###" class="tpl-header-list-link"><span
                    class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
        </ul>
    </div>
</header>
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
                    <i class="tpl-left-nav-content tpl-badge-danger">
                        12
                    </i>
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
                            <i class="tpl-left-nav-content tpl-badge-success">
                                18
                            </i>
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
                        <a href="<?php echo url('form/amaze_form'); ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>添加商品</span>
                            <i class="tpl-left-nav-content tpl-badge-success">
                                18
                            </i>
                        </a>
                        <a href="<?php echo url('form/amaze_form'); ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>商品列表</span>
                            <i class="tpl-left-nav-content tpl-badge-success">
                                18
                            </i>
                        </a>
                        <a href="<?php echo url('form/amaze_form'); ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>商品订单列表</span>
                            <i class="tpl-left-nav-content tpl-badge-success">
                                18
                            </i>
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
        Amaze UI 文字列表
    </div>
    <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">首页</a></li>
        <li><a href="#">Amaze UI CSS</a></li>
        <li class="am-active">文字列表</li>
    </ol>
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 列表
            </div>
            <div class="tpl-portlet-input tpl-fz-ml">
                <div class="portlet-input input-small input-inline">
                    <div class="input-icon right">
                        <i class="am-icon-search"></i>
                        <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                </div>
            </div>


        </div>
        <div class="tpl-block">
            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                            <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                            <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>
                            <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                            <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                    </div>
                </div>
                <div class="am-u-sm-12 am-u-md-3">
                    <div class="am-form-group">
                        <select data-am-selected="{btnSize: 'sm'}">
                            <option value="option1">所有类别</option>
                            <option value="option2">IT业界</option>
                            <option value="option3">数码产品</option>
                            <option value="option3">笔记本电脑</option>
                            <option value="option3">平板电脑</option>
                            <option value="option3">只能手机</option>
                            <option value="option3">超极本</option>
                        </select>
                    </div>
                </div>
                <div class="am-u-sm-12 am-u-md-3">
                    <div class="am-input-group am-input-group-sm">
                        <input type="text" class="am-form-field">
                        <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button"></button>
          </span>
                    </div>
                </div>
            </div>
            <div class="am-g">
                <div class="tpl-table-images">
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="tpl-table-images-content">
                            <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                            <div class="tpl-i-title">
                                “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                            </div>
                            <a href="javascript:;" class="tpl-table-images-content-i">
                                <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="__IMG__/user02.png" alt="">追逐
                                 </span>

                                </div>
                                <span class="tpl-table-images-content-i-shadow"></span>
                                <img src="__IMG__/a1.png" alt="">
                            </a>
                            <div class="tpl-table-images-content-block">
                                <div class="tpl-i-font">
                                    你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                </div>
                                <div class="tpl-i-more">
                                    <ul>
                                        <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                        <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                        <li><span class="am-icon-github font-green"> 600+</span></li>
                                    </ul>
                                </div>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                        <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> 编辑</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="tpl-table-images-content">
                            <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                            <div class="tpl-i-title">
                                “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                            </div>
                            <a href="javascript:;" class="tpl-table-images-content-i">
                                <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="__IMG__/user02.png" alt="">追逐
                                 </span>

                                </div>
                                <span class="tpl-table-images-content-i-shadow"></span>
                                <img src="__IMG__/a1.png" alt="">
                            </a>
                            <div class="tpl-table-images-content-block">
                                <div class="tpl-i-font">
                                    你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                </div>
                                <div class="tpl-i-more">
                                    <ul>
                                        <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                        <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                        <li><span class="am-icon-github font-green"> 600+</span></li>
                                    </ul>
                                </div>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                        <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> 编辑</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="tpl-table-images-content">
                            <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                            <div class="tpl-i-title">
                                “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                            </div>
                            <a href="javascript:;" class="tpl-table-images-content-i">
                                <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="__IMG__/user02.png" alt="">追逐
                                 </span>

                                </div>
                                <span class="tpl-table-images-content-i-shadow"></span>
                                <img src="__IMG__/a1.png" alt="">
                            </a>
                            <div class="tpl-table-images-content-block">
                                <div class="tpl-i-font">
                                    你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                </div>
                                <div class="tpl-i-more">
                                    <ul>
                                        <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                        <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                        <li><span class="am-icon-github font-green"> 600+</span></li>
                                    </ul>
                                </div>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                        <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> 编辑</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="tpl-table-images-content">
                            <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                            <div class="tpl-i-title">
                                “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                            </div>
                            <a href="javascript:;" class="tpl-table-images-content-i">
                                <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="__IMG__/user02.png" alt="">追逐
                                 </span>

                                </div>
                                <span class="tpl-table-images-content-i-shadow"></span>
                                <img src="__IMG__/a1.png" alt="">
                            </a>
                            <div class="tpl-table-images-content-block">
                                <div class="tpl-i-font">
                                    你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                </div>
                                <div class="tpl-i-more">
                                    <ul>
                                        <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                        <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                        <li><span class="am-icon-github font-green"> 600+</span></li>
                                    </ul>
                                </div>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                        <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> 编辑</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="tpl-table-images-content">
                            <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                            <div class="tpl-i-title">
                                “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                            </div>
                            <a href="javascript:;" class="tpl-table-images-content-i">
                                <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="__IMG__/user02.png" alt="">追逐
                                 </span>

                                </div>
                                <span class="tpl-table-images-content-i-shadow"></span>
                                <img src="__IMG__/a1.png" alt="">
                            </a>
                            <div class="tpl-table-images-content-block">
                                <div class="tpl-i-font">
                                    你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                </div>
                                <div class="tpl-i-more">
                                    <ul>
                                        <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                        <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                        <li><span class="am-icon-github font-green"> 600+</span></li>
                                    </ul>
                                </div>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                        <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> 编辑</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="tpl-table-images-content">
                            <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                            <div class="tpl-i-title">
                                “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                            </div>
                            <a href="javascript:;" class="tpl-table-images-content-i">
                                <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="__IMG__/user02.png" alt="">追逐
                                 </span>

                                </div>
                                <span class="tpl-table-images-content-i-shadow"></span>
                                <img src="__IMG__/a1.png" alt="">
                            </a>
                            <div class="tpl-table-images-content-block">
                                <div class="tpl-i-font">
                                    你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                </div>
                                <div class="tpl-i-more">
                                    <ul>
                                        <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                        <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                        <li><span class="am-icon-github font-green"> 600+</span></li>
                                    </ul>
                                </div>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                        <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> 编辑</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="tpl-table-images-content">
                            <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                            <div class="tpl-i-title">
                                “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                            </div>
                            <a href="javascript:;" class="tpl-table-images-content-i">
                                <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="__IMG__/user02.png" alt="">追逐
                                 </span>

                                </div>
                                <span class="tpl-table-images-content-i-shadow"></span>
                                <img src="__IMG__/a1.png" alt="">
                            </a>
                            <div class="tpl-table-images-content-block">
                                <div class="tpl-i-font">
                                    你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                </div>
                                <div class="tpl-i-more">
                                    <ul>
                                        <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                        <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                        <li><span class="am-icon-github font-green"> 600+</span></li>
                                    </ul>
                                </div>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                        <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> 编辑</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="tpl-table-images-content">
                            <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                            <div class="tpl-i-title">
                                “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                            </div>
                            <a href="javascript:;" class="tpl-table-images-content-i">
                                <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="__IMG__/user02.png" alt="">追逐
                                 </span>

                                </div>
                                <span class="tpl-table-images-content-i-shadow"></span>
                                <img src="__IMG__/a1.png" alt="">
                            </a>
                            <div class="tpl-table-images-content-block">
                                <div class="tpl-i-font">
                                    你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                </div>
                                <div class="tpl-i-more">
                                    <ul>
                                        <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                        <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                        <li><span class="am-icon-github font-green"> 600+</span></li>
                                    </ul>
                                </div>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                        <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> 编辑</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="tpl-table-images-content">
                            <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                            <div class="tpl-i-title">
                                “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                            </div>
                            <a href="javascript:;" class="tpl-table-images-content-i">
                                <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="__IMG__/user02.png" alt="">追逐
                                 </span>

                                </div>
                                <span class="tpl-table-images-content-i-shadow"></span>
                                <img src="__IMG__/a1.png" alt="">
                            </a>
                            <div class="tpl-table-images-content-block">
                                <div class="tpl-i-font">
                                    你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                </div>
                                <div class="tpl-i-more">
                                    <ul>
                                        <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                        <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                        <li><span class="am-icon-github font-green"> 600+</span></li>
                                    </ul>
                                </div>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                        <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> 编辑</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="tpl-table-images-content">
                            <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                            <div class="tpl-i-title">
                                “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                            </div>
                            <a href="javascript:;" class="tpl-table-images-content-i">
                                <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="__IMG__/user02.png" alt="">追逐
                                 </span>

                                </div>
                                <span class="tpl-table-images-content-i-shadow"></span>
                                <img src="__IMG__/a1.png" alt="">
                            </a>
                            <div class="tpl-table-images-content-block">
                                <div class="tpl-i-font">
                                    你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                </div>
                                <div class="tpl-i-more">
                                    <ul>
                                        <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                        <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                        <li><span class="am-icon-github font-green"> 600+</span></li>
                                    </ul>
                                </div>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                        <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> 编辑</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="tpl-table-images-content">
                            <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                            <div class="tpl-i-title">
                                “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                            </div>
                            <a href="javascript:;" class="tpl-table-images-content-i">
                                <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="__IMG__/user02.png" alt="">追逐
                                 </span>

                                </div>
                                <span class="tpl-table-images-content-i-shadow"></span>
                                <img src="__IMG__/a1.png" alt="">
                            </a>
                            <div class="tpl-table-images-content-block">
                                <div class="tpl-i-font">
                                    你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                </div>
                                <div class="tpl-i-more">
                                    <ul>
                                        <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                        <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                        <li><span class="am-icon-github font-green"> 600+</span></li>
                                    </ul>
                                </div>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                        <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> 编辑</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                        <div class="tpl-table-images-content">
                            <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                            <div class="tpl-i-title">
                                “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                            </div>
                            <a href="javascript:;" class="tpl-table-images-content-i">
                                <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="__IMG__/user02.png" alt="">追逐
                                 </span>

                                </div>
                                <span class="tpl-table-images-content-i-shadow"></span>
                                <img src="__IMG__/a1.png" alt="">
                            </a>
                            <div class="tpl-table-images-content-block">
                                <div class="tpl-i-font">
                                    你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                </div>
                                <div class="tpl-i-more">
                                    <ul>
                                        <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                        <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                        <li><span class="am-icon-github font-green"> 600+</span></li>
                                    </ul>
                                </div>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                        <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> 编辑</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-lg-12">
                        <div class="am-cf">

                            <div class="am-fr">
                                <ul class="am-pagination tpl-pagination">
                                    <li class="am-disabled"><a href="#">«</a></li>
                                    <li class="am-active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                    </div>

                </div>

            </div>
        </div>
        <div class="tpl-alert"></div>
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