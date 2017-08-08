<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<?php include("../plugin/config2.php"); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>个人业务网_个人网页制作_<?php echo htmlspecialchars(urldecode($title)); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo htmlspecialchars(urldecode($title)); ?>是一款全自动在线网页制作工具，使用144G核心技术，国内顶尖自动化网页制作系统，只需选择模板一键生成即可。可制作一系列个人网页、表白网页、HTML5网页等等，人人都能做网页。" />
<meta name="keywords" content="在线网页制作,个人网页制作,表白网页制作,祝福网页制作,免费网页制作,网页一键生成" />
<!-- Animate.css -->
<link rel="stylesheet" href="../css/animate.css">
<!-- Flexslider -->
<link rel="stylesheet" href="../css/flexslider.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="../css/icomoon.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="../css/magnific-popup.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="../css/bootstrap.css">
<!-- Bootstrap Date 
<link href="http://cdn.bootcss.com/twitter-bootstrap/2.2.2/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap-datetimepicker.css">
<link rel="stylesheet" href="../css/style.css">
<!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
<link rel="stylesheet" id="theme-switch" href="../css/style.css">
<!-- End demo purposes only -->
<!-- Modernizr JS -->
<script src="../js/modernizr-2.6.2.min.js"></script>
</head>

<body>
<!-- Loader -->
<div class="fh5co-loader"></div>
<!--Baidu display logo-->
<div class="dnone"><img width="121" src="logo.png" alt="logo" /></div>
<!--Baidu display logo END-->
<div id="fh5co-page">
  <section id="fh5co-header">
    <div class="container">
      <nav role="navigation">
        <ul class="pull-left left-menu">
          <li><a href="../geren.php">个人网页</a></li>
          <li><a href="../biaobai.php">表白网页</a></li>
          <li><a href="../quwei.php">趣味网页</a></li>
        </ul>
        <h1 id="fh5co-logo"><a href="../"><?php echo htmlspecialchars(urldecode($logo)); ?><span>.</span></a></h1>
        <ul class="pull-right right-menu">
          <li><a href="<?php if(!preg_match("/^(http|https):/", htmlspecialchars(urldecode($right_top_url_1)))) echo '../'; echo htmlspecialchars(urldecode($right_top_url_1)); ?>"><?php echo htmlspecialchars(urldecode($right_top_title_1)); ?></a></li>
          <li class="fh5co-cta-btn"><a id="login" href="#" data-toggle="modal" data-target="#myModal">贵宾登录</a></li>
        </ul>
        <ul class="zhong dnone">
          <li><a href="../">返回首页</a></li>
        </ul>
      </nav>
    </div>
  </section>
  <!-- #fh5co-header -->
  <section id="fh5co-hero" class="no-js-fullheight" style="background-image: url(../images/nav-geren.jpg);" data-next="yes">
    <div class="fh5co-overlay"></div>
    <div class="container">
      <div class="fh5co-intro no-js-fullheight">
        <div class="fh5co-intro-text">
          <div class="fh5co-center-position">
            <h2 class="animate-box">个人业务网</h2>
            <h3 class="animate-box"><a href="../web.php?id=RiqN6HT" style="color:#FFF" target="_blank">点击预览</a></h3>
          </div>
        </div>
      </div>
    </div>
    <div class="fh5co-learn-more animate-box"> <a href="#" class="scroll-btn"> <span class="text">填入网页信息</span> <span class="arrow"><i class="icon-chevron-down"></i></span> </a> </div>
  </section>
  <!-- END #fh5co-hero -->
  <section id="fh5co-projects">
    <div class="container animate-box">
    <div class="row">
    <form method="post" action="../result.php">
      <div class="col-md-12">
        <div class="form-group">
          <input type="button" class="btn btn-outline btn-block" onclick="shuru()" value="使用默认文字">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <input id="con46" name="con46" type="text" class="form-control" placeholder="请输入网页标题">
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
          <div id="fh5co-subscribe">
            <input id="con47" name="con47" type="text" class="form-control" placeholder="请输入顶部图片URL地址">
            <input type="button" value="上传图片" class="btn btn-primary" onclick="window.open('../tupian.php','_blank')">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <div id="fh5co-subscribe">
            <input id="con48" name="con48" type="text" class="form-control" placeholder="请输入头像图片URL地址">
            <input type="button" value="上传图片" class="btn btn-primary" onclick="window.open('../tupian.php','_blank')">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
			<textarea id="con49" name="con49" type="text" class="form-control textarea" rows="5" placeholder="请输入公告内容"></textarea>
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
          <input id="con50" name="con50" type="text" class="form-control" placeholder="请输您的ＱＱ号">
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
          <input id="con51" name="con51" type="text" class="form-control" placeholder="请输入网易云音乐列表ID">
		  <span class="help-block text-center">（注意：此处自定义音乐请到网易云官网获取歌曲列表ID，网易云官网获取代码后找到里面的ID输入即可。<a href="http://jingyan.baidu.com/article/b907e627b1bfbb46e7891c15.html" target="_blank">获取教程</a>，注意是歌曲列表ID不是歌曲ID。）</span>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <input id="con52" name="con52" type="text" class="form-control" placeholder="请输入底部版权">
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<input id="con1" name="con1" type="text" class="form-control" placeholder="商品名称">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-5">
					<input id="con2" name="con2" type="text" class="form-control" placeholder="商品价格">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<label class="checkbox"><input id="con3" name="con3" type="checkbox" checked="checked">开启</label>
				</div>
			</div>
		</div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<input id="con4" name="con4" type="text" class="form-control" placeholder="商品名称">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-5">
					<input id="con5" name="con5" type="text" class="form-control" placeholder="商品价格">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<label class="checkbox"><input id="con6" name="con6" type="checkbox" checked="checked">开启</label>
				</div>
			</div>
		</div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<input id="con7" name="con7" type="text" class="form-control" placeholder="商品名称">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-5">
					<input id="con8" name="con8" type="text" class="form-control" placeholder="商品价格">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<label class="checkbox"><input id="con9" name="con9" type="checkbox" checked="checked">开启</label>
				</div>
			</div>
		</div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<input id="con10" name="con10" type="text" class="form-control" placeholder="商品名称">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-5">
					<input id="con11" name="con11" type="text" class="form-control" placeholder="商品价格">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<label class="checkbox"><input id="con12" name="con12" type="checkbox" checked="checked">开启</label>
				</div>
			</div>
		</div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<input id="con13" name="con13" type="text" class="form-control" placeholder="商品名称">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-5">
					<input id="con14" name="con14" type="text" class="form-control" placeholder="商品价格">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<label class="checkbox"><input id="con15" name="con15" type="checkbox" checked="checked">开启</label>
				</div>
			</div>
		</div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<input id="con16" name="con16" type="text" class="form-control" placeholder="商品名称">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-5">
					<input id="con17" name="con17" type="text" class="form-control" placeholder="商品价格">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<label class="checkbox"><input id="con18" name="con18" type="checkbox" checked="checked">开启</label>
				</div>
			</div>
		</div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<input id="con19" name="con19" type="text" class="form-control" placeholder="商品名称">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-5">
					<input id="con20" name="con20" type="text" class="form-control" placeholder="商品价格">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<label class="checkbox"><input id="con21" name="con21" type="checkbox" checked="checked">开启</label>
				</div>
			</div>
		</div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<input id="con22" name="con22" type="text" class="form-control" placeholder="商品名称">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-5">
					<input id="con23" name="con23" type="text" class="form-control" placeholder="商品价格">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<label class="checkbox"><input id="con24" name="con24" type="checkbox" checked="checked">开启</label>
				</div>
			</div>
		</div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<input id="con25" name="con25" type="text" class="form-control" placeholder="商品名称">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-5">
					<input id="con26" name="con26" type="text" class="form-control" placeholder="商品价格">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<label class="checkbox"><input id="con27" name="con27" type="checkbox" checked="checked">开启</label>
				</div>
			</div>
		</div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<input id="con28" name="con28" type="text" class="form-control" placeholder="商品名称">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-5">
					<input id="con29" name="con29" type="text" class="form-control" placeholder="商品价格">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<label class="checkbox"><input id="con30" name="con30" type="checkbox" checked="checked">开启</label>
				</div>
			</div>
		</div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<input id="con31" name="con31" type="text" class="form-control" placeholder="商品名称">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-5">
					<input id="con32" name="con32" type="text" class="form-control" placeholder="商品价格">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<label class="checkbox"><input id="con33" name="con33" type="checkbox" checked="checked">开启</label>
				</div>
			</div>
		</div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<input id="con34" name="con34" type="text" class="form-control" placeholder="商品名称">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-5">
					<input id="con35" name="con35" type="text" class="form-control" placeholder="商品价格">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<label class="checkbox"><input id="con36" name="con36" type="checkbox" checked="checked">开启</label>
				</div>
			</div>
		</div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<input id="con37" name="con37" type="text" class="form-control" placeholder="商品名称">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-5">
					<input id="con38" name="con38" type="text" class="form-control" placeholder="商品价格">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<label class="checkbox"><input id="con39" name="con39" type="checkbox">开启</label>
				</div>
			</div>
		</div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<input id="con40" name="con40" type="text" class="form-control" placeholder="商品名称">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-5">
					<input id="con41" name="con41" type="text" class="form-control" placeholder="商品价格">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<label class="checkbox"><input id="con42" name="con42" type="checkbox">开启</label>
				</div>
			</div>
		</div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<input id="con43" name="con43" type="text" class="form-control" placeholder="商品名称">
				</div>
				<div class="col-md-7 col-sm-6 col-xs-5">
					<input id="con44" name="con44" type="text" class="form-control" placeholder="商品价格">
				</div>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<label class="checkbox"><input id="con45" name="con45" type="checkbox">开启</label>
				</div>
			</div>
		</div>
      </div>
      <div class="col-md-12">
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="立即制作">
          </div>
      </div>
      </form>
    </div>
  </section>
	<script>
        function shuru(){
            var con1=document.getElementById('con1');
            var con2=document.getElementById('con2');
            var con4=document.getElementById('con4');
            var con5=document.getElementById('con5');
            var con7=document.getElementById('con7');
            var con8=document.getElementById('con8');
            var con10=document.getElementById('con10');
            var con11=document.getElementById('con11');
            var con13=document.getElementById('con13');
            var con14=document.getElementById('con14');
            var con16=document.getElementById('con16');
            var con17=document.getElementById('con17');
            var con19=document.getElementById('con19');
            var con20=document.getElementById('con20');
            var con22=document.getElementById('con22');
            var con23=document.getElementById('con23');
            var con25=document.getElementById('con25');
            var con26=document.getElementById('con26');
            var con28=document.getElementById('con28');
            var con29=document.getElementById('con29');
            var con31=document.getElementById('con31');
            var con32=document.getElementById('con32');
            var con34=document.getElementById('con34');
            var con35=document.getElementById('con35');
            var con37=document.getElementById('con37');
            var con38=document.getElementById('con38');
            var con40=document.getElementById('con40');
            var con41=document.getElementById('con41');
            var con43=document.getElementById('con43');
            var con44=document.getElementById('con44');
            var con46=document.getElementById('con46');
            var con47=document.getElementById('con47');
            var con48=document.getElementById('con48');
            var con49=document.getElementById('con49');
            var con50=document.getElementById('con50');
			var con51=document.getElementById('con51');
            var con52=document.getElementById('con52');
            con1.value='网页制作';
            con2.value='20.00';
            con4.value='网站搭建';
            con5.value='39.00';
            con7.value='论坛搭建';
            con8.value='10.00';
            con10.value='软件代做';
            con11.value='100.00';
            con13.value='APP代做';
            con14.value='100.00';
            con16.value='头像制作';
            con17.value='5.00';
            con19.value='宣传图制作';
            con20.value='10.00';
            con22.value='空间背景制作';
            con23.value='10.00';
            con25.value='空间背景';
            con26.value='100.00';
            con28.value='普通徒弟';
            con29.value='88.00';
            con31.value='终生收徒';
            con32.value='200.00';
            con34.value='其他联系客服';
            con35.value='0.00';
            con37.value='暂未开启';
            con38.value='0.00';
            con40.value='暂未开启';
            con41.value='0.00';
            con43.value='暂未开启';
            con44.value='0.00';
            con46.value='个人业务网';
            con47.value='http://www.144g.com/geren_yewuwang/img/top.png';
            con48.value='http://www.144g.com/geren_yewuwang/img/tx.jpg';
            con49.value='公告：144G是一款全自动在线网页制作工具，国内顶尖自动化网页制作系统，只需选择模板一键生成即可。可制作一系列个人网页、表白网页、HTML5网页等等，人人都能做网页。';
            con50.value='123456';
			con51.value='152778108';
            con52.value='Copyright ©2017 144G.COM';
        }
    </script> 
  <!-- END #fh5co-projects -->
  <div id="fh5co-info">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="fh5co-lead animate-box"><?php echo htmlspecialchars(urldecode($tsbt)); ?></h2>
          <p class="fh5co-sub-lead animate-box"><?php echo htmlspecialchars(urldecode($tstext1)); ?></p>
          <p class="fh5co-sub-lead animate-box"><?php echo htmlspecialchars(urldecode($tstext2)); ?></p>
          <p class="fh5co-sub-lead animate-box"><?php echo htmlspecialchars(urldecode($tstext3)); ?></p>
          <p class="fh5co-sub-lead animate-box"><?php echo htmlspecialchars(urldecode($tstext4)); ?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- END #fh5co-info -->
  <footer id="fh5co-footer">
    <div class="container">
      <div class="row row-bottom-padded-md">
        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
          <div class="fh5co-footer-widget">
            <h3>模板分类</h3>
            <ul class="fh5co-links">
              <li><a href="../geren.php" target="_blank">个人网页制作</a></li> 
              <li><a href="../biaobai.php" target="_blank">表白网页制作</a></li>
              <li><a href="../quwei.php" target="_blank">趣味网页制作</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
          <div class="fh5co-footer-widget">
            <h3>技术支持</h3>
            <ul class="fh5co-links">
              <li><a href="../tupian.php" target="_blank">图片外链</a></li>
              <li><a href="../yinyue.php" target="_blank">音乐外链</a></li>
              <li><a href="../liuyan.php" target="_blank">留言反馈</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
          <div class="fh5co-footer-widget">
            <h3>关于我们</h3>
            <p>客服QQ：<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo htmlspecialchars(urldecode($qq)); ?>&site=qq&menu=yes" target="_blank" title="QQ号：<?php echo htmlspecialchars(urldecode($qq)); ?>"><?php echo htmlspecialchars(urldecode($qq)); ?></a><br><br>
            E-mail：<a href="mailto:<?php echo htmlspecialchars(urldecode($email)); ?>"><?php echo htmlspecialchars(urldecode($email)); ?></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
          <div class="fh5co-footer-widget">
            <h3>二维码</h3>
            <div class="col-md-8 col-sm-6 col-xs-4">
                <img src="<?php if(!preg_match("/^(http|https):/", htmlspecialchars(urldecode($footewm)))) echo '../'; echo htmlspecialchars(urldecode($footewm)); ?>" class="img-thumbnail img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="fh5co-copyright animate-box">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="fh5co-left"><small>&copy; 2017 <a href="./" target="_blank"><?php echo htmlspecialchars(urldecode($title)); ?></a> Corporation.&nbsp;<?php echo urldecode($tonji); ?></small></p>
            <p class="fh5co-right"><small class="fh5co-right"><a><?php echo htmlspecialchars(urldecode($right_foot)); ?></a></small></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- END #fh5co-footer --> 
