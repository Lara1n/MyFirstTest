<?
	$id_user_group = trim(htmlspecialchars(stripslashes($_POST['id_user_group'])));
	$name_group = trim(htmlspecialchars(stripslashes($_POST['name_group'])));
	$azimut = trim(htmlspecialchars(stripslashes($_POST['azimut'])));
	$is_color = trim(htmlspecialchars(stripslashes($_POST['is_color'])));
	$id_group = trim(htmlspecialchars(stripslashes($_POST['id_group'])));
	
if ( ($id_user_group != '') and ($name_group != '') and ($azimut != '') and ($is_color!='') and ($id_group==''))
{
	include ("bd.php");
	$sql = "INSERT INTO groupdevice (id_group,
id_user_group,
name_group,
azimut,
is_color,
photosensor,
bright_white,
bright_red,
bright_green,
bright_blue,
koef_white,
koef_rgb,
human_timer,
use_photosensor,
color,
is_white) VALUES(NULL, $id_user_group, '$name_group', $azimut, $is_color, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1)";
	echo $sql.'<br>';
	
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
	if ( ($id_user_group != '') and ($name_group != '') and ($azimut != '') and ($is_color!='') and ($id_group!=''))
	{
		include ("bd.php");
		$sql = "UPDATE groupdevice SET id_user_group='$id_user_group', name_group='".$name_group."', azimut='$azimut', is_color='$is_color' WHERE id_group='$id_group'";
		echo $sql.'<br>';
		
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