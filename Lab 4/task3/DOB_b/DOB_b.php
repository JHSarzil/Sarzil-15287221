<?php
	
	if(isset($_POST['dd']) && isset($_POST['mm']) && isset($_POST['yy']) ){
		echo $_POST['dd'];
		echo "/";
		echo $_POST['mm'];
		echo "/";
		echo $_POST['yy'];
		}
	
	
?>

<form action="#" method="POST">
	<fieldset>
		<legend>Date of Birth</legend>
		
		<input style="width: 50px; height: 20px" type="number" name="dd" value=""  />
		<input style="width: 50px; height: 20px" type="number" name="mm" value=""  />
		<input style="width: 50px; height: 20px" type="number" name="yy" value=""  />
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>