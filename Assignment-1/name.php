
<form action="#" method="POST">
	<fieldset>
		<legend>NAME</legend>
		<input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name']; }?>"><br/><br/>
		<hr/>
		<input type="submit" name="submit" value="Submit" > </br></br>
		

		<?php

if(isset($_POST['name']))
	{
		$name=$_POST['name'];
		if(empty($name))
		{
			echo "* Cannot be empty"; echo '</br> ';
		}
		if (str_word_count($name)<3) 
		{
			echo "* Contains at least two words";  echo '</br> ';
		} 
		if (is_numeric($name[0])) 
		{
			echo "* Must start with a letter";  echo '</br> ';
		}

		if( strpos($name, "$") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "@") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "#") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "%") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "*") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "!") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "&") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "(") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, ")") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "?") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "~") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "<") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, ">") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "(") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, ")") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "/") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "{") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "}") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "[") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}else if( strpos($name, "]") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, ",") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, ";") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}else if( strpos($name, ":") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "'") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "|") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "^") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "-") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "_") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "+") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "=") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}
		else if( strpos($name, "`") !== false ) 
		{
			echo "* Can contain a-z, A-Z, period, dash only";
		}



	}

?>
	</fieldset>
</form>

