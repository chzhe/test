{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">--}}
    {{--<title>test</title>--}}
    {{--<h1>注册</h1>--}}
    {{--<link rel="stylesheet" href="../layui/css/layui.css">--}}
{{--</head>--}}

{{--<body>--}}
{{--<!-- 你的HTML代码 -->--}}
{{--<form class="layui-form" >--}}

    {{--<div class="layui-form-item">--}}
        {{--<label class="layui-form-label">手机号</label>--}}
        {{--<div class="layui-input-block">--}}
            {{--<input type="text" name="mobile" required  lay-verify="required" placeholder="请输入标题" autocomplete="off"--}}
                   {{--class="layui-input" id ="mo">--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="layui-form-item">--}}
        {{--<label class="layui-form-label">密码</label>--}}
        {{--<div class="layui-input-inline">--}}
            {{--<input type="password" name="password" required lay-verify="required" placeholder="请输入密码"--}}
                   {{--autocomplete="off" class="layui-input" id="psw">--}}
        {{--</div>--}}

        {{--<div class="layui-form-item">--}}
            {{--<div class="layui-input-block">--}}
                {{--<button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>--}}
                {{--<button type="reset" class="layui-btn layui-btn-primary">重置</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</form>--}}


{{--<script src="../layui/layui.js"></script>--}}
{{--<script>--}}
    {{--// 一般直接写在一个js文件中--}}
    {{--layui.use(['layer', 'form'], function() {--}}
        {{--var layer = layui.layer--}}
            {{--, form = layui.form--}}
            {{--, $ = layui.jquery;--}}
        {{--//--}}
        {{--//     layer.msg('能不能行');--}}

        {{--//监听提交--}}
        {{--form.on('submit(formDemo)', function (data) {--}}
            {{--var pram = data.field;  //json--}}

            {{--$.ajax({--}}
                {{--url: 'register',     //api address--}}
                {{--type: 'post',//POST || GET--}}
                {{--dataType: 'json', //数据类型--}}
                {{--data: pram,      //data {username:$('#username').val(),password:$('#password').val()}--}}
                {{--success: function (response) {     //success callback--}}
                    {{--if(response.code==200){--}}
                        {{--layer.msg('注册成功')--}}
                        {{--self.location.href="{{url('login')}}";--}}
                    {{--}else{--}}
                        {{--layer.msg(response.data)--}}
                        {{--layer.msg('已经注册，请登录')--}}

                    {{--}--}}
                {{--}--}}
            {{--});--}}
            {{--return false;--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>注册页</title>
    <link rel="stylesheet" href="../frame/layui/css/layui.css">
    <link rel="stylesheet" href="../frame/static/css/style.css">
    <link rel="icon" href="../frame/static/image/code.png">
</head>
<body>

<div class="login-main">
    <header class="layui-elip" style="width: 200%">注册页</header>

    <!-- 表单选项 -->
    <form class="layui-form">
        <div class="layui-input-inline">
            <!-- 用户名 -->
            <div class="layui-inline" style="width: 200%">
                <input type="text" id="user" name="mobile" required  lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
            </div>
            <!-- 对号 -->
            <div class="layui-inline">
                <i class="layui-icon" id="ri" style="color: green;font-weight: bolder;" hidden></i>
            </div>
            <!-- 错号 -->
            <div class="layui-inline">
                <i class="layui-icon" id="wr" style="color: red; font-weight: bolder;" hidden>ဆ</i>
            </div>
        </div>
        <!-- 密码 -->
        <div class="layui-input-inline">
            <div class="layui-inline" style="width: 200%">
                <input type="password" id="pwd" name="password" required  lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
            </div>
            <!-- 对号 -->
            <div class="layui-inline">
                <i class="layui-icon" id="pri" style="color: green;font-weight: bolder;" hidden></i>
            </div>
            <!-- 错号 -->
            <div class="layui-inline">
                <i class="layui-icon" id="pwr" style="color: red; font-weight: bolder;" hidden>ဆ</i>
            </div>
        </div>
        <!-- 确认密码 -->
        <div class="layui-input-inline">
            <div class="layui-inline" style="width: 200%">
                <input type="password" id="rpwd" name="repassword" required  lay-verify="required" placeholder="请确认密码" autocomplete="off" class="layui-input">
            </div>
            <!-- 对号 -->
            <div class="layui-inline">
                <i class="layui-icon" id="rpri" style="color: green;font-weight: bolder;" hidden></i>
            </div>
            <!-- 错号 -->
            <div class="layui-inline">
                <i class="layui-icon" id="rpwr" style="color: red; font-weight: bolder;" hidden>ဆ</i>
            </div>
        </div>


        <div class="layui-input-inline login-btn" style="width: 200%">
            <button type="submit" lay-submit lay-filter="sub" class="layui-btn">注册</button>
        </div>
        <hr style="width: 200%" />
        <p style="width: 200%"><a href="login" class="fl">已有账号？立即登录</a><a href="javascript:;" class="fr">忘记密码？</a></p>
    </form>
</div>


<script src="../frame/layui/layui.js"></script>
<script>
    layui.use(['form','jquery','layer'], function () {
        var form   = layui.form;
        var $      = layui.jquery;
        var layer  = layui.layer;
        // //添加表单失焦事件
        // //验证表单
        // $('#user').blur(function() {
        //     var user = $(this).val();

            //alert(user);


        //     $.ajax({
        //         url:'register',
        //         type:'post',
        //         dataType:'json',
        //         data:pram,
        //         //验证用户名是否可用
        //         success:function(data){
        //             if (data == 1) {
        //                 $('#ri').removeAttr('hidden');
        //                 $('#wr').attr('hidden','hidden');
        //
        //
        //             } else {
        //                 $('#wr').removeAttr('hidden');
        //                 $('#ri').attr('hidden','hidden');
        //                 layer.msg('当前用户名已被占用! ')
        //
        //             }
        //
        //         }
        //     })
        //
        // });

        // you code ...
        // 为密码添加正则验证
        // $('#pwd').blur(function() {
        //     var reg = /^[\w]{6,12}$/;
        //     if(!($('#pwd').val().match(reg))){
        //         //layer.msg('请输入合法密码');
        //         $('#pwr').removeAttr('hidden');
        //         $('#pri').attr('hidden','hidden');
        //         layer.msg('请输入合法密码');
        //     }else {
        //         $('#pri').removeAttr('hidden');
        //         $('#pwr').attr('hidden','hidden');
        //     }
        // });

        //验证两次密码是否一致
        $('#rpwd').blur(function() {
            if($('#pwd').val() != $('#rpwd').val()){
                $('#rpwr').removeAttr('hidden');
                $('#rpri').attr('hidden','hidden');
                layer.msg('两次输入密码不一致!');
            }else {
                $('#rpri').removeAttr('hidden');
                $('#rpwr').attr('hidden','hidden');
            };
        });

        //
        //添加表单监听事件,提交注册信息

        form.on('submit(sub)', function(data) {
                var pram = data.field;

            $.ajax({
                url:'register',
                type:'post',
                dataType:'json',
                data: pram,
                success:function(response){
                    if (response.code==200) {
                        layer.msg('注册成功');
                        self.location.href="{{url('login')}}";
                        ///location.href = "login.html";
                    }else {
                        layer.msg(response.data);
                    }
                }
            })
            //防止页面跳转
            return false;
        });

    });
</script>
</body>
</html>