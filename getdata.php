<?
$serial  = trim(htmlspecialchars(stripslashes($_GET['serial'])));

if ($serial!='')
{
	include("bd.php");
	
	$sql = "SELECT id_group, azimut, photosensor, bright_white, bright_red, bright_green, bright_blue, koef_white, koef_rgb, human_timer, use_photosensor, is_white, OnOff
	FROM `groupdevice` AS GR, `lightpoint_device` DEV 
	WHERE DEV.id_group_device=GR.id_group AND DEV.serial='$serial'";				
					
	$result = mysql_query($sql);
	$myrow = mysql_fetch_array($result);
	if (!empty($myrow['id_group'])) 
	{
		echo $myrow['id_group'].'<br>';
                echo $myrow['azimut'].'<br>';
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
	
	if (!$result)
	{
		die('Select error: '. mysql_error());
	}	
}
?>