</div>
<!-- END #fh5co-page --> 

<!-- End demo purposes only --> 
<!-- VIP membership system --> 
<script src="../js/vip.js"></script>
<!-- jQuery --> 
<script src="../js/jquery.min.js"></script> 
<!-- Bootstrap Date  -->
<script src="../js/bootstrap-datetimepicker.js"></script> 
<script src="../js/bootstrap-datetimepicker.zh-CN.js"></script> 
<script type="text/javascript">
 $(".form_datetime").datetimepicker({
      　minView: "month", //选择日期后，不会再跳转去选择时分秒 
    　　format: "yyyy-mm-dd", //选择日期后，文本框显示的日期格式 
    　　language: 'zh-CN', //汉化 
    　　autoclose:true //选择日期后自动关闭 
    })
</script> 

<!-- jQuery Easing --> 
<script src="../js/jquery.easing.1.3.js"></script> 
<!-- Bootstrap --> 
<script src="../js/bootstrap.min.js"></script> 
<!-- Waypoints --> 
<script src="../js/jquery.waypoints.min.js"></script> 
<!-- Flexslider --> 
<script src="../js/jquery.flexslider-min.js"></script> 
<!-- Magnific Popup --> 
<script src="../js/jquery.magnific-popup.min.js"></script> 
<script src="../js/magnific-popup-options.js"></script> 

