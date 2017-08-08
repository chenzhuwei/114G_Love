$(document).ready(function(){
	$("#btn").click(function(){
		//判断上传文件的类型
		filepath=$("#file").val();
		var extStart=filepath.lastIndexOf(".");
		var ext=filepath.substring(extStart,filepath.length).toUpperCase();
		if(ext!=".BMP"&&ext!=".PNG"&&ext!=".GIF"&&ext!=".JPG"&&ext!=".JPEG"){
			alert("图片限于png,gif,jpeg,jpg格式");
			return false;
		}
		//正在上传
		$("#loading_up").show();
		//使用jquery.form插件异步提交表单，详细内容参考官方文档
		$("#upform").ajaxForm(function(data,status){
			var imginfo = data;
			//获取图片宽度
			var img_width = imginfo.width;
			//获取图片高度
			var img_height = imginfo.height;

			//如果图片像素大于600px，则等比例缩放
			if(img_width >= 600){
				var b = img_width / 580;		//计算缩小倍数
				img_width = img_width / b;
				img_height = img_height / b;
			}
			if(status == "success") {
				$("#show").show();
				$("#loading_up").hide();
				$("#success_up").show();
				
				//document.getElementById("linkurl").value = imginfo.linkurl;
				document.getElementById("resurl").value = imginfo.linkurl;
				//document.getElementById("s_url").value = imginfo.s_url;
				//document.getElementById("t_url").value = imginfo.t_url;
				//document.getElementById("htmlurl").value = imginfo.htmlurl;
				//document.getElementById("ubburl").value = imginfo.ubburl;
				//document.getElementById("markdown").value = imginfo.markdown;
				//添加图片链接
				$("#show_img").attr('src',imginfo.linkurl);
				//添加图片地址
				$("#img-url").attr('href',imginfo.linkurl);
				
				//改变图片宽、高
				$("#show_img").css("width",img_width);
				$("#show_img").css("height",img_height);
				//显示图片
				$("#img-box").show();
				//alert(imginfo.linkurl);
				$("#show_img").src = data.linkurl;
				
			}
			else{
				alert('上传错误！请重新上传图片。');
			}
		});
	});
});
