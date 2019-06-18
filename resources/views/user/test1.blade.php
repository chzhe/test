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
<form class="layui-form" action="">
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
                <button class="layui-btn" lay-submit lay-filter="formDemo" onclick="commit">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </div>
</form>


<script src="../layui/layui.js"></script>
<script>
    //一般直接写在一个js文件中
    layui.use(['layer', 'form'], function(){
        var layer = layui.layer
            ,form = layui.form;

        layer.msg('能不能行');
    });
    function commit() {
        var mobile = $("#mo").val();
        var password =$("#pws").val();
        $.post("register",
            {
                mobile:mobile,
                password:password,
                // url:"http://www.runoob.com"
            },
            function(data,status){
                alert("数据: \n" + data + "\n状态: " + status);
            });

    }
</script>
</body>
</html>