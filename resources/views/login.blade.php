<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>开始使用layui</title>
    <link rel="stylesheet" href="../layui/css/layui.css">
</head>
<body>

<!-- 你的HTML代码 -->

<script src="../layui/layui.js"></script>
<script>
    //一般直接写在一个js文件中
    layui.use(['layer', 'form'], function(){
        // var layer = layui.layer
        //     ,form = layui.form;
        //
        // layer.msg('Hello World');


        layer.alert('内容', {
            icon: 1,
            skin: 'layer-ext-moon' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
        });
        //询问框


        // layer.open({
        //     type: 1,
        //     skin: 'layui-layer-rim', //加上边框
        //     area: ['420px', '240px'], //宽高
        //     content: '请注册'
        // });

        layer.confirm('请注册', {
            btn: ['确定','取消'] //按钮
        }, function(){
            layer.msg('好的', {icon: 1});
        }, function() {
            layer.msg('未注册不能使用全部功能', {
                time: 20000, //20s后自动关闭
                btn: ['明白了']
            });
        });
    });
</script>

</body>
</html>