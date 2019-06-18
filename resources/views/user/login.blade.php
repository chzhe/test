<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>登录</title>
    <link rel="stylesheet" href="../layui/css/layui.css">
</head>
<body>
<form class="layui-form" action="">
    <div class="layui-form-item">
        <label class="layui-form-label">用户名</label>
        <div class="layui-input-block">
            <input type="text" name="mobile" required  lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密码</label>
        <div class="layui-input-inline">
            <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo">登录</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </div>>
</form>
<!-- 你的HTML代码 -->
<script src="../layui/layui.js"></script>
        <script>

            layui.use(['layer','form'], function(){
                var layer = layui.layer,
                    form = layui.form;
                $ = layui.jquery;

                //监听提交
                form.on('submit(formDemo)', function(data){
                    var pram = data.field;
                   $.ajax({
                       url : 'postLogin',
                       type : 'post',
                       dataType : 'json',
                       data : pram,
                       success : function (response) {
                           if(response.code==200){
                               layer.msg ('登录成功')
                               self.location.href="{{url('/')}}";
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
