<?php
error_reporting(0);
header("Content-type: text/html; charset=utf-8"); 
if(isset($_POST['reg'])&&$_POST['reg']==1){
	//格式判断开始
	if((isset($_POST['number'])&&!$_POST['number']=="")&&(isset($_POST['username'])&&!$_POST['username']=="")&&(isset($_POST['password'])&&!$_POST['password']=="")&&(isset($_POST['cpassword'])&&!$_POST['cpassword']=="")){
		$syydz =  $_SERVER['HTTP_REFERER'];
		$number=md5(md5($_POST['number']));
		$username = $_POST['username'];
		$password=md5(md5($_POST['password']));
		$cpassword=md5(md5($_POST['cpassword']));
		$password_num = strlen($_POST['cpassword']);
		if(!preg_match("/[^\d-., ]/",$username)){
			if(strlen($username)>=5&&strlen($username)<=20){
				if($password_num>=8&&$password_num<=30){
					if($password==$cpassword){
						$numbers_json_name = "vip_numbers.json";
     					$numbers_json_string = file_get_contents($numbers_json_name);
						$numbers_obj = json_decode($numbers_json_string);
						$numbers = $numbers_obj->numbers;
						$numbers_num = count($numbers); 
						if($numbers_num!=0){
							for($j=0;$j<$numbers_num;$j++){
								if($numbers[$j]==$number){
									//开始读取数据
									 $json_name = "vip_users.json";
									 $json_string = file_get_contents($json_name);
									 $obj = json_decode($json_string);
									 $users = $obj->users;
									 $users_num = count($users); 
									 if($users_num!=0){
										 for($i=0;$i<$users_num;$i++){
											 if($users[$i][0]==$username){
												 echo '<script language="javascript"> alert("注册失败。此账号已被注册占用！\n\n说明：建议使用QQ号/手机号作为登入账号。");</script>';
												 echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
												 break;
											 }else if($i==$users_num-1){
												 array_splice($numbers,$j,1);
												 $numbers_obj =  array ('numbers'=>$numbers);
												 $numbers_json_string = json_encode($numbers_obj); 
												 file_put_contents('vip_numbers.json', $numbers_json_string);
												 $user = array($username,$password,date('Y-m-d H:i:s',time()),$_SERVER["REMOTE_ADDR"]);
												 $users[] = $user;
												 $obj =  array ('users'=>$users);
												 $json_string = json_encode($obj); 
												 file_put_contents('vip_users.json', $json_string);
												 echo '<script language="javascript"> alert("注册成功。请牢记以下信息:↓　↓　↓\n账号：'.$username.'\n密码：'.$_POST['cpassword'].'");window.location.href=\'../\';</script>';
											}
										}
										break;
									 }else{
										 array_splice($numbers,$j,1);
										 $numbers_obj =  array ('numbers'=>$numbers);
										 $numbers_json_string = json_encode($numbers_obj); 
										 file_put_contents('vip_numbers.json', $numbers_json_string);
										 $user = array($username,$password,date('Y-m-d H:i:s',time()),$_SERVER["REMOTE_ADDR"]);
										 $users[] = $user;
										 $obj =  array ('users'=>$users);
										 $json_string = json_encode($obj); 
										 file_put_contents('vip_users.json', $json_string);
										 echo '<script language="javascript"> alert("注册成功。请牢记以下信息:↓　↓　↓\n账号：'.$username.'\n密码：'.$_POST['cpassword'].'");</script>';
										 echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
									 }
									 
								}else if($j==$numbers_num-1){
									 echo '<script language="javascript"> alert("注册失败。注册码错误！");</script>';
									 echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
									 break;
								}
							}
						}else{
							echo '<script language="javascript"> alert("注册失败。注册码缺货！\n\n说明：注册码暂时缺货，请联系客服购买。");</script>';
							echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
						}
						
						
					}else{
						echo '<script language="javascript"> alert("注册失败。密码和确认密码不一致！");</script>';
						echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
						}
				}else{
					echo '<script language="javascript"> alert("注册失败。密码不足8位字符！\n\n说明：密码至少8位字符，最多30位字符。");</script>';
					echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
				}
			}else{
				echo '<script language="javascript"> alert("注册失败。账号不足5位数字！\n\n说明：账号至少5位数，最多20位数。");</script>';
				echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
			}
		}else{
			echo '<script language="javascript"> alert("注册失败。账号包含特殊字符！\n\n说明：禁止使用中文、英文、符号等，只允许使用纯数字");</script>';
			echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
		}
		
	}else{
		echo '<script language="javascript"> alert("注册失败。输入框为空！");</script>';
		echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
	}
}else if(isset($_POST['login'])&&$_POST['login']==1){
	//登录代码
	if((isset($_POST['username'])&&!$_POST['username']=="")&&(isset($_POST['password'])&&!$_POST['password']=="")){
		$username = $_POST['username'];
		$password = md5(md5($_POST['password']));
		$password_num = strlen($_POST['password']);
		if((strlen($username)>=5&&strlen($username)<=20)&&($password_num>=8&&$password_num<=30)&&(!preg_match("/[^\d-., ]/",$username))){
			$json_name = "vip_users.json";
			$json_string = file_get_contents($json_name);
			$obj = json_decode($json_string);
			$users = $obj->users;
			$users_num = count($users); 
			if($users_num!=0){
				for($i=0;$i<$users_num;$i++){
					if(($users[$i][0]==$username)&&($users[$i][1]==$password)){
						if(strlen($_POST['loginbl'])&&$_POST['loginbl']=='on'){
							setcookie('vip_username',$username,time()+3600*24*7,'/');
							setcookie('vip_password',$password,time()+3600*24*7,'/');
						}else{
							setcookie('vip_username',$username,0,'/');
							setcookie('vip_password',$password,0,'/');	
						}
						if(empty($_COOKIE['cookie_name'])){
							echo '<script language="javascript"> alert("登录成功！欢迎回来。");</script>';
							echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
							
							
						}else{
							echo '<script language="javascript"> alert("登录失败！浏览器不支持Cookie。");</script>';
							echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
						}
						
						break;
					}else if($i==$users_num-1){
						echo '<script language="javascript"> alert("登录失败，密码错误或者账户不存在！");</script>';
						echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
					}
				}
			}else{
				echo '<script language="javascript"> alert("登录失败，密码错误或者账户不存在！");</script>';
				echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
			}
			
		}else{
			echo '<script language="javascript"> alert("登录失败，密码错误或者账户不存在！");</script>';
			echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
		}
		
	}else{
		echo '<script language="javascript"> alert("登录失败。输入框为空！");</script>';
		echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
	}
}else if(isset($_POST['update'])&&$_POST['update']==1){
	if((isset($_POST['username'])&&!$_POST['username']=="")&&(isset($_POST['password'])&&!$_POST['password']=="")&&(isset($_POST['newpassword'])&&!$_POST['newpassword']=="")){
		$username = $_POST['username'];
		$password = md5(md5($_POST['password']));
		$newpassword =  md5(md5($_POST['newpassword']));
		$password_num = strlen($_POST['password']);
		$newpassword_num = strlen($_POST['newpassword']);
		if((strlen($username)>=5&&strlen($username)<=20)&&($password_num>=8&&$password_num<=30)&&(!preg_match("/[^\d-., ]/",$username))){
			$json_name = "vip_users.json";
			$json_string = file_get_contents($json_name);
			$obj = json_decode($json_string);
			$users = $obj->users;
			$users_num = count($users); 
			if($users_num!=0){
				for($i=0;$i<$users_num;$i++){
					if(($users[$i][0]==$username)&&($users[$i][1]==$password)){
						$dqdate=date('Y-m-d H:i:s',time());
						if((floor(strtotime($dqdate)-strtotime($users[$i][3]))%86400/60)>=1){
							$users[$i][3]=$dqdate;
							$users[$i][2]=$_SERVER["REMOTE_ADDR"];
							$users[$i][1]=$newpassword;
							$obj =  array ('users'=>$users);
							$json_string = json_encode($obj); 
							file_put_contents('vip_users.json', $json_string);
							echo '<script language="javascript"> alert("恭喜你，密码已重置成功！\n\n你的新密码为：'.$_POST['newpassword'].' ，请牢记您的密码，密码忘记将无法找回。请勿将密码透露给陌生人，防止密码被恶意篡改。");</script>';
							echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
						}else{
							echo '<script language="javascript"> alert("修改失败，操作频率过快，请1分钟后再试！");</script>';
							echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
						}
						break;
					}else if($i==$users_num-1){
						echo '<script language="javascript"> alert("修改失败，旧密码错误或者账户不存在！");</script>';
						echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
					}
				}
			}else{
				echo '<script language="javascript"> alert("修改失败，旧密码错误或者账户不存在！");</script>';
				echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
			}
		}else{
			echo '<script language="javascript"> alert("修改失败，旧密码错误或者账户不存在！");</script>';
			echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
		}
	}else{
		echo '<script language="javascript"> alert("修改失败。输入框为空！");</script>';
		echo '<script language="javascript"> window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
	}
}
?>