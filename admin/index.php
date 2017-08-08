<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>网站信息管理 - 网页制作系统 - 管理中心</title>
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
		if(isset($_POST['id'])&&$_POST['id']==1){
			updateconfig("../config.php", "title",urlencode($_POST['title'])); 
			updateconfig("../config.php", "logo",urlencode($_POST['logo'])); 
			updateconfig("../config.php", "right_top_title_1",urlencode($_POST['right_top_title_1'])); 
			updateconfig("../config.php", "right_top_url_1",urlencode($_POST['right_top_url_1'])); 
			//updateconfig("../config.php", "right_top_title_2",urlencode($_POST['right_top_title_2'])); 
			//updateconfig("../config.php", "right_top_url_2",urlencode($_POST['right_top_url_2'])); 
			updateconfig("../config.php", "qq",urlencode($_POST['qq'])); 
			updateconfig("../config.php", "email",urlencode($_POST['email'])); 
			updateconfig("../config.php", "footewm",urlencode($_POST['footewm'])); 
			updateconfig("../config.php", "right_foot",urlencode($_POST['right_foot'])); 
			updateconfig("../config.php", "liuyan",urlencode($_POST['liuyan'])); 
			updateconfig("../config.php", "tonji",urlencode($_POST['tonji'])); 
			updateconfig("../config.php", "tencent",urlencode($_POST['tencent'])); 
			echo '<script language="javascript"> alert("修改成功，请到前台刷新查看效果。");</script>';
		}
		if(isset($_POST['id'])&&$_POST['id']==2){
			updateconfig("../config.php", "titletop",urlencode($_POST['titletop'])); 
			updateconfig("../config.php", "tdimg1",urlencode($_POST['tdimg1'])); 
			updateconfig("../config.php", "tdimg2",urlencode($_POST['tdimg2'])); 
			updateconfig("../config.php", "tdimg3",urlencode($_POST['tdimg3'])); 
			updateconfig("../config.php", "tdtext1",urlencode($_POST['tdtext1'])); 
			updateconfig("../config.php", "tdtext2",urlencode($_POST['tdtext2'])); 
			updateconfig("../config.php", "tdtext3",urlencode($_POST['tdtext3'])); 
			updateconfig("../config.php", "tdwm1",urlencode($_POST['tdwm1'])); 
			updateconfig("../config.php", "tdwm2",urlencode($_POST['tdwm2'])); 
			updateconfig("../config.php", "tdwm3",urlencode($_POST['tdwm3'])); 
			updateconfig("../config.php", "hzimg1",urlencode($_POST['hzimg1'])); 
			updateconfig("../config.php", "hzimg2",urlencode($_POST['hzimg2'])); 
			updateconfig("../config.php", "hzimg3",urlencode($_POST['hzimg3'])); 
			updateconfig("../config.php", "hzimg4",urlencode($_POST['hzimg4'])); 
			updateconfig("../config.php", "hzurl1",urlencode($_POST['hzurl1'])); 
			updateconfig("../config.php", "hzurl2",urlencode($_POST['hzurl2'])); 
			updateconfig("../config.php", "hzurl3",urlencode($_POST['hzurl3'])); 
			updateconfig("../config.php", "hzurl4",urlencode($_POST['hzurl4'])); 
			if(@$_POST['hzpd1']=='on') updateconfig("../config.php", "hzpd1",urlencode('true')); else updateconfig("../config.php", "hzpd1",urlencode('false')); 
			if(@$_POST['hzpd2']=='on') updateconfig("../config.php", "hzpd2",urlencode('true')); else updateconfig("../config.php", "hzpd2",urlencode('false')); 
			if(@$_POST['hzpd3']=='on') updateconfig("../config.php", "hzpd3",urlencode('true')); else updateconfig("../config.php", "hzpd3",urlencode('false')); 
			if(@$_POST['hzpd4']=='on') updateconfig("../config.php", "hzpd4",urlencode('true')); else updateconfig("../config.php", "hzpd4",urlencode('false')); 
			echo '<script language="javascript"> alert("修改成功，请到前台刷新查看效果。");</script>';
		}
		if(isset($_POST['id'])&&$_POST['id']==3){
			updateconfig("../config.php", "zhuce_gg",urlencode($_POST['zhuce_gg'])); 
			updateconfig("../config.php", "zhuce_zcm",urlencode($_POST['zhuce_zcm'])); 
			updateconfig("../config.php", "zhuce_zcmts",urlencode($_POST['zhuce_zcmts'])); 
			updateconfig("../config.php", "zhuce_zh",urlencode($_POST['zhuce_zh'])); 
			updateconfig("../config.php", "zhuce_zhts",urlencode($_POST['zhuce_zhts'])); 
			updateconfig("../config.php", "zhuce_mm",urlencode($_POST['zhuce_mm'])); 
			updateconfig("../config.php", "zhuce_mm2",urlencode($_POST['zhuce_mm2'])); 
			updateconfig("../config.php", "zhuce_mmts",urlencode($_POST['zhuce_mmts'])); 
			updateconfig("../config.php", "zhuce_dbbt",urlencode($_POST['zhuce_dbbt'])); 
			updateconfig("../config.php", "zhuce_db1",urlencode($_POST['zhuce_db1'])); 
			updateconfig("../config.php", "zhuce_db2",urlencode($_POST['zhuce_db2'])); 
			updateconfig("../config.php", "zhuce_db3",urlencode($_POST['zhuce_db3'])); 
			updateconfig("../config.php", "zhuce_db4",urlencode($_POST['zhuce_db4'])); 
			echo '<script language="javascript"> alert("修改成功，请到前台刷新查看效果。");</script>';
		}
		if(isset($_POST['id'])&&$_POST['id']==4){
			updateconfig("../config.php", "tsbt",urlencode($_POST['tsbt'])); 
			updateconfig("../config.php", "tstext1",urlencode($_POST['tstext1'])); 
			updateconfig("../config.php", "tstext2",urlencode($_POST['tstext2'])); 
			updateconfig("../config.php", "tstext3",urlencode($_POST['tstext3'])); 
			updateconfig("../config.php", "tstext4",urlencode($_POST['tstext4'])); 
			echo '<script language="javascript"> alert("修改成功，请到前台刷新查看效果。");</script>';
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
        <li class="active"><a href="#"><span class="glyphicon glyphicon-list-alt"></span>网站信息管理</a></li>
		 <li><a href="vip.php"><span class="glyphicon glyphicon-comment"></span>贵宾会员管理</a></li>
		  <li><a href="pingbi.php"><span class="glyphicon glyphicon-exclamation-sign"></span>违规网页屏蔽</a></li>
        <li><a href="exit.php"><span class="glyphicon glyphicon-off"></span>安全退出</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<div class="row">

<!--网站信息修改-->
<div class="panel panel-primary form-group">
  <div class="panel-heading">
    <h3 class="panel-title">网站信息修改</h3>
  </div>
  <div class="panel-body"> 
    <!--全局信息修改 分类一-->
    <div class="form-group">
      <div class="page-header">
        <h3>全局信息修改</h3>
      </div>
      <form action="index.php" method="post">
        <input type="hidden" name="id"  value="1">
        <div class="form-group">
          <label>网站标题设置：</label>
          <input type="text" name="title" class="form-control" placeholder="请输入网站标题" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'title', $type))) ?>">
        </div>
        <div class="form-group">
          <label>顶部LOGO文字：</label>
          <input type="text" name="logo" class="form-control" placeholder="请输入LOGO文字" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'logo', $type))) ?>">
        </div>
        <div class="form-group">
          <label>顶部右上链接设置：</label>
          <div class="form-group">
            <div class="col-md-4 col-sm-4 col-xs-4 duolie">
              <input type="text" name="right_top_title_1" class="form-control" placeholder="链接名称" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'right_top_title_1', $type))) ?>">
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8 duolie">
              <input type="text" name="right_top_url_1" class="form-control" placeholder="链接URL地址" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'right_top_url_1', $type))) ?>">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>站长QQ设置：</label>
          <input type="text" name="qq" class="form-control" placeholder="请输入站长QQ" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'qq', $type))) ?>">
        </div>
        <div class="form-group">
          <label>站长E-mail设置：</label>
          <input type="text" name="email" class="form-control" placeholder="请输入站长E-mail" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'email', $type))) ?>">
        </div>
        <div class="form-group">
          <label>底部二维码设置：</label>
          <input type="text" name="footewm" class="form-control" placeholder="请输入二维码图片URL地址" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'footewm', $type))) ?>">
        </div>
        <div class="form-group">
          <label>底部右下角设置：</label>
          <input type="text" name="right_foot" class="form-control" placeholder="请输入底部右下角文字" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'right_foot', $type))) ?>">
        </div>
        <div class="form-group">
          <label>第三方留言代码：<small>（代码请到第三方网站获取，如：畅言评论、多说评论）</small></label>
          <textarea style="max-width:100%;" type="text" name="liuyan" class="form-control textarea animate-box" rows="3" placeholder="请输入留言代码" ><?php echo htmlspecialchars(urldecode(get_config($file, 'liuyan', $type))) ?></textarea>
        </div>
        <div class="form-group">
          <label>第三方统计代码：<small>（代码请到第三方网站获取，如：百度统计、CNZZ统计）</small></label>
          <textarea style="max-width:100%;" type="text" name="tonji" class="form-control textarea animate-box" rows="3" placeholder="请输入统计代码"><?php echo htmlspecialchars(urldecode(get_config($file, 'tonji', $type))) ?></textarea>
        </div>
        <div class="form-group">
          <div class="form-group"><label>防腾讯检测插件：<small>（可有效的防止域名被举报变红）</small></label></div>
          <label class="checkbox-inline">
              <input type="radio" value="true" name="tencent" <?php if(get_config($file, 'tencent', $type)=='true') echo 'checked="checked"';  ?> > 开启插件</span></label>
             <label class="checkbox-inline"><input type="radio" value="false" style=" margin-left:20px;" name="tencent" <?php if(get_config($file, 'tencent', $type)=='false') echo 'checked="checked"';  ?> > 关闭插件</span></label>
          
        </div>
        <button type="submit" class="btn btn-primary btn-block">确定修改</button>
      </form>
    </div>
    <!--首页信息修改 分类二-->
    <div class="form-group">
      <div class="page-header">
        <h3>首页信息修改</h3>
      </div>
      <form action="index.php" method="post">
        <input type="hidden" name="id"  value="2">
        <div class="form-group">
          <label>首页顶部名称设置：</label>
          <input type="text" name="titletop" class="form-control" placeholder="请输入首页顶部名称" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'titletop', $type))) ?>">
        </div>
        <div class="form-group">
          <label>顶尖团队： </label>
          <div class="form-group">
            <div class="col-md-5 col-sm-5 col-xs-4 duolie">
              <input type="text" name="tdimg1" class="form-control" placeholder="头像图片URL地址" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'tdimg1', $type))) ?>">
            </div>
            <div class="col-md-5 col-sm-5 col-xs-4 duolie">
              <input type="text" name="tdtext1" class="form-control" placeholder="留言内容" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'tdtext1', $type))) ?>">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-4 duolie">
              <input type="text" name="tdwm1" class="form-control" placeholder="网名" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'tdwm1', $type))) ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-5 col-sm-5 col-xs-4 duolie">
              <input type="text" name="tdimg2" class="form-control" placeholder="头像图片URL地址" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'tdimg2', $type))) ?>">
            </div>
            <div class="col-md-5 col-sm-5 col-xs-4 duolie">
              <input type="text" name="tdtext2" class="form-control" placeholder="留言内容" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'tdtext2', $type))) ?>">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-4 duolie">
              <input type="text" name="tdwm2" class="form-control" placeholder="网名" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'tdwm2', $type))) ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-5 col-sm-5 col-xs-4 duolie">
              <input type="text" name="tdimg3" class="form-control" placeholder="头像图片URL地址" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'tdimg3', $type))) ?>">
            </div>
            <div class="col-md-5 col-sm-5 col-xs-4 duolie">
              <input type="text" name="tdtext3" class="form-control" placeholder="留言内容" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'tdtext3', $type))) ?>">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-4 duolie">
              <input type="text" name="tdwm3" class="form-control" placeholder="网名" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'tdwm3', $type))) ?>">
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <label>合作伙伴： <small>（图片尺寸请自行测试调整）</small></label>
          <div class="form-group">
            <div class="col-md-5 col-sm-5 col-xs-4 duolie">
              <input type="text" name="hzimg1" class="form-control" placeholder="图片URL地址" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'hzimg1', $type))) ?>">
            </div>
            <div class="col-md-5 col-sm-5 col-xs-4 duolie">
              <input type="text" name="hzurl1" class="form-control" placeholder="跳转链接" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'hzurl1', $type))) ?>">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-4 duolie">
              <label class="checkbox">
                <input type="checkbox" name="hzpd1" <?php if(get_config($file, 'hzpd1', $type)=='true') echo 'checked="checked"';  ?> >
                开启 </label>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-5 col-sm-5 col-xs-4 duolie">
              <input type="text" name="hzimg2" class="form-control" placeholder="图片URL地址" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'hzimg2', $type))) ?>">
            </div>
            <div class="col-md-5 col-sm-5 col-xs-4 duolie">
              <input type="text" name="hzurl2" class="form-control" placeholder="跳转链接" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'hzurl2', $type))) ?>">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-4 duolie">
              <label class="checkbox">
                <input type="checkbox" name="hzpd2" <?php if(get_config($file, 'hzpd2', $type)=='true') echo 'checked="checked"';  ?> >
                开启 </label>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-5 col-sm-5 col-xs-4 duolie">
              <input type="text" name="hzimg3" class="form-control" placeholder="图片URL地址" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'hzimg3', $type))) ?>">
            </div>
            <div class="col-md-5 col-sm-5 col-xs-4 duolie">
              <input type="text" name="hzurl3" class="form-control" placeholder="跳转链接" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'hzurl3', $type))) ?>">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-4 duolie">
              <label class="checkbox">
                <input type="checkbox" name="hzpd3" <?php if(get_config($file, 'hzpd3', $type)=='true') echo 'checked="checked"';  ?> >
                开启 </label>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-5 col-sm-5 col-xs-4 duolie">
              <input type="text" name="hzimg4" class="form-control" placeholder="图片URL地址" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'hzimg4', $type))) ?>">
            </div>
            <div class="col-md-5 col-sm-5 col-xs-4 duolie">
              <input type="text" name="hzurl4" class="form-control" placeholder="跳转链接" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'hzurl4', $type))) ?>">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-4 duolie">
              <label class="checkbox">
                <input type="checkbox" name="hzpd4" <?php if(get_config($file, 'hzpd4', $type)=='true') echo 'checked="checked"';  ?> >
                开启 </label>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">确定修改</button>
      </form>
    </div>
    <!--栏目页信息修改 分类三-->
    <div class="form-group">
      <div class="page-header">
        <h3>注册页面修改</h3>
      </div>
      <form action="index.php" method="post">
        <input type="hidden" name="id"  value="3">
        <div class="form-group">
          <label>绿色提示公告框：</label>
          <textarea style="max-width:100%;" type="text" name="zhuce_gg" class="form-control textarea animate-box" rows="3" placeholder="请输入注册公告" ><?php echo htmlspecialchars(urldecode(get_config($file, 'zhuce_gg', $type))) ?></textarea>
        </div>
        <div class="form-group">
          <label>注册码输入框提示：</label>
          <input type="text" name="zhuce_zcm" class="form-control" placeholder="请输入输入框提示" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'zhuce_zcm', $type))) ?>">
        </div>
        <div class="form-group">
          <label>注册码输入框底部提示：<small>（此内容支持HTML中的a标签，用于跳转至发卡，请谨慎设置。）</small></label>
          <input type="text" name="zhuce_zcmts" class="form-control" placeholder="请输入输入框底部提示" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'zhuce_zcmts', $type))) ?>">
        </div>
        <div class="form-group">
          <label>账号输入框提示：</label>
          <input type="text" name="zhuce_zh" class="form-control" placeholder="请输入输入框提示" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'zhuce_zh', $type))) ?>">
        </div>
        <div class="form-group">
          <label>账号输入框底部提示：<small>（账号格式已在程序内部机制规定好，无法更改，请按规定格式提示用户。）</small></label>
          <input type="text" name="zhuce_zhts" class="form-control" placeholder="请输入输入框底部提示" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'zhuce_zhts', $type))) ?>">
        </div>
        <div class="form-group">
          <label>密码输入框提示：</label>
          <input type="text" name="zhuce_mm" class="form-control" placeholder="请输入输入框提示" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'zhuce_mm', $type))) ?>">
        </div>
        <div class="form-group">
          <label>确认密码输入框提示：</label>
          <input type="text" name="zhuce_mm2" class="form-control" placeholder="请输入输入框底部提示" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'zhuce_mm2', $type))) ?>">
        </div>
        <div class="form-group">
          <label>密码输入框底部提示：<small>（密码格式已在程序内部机制规定好，无法更改，请按规定格式提示用户。）</small></label>
          <input type="text" name="zhuce_mmts" class="form-control" placeholder="请输入输入框底部提示" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'zhuce_mmts', $type))) ?>">
        </div>
        <div class="form-group">
          <label>会员办理免责声明：</label>
          <div class="form-group">
            <input type="text" name="zhuce_dbbt" class="form-control" placeholder="声明标题" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'zhuce_dbbt', $type))) ?>">
          </div>
          <div class="form-group">
            <input type="text" name="zhuce_db1" class="form-control" placeholder="请输入第一行内容" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'zhuce_db1', $type))) ?>">
          </div>
          <div class="form-group">
            <input type="text" name="zhuce_db2" class="form-control" placeholder="请输入第二行内容" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'zhuce_db2', $type))) ?>">
          </div>
          <div class="form-group">
            <input type="text" name="zhuce_db3" class="form-control" placeholder="请输入第三行内容" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'zhuce_db3', $type))) ?>">
          </div>
          <div class="form-group">
            <input type="text" name="zhuce_db4" class="form-control" placeholder="请输入第四行内容" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'zhuce_db4', $type))) ?>">
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">确定修改</button>
      </form>
    </div>
    <!--栏目页信息修改 分类三-->
    <div class="form-group">
      <div class="page-header">
        <h3>生成页信息修改</h3>
      </div>
      <form action="index.php" method="post">
        <input type="hidden" name="id"  value="4">
        <div class="form-group">
          <label>网页制作说明：</label>
          <div class="form-group">
            <input type="text" name="tsbt" class="form-control" placeholder="说明标题" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'tsbt', $type))) ?>">
          </div>
          <div class="form-group">
            <input type="text" name="tstext1" class="form-control" placeholder="请输入第一行内容" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'tstext1', $type))) ?>">
          </div>
          <div class="form-group">
            <input type="text" name="tstext2" class="form-control" placeholder="请输入第二行内容" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'tstext2', $type))) ?>">
          </div>
          <div class="form-group">
            <input type="text" name="tstext3" class="form-control" placeholder="请输入第三行内容" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'tstext3', $type))) ?>">
          </div>
          <div class="form-group">
            <input type="text" name="tstext4" class="form-control" placeholder="请输入第四行内容" value="<?php echo htmlspecialchars(urldecode(get_config($file, 'tstext4', $type))) ?>">
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">确定修改</button>
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