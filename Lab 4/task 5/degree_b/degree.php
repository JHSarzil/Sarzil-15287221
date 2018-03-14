<?php 

		if(isset($_POST['d1']))
		echo ($_POST['d1']=="ssc")?' ssc checked':''; 
		
		if(isset($_POST['d2']))
		echo ($_POST['d2']=="hsc")?' hsc checked':'';
		
		 if(isset($_POST['d3']))
		echo ($_POST['d3']=="bsc")?' Bsc checked':'';
		 if(isset($_POST['d4']))
		echo ($_POST['d4']=="msc")?' Msc checked':'';
		?>

<form action="#" method="POST">
	<fieldset>
		<legend>Degree</legend>

		<input type="checkbox" name="d1"  value="ssc">SSC

		<input type="checkbox" name="d2"  value="hsc">HSC

		<input type="checkbox" name="d3"  value="bsc">BSc

		<input type="checkbox" name="d4"  value="msc">MSc

		<br/><br/>
		<hr/>
		<input type="submit" name="submitbutton" value="Submit" > <br/><br/>
		
	</fieldset>
</form>