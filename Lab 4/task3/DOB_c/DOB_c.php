<form action="#" method="POST">
	<fieldset>
		<legend>Date Of Birth</legend>

		<input style="width: 50px; height: 20px" type="number" name="dd" value="<?php if(isset($_POST['dd'])){ echo $_POST['dd']; }?>"  />
		<input style="width: 50px; height: 20px" type="number" name="mm" value="<?php if(isset($_POST['mm'])){ echo $_POST['mm']; }?>"  />
		<input style="width: 50px; height: 20px" type="number" name="yy" value="<?php if(isset($_POST['yy'])){ echo $_POST['yy']; }?>"  />
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>