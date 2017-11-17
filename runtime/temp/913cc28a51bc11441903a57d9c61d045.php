<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"D:\phpStudy\WWW\lunwen/admin/index\view\table\order_list_detail.html";i:1504576576;s:58:"D:\phpStudy\WWW\lunwen/admin/index\view\public\header.html";i:1504506287;s:56:"D:\phpStudy\WWW\lunwen/admin/index\view\public\left.html";i:1504659212;s:58:"D:\phpStudy\WWW\lunwen/admin/index\view\public\footer.html";i:1504506358;}*/ ?>
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
                        <a href="<?php echo url('goods/goods_type'); ?>">
                            <i class="am-icon-angle-right"></i>
                            <span>商品分类</span>
                            <i class="tpl-left-nav-content tpl-badge-success">
                                18
                            </i>
                        </a>
                        <a href="<?php echo url('goods/goods_list'); ?>">
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
        论文订单列表
    </div>
    <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">首页</a></li>
        <li class="am-active">论文订单列表</li>
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
                    <form class="am-form am-form-horizontal">
                        <div class="am-form-group">
                            <label for="order" class="am-u-sm-3 am-form-label">订单号 / Order</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="order" value="<?php echo $detail['order']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="title" class="am-u-sm-3 am-form-label">题目 / Title</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="title" value="<?php echo $detail['title']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="username" class="am-u-sm-3 am-form-label">姓名 / Name</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="username" value="<?php echo $detail['username']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="usertel" class="am-u-sm-3 am-form-label">联系方式 / Tel</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="usertel" value="<?php echo $detail['usertel']; ?>">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="word" class="am-u-sm-3 am-form-label">字数要求 / Word</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="word" value="<?php echo $detail['word']; ?>">
                            </div>
                        </div>
                        <?php if($detail['service'] == 1): ?>
                            <div class="am-form-group">
                                <label for="service" class="am-u-sm-3 am-form-label">服务条项 / Service</label>
                                <div class="am-u-sm-9">
                                    <input type="email" id="service" value="文稿代写">
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="ctime" class="am-u-sm-3 am-form-label">完成时间 / Ctime</label>
                                <div class="am-u-sm-9">
                                    <input type="tel" id="ctime" value="<?php echo $detail['ctime']; ?>">
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="Type" class="am-u-sm-3 am-form-label">文稿要求 / Type</label>
                                <div class="am-u-sm-9">
                                    <input type="number" id="Type" value="<?php echo $detail['type']; ?>">
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="major" class="am-u-sm-3 am-form-label">专业方向 / Major</label>
                                <div class="am-u-sm-9">
                                    <input type="number" id="major" value="<?php echo $detail['major']; ?>">
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="require" class="am-u-sm-3 am-form-label">具体需求 / Require</label>
                                <div class="am-u-sm-9">
                                    <textarea type="text" id="require"><?php echo $detail['require']; ?></textarea>
                                </div>
                            </div>
                        <?php elseif($detail['service'] == 2): ?>
                            <div class="am-form-group">
                                <label for="service" class="am-u-sm-3 am-form-label">服务条项 / Service</label>
                                <div class="am-u-sm-9">
                                    <input type="email" id="service" value="期刊发表">
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="ctime" class="am-u-sm-3 am-form-label">发表时间 / Ctime</label>
                                <div class="am-u-sm-9">
                                    <input type="tel" id="ctime" value="<?php echo $detail['ctime']; ?>">
                                </div>
                            </div>
                            <?php if($detail['level'] == 0): ?>
                                <div class="am-form-group">
                                    <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                    <div class="am-u-sm-9">
                                        <input type="number" id="Level" value="省级期刊">
                                    </div>
                                </div>
                            <?php elseif($detail['level'] == 1): ?>
                                <div class="am-form-group">
                                    <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                    <div class="am-u-sm-9">
                                        <input type="number" id="Level" value="国家级期刊">
                                    </div>
                                </div>
                            <?php elseif($detail['level'] == 2): ?>
                                <div class="am-form-group">
                                    <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                    <div class="am-u-sm-9">
                                        <input type="number" id="Level" value="科技核心期刊">
                                    </div>
                                </div>
                            <?php elseif($detail['level'] == 3): ?>
                                <div class="am-form-group">
                                    <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                    <div class="am-u-sm-9">
                                        <input type="number" id="Level" value="中文核心期刊">
                                    </div>
                                </div>
                            <?php elseif($detail['level'] == 4): ?>
                                <div class="am-form-group">
                                    <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                    <div class="am-u-sm-9">
                                        <input type="number" id="Level" value="cssci核心期刊">
                                    </div>
                                </div>
                            <?php elseif($detail['level'] == 5): ?>
                                <div class="am-form-group">
                                    <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                    <div class="am-u-sm-9">
                                        <input type="number" id="Level" value="EI/SCI核心期刊">
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="am-form-group">
                                    <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                    <div class="am-u-sm-9">
                                        <input type="number" id="Level" value="暂不确定">
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="am-form-group">
                                <label for="require" class="am-u-sm-3 am-form-label">其他要求 / Require</label>
                                <div class="am-u-sm-9">
                                    <textarea type="text" id="require"><?php echo $detail['require']; ?></textarea>
                                </div>
                            </div>
                        <?php elseif($detail['service'] == 3): ?>
                            <div class="am-form-group">
                                <label for="service" class="am-u-sm-3 am-form-label">服务条项 / Service</label>
                                <div class="am-u-sm-9">
                                    <input type="email" id="service" value="论文修改">
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="ctime" class="am-u-sm-3 am-form-label">修改完成时间 / Ctime</label>
                                <div class="am-u-sm-9">
                                    <input type="tel" id="ctime" value="<?php echo $detail['ctime']; ?>">
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="require" class="am-u-sm-3 am-form-label">修改意见 / Require</label>
                                <div class="am-u-sm-9">
                                    <textarea type="text" id="require"><?php echo $detail['require']; ?></textarea>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="am-form-group">
                                <label for="service" class="am-u-sm-3 am-form-label">服务条项 / Service</label>
                                <div class="am-u-sm-9">
                                    <input type="email" id="service" value="包写包发">
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="ctime" class="am-u-sm-3 am-form-label">发表时间 / Ctime</label>
                                <div class="am-u-sm-9">
                                    <input type="tel" id="ctime" value="<?php echo $detail['ctime']; ?>">
                                </div>
                            </div>
                            <?php if($detail['level'] == 0): ?>
                            <div class="am-form-group">
                                <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                <div class="am-u-sm-9">
                                    <input type="number" id="Level" value="省级期刊">
                                </div>
                            </div>
                            <?php elseif($detail['level'] == 1): ?>
                            <div class="am-form-group">
                                <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                <div class="am-u-sm-9">
                                    <input type="number" id="Level" value="国家级期刊">
                                </div>
                            </div>
                            <?php elseif($detail['level'] == 2): ?>
                            <div class="am-form-group">
                                <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                <div class="am-u-sm-9">
                                    <input type="number" id="Level" value="科技核心期刊">
                                </div>
                            </div>
                            <?php elseif($detail['level'] == 3): ?>
                            <div class="am-form-group">
                                <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                <div class="am-u-sm-9">
                                    <input type="number" id="Level" value="中文核心期刊">
                                </div>
                            </div>
                            <?php elseif($detail['level'] == 4): ?>
                            <div class="am-form-group">
                                <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                <div class="am-u-sm-9">
                                    <input type="number" id="Level" value="cssci核心期刊">
                                </div>
                            </div>
                            <?php elseif($detail['level'] == 5): ?>
                            <div class="am-form-group">
                                <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                <div class="am-u-sm-9">
                                    <input type="number" id="Level" value="EI/SCI核心期刊">
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="am-form-group">
                                <label for="Level" class="am-u-sm-3 am-form-label">期刊级别 / Level</label>
                                <div class="am-u-sm-9">
                                    <input type="number" id="Level" value="暂不确定">
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="am-form-group">
                                <label for="require" class="am-u-sm-3 am-form-label">具体要求 / Require</label>
                                <div class="am-u-sm-9">
                                    <textarea type="text" id="require"><?php echo $detail['require']; ?></textarea>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="am-form-group">
                            <label for="order" class="am-u-sm-3 am-form-label">接单人姓名 / Acceptname</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="acceptname" value="">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="order" class="am-u-sm-3 am-form-label">接单人电话 / Accepttel</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="accepttel" value="">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="button" class="am-btn am-btn-primary">保存修改</button>
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