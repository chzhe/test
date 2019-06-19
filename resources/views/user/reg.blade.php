<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>test</title>
    <h1>注册</h1>
    <link rel="stylesheet" href="../layui/css/layui.css">
</head>

<body>
<!-- 你的HTML代码 -->
<form class="layui-form" >

    <div class="layui-form-item">
        <label class="layui-form-label">手机号</label>
        <div class="layui-input-block">
            <input type="text" name="mobile" required  lay-verify="required" placeholder="请输入标题" autocomplete="off"
                   class="layui-input" id ="mo">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密码</label>
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
                        self.location.href="{{url('login')}}";
                    }else{
                        layer.msg(response.data)
                        layer.msg('已经注册，请登录')

                    }
                }
            });
            return false;
        });
    });
</script>

@charset "utf-8";
* {
margin: 0;
padding: 0;
}
body {
text-decoration: none;
text-align: center;
background: #23262E;
}
.login-main {
margin: 0 auto;
}
.layui-elip {
font-size: 24px;
color: #fff;
text-decoration: none;
font-weight: bold;
margin-top: 100px;
margin-bottom: 30px;
}
.layui-form-item {
margin: 0 auto;
width: 190px;
text-align: center;
}

.line1 {
height: 50px;
line-height: 50px;

}
</body>
</html>