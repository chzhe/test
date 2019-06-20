<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Start</title>
    <link rel="stylesheet" href="../layui/css/layui.css">
</head>
<style>
    body{
        background-image: url(../layui/images/face/73.jpg);
    }

</style>
<body>
<button id ="btn2" class="layui-btn" onclick="click()">登录</button>
<div id = 'lo' style="display: none;">
    <p class="txtCenter" style="color:green;align-content: center;text-align: center">登录</p>
    <div>
        <form class="layui-form">

            <div class="layui-form-item">
                <label class="layui-form-label">手机号</label>
                <div class="layui-input-inline">
                    <input type="text" name="mobile" required  lay-verify="required" placeholder="请输入手机号" autocomplete="off" class="layui-input">
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
            </div>
        </form>
    </div>
</div>
</body>

<script src="../layui/layui.js"></script>
<script>
    //一般直接写在一个js文件中

        layui.use(['layer', 'form'], function() {
            var layer = layui.layer
                , form = layui.form
                , $ = layui.jquery;


            $("#btn2").click(function () {

                layer.open({
                    type: 1,
                    skin: 'layui-layer-rim', //加上边框
                    area: ['420px', '300px'], //宽高
                    content: $("#lo").html(),
                    end:function () {
                        layer.closeAll();
                    }


                });
                // }
            });
            form.on('submit(formDemo)', function(data){
                var pram = data.field;
                $.ajax({
                    url : 'postLogin',
                    type : 'post',
                    dataType : 'json',
                    data : pram,
                    success : function (response) {
                        if(response.code==200){
                            layer.msg ('登录成功');
                         self.location.reload();
                        after (self.location.reload());
                        self.document.getElementById("btn2").innerText="yidenglu";
                     // window.document.getElementById("btn2").innerText = "yidenglu";


                            //     self.document.getElementById("btn2").innerText = "已登录";
                            //     self.document.getElementById("btn2").onclick = "";





                            {{--self.location.href="{{url('main')}}";--}}
                        }else{
                            layer.msg(response.data)
                        }


                    }
                });
                return false;
            });
        });

</script>

</html>