<!-- For demo purposes only styleswitcher ( You may delete this anytime ) --> 
<script src="../js/jquery.style.switcher.js"></script> 


<!-- Main JS (Do not remove) --> 
<script src="../js/main.js"></script> 

<!-- 
	INFO:
	jQuery Cookie for Demo Purposes Only. 
	The code below is to toggle the layout to boxed or wide 
	--> 
<script src="../js/jquery.cookie.js"></script> 
<script>
		$(function(){

			if ( $.cookie('layoutCookie') != '' ) {
				$('body').addClass($.cookie('layoutCookie'));
			}

			$('a[data-layout="boxed"]').click(function(event){
				event.preventDefault();
				$.cookie('layoutCookie', 'boxed', { expires: 7, path: '/'});
				$('body').addClass($.cookie('layoutCookie')); // the value is boxed.
			});

			$('a[data-layout="wide"]').click(function(event){
				event.preventDefault();
				$('body').removeClass($.cookie('layoutCookie')); // the value is boxed.
				$.removeCookie('layoutCookie', { path: '/' }); // remove the value of our cookie 'layoutCookie'
			});
		});
	</script>
<!-- 模态框（Modal） -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
   <div class="modal-dialog"> 
    <div class="modal-content logintc"> 
     <ul id="myTab" class="nav nav-tabs"> 
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
      <li class="active"> <a href="#gblogin" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>贵宾登录</a> </li> 
      <li><a href="#update" data-toggle="tab"><span class="glyphicon glyphicon-cog"></span>修改密码</a></li> 
     </ul> 
     <div id="myTabContent" class="tab-content"> 
      <div class="tab-pane fade in active" id="gblogin"> 
       <div class="modal-body"> 
        <div class="row"> 
         <form method="post" action="../plugin/vip.php"> 
          <input type="hidden" name="login" value="1" /> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="username" name="username" type="text" class="form-control" maxlength="20" placeholder="请输入登录账号" required /> 
           </div> 
          </div> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="password" name="password" type="password" class="form-control" placeholder="请输入登录密码" maxlength="30" required /> 
           </div> 
          </div> 
		  <div class="col-md-12"> 
           <div class="form-group"> 
			<label class="baoliu">
			<input type="checkbox" name="loginbl">登入保留一星期 
			</label>
           </div> 
          </div> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input type="button" class="btn btn-default" onclick="window.open('../zhuce.php','_blank')" value="注册账户" /> 
            <input type="submit" class="btn btn-primary" value="立即登录" /> 
           </div> 
          </div> 
         </form> 
        </div> 
       </div> 
      </div> 
      <div class="tab-pane fade" id="update"> 
       <div class="modal-body"> 
        <div class="row"> 
         <form method="post" action="../plugin/vip.php"> 
          <input type="hidden" name="update" value="1" /> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="username" name="username" type="text" class="form-control" maxlength="20" placeholder="请输入账号" required /> 
           </div> 
          </div> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="password" name="password" type="password" class="form-control" placeholder="请输入旧密码" maxlength="30" required /> 
           </div> 
          </div> 
		  <div class="col-md-12"> 
           <div class="form-group"> 
            <input id="newpassword" name="newpassword" type="password" class="form-control" placeholder="请输入新密码" maxlength="30" required /> 
			<span class="help-block text-center">（小提示：密码忘记将无法找回，请慎重设置。）</span>
           </div> 
          </div> 
          <div class="col-md-12"> 
           <div class="form-group"> 
            <input type="submit" class="btn btn-primary" value="立即修改" /> 
           </div> 
          </div> 
         </form> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="modal-footer"> 
      <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button> 
     </div> 
    </div> 
   </div> 
  </div>
</body>
</html>
