<form action="#" method="POST">
	<fieldset>
		<legend>Date of birth</legend>

	    dd<input style="width: 3em" type="number" name="date" 
	    <?php if(isset($_POST['submitbutton']))
	    {
	    	$date=$_REQUEST['date'];
	    	echo "value='$date'";
	    }
	    else{
	    	echo 'value= 1';
	    }
	    ?>


	    >
	    /mm<input style="width: 3em"  type="number"  name="month" 
	    <?php if(isset($_POST['submitbutton']))
	    {
	    	$month=$_REQUEST['month'];
	    	echo "value='$month'";
	    }
	    else{
	    	echo 'value= 1';
	    }
	    ?>

	    >
	    /yyyy<input style="width: 5em"  type="number" name="year"

	    <?php if(isset($_POST['submitbutton']))
	    {
	    	$year=$_REQUEST['year'];
	    	echo "value='$year'";
	    }
	    else{
	    	echo 'value= 1990';
	    }
	    ?>

	    >

	</br> </br>

		<hr/>

		<input type="submit" name="submitbutton" value="Submit" > <br> <br>

<?php
if(isset($_POST['submitbutton']))
{
        if($_POST['date']>31 || $_POST['date']<1 )
        {
          echo "* Invalid date"; echo '</br> ';
        }
        if($_POST['month']>12 || $_POST['month']<1 )
        {
          echo "* Invalid month"; echo '</br> ';
        }
        if($_POST['year']>1999 || $_POST['year']<1953 )
        {
          echo "* Invalid year"; echo '</br> ';
        }
}
?>
	
	</fieldset>
</form>