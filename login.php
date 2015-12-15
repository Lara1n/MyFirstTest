<?php
session_start();
		  
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }

if (empty($login) or empty($password))
{
    $error = ' ';
    $error .= '<br>'.'Заполните все поля';
    echo "<html><head><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>";
}

$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

$login = trim($login);
$password = trim($password);

include ("bd.php");


$result = mysql_query("SELECT * FROM Users WHERE login='$login' AND password='$password'",$db);
$myrow = mysql_fetch_array($result);
if (empty($myrow['userID']))
{
    $error = ' ';
    $error .= '<br>'.'Извините, введённый вами логин или пароль неверный.';
    echo "<html><head><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>";
}
else 
{
    $_SESSION['password']=$myrow['password']; 
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['userID']=$myrow['userID'];
    if (isset($_POST['rememberMe']))
    {
        setcookie("login", $myrow["login"], time()+99999);
        setcookie("password", $myrow["password"], time()+99999);
        setcookie("userID", $myrow['userID'], time()+99999);
    }
    echo "<html><head><meta http-equiv='Refresh' content='0; URL=remote-panel.php'></head></html>";
}
?>