<?
	$log = trim(htmlspecialchars(stripslashes($_POST['log'])));
	$pass = trim(htmlspecialchars(stripslashes($_POST['pass'])));
	$name = trim(htmlspecialchars(stripslashes($_POST['name'])));
	$id_user = trim(htmlspecialchars(stripslashes($_POST['id_user'])));
if ( ($log != '') and ($pass != '') and ($name != '') and ($id_user=='') )
{
	include ("bd.php");
	$sql = "INSERT INTO Users (name,login,password) VALUES('$name','$log','$pass')";
	
	$query = mysql_query($sql);
	if (!$query)
	{
		die('updating error: '. mysql_error());
	} else 
		{ 
			echo 'user created sucsessful';
		}					
} else
{
	if (($log != '') and ($pass != '') and ($name != '') and ($id_user!=''))
	{
		include ("bd.php");
		$sql = "UPDATE Users SET login='$log', password='$pass', name='$name' WHERE userID='$id_user'";
	
		$query = mysql_query($sql);
		if (!$query)
		{
			die('updating error: '. mysql_error());
		} else 
			{ 
				echo 'user updating sucsessful';
			}
	}
}
        echo "<html><head><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>";

?>