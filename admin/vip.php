<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>贵宾会员管理 - 网页制作系统 - 管理中心</title>
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="//cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
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
		$array = dqwj('../');
		$viparray = infoviptem();
		if(isset($_POST['delvip'])){
			echo '<script language="javascript">alert("'.delvip($_POST['username']).'");</script>';
		}else if(isset($_POST['uppaswd'])){
			echo '<script language="javascript">alert("'.uppaswd($_POST['username'],$_POST['password']).'");</script>';
		}else if(isset($_POST['addzcm'])){
			echo '<script language="javascript">alert("'.addzcm($_POST['textarea']).'");</script>';
		}else if(isset($_POST['delzcm'])){
			echo '<script language="javascript">alert("'.delzcm().'");</script>';
		}else if(isset($_POST['viptem'])){
				$viparray = array(geren=>array(),biaobai=>array(),quwei=>array());
				for($i=0;$i<count($array[geren]);$i++){
					if($_POST[$array[geren][$i]]){
						$viparray[geren][] = $array[geren][$i];
					}
				}
				for($i=0;$i<count($array[biaobai]);$i++){
					if($_POST[$array[biaobai][$i]]){
						$viparray[biaobai][] = $array[biaobai][$i];
					}
				}
				for($i=0;$i<count($array[quwei]);$i++){
					if($_POST[$array[quwei][$i]]){
						$viparray[quwei][] = $array[quwei][$i];
					}
				}
				$viptem_json = urlencode(json_encode($viparray));
				updateconfig("../config.php", "viptem",$viptem_json); 
				echo '<script language="javascript">alert("设置成功！");</script>';	
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
        <li><a href="upadmin.php"><span class="glyphicon glyphicon-user"></span>管理账户修改</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-list-alt"></span>网站信息管理</a></li>
		 <li class="active"><a href="#"><span class="glyphicon glyphicon-comment"></span>贵宾会员管理</a></li>
		  <li><a href="pingbi.php"><span class="glyphicon glyphicon-exclamation-sign"></span>违规网页屏蔽</a></li>
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
    <h3 class="panel-title">贵宾会员管理</h3>
  </div>
  <div class="panel-body"> 
    <!-- 会员管理 -->
    <div class="form-group">
      <div class="page-header">
        <h3>会员管理<small>　总会员数：<?php echo countvip() ?></small></h3>
      </div>
        <input type="hidden" name="id"  value="1">
        <div class="form-group">
          <label>最近注册的500位用户：<small>(密码采用MD5加密储存无法查看。用户注册/修改密码才会改变操作时间)</small></label>
          <div class="form-group">
            <select style=" width:100%" id="select" size="6">
            	<?php $userarray = infovip();$users_num=count($userarray);if($users_num>500) $users_num = 500; ?>
                <?php
					for($i=$users_num-1;$i>=0;$i--){
						echo '<option onclick="xz()" value="'.$userarray[$i][0].'">用户名：'.$userarray[$i][0].' 丨 IP地址：'.$userarray[$i][3].' 丨 操作时间：'.$userarray[$i][2].'</option>';
					}
				?>
			</select>
          </div>
        </div>
		<form action="vip.php" method="post">
        	  <input type="hidden" name="delvip">
              <label>请输入要删除的用户：</label>
              <div class="form-group">
                <input type="text" id="deluser" name="username" class="form-control" placeholder="请输入用户名" value="" maxlength="30" required>
                <button type="submit" class="btn btn-danger btn-block" style=" margin-top:5px">确定删除</button>
              </div>
        </form>
		<form action="vip.php" method="post">
			<input type="hidden" name="uppaswd">
			<div class="form-group">
			  <label>修改用户密码：</label>
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 duolie">
				  <input id="upuser" type="text" name="username" class="form-control" placeholder="用户账号" maxlength="20" value="" required>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 duolie">
				  <input type="text" name="password" class="form-control" placeholder="更改的密码" maxlength="30" value="" required>
				</div>
				<button type="submit" class="btn btn-warning btn-block" style=" margin-top:5px">确定修改</button>
			  </div>
			</div>
		</form>
    </div>
    <!-- 注册码管理 -->
    <div class="form-group">
      <div class="page-header">
        <h3>注册码管理<small>　剩余注册码：<?php echo countzcm(); ?></small></h3>
      </div>
      <form action="vip.php" method="post">
           <input type="hidden" name="addzcm">
           <label>添加注册码：<small>（特别注意：系统采用MD5加密储存，添加后无法导出查看，添加前请务必先保存）</small></label>
              <div class="form-group">
                <textarea style=" height:200px; max-width:100%;" type="text" name="textarea" class="form-control" placeholder="请输入注册码
格式：一行一个 （每个注册码30个字符以内）" required></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">确定添加</button>
              </div>
           </form>
         <form action="vip.php" method="post">
           <input type="hidden" name="delzcm">
          <div class="form-group">
            <button type="submit" class="btn btn-danger btn-block">清空所有已添加的注册码</button>
          </div>
          </form>
    </div>
    <!-- 会员模板设置 -->
    <div class="form-group">
      <div class="page-header">
        <h3>设置贵宾会员模板</h3>
      </div>
      <form action="vip.php" method="post">
           <input type="hidden" name="viptem">
           <label>选择设置模板：</label>
             <ul id="myTab" class="nav nav-tabs">
				<li class="active"><a href="#geren" data-toggle="tab">个人网页</a></li>
				<li><a href="#biaobai" data-toggle="tab">表白网页</a></li>
				<li><a href="#quwei" data-toggle="tab">趣味网页</a></li>
			</ul>
            <style>
				#geren,#biaobai,#quwei{ padding:10px 0px 10px 0px;}
            	.btbt{font-size:12px;}
            </style>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade in active" id="geren">
                    <?php
						for($i=0;$i<count($array[geren]);$i++){
							$vipvip = pdviptem('geren',$array[geren][$i]);
							echo '					<div class="col-md-2 col-sm-4 col-xs-6">';
							echo '						<label class="baoliu">';
							echo '							<img class="img-responsive lazy" src="../images/loading.png" data-original="../'.$array[geren][$i].'/logo.png" class="img-responsive lazy">';
							echo '							<input type="checkbox" name="'.$array[geren][$i].'" '; if($vipvip){ echo 'checked="checked"' ;}  echo '><span class="btbt" '; if($vipvip){ echo 'style="color: red;"' ;} ; echo ' >模板ID为：<br />'.$array[geren][$i].'</span>';
							echo '						</label>';
							echo '					</div>';
						}
					?>
				</div>
				<div class="tab-pane fade" id="biaobai">
                	<div class="form-group" style=" text-align:center"><small>（提示：若图片无法显示，请上下滑动即可，因开启懒加载提高速度。）</small></div>
					<?php
						for($i=0;$i<count($array[biaobai]);$i++){
							$vipvip = pdviptem('biaobai',$array[biaobai][$i]);
							echo '					<div class="col-md-2 col-sm-4 col-xs-6">';
							echo '						<label class="baoliu">';
							echo '							<img class="img-responsive lazy" src="../images/loading.png" data-original="../'.$array[biaobai][$i].'/logo.png" class="img-responsive lazy">';
							echo '							<input type="checkbox" name="'.$array[biaobai][$i].'" '; if($vipvip){ echo 'checked="checked"' ;}  echo '><span class="btbt" '; if($vipvip){ echo 'style="color: red;"' ;} ; echo ' >模板ID为：<br />'.$array[biaobai][$i].'</span>';
							echo '						</label>';
							echo '					</div>';
						}
					?>
				</div>
				<div class="tab-pane fade" id="quwei">
                	<div class="form-group" style=" text-align:center"><small>（提示：若图片无法显示，请上下滑动即可，因开启懒加载提高速度。）</small></div>
					<?php
						for($i=0;$i<count($array[quwei]);$i++){
							$vipvip = pdviptem('quwei',$array[quwei][$i]);
							echo '					<div class="col-md-2 col-sm-4 col-xs-6">';
							echo '						<label class="baoliu">';
							echo '							<img class="img-responsive lazy" src="../images/loading.png" data-original="../'.$array[quwei][$i].'/logo.png" class="img-responsive lazy">';
							echo '							<input type="checkbox" name="'.$array[quwei][$i].'" '; if($vipvip){ echo 'checked="checked"' ;}  echo '><span class="btbt" '; if($vipvip){ echo 'style="color: red;"' ;} ; echo ' >模板ID为：<br />'.$array[quwei][$i].'</span>';
							echo '						</label>';
							echo '					</div>';
						}
					?>
				</div>
			</div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">设置</button>
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
			document.getElementById('upuser').value=textt;
		}
</script>
<script type="text/javascript">
    $(function () {
        $("img.lazy").lazyload();
    });
</script>
</body>
</html>