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

<div class="layadmin-user-login layadmin-user-display-show" id="login" style="display: none;">

    <div class="layadmin-user-login-main">
        <div class="layadmin-user-login-box layadmin-user-login-header">
            <h2>TEST</h2>
            <p>测试系统</p>
        </div>
        <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-username" for="mobile"></label>
                <input type="text" name="mobile" id="mobile" lay-verify="required" placeholder="用户名" class="layui-input">
            </div>
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="password"></label>
                <input type="password" name="password" id="password" lay-verify="required" placeholder="密码" class="layui-input">
            </div>

            <div class="layui-form-item">
                <button id="login" class="layui-btn layui-btn-fluid" lay-submit="" lay-filter="login_submit">登  入</button>
            </div>

        </div>
    </div>

    <div class="layui-trans layadmin-user-login-footer">

        <p>© 2019 <a href="chzhe.github.io" target="_blank">MyBlog</a></p>

    </div>



</div>

<script src="./plugins/layui/layui.js"></script>
<script>
    layui.use(['form','element', 'layer'],function(){
        var form = layui.form
            ,element = layui.element
            ,layer = layui.layer
            ,$=layui.jquery;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //监听提交
        form.on('submit(login_submit)', function(data){
            var mobile = data.field.mobile
                ,password = data.field.password;
            $.ajax({
                url:"{{url('user/reg')}}",
                type:'post',
                dataType:'json',
                data:{mobile:mobile,password:password},
                success:function(res){
                    if(res.code == 400){
                        layer.msg(res.data);
                    }else{
                        self.location.href="{{url('user/reg')}}";
                    }
                }
            });
            return false;
        });
    });
</script>
</body>

</html>