<?php
	
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	
	if($name == "rakib" && $pass == "12"){
		
		setcookie("name", "Alamin", time()+(86400 *30), "/");
		
		header("Location: home.php");
	}else{

		header("Location: login.html");
	}
?>