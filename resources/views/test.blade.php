<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- 样式文件 -->
    <link rel="stylesheet" href="{{ URL::asset('um/themes/default/_css/umeditor.css') }}">
    <!-- 引用jquery -->
    <script src="{{ URL::asset('um/third-party/jquery.min.js') }}"></script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="{{ URL::asset('um/umeditor.config.js') }}"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="{{ URL::asset('um/_examples/editor_api.js') }}"></script>
    <!-- 语言包文件 -->
    <script type="text/javascript" src="{{ URL::asset('um/lang/zh-cn/zh-cn.js') }}"></script>
    <!-- 实例化编辑器代码 -->
    <script type="text/javascript">
    $(function(){
        window.um = UM.getEditor('container', {
            /* 传入配置参数,可配参数列表看umeditor.config.js */
            toolbar: ['undo redo | bold italic underline | image emotion ']
        });
        var ue = um.getContent();
        um.ready(function(){
            um.setContent('hello world');
            var html = um.getContent();
            var txt = um.getContentTxt();
            //alert(txt);
        });
         
    });
    $(function(){
        $("input[type='submit']").click(function(){

            var values = '';
            values=UM.getEditor('container').getContent();
             // alert(values);
             $("input[name='text']").attr('value',values);
        });
    });
</script>
<script>
    function getContent() {

            var arr = [];
            arr.push("使用editor.getContent()方法可以获得编辑器的内容");
            arr.push("内容为：");
            arr.push(UM.getEditor('container').getContent());
            alert(arr.join("\n"));
        }
    function getContentTxt() {
    var arr = [];
    arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
    arr.push("编辑器的纯文本内容为：");
    arr.push(UM.getEditor('container').getContentTxt());
    alert(arr.join("\n"));
        }
            function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UM.getEditor('container').getPlainTxt());
        alert(arr.join('\n'))
    }
</script>
</head>
<body>
    <script id="container" name="content" type="text/plain" style="width:600px;height:200px;">
    这里写你的初始化内容
    </script>
    <button class="btn" onclick="getContent()">获得内容</button>
    <button class="btn" onclick="getContentTxt()">获得纯文本</button>&nbsp;
    <button class="btn" onclick="getPlainTxt()">获得带格式的纯文本</button>&nbsp;
    <form action="/test" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="text" value="">
        <input type="submit" value="提交">
        
    </form>
</body>
</html>