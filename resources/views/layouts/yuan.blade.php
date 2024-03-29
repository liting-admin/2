<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>@yield('title')@yield('content')</title>
<meta name="keywords" content="html5后台管理模板,企业后台模板,cms后台管理系统,cms网站管理系统,cms后台模板" />
<meta name="description" content="绿色清爽的HTML5通用后台管理系统模板。" />
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" href="/static/index/Css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/static/index/Css/style.css">
<!--[if lt IE 9]>
<script src="/static/index/Scripts/html5.js"></script>
<![endif]-->
<script src="/static/index/Scripts/jquery.js"></script>
<script src="/static/index/Scripts/jquery.mcustomscrollbar.concat.min.js"></script>
<script>

  (function($){
    $(window).load(function(){
      
      $("a[rel='load-content']").click(function(e){
        e.preventDefault();
        var url=$(this).attr("href");
        $.get(url,function(data){
          $(".content .mCSB_container").append(data); //load new content inside .mCSB_container
          //scroll-to appended content 
          $(".content").mCustomScrollbar("scrollTo","h2:last");
        });
      });
      
      $(".content").delegate("a[href='top']","click",function(e){
        e.preventDefault();
        $(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
      });
      
    });
  })(jQuery);
</script>
</head>
<body>
<!--header-->
<header>
 <h1><img src="/static/index/picture/admin_logo.png"/></h1>
 <ul class="rt_nav">
  <li><a href="http://www.deathghost.cn" target="_blank" class="website_icon">站点首页</a></li>
  <li><a href="#" class="clear_icon">清除缓存</a></li>
  <li><a href="#" class="admin_icon">DeathGhost</a></li>
  <li><a href="#" class="set_icon">账号设置</a></li>
  <li><a href="login.html" class="quit_icon">安全退出</a></li>
 </ul>
</header>
<!--aside nav-->
<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
 <h2><a href="index.html">起始页</a></h2>
 <ul>
  <li>
   <dl>
    <dt>客户信息管理</dt>
    <!--当前链接则添加class:active-->
    <dd><a href="{{url('/client/create')}}">新建客户</a></dd>
    <dd><a href="{{url('/client/index')}}">客户信息管理</a></dd>
    
   </dl>
  </li>
  <li>
   <dl>
    <dt>联系人信息管理</dt>
    <dd><a href="{{url('index/create')}}">新建联系人</a></dd>
    <dd><a href="{{url('index/list')}}">联系人信息管理</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>客户服务日程安排</dt>
    <dd><a href="user_list.html">客户服务日程安排</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>客户服务记录</dt>
    <dd><a href="{{url('/redcord/create')}}">客户服务记录</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>综合查询</dt>
    <dd><a href="{{url('/index/Sel/index')}}">综合查询</a></dd>
   

   </dl>
 
 </ul>
</aside>
@yield('content')

    </script>
</body>
</html>