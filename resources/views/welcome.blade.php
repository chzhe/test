<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<button id ="btn1" class="layui-btn" onclick="click()" style="color: #20a53a">请先注册</button>
<div id = 'test' style="display: none">
    <p class="txtCenter" style="align-content: center" style="color:green">注册</p>
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
</div>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
    {{--<a href="/" style="display: block">Home</a>--}}
    {{--<a href="/login" style="display: block">Login</a>--}}
    {{--<a href="/register" style="display: block">Register</a>--}}
    <div class="content">
        <div class="title m-b-md">
            First
        </div>

        <div class="links">
            <a href="https://chzhe.github.io">chz's blog</a>
            {{--<a href="https://laracasts.com">Laracasts</a>--}}
            {{--<a href="https://laravel-news.com">News</a>--}}
            {{--<a href="https://forge.laravel.com">Forge</a>--}}
            {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
        </div>
    </div>
</div>
</body>

<script src="../layui/layui.js"></script>
<script>





    layui.use(['layer', 'form'], function() {
        var layer = layui.layer
            , form = layui.form
            , $ = layui.jquery;

        // var index = layer.open({
        //     content: 'test'
        // });
        $("#btn1").click(function () {
            // if($(#test).css("display")=="block"){
            //    $(#test).hide();

                layer.open({
                    type: 1,
                    skin: 'layui-layer-rim', //加上边框
                    area: ['420px', '300px'], //宽高
                    content: $("#test").html()


                });
            // }
        })
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
                        self.location.href="{{url('main')}}";
                    }else{
                        layer.msg(response.data)

                    }
                }
            });
            return false;
        });

    });
    {{--self.location.href="{{url('reg')}}"--}}
</script>

</html>