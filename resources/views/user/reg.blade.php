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

{{--< class= "login-main">--}}
    <header class="layui-elip" style="width: 82%">注册页</header>
    <form class="layui-form" action="">
        <div class="layui-form-item">
            <label class="layui-form-label">输入框</label>
            <div class="layui-input-block">
                <input type="text" name="mobile" required  lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">密码框</label>
            <div class="layui-input-inline">
                <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="register_submit">注册</button>
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
            </div>
        </div>
    </form>

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
                    url:"{{url('admin/login')}}",
                    type:'post',
                    dataType:'json',
                    data:{mobile:mobile,password:password},
                    success:function(res){
                        if(res.code == 400){
                            layer.msg(res.data);
                        }else{
                            self.location.href="{{url('admin/index')}}";
                        }
                    }
                });
                return false;
            });
        });
    </script>
</body>>
