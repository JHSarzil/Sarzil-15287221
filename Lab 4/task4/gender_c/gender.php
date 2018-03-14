
<form action="#" method="POST">
	<fieldset>
		<legend>Gender</legend>

		<input type="radio" name="gender"  value="male"  
		<?php if(isset($_POST['gender']))
		echo 
		($_POST['gender']=="male")?'checked':'' ?>>Male
		
		<input type="radio" name="gender"  value="female"  
		<?php if(isset($_POST['gender']))
		echo 
		($_POST['gender']=="female")?'checked':'' ?>>Female
		
		<input type="radio" name="gender"  value="other"  
		<?php if(isset($_POST['gender']))
		echo 
		($_POST['gender']=="other")?'checked':'' ?>>Other<br/><br/>
		
		<hr/>
		<input type="submit" name="submitbutton" value="Submit" > <br/><br/>


	</fieldset>
</form>