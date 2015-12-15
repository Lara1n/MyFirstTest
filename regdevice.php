<?
	$id_device = trim(htmlspecialchars(stripslashes($_POST['id_device'])));
	$name_dev = trim(htmlspecialchars(stripslashes($_POST['name_dev'])));
	$version = trim(htmlspecialchars(stripslashes($_POST['ver'])));
	$id_group = trim(htmlspecialchars(stripslashes($_POST['id_group'])));
	$serial = trim(htmlspecialchars(stripslashes($_POST['serial'])));	
	$id_user = trim(htmlspecialchars(stripslashes($_POST['id_user'])));
	
if ( ($name_dev != '') and ($version != '') and ($id_group != '') and ($serial!='') and ($id_user!='') and ($id_device=='') )
{
	include ("bd.php");
	$sql = "INSERT INTO lightpoint_device (device_name,version_device,id_group_device,serial,id_user) VALUES('$name_dev',$version,$id_group,'$serial',$id_user)";
	
	$query = mysql_query($sql);
	if (!$query)
	{
		die('updating error: '. mysql_error());
	} else 
		{ 
			echo 'device created sucsessful';
		}					
} else
{
	if ( ($name_dev != '') and ($version != '') and ($id_group != '') and ($serial!='') and ($id_user!='') and ($id_device!='') )
	{
		include ("bd.php");
		$sql = "UPDATE lightpoint_device SET device_name='$name_dev', version_device=".$version.", id_group_device=".$id_group.", serial='$serial' WHERE id_device='$id_device'";
	
		$query = mysql_query($sql);
		if (!$query)
		{
			die('updating error: '. mysql_error());
		} else 
			{ 
				echo 'device updating sucsessful';
			}
	}
}
?>