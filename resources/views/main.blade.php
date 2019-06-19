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

<!-- 你的HTML代码 -->

<script src="../layui/layui.js"></script>
<script>
    //一般直接写在一个js文件中
    layui.use(['layer', 'form'], function(){
        var layer = layui.layer
            ,form = layui.form;

        layer.msg('ByeBye~');
    });
</script>
</body>
</html>
