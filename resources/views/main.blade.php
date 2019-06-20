<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Main</title>
    <link rel="stylesheet" href="../layui/css/layui.css">
</head>

<style>
    body{
        background-image: url(../layui/images/face/73.jpg);
    }

</style>
<body>
<h1 style="color: #411c0e;text-align: center">That's All.</h1>

<ul class="layui-nav" lay-filter="">
    <li class="layui-nav-item  layui-this"><a href="/why123/user/saveUser" style="font-size:20px;">首页</a></li>
    <li class="layui-nav-item "><a href="/why123/news/forwardNews" style="font-size:20px;">新闻</a></li>
    <li class="layui-nav-item "><a href="#" style="font-size:20px;">家庭活动</a></li>
    <li class="layui-nav-item ">
        <a href="javascript:;" style="font-size:20px;">家庭相册</a>
        <dl class="layui-nav-child"> <!-- 二级菜单 -->
            <dd><a href="" style="font-size:15px;">个人相册</a></dd>
            <dd><a href="" style="font-size:15px;">他人相册</a></dd>
            <dd><a href="" style="font-size:15px;">热门相册</a></dd>
        </dl>
    </li>
    <li class="layui-nav-item"><a href="#" style="font-size:20px;">意见反馈</a></li>
    <li class="nav-user">
        <% String userName=(String)session.getAttribute("userName");
        if(userName==null){ %>
        <div>
            <a href="/why123/login/userLogin" class="nav-denglu">登录</a>
        </div>
        <%}else{%>
        <div class="user-msg">
            <ul class="layui-nav nav-userlogin">
                <li class="layui-nav-item">
                    <a href="" style="font-size:18px;"><img src="plug-in/images/people/renwu.jpg" class="layui-nav-img" style="width:40px;height:40px;">${sessionScope.userName}</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;" style="font-size:18px;">修改信息</a></dd>
                        <dd><a href="javascript:;" style="font-size:18px;">个人管理</a></dd>
                        <dd><a href="javascript:;" style="font-size:18px;">注销</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
        <%} %>
    </li>
</ul>


<script src="../layui/layui.js"></script>
<script>
    //一般直接写在一个js文件中
    layui.use(['layer', 'form'], function(){
        var layer = layui.layer
            ,form = layui.form;

        layer.msg('Bye Bye~');
    });
</script>
</body>
</html>