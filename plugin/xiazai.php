<?php 
header('Content-Type: text/html; charset=UTF-8');
			if(!empty($_COOKIE["vip_username"])&&!empty($_COOKIE["vip_password"])){
				$vip_username = $_COOKIE["vip_username"];
				$vip_password = $_COOKIE["vip_password"];
				$json_name = "vip_users.json";
				$json_string = file_get_contents($json_name);
				$obj = json_decode($json_string);
				$users = $obj->users;
				$users_num = count($users); 
				if($users_num!=0){
					for($i=0;$i<$users_num;$i++){
						if(($users[$i][0]==$vip_username)&&($users[$i][1]==$vip_password)){
							header('Content-Type:text/html');
							header('Content-Disposition:attachment; filename="index.html"');
							break;
						}else if($i==$users_num-1){
							echo '<script type="text/javascript"> alert("对不起，源码下载功能为贵宾会员专享。");window.location.href=\'../zhuce.php\';</script>';
						}
					}
				}else{
					echo '<script type="text/javascript"> alert("对不起，源码下载功能为贵宾会员专享。");window.location.href=\'../zhuce.php\';</script>';
				}
			}else{
				echo '<script type="text/javascript"> alert("对不起，源码下载功能为贵宾会员专享。");window.location.href=\'../zhuce.php\';</script>';
			}
?>
<?php
if(isset($_GET['url'])){
	for($i=0;$i<5;$i++){
		$str = curl_get_contents(@$_GET['url']);
		if($str!=''){
				echo '<!-- 本源码由 144G网页制作www.144g.com 贵宾会员下载学习使用，未经允许禁止传播、发布、交易等。 -->'."\r\n";
				echo $str;
				break;
		}else if($i==5-1){
			echo '系统繁忙，下载出错！请稍后重新再试。';
		}
	}
	
	
}else{
	echo 'Error, missing parameter!';
}


function curl_get_contents($url,$timeout=2) { 
		$curlHandle = curl_init(); 
		curl_setopt( $curlHandle , CURLOPT_URL, $url ); 
		curl_setopt( $curlHandle , CURLOPT_RETURNTRANSFER, 1 ); 
		curl_setopt( $curlHandle , CURLOPT_TIMEOUT, $timeout ); 
		$result = curl_exec( $curlHandle ); 
		curl_close( $curlHandle ); 
		return $result; 
		} 
?>