
<?php 
if(isset($_POST['submit'])){
$selected_val = $_POST['blood'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
}
?>
	
<form action="#" method="POST">
	<fieldset>
		<legend>Gender</legend>
	
		<select name="blood" required>
		<option value=""></option>
		<option value="Apos" >A+</option>
		<option value="Aneg">A-</option>
		<option value="Bpos">B+</option>
		<option value="Bneg">B-</option>
		<option value="Opos">O+</option>
		<option value="Oneg">O-</option> 
		</select> <br/> <br/>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
		
		
	</fieldset>
</form>
