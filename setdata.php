<?
include("bd.php");

$login  = trim(htmlspecialchars(stripslashes($_GET['log'])));
$pass  = trim(htmlspecialchars(stripslashes($_GET['pass'])));
$id_group  = trim(htmlspecialchars(stripslashes($_GET['id_group'])));
$typedata  = trim(htmlspecialchars(stripslashes($_GET['typedata'])));
$data   = trim(htmlspecialchars(stripslashes($_GET['data'])));
if (($login!='') and ($pass!='') and ($typedata!='') and ($data!='') and ($id_group!=''))
{ 
 include("support.php");
 
 $id_user_group = loginform($login,$pass);
 
 if ($id_user_group !='')
 {
  
  $sql = "";
  switch($typedata)
  { 
                        case 'azimut': 
    $sql = "UPDATE groupdevice SET azimut='$data' WHERE id_user_group='$id_user_group' AND id_group='$id_group'";    
    break;
   case 'photosensor': 
    $sql = "UPDATE groupdevice SET photosensor='$data' WHERE id_user_group='$id_user_group' AND id_group='$id_group'";    
    break; 
   case 'bright_white': 
    $sql = "UPDATE groupdevice SET bright_white='$data' WHERE id_user_group='$id_user_group' AND id_group='$id_group'";    
    break;
   case 'bright_red': 
    $sql = "UPDATE groupdevice SET bright_red='$data' WHERE id_user_group='$id_user_group' AND id_group='$id_group'";    
    break;
   case 'bright_green': 
    $sql = "UPDATE groupdevice SET bright_green='$data' WHERE id_user_group='$id_user_group' AND id_group='$id_group'";    
    break;
   case 'bright_blue': 
    $sql = "UPDATE groupdevice SET bright_blue='$data' WHERE id_user_group='$id_user_group' AND id_group='$id_group'";    
    break;
   case 'koef_white': 
    $sql = "UPDATE groupdevice SET koef_white='$data' WHERE id_user_group='$id_user_group' AND id_group='$id_group'";    
    break;
   case 'koef_rgb': 
    $sql = "UPDATE groupdevice SET koef_rgb='$data' WHERE id_user_group='$id_user_group' AND id_group='$id_group'";    
    break;
   case 'human_timer': 
    $sql = "UPDATE groupdevice SET human_timer='$data' WHERE id_user_group='$id_user_group' AND id_group='$id_group'";    
    break;
   case 'use_photosensor': 
    $sql = "UPDATE groupdevice SET use_photosensor='$data' WHERE id_user_group='$id_user_group' AND id_group='$id_group'";    
    break;
   case 'is_white': 
    $sql = "UPDATE groupdevice SET is_white='$data' WHERE id_user_group='$id_user_group' AND id_group='$id_group'";    
    break;
                        case 'onoff': 
    $sql = "UPDATE groupdevice SET OnOff='$data' WHERE id_user_group='$id_user_group' AND id_group='$id_group'";    
    break;
  }
  
  //echo $sql.'<br>';
  $query = mysql_query($sql);  
  if (!$query)
  {
   die('updating error: '. mysql_error());
  } else 
   { 
   }
 }
}
echo "<html><head><meta http-equiv='Refresh' content='0; URL=Rud.php'></head></html>";
?>