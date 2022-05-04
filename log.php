<meta charset="utf-8"/>
<?php
	$conn=mysqli_connect('localhost','root','','project');		//连接数据库
	mysqli_set_charset($conn,"utf8");
	mysqli_select_db($conn,'ds');
	$username = $_POST['username'];				
	$password = $_POST['password'];				//获取值
	if($conn){
		$sql="select * from ds where username='$username'"; 				// 查询数据库
		$query=mysqli_query($conn,$sql);	 
		if(mysqli_fetch_assoc($query)){	  		  
			echo "<script>		alert('登录成功')			</script>";
			header("refresh:0;http://localhost:8080/28project/index.php");			//跳转主页面
	}else{	
		echo "连接失败";
		}
	}else{
		echo "<script>			alert('登录失败,请重新登录')		</script>";				
		header("refresh:0;http://localhost:8080/28project/log.html");
		}
?>
