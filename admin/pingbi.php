<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>违规网页屏蔽 - 网页制作系统 - 管理中心</title>
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
		require('tool.php');
		
		if(isset($_POST['pbinfo'])){
			updateconfig("../config.php", "pbinfo",urlencode($_POST['textarea'])); 
			echo '<script language="javascript"> alert("修改成功。");</script>';
		}else if(isset($_POST['pbadd'])){
			echo '<script language="javascript">alert("'.pbadd($_POST['url']).'");</script>';
		}else if(isset($_POST['delpb'])){
			echo '<script language="javascript">alert("'.delpb($_POST['url']).'");</script>';
		}else if(isset($_POST['qkpb'])){
			echo '<script language="javascript">alert("'.qkpb().'");</script>';
		}
	}else{
		echo '<script language="javascript">window.location.href=\'login.php\';</script>';
	}
}else{
	echo '<script language="javascript">window.location.href=\'login.php\';</script>';
}
$file='../config.php';
$type='string';
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
        <li><a href="upadmin.php"><span class="glyphicon glyphicon-user"></span>管理账户修改</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-list-alt"></span>网站信息管理</a></li>
		 <li><a href="vip.php"><span class="glyphicon glyphicon-comment"></span>贵宾会员管理</a></li>
		  <li class="active"><a href="#"><span class="glyphicon glyphicon-exclamation-sign"></span>违规网页屏蔽</a></li>
        <li><a href="exit.php"><span class="glyphicon glyphicon-off"></span>安全退出</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<div class="row">

<!-- 贵宾会员管理 -->
<div class="panel panel-primary form-group">
  <div class="panel-heading">
    <h3 class="panel-title">违规网页屏蔽</h3>
  </div>
  <div class="panel-body"> 
    <!-- 会员管理 -->
    <div class="form-group">
      <div class="page-header">
        <h3>网页屏蔽禁封</h3>
      </div>
		<form action="pingbi.php" method="post">
			<input type="hidden" name="pbinfo">
			<div class="form-group">
			  <label>屏蔽后弹窗提示文字：</label>
			  <div class="form-group">
				  <textarea style=" height:70px; max-width:100%" type="text" name="textarea" class="form-control" placeholder="屏蔽后弹窗提示文字" required><?php echo htmlspecialchars(urldecode(get_config($file, 'pbinfo', $type))) ?></textarea>
				<button type="submit" class="btn btn-primary btn-block" style=" margin-top:5px">保存设置</button>
			  </div>
			</div>
		</form>
      	<form action="pingbi.php" method="post">
			<input type="hidden" name="pbadd">
			<div class="form-group">
			  <label>要屏蔽网页地址：</label>
			  <div class="form-group">
				  <input  type="text" name="url" class="form-control" placeholder="如：http://www.144g.com/web.php?id=XXXXXXX" value="" required>
				<button type="submit" class="btn btn-warning btn-block" style=" margin-top:5px">立即屏蔽</button>
			  </div>
			</div>
		</form>
        <input type="hidden" name="id"  value="1">
        <div class="form-group">
          <label>已经禁封屏蔽的网页：<small>已屏蔽： <?php echo pbcount(); ?> 个网址</small></label>
          <div class="form-group">
            <select style=" width:100%" id="select" size="6" >
            	<?php $pingbi = pbinfo(); $pingbi_count = count($pingbi); ?>
            	<?php
					for($i=$pingbi_count-1;$i>=0;$i--){
						echo '<option onclick="xz()" value="'.$pingbi[$i].'">网址：'.$pingbi[$i].'</option>';
					}
				?>
			</select>
          </div>
        </div>
		<form action="pingbi.php" method="post">
        	  <input type="hidden" name="delpb">
              <label>取消网页屏蔽：</label>
              <div class="form-group">
                <input id="deluser" type="text" name="url" class="form-control" placeholder="如：http://www.144g.com/web.php?id=XXXXXXX" value="" required>
                <button type="submit" class="btn btn-primary btn-block" style=" margin-top:5px">取消屏蔽</button>
              </div>
        </form>
        <form action="pingbi.php" method="post">
         <input type="hidden" name="qkpb">
              <div class="form-group">
                <button type="submit" class="btn btn-danger btn-block" style=" margin-top:5px">清空所有屏蔽的网址</button>
              </div>
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
<script type="text/javascript">
		function xz(){
			var textt = $("#select").find("option:selected").val();
			document.getElementById('deluser').value=textt;
		}
</script>
</body>
</html>