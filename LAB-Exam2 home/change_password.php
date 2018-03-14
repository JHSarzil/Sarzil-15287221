<?php
session_start();

if(!isset($_SESSION['login_user']) )
{ include('session.php');
 }

	
	
	if(isset($_POST['Change']) )
	{
	$servername ="localhost";
	$username 	="root";
	$password 	="";
	$dbname 	="webtech";
	
	$old 	=trim ($_POST['old']);
	$new	=trim ($_POST['new']);
	$newp  =trim ($_POST['newp']);
	$id=$_SESSION['login_user'];
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if(!$conn){
		die("Connection Error!".mysqli_connect_error());
	}
	
	
	
	
	if($new==$newp)
	{
	$sql = "UPDATE user  SET password='$new' WHERE id='$id'" ;
	
	mysqli_query($conn, $sql );	
	
    }
	
		mysqli_close($conn);
		
	}


?>

<center>
	<form action="#" method="POST">
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name="old" /><br />
						New Password<br />
						<input type="password" name="new" /><br />
						Retype New Password<br />
						<input type="password" name="newp"/>								
						<hr />
						<input type="submit" value="Change" name="Change" />     
						<a href="user_home.php">Home</a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>