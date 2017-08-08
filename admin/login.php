<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登入_管理中心</title>
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
	font-family: 微软雅黑;
	background: url(img/bg.gif);
	margin-left: auto;
	margin-right: auto;
	margin-TOP: 100PX;
	width: 20em;
}
.baoliu {
	margin-left: 83px;
	color: #666
}

</style>
</head>
<?php
error_reporting(0);
$root=false;
if (!(is_writable('index.php')&&is_writable('upadmin.php')&&is_writable('login.php'))) {
	global $root;
	$root=true;
}

if(!empty($_COOKIE["username"])){
	$obj=json_decode(file_get_contents('administrator.json')); 
	$user=$obj->username;
	$pass=$obj->password;
	if((md5($_COOKIE["username"])==$user)&&(md5($_COOKIE["password"])==$pass)){
		echo '<script language="javascript">window.location.href=\'index.php\';</script>';
	}
}

if(isset($_POST['id'])&&$_POST['id']==1){
	$obj=json_decode(file_get_contents('administrator.json')); 
	$user=$obj->username;
	$pass=$obj->password;
	if((md5($_POST['username'])==$user)&&(md5($_POST['password'])==$pass)){
		if(isset($_POST['login'])&&$_POST['login']=='on'){
			setcookie('username',$_POST['username'],time()+3600*24*7);
			setcookie('password',$_POST['password'],time()+3600*24*7);
		}else{
			setcookie('username',$_POST['username']);
			setcookie('password',$_POST['password']);
		}
		echo '<script language="javascript"> alert("登入成功");window.location.href=\'index.php\';</script>';
	}else{
		echo '<script language="javascript"> alert("账号或密码错误");</script>';	
	}
}
?>
<body>
<form action="login.php" method="post">
 <input type="hidden" name="id"  value="1">
  <div class="form-group">
  	<img class="img-responsive center-block" src="img/logo.png" />
  </div>
  <div class="form-group">
    <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
      <input type="text" name="username" class="form-control" placeholder="用户名" required="required"/>
    </div>
  </div>
  <div class="form-group">
    <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
      <input type="password" name="password" class="form-control" placeholder="密码" required="required"/>
    </div>
  </div>
  <div class="form-group">
    <button type="submit" style="width:280px;"<?php if($root==true){echo 'class="btn btn-default disabled" disabled="disabled">文件无权限';}else {echo 'class="btn btn-default">登 录';} ?> </button>
  </div>
  <div class="form-group">
    <label class="baoliu">
      <input type="checkbox" name="login">
      登入保留一星期 </label>
  </div>
</form>
<?php
if($root==true){
	echo'<div class="form-group"><span class="label label-danger label-block">文件无权限，请给所有后台文件设置读取与写入权限</span></div>';
}
?>
</body>
</html>