<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>test</title>
    <hi>请先注册</hi>
    <link rel="stylesheet" href="../layui/css/layui.css">
</head>
<body>

<!-- 你的HTML代码 -->
<form class="layui-form" >
    <h2>在这里注册</h2>
    <div class="layui-form-item">
        <label class="layui-form-label">输入框</label>
        <div class="layui-input-block">
            <input type="text" name="mobile" required  lay-verify="required" placeholder="请输入标题" autocomplete="off"
                   class="layui-input" id ="mo">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密码框</label>
        <div class="layui-input-inline">
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
                    }else{
                        layer.msg(response.data)
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