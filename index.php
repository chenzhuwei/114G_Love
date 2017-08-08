<!DOCTYPE html>
<html>
<!--<![endif]-->
<head>
<?php include("plugin/config.php");?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo htmlspecialchars(urldecode($title)); ?></title>
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
<!-- style  -->
<link rel="stylesheet" href="css/style.css">
<style></style>
<!-- End demo purposes only -->
<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<!-- Loader -->
<div class="fh5co-loader"></div>
<!--Baidu display logo-->
<div class="dnone"><img width="121" src="images/hero_bg.jpg" alt="logo" /></div>
<!--Baidu display logo END-->
<div id="fh5co-page">
  <section id="fh5co-header">
    <div class="container">
      <nav role="navigation">
        <ul class="pull-left left-menu">
          <li><a href="geren.php">个人网页</a></li>
          <li><a href="biaobai.php">表白网页</a></li>
          <li><a href="quwei.php">趣味网页</a></li>
        </ul>
        <h1 id="fh5co-logo"><a href="./"><?php echo htmlspecialchars(urldecode($logo)); ?><span>.</span></a></h1>
        <ul class="pull-right right-menu">
          <li><a href="<?php echo htmlspecialchars(urldecode($right_top_url_1)); ?>"><?php echo htmlspecialchars(urldecode($right_top_title_1)); ?></a></li>
          <li class="fh5co-cta-btn"><a id="login" href="#" data-toggle="modal" data-target="#myModal">贵宾登录</a></li>
        </ul>
      </nav>
    </div>
  </section>
  <!-- #fh5co-header -->
  <section id="fh5co-hero" class="js-fullheight" style="background-image: url(images/hero_bg.jpg);" data-next="yes">
    <div class="fh5co-overlay"></div>
    <div class="container">
      <div class="fh5co-intro js-fullheight">
        <div class="fh5co-intro-text">
          <div class="fh5co-left-position">
            <h2 class="animate-box"><?php echo htmlspecialchars(urldecode($titletop)); ?></h2>
            <p class="animate-box"><!--<a href="vimeo" class="btn btn-outline popup-vimeo btn-video"><i class="icon-play2"></i>　演示视频</a> --><a href="#" target="_blank" class="btn btn-primary js-fh5co-nav-toggle">开始制作</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="fh5co-learn-more animate-box"> <a href="#" class="scroll-btn"> <span class="text">了解更多</span> <span class="arrow"><i class="icon-chevron-down"></i></span> </a> </div>
  </section>
  <!-- END #fh5co-hero -->
  <section id="fh5co-features">
    <div class="container">
      <div class="row text-center row-bottom-padded-md">
        <div class="col-md-8 col-md-offset-2 animate-box">
          <figure class="fh5co-devices"><img src="images/img_devices.png" alt="完美显示在所有设备" class="img-responsive"></figure>
          <h2 class="fh5co-lead">完美显示在所有设备</h2>
          <p class="fh5co-sub-lead">所以模板经过精心审核与修改，完美兼容小屏手机大屏手机，以及各种平板端、电脑端和360浏览器、谷歌浏览器、火狐浏览器等等各大浏览器显示。</p>
        </div>
      </div>
    </div>
  </section>
  <!-- END #fh5co-features -->
  <section id="fh5co-features-2">
    <div class="container animate-box">
      <div class="col-md-6 col-md-push-6">
        <figure class="fh5co-feature-image"> <img src="images/macbook.png" alt="Free HTML5 Bootstrap Template by FREEHTML5.co"> </figure>
      </div>
      <div class="col-md-6 col-md-pull-6">
        <h2 class="fh5co-lead">服务支持</h2>
        <div class="fh5co-feature">
          <div class="fh5co-icon"><i class="icon-check2"></i></div>
          <div class="fh5co-text">
            <h3>免费制作</h3>
            <p>为用户使用方便考虑，<?php echo htmlspecialchars(urldecode($title)); ?>无需繁琐的注册与登入，直接选择喜欢的模板输入网页信息即可制作，并且所以模板制作不收取任何费用，无限制、免费制作所有网页。</p>
          </div>
        </div>
        <div class="fh5co-feature">
          <div class="fh5co-icon"><i class="icon-check2"></i></div>
          <div class="fh5co-text">
            <h3>高速访问</h3>
            <p><?php echo htmlspecialchars(urldecode($title)); ?>使用双线路机房，采用千兆级光纤直接连接，电信网通双线路接入、电信网通双线路自动切换全路由BGP\IP策略技术，以获得超快的速度打开网站</p>
          </div>
        </div>
        <div class="fh5co-feature">
          <div class="fh5co-icon"><i class="icon-check2"></i></div>
          <div class="fh5co-text">
            <h3>永久保存</h3>
            <p><?php echo htmlspecialchars(urldecode($title)); ?>采用云端的方式制作生成，不会造成服务器磁盘堵塞，所有制作的网页在上服务器永久保存，可多次制作达到最终满意效果，不用担心任何问题。</p>
          </div>
        </div>
        <div class="fh5co-btn-action"> <a href="#" class="btn btn-primary btn-cta js-fh5co-nav-toggle">开始制作</a> </div>
      </div>
    </div>
  </section>
  <!-- END #fh5co-features-2 -->
  <section id="fh5co-testimonials">
    <div class="container animate-box">
      <div class="row row-bottom-padded-sm">
        <div class="col-md-6 col-md-offset-3 text-center">
          <div class="fh5co-label">Team</div>
          <h2 class="fh5co-lead">拥有顶尖的开发工程师 </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <div class="flexslider">
            <ul class="slides">
              <li>
                <blockquote>
                  <p><?php echo htmlspecialchars(urldecode($tdtext1)); ?></p>
                  <p><cite><?php echo htmlspecialchars(urldecode($tdwm1)); ?></cite></p>
                </blockquote>
              </li>
              <li>
                <blockquote>
                  <p><?php echo htmlspecialchars(urldecode($tdtext2)); ?></p>
                  <p><cite><?php echo htmlspecialchars(urldecode($tdwm2)); ?></cite></p>
                </blockquote>
              </li>
              <li>
                <blockquote>
                  <p><?php echo htmlspecialchars(urldecode($tdtext3)); ?></p>
                  <p><cite><?php echo htmlspecialchars(urldecode($tdwm3)); ?></cite></p>
                </blockquote>
              </li>
            </ul>
          </div>
          <div class="flexslider-controls">
            <ol class="flex-control-nav">
              <li><img src="<?php echo htmlspecialchars(urldecode($tdimg1)); ?>" alt="touxiang-1"></li>
              <li><img src="<?php echo htmlspecialchars(urldecode($tdimg2)); ?>" alt="touxiang-2"></li>
              <li><img src="<?php echo htmlspecialchars(urldecode($tdimg3)); ?>" alt="touxiang-3"></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END #fh5co-testimonials -->
  <section id="fh5co-subscribe">
    <div class="container animate-box">
      <div class="row-bottom-padded-md">
      <h3 class="form-group">
        合作伙伴
      </h3>
      </div>
      <div class="pc row row-bottom-padded-md">
       		<?php if($hzpd1=='true') echo '<a class="col-md-2 col-sm-5 col-xs-6" href="'.htmlspecialchars(urldecode($hzurl1)).' " target="_blank"><img class="img-responsive" src="'.htmlspecialchars(urldecode($hzimg1)).'" /></a>'; ?>
       		<?php if($hzpd2=='true') echo '<a class="col-md-2 col-sm-5 col-xs-6" href="'.htmlspecialchars(urldecode($hzurl2)).' " target="_blank"><img class="img-responsive" src="'.htmlspecialchars(urldecode($hzimg2)).'" /></a>'; ?>
            <?php if($hzpd3=='true') echo '<a class="col-md-2 col-sm-5 col-xs-6" href="'.htmlspecialchars(urldecode($hzurl3)).' " target="_blank"><img class="img-responsive" src="'.htmlspecialchars(urldecode($hzimg3)).'" /></a>'; ?>
            <?php if($hzpd4=='true') echo '<a class="col-md-2 col-sm-5 col-xs-6" href="'.htmlspecialchars(urldecode($hzurl4)).' " target="_blank"><img class="img-responsive" src="'.htmlspecialchars(urldecode($hzimg4)).'" /></a>'; ?>
      </div>
    </div>
  </section>
  <!-- END #fh5co-subscribe -->
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
<!-- End demo purposes only --> 
<!-- VIP membership system --> 
<script src="js/vip.js"></script>
<!-- jQuery --> 
<script src="js/jquery.min.js"></script> 
<!-- jQuery Easing --> 
<script src="js/jquery.easing.1.3.js"></script> 
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

<!-- 
	INFO:
	jQuery Cookie for Demo Purposes Only. 
	The code below is to toggle the layout to boxed or wide 
	--> 
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
