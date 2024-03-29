<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>销售员登陆</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="/static/index/Css/style.css" />
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script src="/static/index/Scripts/jquery.js"></script>
<script src="/static/index/Scripts/verificationnumbers.js"></script>
<script src="/static/index/Scripts/particleground.js"></script>
<script>
$(document).ready(function() {
  //粒子背景特效
  $('body').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  //验证码
  // createCode();
  // //测试提交，对接程序删除即可
  // $(".submit_btn").click(function(){
	//   location.href="index.html";
	//   });
});
</script>
</head>
<body>
  <form action="{{url('/admin/doLogin')}}" method="post">
  @csrf
    <dl class="admin_login">
    <dt>
      <strong>销售员登陆</strong>
      <em>Management System</em>
    </dt>
    {{session('msg')}}
    <dd class="user_icon">
      <input type="text" name="name" placeholder="用户名" class="login_txtbx"/>
    </dd>
    <dd class="pwd_icon">
      <input type="password" name="password" placeholder="密码" class="login_txtbx"/>
    </dd>
    <dd class="user_icon">
      <input type="email" name="email" placeholder="邮箱" class="login_txtbx"/>
    </dd>
    <dd>
      <input type="submit" value="立即登陆" class="submit_btn"/>
    </dd>
    <dd>
      <p>© 2015-2016 DeathGhost 版权所有</p>
      <p>陕B2-20080224-1</p>
    </dd>
    </dl>
</form>
</body>
</html>
<!--
本代码由js代码网网友上传，js代码网收集并编辑整理;
尊重他人劳动成果;
转载请保留js代码链接 - www.jsdaima.com
-->