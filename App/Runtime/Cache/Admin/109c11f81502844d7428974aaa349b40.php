<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
	<meta name="renderer" content="webkit">
    <title>网站后台管理</title>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/iconfont/demo.css">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/iconfont/iconfont.css"/>
    <script type="text/javascript" src="/Public/Admin/js/libs/modernizr.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/Public/plugin/Js/layer/layer.min.js"></script>
    <!--<script type="text/javascript" src="/Public/plugin/Js/laydate/laydate.js"></script>-->
<style>
.iconfont{ padding-right:5px;}
.fsize{ font-size:15px;}
</style>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo U('Index/index');?>">首页</a></li>
                <!--<li><a href="<?php echo U('Mobile/Index/index');?>" target="_blank">网站首页</a></li>-->
                <!--<li><a href="<?php echo U('Index/infoStatistics');?>" target="_blank">全站统计信息</a></li>-->
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="<?php echo U('Manage/index');?>">管理员</a></li>
                <li><a href="<?php echo U('Manage/pwdUpdate');?>">修改密码</a></li>
                <li><a href="<?php echo U('Login/loginout');?>">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
<div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                 <?php if(!empty($sys_nav)): ?><li>
                    <a href="#"><i class="iconfont">&#xe614;</i><span class="fsize">系统管理</span></a>
                    <ul class="sub-menu">
                        
                        	<?php if(is_array($sys_nav)): $i = 0; $__LIST__ = $sys_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>#0#<?php echo ($key); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li>
                            <!--<li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                            <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                            <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>--><?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </ul>
                </li><?php endif; ?>
			   
                <?php if(!empty($user_nav)): ?><li>
                    <a href="#"><i class="iconfont">&#xe64d;</i><span class="fsize">会员管理</span></a>
                    <ul class="sub-menu">
                        <?php if(is_array($user_nav)): $i = 0; $__LIST__ = $user_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>#1#<?php echo ($key); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <li><a href="/Admin/Member/auth_list"><i class="iconfont">&#x3434;</i>&nbsp;押金审核</a></li>
                    </ul>
                </li><?php endif; ?>

                <?php if(!empty($job_nav)): ?><li>
                    <a href="#"><i class="iconfont">&#xe6c8;</i><span class="fsize">工作管理</span></a>
                     <ul class="sub-menu">
                        <?php if(is_array($job_nav)): $i = 0; $__LIST__ = $job_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>#2#<?php echo ($key); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li><?php endif; ?>

                <?php if(!empty($train_nav)): ?><li>
                        <a href="#"><i class="iconfont">&#xe631;</i><span class="fsize">培训管理</span></a>
                        <ul class="sub-menu">
                            <?php if(is_array($train_nav)): $i = 0; $__LIST__ = $train_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>#3#<?php echo ($key); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li><?php endif; ?>

                <?php if(!empty($company_nav)): ?><li>
                        <a href="#"><i class="iconfont">&#xe631;</i><span class="fsize">公司管理</span></a>
                        <ul class="sub-menu">
                            <?php if(is_array($company_nav)): $i = 0; $__LIST__ = $company_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>#4#<?php echo ($key); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li><?php endif; ?>
                <?php if(!empty($record_nav)): ?><li>
                        <a href="#"><i class="iconfont">&#xe631;</i><span class="fsize">用户预约/培训记录</span></a>
                        <ul class="sub-menu">
                            <?php if(is_array($record_nav)): $i = 0; $__LIST__ = $record_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>#5#<?php echo ($key); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li><?php endif; ?>
                <?php if(!empty($admin_nav)): ?><li>
                        <a href="#"><i class="iconfont">&#xe64d;</i><span class="fsize">管理员管理</span></a>
                        <ul class="sub-menu">
                            <?php if(is_array($admin_nav)): $i = 0; $__LIST__ = $admin_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>#6#<?php echo ($key); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li><?php endif; ?>
            </ul>
        </div>
    </div>
<script>

$(".sidebar-list li").children("a").on("click",function(){
	$(this).next(".sub-menu").toggle();
});
var num = window.location.hash;
var num =  num.split('#');

$(".sub-menu").eq(num[1]).show();
$(".sub-menu").eq(num[1]).children("li").eq(num[2]).addClass("on");

</script>

<style>
    .glyphicon-minus:before {
        content: "\2212";
    }
    .glyphicon {
        position: relative;
        top: 1px;
        display: inline-block;
        -webkit-font-smoothing: antialiased;
        font-style: normal;
        font-weight: normal;
        line-height: 1;
    }
</style>
<!--/sidebar-->
<div class="main-wrap">
    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Index/index');?>">首页</a>
            <span class="crumb-step">&gt;</span>
            <span class="crumb-name">系统配置</span>
        </div>
    </div>
    <div class="result-wrap">
        <form action="<?php echo U('Config/updateCofig');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
            <input type="hidden" name="sub_flag" value="<?php echo ($sub_flag); ?>" >
            <div class="config-items">
                <div class="config-title">
                    <h1><i class="icon-font">&#xe00a;</i>配置添加</h1>
                </div>
                <div class="result-content">
                    <table width="100%" class="insert-tab">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>标题：</th>
                            <td><input id="title" name="title" type="text" value="<?php echo ($info["name"]); ?>"  class="common-text"></td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>英文字段名：</th>
                            <td><input id="en_name" name="en_name" type="text" value="<?php echo ($info["key"]); ?>"  class="common-text"></td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>类型：</th>
                            <td>
                                <select name="type" id="type" class="common-text">
                                    <option value="1" <?php if($info['type'] == 1): ?>selected<?php endif; ?> >1-文本</option>
                                    <option value="2" <?php if($info['type'] == 2): ?>selected<?php endif; ?> >2-图片</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="sub_value" >
                            <th><i class="require-red">*</i>文本：</th>
                            <td><input id="sub_value" name="sub_value" type="text" value="<?php echo ($info["value"]); ?>"   class="common-text"></td>
                        </tr>
                        <tr class="sub_value_img" style="display: none">
                            <th><i class="require-red">*</i>图片：</th>
                            <td><input id="sub_value_img" name="sub_value_img" type="file" value="<?php echo ($info["value"]); ?>"  class="common-text">
                                <?php if($info['value']): ?><img src="<?php echo ($info['value']); ?>" style="width: 80px;height: 80px" alt=""><?php endif; ?>
                            </td>


                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input type="button" onclick="subform()" value="提交" class="btn btn-primary btn6 mr10">
                                <a href="<?php echo U('Config/index');?>"><input type="button" value="返回"  class="btn btn6"></a>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
        </form>
    </div>
</div>
    <script>
        function subform(){
            $('#myform').submit();
        }
        $("#type").change(function () {
            if($(this).val() == 1){
                $(".sub_value").show();
                $(".sub_value_img").hide();
            }else{
                $(".sub_value").hide();
                $(".sub_value_img").show();
            }
        });
        var type = $("#type").val();
        $("#type").change();


    </script>
</div>
</body>
</html>