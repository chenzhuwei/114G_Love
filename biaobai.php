<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<?php include("plugin/config.php");?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>表白网页制作_<?php echo htmlspecialchars(urldecode($title)); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo htmlspecialchars(urldecode($title)); ?>是一款全自动在线网页制作工具，使用144G核心技术，国内顶尖自动化网页制作系统，只需选择模板一键生成即可。可制作一系列个人网页、表白网页、HTML5网页等等，人人都能做网页。" />
<meta name="keywords" content="在线网页制作,个人网页制作,表白网页制作,祝福网页制作,免费网页制作,网页一键生成" />
<!-- Animate.css -->
<link rel="stylesheet" href="css/animate.css">
<!-- Flexslider -->
<link rel="stylesheet" href="css/flexslider.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="css/icomoon.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="css/magnific-popup.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
<link rel="stylesheet" id="theme-switch" href="css/style.css">
<!-- End demo purposes only -->
<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
</head>

<body>
<!-- Loader -->
<div class="fh5co-loader"></div>
<!--Baidu display logo-->
<div class="dnone"><img width="121" src="images/nav-biaobai.jpg" alt="logo" /></div>
<!--Baidu display logo END-->
<div id="fh5co-page">
  <section id="fh5co-header">
    <div class="container">
      <nav role="navigation">
        <ul class="pull-left left-menu">
          <li><a href="geren.php">个人网页</a></li>
          <li class="active"><a href="biaobai.php">表白网页</a></li>
          <li><a href="quwei.php">趣味网页</a></li>
        </ul>
        <h1 id="fh5co-logo"><a href="./"><?php echo htmlspecialchars(urldecode($logo)); ?><span>.</span></a></h1>
        <ul class="pull-right right-menu">
          <li><a href="<?php echo htmlspecialchars(urldecode($right_top_url_1)); ?>"><?php echo htmlspecialchars(urldecode($right_top_title_1)); ?></a></li>
          <li class="fh5co-cta-btn"><a id="login" href="#" data-toggle="modal" data-target="#myModal">贵宾登录</a></li>
        </ul>
        <ul class="zhong dnone">
          <li><a href="./">返回首页</a></li>
        </ul>
      </nav>
    </div>
  </section>
  <!-- #fh5co-header -->
  <section id="fh5co-hero" class="no-js-fullheight" style="background-image: url(images/nav-biaobai.jpg);" data-next="yes">
    <div class="fh5co-overlay"></div>
    <div class="container">
      <div class="fh5co-intro no-js-fullheight">
        <div class="fh5co-intro-text">
          <div class="fh5co-center-position">
            <h2 class="animate-box">表白网页制作</h2>
            <h3 class="animate-box">Love web page making</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="fh5co-learn-more animate-box"> <a href="#" class="scroll-btn"> <span class="text">选择网页模板</span> <span class="arrow"><i class="icon-chevron-down"></i></span> </a> </div>
  </section>
  <!-- END #fh5co-hero -->
  <?php include("plugin/pd.php"); ?>
  <section id="fh5co-projects">
    <div class="container">
      <div class="row">
		<div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if(pdviptem('biaobai','biaobai_xiangcePPT',$viptem)) echo '<a class="vippng" href="biaobai_xiangcePPT/" target="_blank"></a>'; ?><a href="biaobai_xiangcePPT/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="biaobai_xiangcePPT/logo.png" alt="回忆相册PPT" class="img-responsive lazy">
          <div class="fh5co-text">
            <h2>回忆相册PPT</h2>
            <p>表白网页制作</p>
          </div>
          </a> </div>
		<div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if(pdviptem('biaobai','biaobai_aixinjishi',$viptem)) echo '<a class="vippng" href="biaobai_aixinjishi/" target="_blank"></a>'; ?><a href="biaobai_aixinjishi/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="biaobai_aixinjishi/logo.png" alt="爱心计时表白网页" class="img-responsive lazy">
          <div class="fh5co-text">
            <h2>爱心计时表白网页</h2>
            <p>表白网页制作</p>
          </div>
          </a> </div>
        <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if(pdviptem('biaobai','biaobai_aixinshu',$viptem)) echo '<a class="vippng" href="biaobai_aixinshu/" target="_blank"></a>'; ?><a href="biaobai_aixinshu/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="biaobai_aixinshu/logo.png" alt="爱心树表白网页" class="img-responsive lazy">
          <div class="fh5co-text">
            <h2>爱心树表白网页</h2>
            <p>表白网页制作</p>
          </div>
          </a> </div>
        <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if(pdviptem('biaobai','biaobai_3DlangmanPPT',$viptem)) echo '<a class="vippng" href="biaobai_3DlangmanPPT/" target="_blank"></a>'; ?><a href="biaobai_3DlangmanPPT/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="biaobai_3DlangmanPPT/logo.png" alt="3D浪漫表白PPT" class="img-responsive lazy">
          <div class="fh5co-text">
            <h2>3D浪漫表白PPT</h2>
            <p>表白网页制作</p>
          </div>
          </a> </div>
		<div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if(pdviptem('biaobai','biaobai_jianyuexingkong',$viptem)) echo '<a class="vippng" href="biaobai_jianyuexingkong/" target="_blank"></a>'; ?><a href="biaobai_jianyuexingkong/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="biaobai_jianyuexingkong/logo.png" alt="简约星空表白网页" class="img-responsive lazy">
          <div class="fh5co-text">
            <h2>简约星空表白网页</h2>
            <p>表白网页制作</p>
          </div>
          </a> </div>
        <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if(pdviptem('biaobai','biaobai_mohuanlizi',$viptem)) echo '<a class="vippng" href="biaobai_mohuanlizi/" target="_blank"></a>'; ?><a href="biaobai_mohuanlizi/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="biaobai_mohuanlizi/logo.png" alt="魔幻粒子表白网页" class="img-responsive lazy">
          <div class="fh5co-text">
            <h2>魔幻粒子表白网页</h2>
            <p>表白网页制作</p>
          </div>
          </a> </div>
        <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if(pdviptem('biaobai','biaobai_mvbiaobai',$viptem)) echo '<a class="vippng" href="biaobai_mvbiaobai/" target="_blank"></a>'; ?><a href="biaobai_mvbiaobai/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="biaobai_mvbiaobai/logo.png" alt="MV表白网页" class="img-responsive lazy">
          <div class="fh5co-text">
            <h2>MV表白网页</h2>
            <p>表白网页制作</p>
          </div>
          </a> </div>
		<div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if(pdviptem('biaobai','biaobai_donhuabiaobai',$viptem)) echo '<a class="vippng" href="biaobai_donhuabiaobai/" target="_blank"></a>'; ?><a href="biaobai_donhuabiaobai/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="biaobai_donhuabiaobai/logo.png" alt="动画表白网页" class="img-responsive lazy">
          <div class="fh5co-text">
            <h2>动画表白网页</h2>
            <p>表白网页制作</p>
          </div>
          </a> </div>
		<div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if(pdviptem('biaobai','biaobai_jianyuechengse',$viptem)) echo '<a class="vippng" href="biaobai_jianyuechengse/" target="_blank"></a>'; ?><a href="biaobai_jianyuechengse/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="biaobai_jianyuechengse/logo.png" alt="简约橙色表白网页" class="img-responsive lazy">
          <div class="fh5co-text">
            <h2>简约橙色表白网页</h2>
            <p>表白网页制作</p>
          </div>
          </a> </div>
		  <div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if(pdviptem('biaobai','biaobai_shengrizhufu',$viptem)) echo '<a class="vippng" href="biaobai_shengrizhufu/" target="_blank"></a>'; ?><a href="biaobai_shengrizhufu/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="biaobai_shengrizhufu/logo.png" alt="生日祝福网页" class="img-responsive lazy">
        <div class="fh5co-text">
            <h2>生日祝福网页</h2>
            <p>表白网页制作</p>
          </div>
          </a> </div>
		<div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if(pdviptem('biaobai','biaobai_shengdanshu',$viptem)) echo '<a class="vippng" href="biaobai_shengdanshu/" target="_blank"></a>'; ?><a href="biaobai_shengdanshu/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="biaobai_shengdanshu/logo.png" alt="圣诞树祝福网页" class="img-responsive lazy">
          <div class="fh5co-text">
            <h2>圣诞树祝福网页</h2>
            <p>表白网页制作</p>
          </div>
          </a> </div>
		<div class="col-md-4 col-sm-6 col-xs-6 animate-box"><?php if(pdviptem('biaobai','biaobai_shengdan',$viptem)) echo '<a class="vippng" href="biaobai_shengdan/" target="_blank"></a>'; ?><a href="biaobai_shengdan/" class="fh5co-project-item" target="_blank"> <img src="images/loading.png" data-original="biaobai_shengdan/logo.png" alt="圣诞祝福网页" class="img-responsive lazy">
          <div class="fh5co-text">
            <h2>圣诞祝福网页</h2>
            <p>表白网页制作</p>
          </div>
          </a> </div>
      </div>
    </div>
  </section>
  <!-- END #fh5co-projects -->
  <footer id="fh5co-footer">
    <div class="container">
      <div class="row row-bottom-padded-md">
        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
          <div class="fh5co-footer-widget">
            <h3>模板分类</h3>
            <ul class="fh5co-links">
              <li><a href="geren.php" target="_blank">个人网页制作</a></li> 
              <li><a href="biaobai.php" target="_blank">表白网页制作</a></li>
              <li><a href="quwei.php" target="_blank">趣味网页制作</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
          <div class="fh5co-footer-widget">
            <h3>技术支持</h3>
            <ul class="fh5co-links">
              <li><a href="tupian.php" target="_blank">图片外链</a></li>
              <li><a href="yinyue.php" target="_blank">音乐外链</a></li>
              <li><a href="liuyan.php" target="_blank">留言反馈</a></li>
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
            	<img src="<?php echo htmlspecialchars(urldecode($footewm)); ?>" class="img-thumbnail img-responsive">
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
<script src="js/vip.js"></script>
<!-- jQuery --> 
<script src="js/jquery.min.js"></script> 
<!-- jQuery Easing --> 
<script src="js/jquery.easing.1.3.js"></script> 
<!-- jQuery lazyload --> 
<script src="js/jquery.lazyload.js"></script>
<script type="text/javascript">
    $(function () {
        $("img.lazy").lazyload();
    });
</script>
<!-- Bootstrap --> 
<script src="js/bootstrap.min.js"></script> 
<!-- Waypoints --> 
<script src="js/jquery.waypoints.min.js"></script> 
<!-- Flexslider --> 
<script src="js/jquery.flexslider-min.js"></script> 
<!-- Magnific Popup --> 
<script src="js/jquery.magnific-popup.min.js"></script> 
<script src="js/magnific-popup-options.js"></script> 
<!-- For demo purposes only styleswitcher ( You may delete this anytime ) --> 
<script src="js/jquery.style.switcher.js"></script> 
<!-- Main JS (Do not remove) --> 
<script src="js/main.js"></script> 
<script src="js/jquery.cookie.js"></script> 
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
         <form method="post" action="plugin/vip.php"> 
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
            <input type="button" class="btn btn-default" onclick="window.open('zhuce.php','_blank')" value="注册账户" /> 
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
         <form method="post" action="plugin/vip.php"> 
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
