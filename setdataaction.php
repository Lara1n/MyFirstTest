<?
include("bd.php");

$id_user_group  = trim(htmlspecialchars(stripslashes($_POST['id_user_group'])));
$id_group  = trim(htmlspecialchars(stripslashes($_POST['id_group'])));
$azimut = trim(htmlspecialchars(stripslashes($_POST['azimut'])));
$bright_white   = trim(htmlspecialchars(stripslashes($_POST['bright_white'])));
$bright_red   = trim(htmlspecialchars(stripslashes($_POST['bright_red'])));
$bright_green   = trim(htmlspecialchars(stripslashes($_POST['bright_green'])));
$bright_blue   = trim(htmlspecialchars(stripslashes($_POST['bright_blue'])));
$koef_white   = trim(htmlspecialchars(stripslashes($_POST['koef_white'])));
$koef_rgb   = trim(htmlspecialchars(stripslashes($_POST['koef_rgb'])));
$human_timer   = trim(htmlspecialchars(stripslashes($_POST['human_timer'])));
$use_photosensor   = trim(htmlspecialchars(stripslashes($_POST['use_photosensor'])));
$is_white   = trim(htmlspecialchars(stripslashes($_POST['is_white'])));
$onoff = trim(htmlspecialchars(stripslashes($_POST['onoff'])));

if (($id_user_group!='') and ($id_group!='') and ($bright_white!='') and ($bright_red!='') AND ($bright_green!='')
	AND ($bright_blue!='') AND ($koef_white!='') AND ($koef_rgb!='') AND ($human_timer!='') AND ($use_photosensor!='') AND ($is_white!='') AND ($azimut!='') AND ($onoff!=''))
{		 
	$sql = "UPDATE groupdevice 
	SET azimut='$azimut', bright_white='$bright_white', bright_red='$bright_red', bright_green='$bright_green', bright_blue='$bright_blue', 
	koef_white='$koef_white', koef_rgb='$koef_rgb', human_timer='$human_timer', use_photosensor='$use_photosensor', is_white='$is_white', OnOff='$onoff'
	WHERE id_user_group='$id_user_group' AND id_group='$id_group'";				
				
	echo $sql.'<br>';
	$query = mysql_query($sql);		
	if (!$query)
	{
		die('updating error: '. mysql_error());
	} else 
		{ 
			echo 'updating sucsessful';
		}	
}
?>