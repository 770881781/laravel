<!DOCTYPE html>
<html class="no-js" lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>文章模块</title>
    <link href="/public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 
    <link href="/public/css/all.css" rel='stylesheet' type='text/css' media='all'/>
    <script type='text/javascript' src="/laravel/public/js/all.js"></script>
</head>
<body>
    <div class="container">
        <section class="content">
            <div class="pad group">
                @yield('content')
            </div>
        </section>
    </div>
</body>
</html>