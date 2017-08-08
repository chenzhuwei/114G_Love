<?php
//判断是否是vip模板
function pdviptem($tem,$temname,$viptem){
	
	$json_string = urldecode($viptem);
	$obj = json_decode($json_string);
	$gerenarr = $obj->geren;
	$biaobaiarr = $obj->biaobai;
	$quweiarr = $obj->quwei;
	if($tem=='geren'){
		for($i=0;$i<count($gerenarr);$i++){
			if($gerenarr[$i]==$temname){
				return true;
			}else if($i==count($gerenarr)-1){
				return false;
			}
		}
	}else if($tem=='biaobai'){
		for($i=0;$i<count($biaobaiarr);$i++){
			if($biaobaiarr[$i]==$temname){
				return true;
			}else if($i==count($biaobaiarr)-1){
				return false;
			}
		}
	}else if($tem=='quwei'){
		for($i=0;$i<count($quweiarr);$i++){
			if($quweiarr[$i]==$temname){
				return true;
			}else if($i==count($quweiarr)-1){
				return false;
			}
		}
	}else{
		return false;
	}
}

?>