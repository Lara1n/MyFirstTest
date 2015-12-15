<?
include("bd.php");

$login  = trim(htmlspecialchars(stripslashes($_GET['log'])));
$pass  = trim(htmlspecialchars(stripslashes($_GET['pass'])));
$typedata  = trim(htmlspecialchars(stripslashes($_GET['typedata'])));
$id_group   = trim(htmlspecialchars(stripslashes($_GET['id_group'])));

if (($login!='') and ($pass!='') and ($typedata!=''))
{	
	include("support.php");
	
	$id_user = loginform($login,$pass);
	
	if ($id_user!='')
	{
		switch ($typedata) 
		{
			case 'all':			//get all user device
				$sql = "SELECT * FROM lightpoint_device WHERE id_user='$id_user'";
				$result = mysql_query($sql,$db);	
	
				while($myrow = mysql_fetch_array($result))				
				{
					echo $myrow['id_device'].'<br>';
					echo $myrow['device_name'].'<br>';
					echo $myrow['version_device'].'<br>';
					echo $myrow['id_group_device'].'<br>';
					echo $myrow['serial'].'<br>';
					echo $myrow['id_user'].'<br>';
				}
				break;
			case 'group':			//get user device by group
				if ($id_group!='')
				{
					$sql = "SELECT * FROM lightpoint_device WHERE id_user=".$id_user." and id_group_device=".$id_group."";
					echo $sql.'<br>';
					$result = mysql_query($sql,$db);
					
					while($myrow = mysql_fetch_array($result))
					{
						echo $myrow['id_device'].'<br>';
						echo $myrow['device_name'].'<br>';
						echo $myrow['version_device'].'<br>';
						echo $myrow['id_group_device'].'<br>';
						echo $myrow['serial'].'<br>';
						echo $myrow['id_user'].'<br>';
					}
				}				
				break;
			case 'bygroup':			//get all group by user
				$sql = "SELECT * FROM lightpoint_device WHERE id_user=".$id_user." ORDER BY id_group_device";
				echo $sql.'<br>';
				$result = mysql_query($sql,$db);					
				while($myrow = mysql_fetch_array($result)) 
				{
					echo $myrow['id_device'].'<br>';
					echo $myrow['device_name'].'<br>';
					echo $myrow['version_device'].'<br>';
					echo $myrow['id_group_device'].'<br>';
					echo $myrow['serial'].'<br>';
					echo $myrow['id_user'].'<br>';
				}
				break;
		}
	}
}

function getuserdevice($login,$pass,$typedata)
{
	if (($login!='') and ($pass!='') and ($typedata!=''))
	{	
		include("support.php");
		
		$id_user = loginform($login,$pass);
		
		if ($id_user!='')
		{
			switch ($typedata) 
			{
				case 'all':			//get all user device
					$sql = "SELECT * FROM lightpoint_device WHERE id_user='$id_user'";
					$result = mysql_query($sql,$db);
					break;
				case 'group':			//get user device by group
					if ($id_group!='')
					{
						$sql = "SELECT * FROM lightpoint_device WHERE id_user=".$id_user." and id_group_device=".$id_group."";
						$result = mysql_query($sql,$db);					
					}				
					break;
				case 'bygroup':			//get all group by user
					$sql = "SELECT * FROM lightpoint_device WHERE id_user=".$id_user." ORDER BY id_group_device";
					$result = mysql_query($sql,$db);
					break;
			}
		}
	}
    return $result;
}
?>