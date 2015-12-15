<?

function loginform($log,$pass)
{
	$sql = "SELECT * FROM user WHERE login='$log' and pass = '$pass'";
echo $sqllogin;

	$result = mysql_query($sql,mysql_connect ("localhost","eremote","11223344"));
    /*	$result = mysql_query($sql,mysql_connect ("localhost","energoremote","energoremote!"););*/
	$myrow = mysql_fetch_array($result);
	$id_user = $myrow['id_user'];
	
    return $id_user ;
}
?>