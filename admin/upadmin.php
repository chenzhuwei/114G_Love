<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>管理账户修改 - 网页制作系统 - 管理中心</title>
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="//cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<?php
error_reporting(0);
if(!empty($_COOKIE["username"])){
	$obj=json_decode(file_get_contents('administrator.json')); 
	$user=$obj->username;
	$pass=$obj->password;
	if((md5($_COOKIE["username"])==$user)&&(md5($_COOKIE["password"])==$pass)){
		if(isset($_POST['id'])&&$_POST['id']==1){
			$myfile = fopen("administrator.json", "w");
			$txt = '{"username": "'.md5($_POST['username']).'", "password":"'.md5($_POST['password']).'"}';
			fwrite($myfile, $txt);
			fclose($myfile);
			echo '<script language="javascript"> alert("管理账户修改成功，请牢记账号密码。\n新账号：'.$_POST['username'].'\n新密码：'.$_POST['password'].'");</script>';
			echo '<script language="javascript">window.location.href=\'login.php\';</script>';
		}
	}else{
		echo '<script language="javascript">window.location.href=\'login.php\';</script>';
	}
}else{
	echo '<script language="javascript">window.location.href=\'login.php\';</script>';
}
?>
<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse"> <span class="sr-only">切换导航</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="">网页制作系统 - 管理中心</a> </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span>管理账户修改</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-list-alt"></span>网站信息管理</a></li>
		<li><a href="vip.php"><span class="glyphicon glyphicon-comment"></span>贵宾会员管理</a></li>
		<li><a href="pingbi.php"><span class="glyphicon glyphicon-exclamation-sign"></span>违规网页屏蔽</a></li>
        <li><a href="exit.php"><span class="glyphicon glyphicon-off"></span>安全退出</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<div class="row">
<!--管理员信息修改-->
<div class="panel panel-success form-group">
  <div class="panel-heading">
    <h3 class="panel-title">管理员账户修改</h3>
  </div>
  <div class="panel-body">
    <div class="form-group">
      <div class="page-header">
        <h3>管理员账户修改<small>（若只修改密码，账号请填写原账号即可）</small></h3>
      </div>
      <form action="upadmin.php" method="post">
      <input type="hidden" name="id"  value="1">
      <div class="form-group">
        <label>管理员账号设置：</label>
        <input type="text" name="username" class="form-control" placeholder="请输入新账号" required="required">
      </div>
      <div class="form-group">
        <label>管理员密码设置：</label>
        <input type="password" name="password" class="form-control" placeholder="请输入新密码" required="required">
      </div>
      <div class="form-group" style=" text-align:center"><small>（提示：如果账号密码忘记，将 后台/administrator.json 文件替换成刚下载的原始文件即可还原，设置的数据不会丢失。）</small></div>
      <button type="submit" class="btn btn-success btn-block">确定修改</button>
      </form>
    </div>
  </div>
</div>
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">开发者：</h3>
  </div>
  <div class="panel-body"> 本后台由144G网页制作站长独立开发，可管理网站会员、网页屏蔽以及修改前台信息等等。若还想修改其他内容请直接修改前台代码，如果不了解请别动代码，以免程序出错。商务合作、PHP程序定制请联系站长唯一QQ：49553941 ，有偿服务，谢谢。</div>
</div>
</body>
</html>