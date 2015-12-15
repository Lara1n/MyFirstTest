<?
include("bd.php");

$id_user = trim(htmlspecialchars(stripslashes($_GET['id_user'])));
if ($id_user!='')
{
	$sql = "SELECT * FROM user WHERE id_user='$id_user'";
	$result = mysql_query($sql,$db);
	/*$myrow = mysql_fetch_array($result);
	if (!empty($myrow['id_user'])) 
	{
		echo $myrow['id_user'].'<br>';
		echo $myrow['login'].'<br>';
		echo $myrow['pass'].'<br>';
		echo $myrow['name_user'];
	}*/
} else
{
	$sql = "SELECT * FROM user";
	$result = mysql_query($sql,$db);	
	/*while($myrow = mysql_fetch_array($result))
	{ 
        echo $myrow['id_user'].'<br>';
		echo $myrow['login'].'<br>';
		echo $myrow['pass'].'<br>';
		echo $myrow['name_user'].'<br>';
	}*/
}

function getuserinfo($id_user)
{
	if ($id_user!='')
	{
		$sql = "SELECT * FROM user WHERE id_user='$id_user'";
		$result = mysql_query($sql,$db);		
	} else
	{
		$sql = "SELECT * FROM user";
		$result = mysql_query($sql,$db);			
	}
    return $result;
}
?>