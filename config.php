<?php 
	define("DBSERVER", "sql12.freemysqlhosting.net");
	define("DBUSERNAME","sql12240863");
	define("DBPASSWORD","tFtz6iaxnf");
	define("DBNAME","sql12240863");

	date_default_timezone_set("Asia/Ho_Chi_Minh");

	$conn = mysqli_connect(DBSERVER,DBUSERNAME,DBPASSWORD,DBNAME);
	$conn->set_charset("utf8");
	if(!$conn){
		die('Connect error : '.mysqli_connect_errno());
	};
?>