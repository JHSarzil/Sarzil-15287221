<?php
	
session_start();

if(isset($_SESSION['login_user']) )
{
	$id=$_SESSION['login_user'];
	
	$servername ="localhost";
	$username 	="root";
	$password 	="";
	$dbname 	="webtech";
	
	
	$id 	=$_POST['id'];
	$pass	=$_POST['pass'];
	
	$conn2 = mysqli_connect($servername, $username, $password, $dbname);
	
	if(!$conn2){
		die("Connection Error!".mysqli_connect_error());
	}
	$sql = "select user_type from user where id='$id'" ;
	
	$result1=mysqli_query($conn2, $sql );	
	
    $arr=mysqli_fetch_assoc($result1);
	
	if($arr2['user_type']=="admin" ){
	header("location: admin_home.php");

	}
else
{
 header("location: user_home.php");
}
mysqli_close($conn2);
 }
	
	if(isset($_POST['login']) )
	{
	$servername ="localhost";
	$username 	="root";
	$password 	="";
	$dbname 	="webtech";
	
	
	$id 	=$_POST['id'];
	$pass	=$_POST['pass'];
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if(!$conn){
		die("Connection Error!".mysqli_connect_error());
	}
	
	$sql = "select id from user where password='$pass' and id='$id'" ;
	
	$result1=mysqli_query($conn, $sql );	
	
    $arr=mysqli_fetch_assoc($result1);

    $sql2 = "select user_type from user where password='$pass' and id='$id'" ;
	
	$result2=mysqli_query($conn, $sql2 );	
	
    $arr2=mysqli_fetch_assoc($result2);
   
   
	
	if( $id == $arr['id'] && $arr2['user_type']=="admin" )	
	{
		$_SESSION['login_user']=$id;
		header("location: admin_home.php");
	}
	
	else if( $id == $arr['id'] && $arr2['user_type']=="user" )	
	{
		$_SESSION['login_user']=$id;
		header("location: user_home.php");
	}
	else
	{
		echo "wrong password";
	}
	mysqli_close($conn);
	
	}
	
	?>





<center>
<form action="#" method="POST">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input type="text" name="id"><br/>                               
					Password<br/>
					<input type="password" name="pass">
					<br /><hr/>
					<input type="submit" name="login" value="Login">
					<a href="registration.php">Register</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
