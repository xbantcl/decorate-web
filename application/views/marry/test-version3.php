<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="description" content="javascript H5自适应框架" />
    <meta name="Keywords" content="javascript H5自适应框架" />
    <title id="title">javascript自适应框架</title>
    <link rel="stylesheet" href="resources/css/reset.css">
    <script src="resources/js/adaptive-version3.js"></script>
    <script>
        // 设计图宽度
        window['adaptive'].desinWidth = 750;
        // body 字体大小
        window['adaptive'].baseFont = 24;
        /*
        // 显示最大宽度
        window['adaptive'].maxWidth = 480;
        // rem值改变后执行方法
        window['adaptive'].setRemCallback = function () {
            alert(1)
        };
        window[]
        */
        // 初始化
        window['adaptive'].init();
    </script>
    <style type="text/css">
        .div-1px {
            width: 80%;
            height: 4rem;
            margin: 1rem auto;
            border: 1px solid #333;
        }
        .hairlines .div-1px {
            border: .5px solid #0a55bc;
        }
    </style>
</head>
<body>
    <div class="div-1px">在任何手机下，我的边框是标准的1px哦;部分低版本iphone有bug,我们可以用0.5px解决呢</div>
</body>
<script>
(function() {
    var isIPhone = !!window.navigator.appVersion.match(/iphone/gi);
    if (isIPhone && devicePixelRatio === 2) {
        var testElem = document.createElement('div');
        testElem.style.border = '.5px solid transparent';
        document.body.appendChild(testElem);
        if (testElem.offsetHeight == 1)
        {
            document.querySelector('html').classList.add('hairlines');
        }
        document.body.removeChild(testElem);
    }
})();
</script>
</html>
