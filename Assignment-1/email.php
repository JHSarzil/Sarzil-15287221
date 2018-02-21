<form action="#" method="POST">
	<fieldset>
		<legend>EMAIL</legend>
		<input type="text" name="email">
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>

<?php
	
	if($_SERVER['REQUEST_METHOD'] === "POST"){
		$email = $_REQUEST['email'];
		$at_pos = strpos($email, "@");
		$com_pos = strpos($email, ".com");
		if($at_pos && $com_pos){
			echo $email." is valid";
		}
		else {
			echo "invalid";
		}
	}
?>