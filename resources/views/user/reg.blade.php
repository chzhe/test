<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>注册页</title>
    <link rel="stylesheet" href="../layui/css/layui.css">
    <link rel="stylesheet" href="../layui/css/layui.css">
    <link rel="icon" href="../layui/images/face/0.gif">
</head>

<body>
<div class="layui-form-item" id="register" style="display: none;">

    <div class="layui-form-item">
        <div class="layui-form-item ">
            <h2>TEST</h2>
            <p>测试系统</p>
        </div>
        <div class="layui-form-item">
            <div class="layui-form-item">
                <label class="layui-form-item" for="mobile"></label>
                <input type="text" name="mobile" id="mobile"  required lay-verify="required" placeholder="用户名"
                       class="layui-input">
            </div>
            <div class="layui-form-label">
                <label class="layui-form-label" for="password"></label>
                <div class="layui-input-inline">
                <input type="password" name="password" id="password" required lay-verify="required" placeholder="密码" class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <button id="reg" class="layui-btn layui-btn-fluid" lay-submit  lay-filter="reg_submit">注册</button>
            </div>

        </div>
    </div>

    <div class="layui-form-item">

        <p>© 2019 <a href="chzhe.github.io" target="_blank">MyBlog</a></p>

    </div>



</div>

<script src="../layui/layui.js"></script>
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
        form.on('submit(reg_submit)', function(data){
            var mobile = data.field.mobile
                ,password = data.field.password;
            $.ajax({
                url:"{{url('register')}}",
                type:'post',
                dataType:'json',
                data:{mobile:mobile,password:password},

                success:function(res){
                    if(res.code == 400){
                        layer.msg(res.data);
                    }else{
                        self.location.href="{{url('login')}}";
                    }
                }
            });

            return false;
        });
    });

</script>
</body>

</html>