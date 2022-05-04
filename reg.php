<meta charset="utf-8"/>
<?php
//获取值
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$rpassword = $_POST['rpassword'];
	$email=$_POST['email']; 
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	//验证注册
	if($password==$rpassword && $username!=null){
		$conn=mysqli_connect('localhost','root','','project');
		//连接数据库
		mysqli_set_charset($conn,"utf8");//编码
		mysqli_select_db($conn,'ds'); 
		//var_dump($conn);//
		if($conn){	
			$sql="INSERT INTO ds (name,username,password,email,phone,address) values ('$name','$username','$password','$email','$phone','$address')";//注册sql语句
			$query=mysqli_query($conn,$sql); 	//发送SQL语句
				if($query){		
				echo "<script>		alert('注册成功')			</script>";		
				header("refresh:0;http://localhost:8080/28project/log.html");  
			}else{			
				echo "失败";			
				echo "<script>			alert('注册失败')			</script>";				
				}
		}
		else{	
			echo "数据库连接失败";
			} 
	}else{
		echo "<script>			alert('请重新注册')		</script>";	
		header("refresh:0;http://localhost:8080/28project/reg.html");
	}
?>

