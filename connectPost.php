<?php
	header("Content-type:text/html;charset=utf-8");
	//获取请求数据
	$name = $_POST["username"];
	//连接数据库
	$conn = mysql_connect("localhost","root","root");
	//选择数据
	mysql_select_db("xah51901");
	//查询
	$result = mysql_query("select * from student where stuName = '$name'",$conn);
	//获取存在的行数
	$rows = mysql_num_rows($result);
	
	if($rows == 1){
		echo "用户存在，请重新注册用户名";
	}else{
		echo "可以注册";
	}
	
	mysql_close($conn);
?>