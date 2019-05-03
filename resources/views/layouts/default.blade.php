<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','默认值') - Weibo App</title>
  </head>
  <body>
    @yield('content')

    <?php echo "此页面为默认视图页面，尝试输出 <br>部分为html页面，非纯php页面"; ?>
  </body>
</html>
