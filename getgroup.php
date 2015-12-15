<?
include("bd.php");

$login  = trim(htmlspecialchars(stripslashes($_GET['log'])));
$pass  = trim(htmlspecialchars(stripslashes($_GET['pass'])));
$typedata  = trim(htmlspecialchars(stripslashes($_GET['typedata'])));
$id_group   = trim(htmlspecialchars(stripslashes($_GET['id_group'])));

if (($login!='') and ($pass!='') and ($typedata!=''))
{	
	include("support.php");
	
	$id_user_group = loginform($login,$pass);
	
	if ($id_user_group !='')
	{
		switch ($typedata) 
		{
			case 'all':			//get all user group
				$sql = "SELECT * FROM groupdevice WHERE id_user_group='$id_user_group'";
				$result = mysql_query($sql,$db);	
	
				while($myrow = mysql_fetch_array($result))				
				{
					echo $myrow['id_group'].'<br>';
					echo $myrow['id_user_group'].'<br>';
					echo $myrow['name_group'].'<br>';
					echo $myrow['azimut'].'<br>';
					echo $myrow['is_color'].'<br>';
					echo $myrow['photosensor'].'<br>';
					echo $myrow['bright_white'].'<br>';
					echo $myrow['bright_red'].'<br>';
					echo $myrow['bright_green'].'<br>';
					echo $myrow['bright_blue'].'<br>';
					echo $myrow['koef_white'].'<br>';
					echo $myrow['koef_rgb'].'<br>';
					echo $myrow['human_timer'].'<br>';
					echo $myrow['use_photosensor'].'<br>';
					echo $myrow['is_white'].'<br>';
					echo $myrow['OnOff'].'<br>';
				}
				break;
			case 'one':			//get user group by id
				if ($id_group!='')
				{
					$sql = "SELECT * FROM groupdevice WHERE id_user_group='$id_user_group' and id_group='$id_group'";
					$result = mysql_query($sql,$db);
					//echo $sql.'<br>';
					while($myrow = mysql_fetch_array($result))
					{
						echo $myrow['id_group'].'<br>';
						echo $myrow['id_user_group'].'<br>';
						echo $myrow['name_group'].'<br>';
						echo $myrow['azimut'].'<br>';
						echo $myrow['is_color'].'<br>';
						echo $myrow['photosensor'].'<br>';
						echo $myrow['bright_white'].'<br>';
						echo $myrow['bright_red'].'<br>';
						echo $myrow['bright_green'].'<br>';
						echo $myrow['bright_blue'].'<br>';
						echo $myrow['koef_white'].'<br>';
						echo $myrow['koef_rgb'].'<br>';
						echo $myrow['human_timer'].'<br>';
						echo $myrow['use_photosensor'].'<br>';
						echo $myrow['is_white'].'<br>';
                   				echo $myrow['OnOff'].'<br>';
					}
				}				
				break;
		}
	}
}

function getgroupdevice($login,$pass,$typedata)
{
	if (($login!='') and ($pass!='') and ($typedata!=''))
	{	
		include("support.php");
		
		$id_user = loginform($login,$pass);
		
		if ($id_user!='')
		{
			switch ($typedata) 
			{
				case 'all':			//get all user group
				$sql = "SELECT * FROM groupdevice WHERE id_user_group='$id_user_group'";
				$result = mysql_query($sql,$db);		
				break;
			case 'one':			//get user group by id
				if ($id_group!='')
				{
					$sql = "SELECT * FROM groupdevice WHERE id_user_group='$id_user_group' and id_group='$id_group'";
					$result = mysql_query($sql,$db);					
				}				
				break;
			}
		}
	}
    return $result;
}
?>