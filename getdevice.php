<?
include("bd.php");

$id_device  = trim(htmlspecialchars(stripslashes($_GET['id_device'])));
if ($id_device!='')
{
	$sql = "SELECT * FROM lightpoint_device WHERE id_device='$id_device'";
	$result = mysql_query($sql,$db);
	$myrow = mysql_fetch_array($result);
	if (!empty($myrow['id_device'])) 
	{
		echo $myrow['id_device'].'<br>';
		echo $myrow['device_name'].'<br>';
		echo $myrow['version_device'].'<br>';
		echo $myrow['id_group_device'].'<br>';
		echo $myrow['serial'].'<br>';
		echo $myrow['id_user'];
	}
} else
{
	$sql = "SELECT * FROM lightpoint_device";
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

function getdeviceinfo($id_device)
{
	if ($id_device!='')
	{
		$sql = "SELECT * FROM lightpoint_device WHERE id_device='$id_device'";
		$result = mysql_query($sql,$db);		
	} else
	{
		$sql = "SELECT * FROM lightpoint_device";
		$result = mysql_query($sql,$db);			
	}
    return $result;
}
?>