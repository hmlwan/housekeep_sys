<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <!--申明当前页面的编码集-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--网页标题-->
    <title></title>
    <!--网页关键词-->
    <meta name="keywords" content="" />
    <!--网页描述-->
    <meta name="description" content="" />
    <!--适配当前屏幕-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--禁止自动识别电话号码-->
    <meta name="format-detection" content="telephone=no" />
    <!--禁止自动识别邮箱-->
    <meta content="email=no" name="format-detection" />
    <!--iphone中safari私有meta标签,
        允许全屏模式浏览,隐藏浏览器导航栏-->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!--iphone中safari顶端的状态条的样式black(黑色)-->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!--如果用户装了谷歌浏览器，用ie浏览时使用谷歌内核-->
    <!--<meta http-equiv=”X-UA-Compatible” content=”IE=edge,chrome=1″/>-->
    <!--css文件-->
    <link type="text/css" rel="stylesheet" href="/project/task_1/Public/Mobile/css/task/reset.css" />
    <link type="text/css" rel="stylesheet" href="/project/task_1/Public/Mobile/css/task/style.css" />
    <script src="/project/task_1/Public/Mobile/js/task/jquery1.10.2.min.js"></script>
    <script src="/project/task_1/Public/Mobile/js/task/fontSize.js"></script>
    <!--<script src="/project/task_1/Public/Mobile/js/layer_mobile/layer.js"></script>-->
    <script src="/project/task_1/Public/Mobile/js/layer/layer.js"></script>
    <script src="/project/task_1/Public/Mobile/js/task/common.js"></script>
</head>

<body>
<div class="wdxx">
    <header>
        <div class="gwc_bt">
            <div class="gwcbt_fh"><a href="javascript:history.back()" class="gwcdd_fh"></a></div>
            <div class="gwcbt_mc">我的信息</div>
        </div>
        <div style="height: .74rem;clear: both;"></div>
    </header>
    <div class="mem_center">
        <div class="menu_info">
            <a href="<?php echo U('Member/baseinfo');?>"><div>基本资料 <em></em> </div></a>
            <a href="<?php echo U('Member/accountinfo');?>"><div>账户信息 <em></em> </div></a>
            <a href="<?php echo U('Member/banklist');?>"><div>银行卡信息 <em></em> </div></a>

        </div>
    </div>
</div>
<script src="/project/task_1/Public/Mobile/js/task/utils.js"></script>

</body>
</htm