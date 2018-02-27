<?php 
if(isset($_POST['submit'])){
$selected_val = $_POST['gender'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
}
?>
	
<form action="#" method="POST">
	<fieldset>
		<legend>Gender</legend>
	
	 <input name="gender" type="radio" value="male" >Male 
	 <input name="gender" type="radio" value="female">Female 
	 <input name="gender" type="radio" value="other">Other  <br/> <br/>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
		
		
	</fieldset>
</form>

