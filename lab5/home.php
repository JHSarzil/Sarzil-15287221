<?php
	if(isset($_COOKIE["name"]) ){
?>

<h1>Welcome Home! <?=$_COOKIE["name"]?></h1><a href="logout.php">logout</a>

<?php
	}else{
		echo "Please login first";
	}
	
	

?>