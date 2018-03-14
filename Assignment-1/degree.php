<?php

 
?>

<form action="#" method="POST">
	<fieldset>
		<legend>Degree</legend>

		<input type="checkbox" name="d1"  value="ssc"  
		<?php if(isset($_POST['d1']))
		echo ($_POST['d1']=="ssc")?'checked':'' ?>>SSC

		<input type="checkbox" name="d2"  value="hsc"  
		<?php if(isset($_POST['d2']))
		echo ($_POST['d2']=="hsc")?'checked':'' ?> >HSC

		<input type="checkbox" name="d3"  value="bsc"  
		<?php if(isset($_POST['d3']))
		echo ($_POST['d3']=="bsc")?'checked':'' ?>>BSc

		<input type="checkbox" name="d4"  value="msc"  
		<?php if(isset($_POST['d4']))
		echo ($_POST['d4']=="msc")?'checked':'' ?>>MSc

		<br/><br/>
		<hr/>
		<input type="submit" name="submitbutton" value="Submit" > <br/><br/>
		


<?php

if(isset($_POST['submitbutton']))
{
	$countD=0;
	if(isset($_POST['d1']))
	{
		$countD++;
	}
	if(isset($_POST['d2']))
	{
		$countD++;
	}
	if(isset($_POST['d3']))
	{
		$countD++;
	}
	if(isset($_POST['d4']))
	{
		$countD++;
	}
	if ($countD<2) 
	{
		echo "* At least two of them must be selected";
	}
}





?>

	</fieldset>
</form>