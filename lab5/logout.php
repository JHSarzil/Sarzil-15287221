<?php
	setcookie("name", "", time()-3600, "/");
	header("Location: login.html");
?>