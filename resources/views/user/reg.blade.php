<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>MY</title>


    <link rel="stylesheet" href="../layui/css/layui.css">

<style>

    .txtCenter{
        text-align:center;
    }
    body{
        background-image: url(../layui/images/face/72.jpg);

    }


</style>
</head>

<body>
<!-- 你的HTML代码 -->

<h1 class="txtCenter" style="color:green">注册</h1>
<div style="width: 650px; position: relative; left: 43%;">
<form class="layui-form">

    <div class="layui-form-item">
        <label class="layui-form-label" style="color: #d4d4d4;">手机号</label>
        <div class="layui-input-inline">
            <input type="text" name="mobile" required  lay-verify="required" placeholder="请输入手机号"
                   autocomplete="off" class="layui-input" id ="mo">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label" style="color: #d4d4d4;">密码</label>
        <div class="layui-input-inline" style=>
            <input type="password" name="password" required lay-verify="required" placeholder="请输入密码"
                   autocomplete="off" class="layui-input" id="psw">
        </div>

        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </div>
</form>
</div>

<script src="../layui/layui.js"></script>
<script>
    // 一般直接写在一个js文件中
    layui.use(['layer', 'form'], function() {
        var layer = layui.layer
            , form = layui.form
            , $ = layui.jquery;
        //
        //     layer.msg('能不能行');

        //监听提交
        form.on('submit(formDemo)', function (data) {
            var pram = data.field;  //json

            $.ajax({
                url: 'register',     //api address
                type: 'post',//POST || GET
                dataType: 'json', //数据类型
                data: pram,      //data {username:$('#username').val(),password:$('#password').val()}
                success: function (response) {     //success callback
                    if(response.code==200){
                        layer.msg('注册成功')
                        self.location.href="{{url('login')}}";
                    }else{
                        layer.msg(response.data)

                    }
                }
            });
            return false;
        });
    });
</script>
</body>
</html>





