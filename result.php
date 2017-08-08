<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<?php include("ini.php"); ?>
<meta charset="UTF-8" />
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<title>制作<?php echo $resjg; ?>！</title>
<link rel="stylesheet" href="css/amazeui.min.css">
<link rel="stylesheet" type="text/css" href="css/result.css">
</head>
<body id="error-page">
<p>
<div class="am-panel am-panel-default">
  <div class="am-panel-hd">制作<?php echo $resjg; ?>，请保存以下网址或二维码发给Ta</div>
  <div class="am-panel-bd">
    <div class="am-alert am-alert-success am-radius" data-am-alert>
	  <p>网页地址：<a class="wydz" href="<?php echo $resurl; ?>" target="_blank"><?php echo $resurl; ?></a></p>
    </div>
    <div class="erweima"><img src="http://pan.baidu.com/share/qrcode?w=400&h=400&url=<?php echo $resurl; ?>"/></div>
  </div>
  <div class="am-panel-footer"><a href="./" target="_blank">回到首页</a></div>
</div>

<button type="button" class="am-btn am-btn-success am-btn-block" style=" margin-bottom:1px" onclick="window.open('plugin/xiazai.php?url=<?php echo $resurl; ?>','_blank')">点击下载源码</button>
<a href="<?php if(isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; else echo 'geren.php'; ?>">
<button type="button" class="am-btn am-btn-primary am-btn-block">点击返回制作</button>
</a>
</p>
<?php if($pingbi) echo '<script type="text/javascript"> alert("注意：系统检测到有非法关键词，已自动屏蔽。\n\n请携手营造良好的互联网环境，严禁制作违反微信、QQ空间、微博等等各大社交平台管理协议的网站，以及包含诱导类、谣言类、欺诈类关键词，如：点击、刷、领取等。本系统会自动屏蔽常见的违规关键词以及人工排查，一经发现将立即进行永久屏蔽、封IP段处理。");</script>' ?>
<?php if($vip) echo '<script type="text/javascript"> alert("对不起，此模板为贵宾会员专享。");window.location.href=\'./zhuce.php\';</script>' ?>
</body>
</html>