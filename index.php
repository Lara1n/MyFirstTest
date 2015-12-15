<?php
include ("bd.php");

if (isset($_COOKIE['login']) and isset($_COOKIE['password']))
{
    session_start();
    $_SESSION['password']=$_COOKIE['password']; 
	$_SESSION['login']=$_COOKIE['login'];
	$_SESSION['id_name']=$_COOKIE['id_name'];
}

if (!empty($_SESSION['login']) and !empty($_SESSION['password']))
{
    die("<html><head><meta http-equiv='Refresh' content='0; URL=remote-panel.php'></head></html>");
}
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ENERGOREMOTE SYSTEM</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/login-page.css" rel="stylesheet">
    <link href="font/css/font-awersome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

<body class="login-page-body">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-5 hrr">
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-5 hrr">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 hrr2">
                        <h2 class="pull-center txt1 text-center">Help us make a better world</h2>
                        <h2 class="pull-center txt1 text-center"><strong>FOR EVERYONE ON THIS PLANET</strong></h2>
                        <h6 class="pull-center text-center"> ENERGOREMOTE SYSTEM </h6>
                    </div>
                </div>

            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-0 col-lg-4 col-lg-offset-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="circle-image">
                                                    <img src="img/f1.png" class="circle img-responsive ">
                                                </div>
                                                <div class="container-circle-text">
                                                    <div class="circle-text">
                                                        <p><strong>ECOLOGICALLY</strong></p>
                                                        <p>Reduced electricite use</p>
                                                    </div>
                                                    <div class="helper"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mt20">
                                                <div class="circle-image">
                                                    <img src="img/fi3.png" class="circle img-responsive">
                                                </div>
                                                <div class="container-circle-text">
                                                    <div class="circle-text">
                                                        <p><strong>ECONOMICALLY</strong></p>
                                                        <p>Spent less money on bills</p>
                                                    </div>
                                                    <div class="helper"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mt20">
                                                <div class="circle-image">
                                                    <img src="img/fi2.png" class="circle img-responsive">
                                                </div>
                                                <div class="container-circle-text">
                                                    <div class="circle-text">
                                                        <p><strong>TECHNOLOGICALLY</strong></p>
                                                        <p>Full automated system</p>
                                                    </div>
                                                    <div class="helper"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-offset-2">
                                <div id="sign-in" class="form-group">

                                    <form class="mt10" action="login.php" method="post">
                                        <div class="icon-addon addon-md">
                                            <input type="text" placeholder="Login" class="form-control input-login textbox-height shadow-top mw320" id="username" name="login">
                                            <label for="username" class="glyphicon glyphicon-user" rel="tooltip" title="username"></label>

                                        </div>
                                        <div class="icon-addon addon-md">
                                            <input type="password" placeholder="Password" 
                                            class="form-control input-password textbox-height shadow-bot mw320" id="password" name="password">
                                            <label for="password" class="glyphicon glyphicon-lock" rel="tooltip" title="password"></label>
                                        </div>
                                        <p>
                                            <input name="rememberMe" checked type="checkbox" value='1'> Remember me.
                                        </p>
                                        <div>
                                            <p>
                                            </p>
                                        </div>
                                        <button class="btn btn-md btn-primary font-bold btn-block shadow textbox-height mw320" name="Submit" value="Login" type="Submit">
                                        SIGN IN</button>
                                    </form>
                                    <a id="sign-up-btn" class="btn btn-md btn-success font-bold btn-block shadow textbox-height mw320 mt10" href="#">SIGN UP</a>
                                </div>
                                <div id="sign-up" class="form-group">
                                    <form action="reguser.php" method="post" enctype="multipart/form-data">
                                        <div class="icon-addon addon-md">
                                            <input placeholder="Your name" type="text" name="name" class="form-control input-login textbox-height shadow-top mw320" id="username">
                                            <label for="username" class="glyphicon glyphicon-text-color" rel="tooltip" title="username"></label>
                                        </div>
                                        <div class="icon-addon addon-md ">
                                            <input placeholder="Login" type="text" name="log" class="form-control input-middle textbox-height shadow-top mw320" id="logname">
                                            <label for="logname" class="glyphicon glyphicon-user" rel="tooltip" title="logname"></label>
                                        </div>
                                        <div class="icon-addon addon-md">
                                            <input placeholder="Password" type="password" name="pass" class="form-control input-password textbox-height shadow-bot mw320" id="password">
                                            <label for="password" class="glyphicon glyphicon-lock" rel="tooltip" title="password"></label>
                                        </div>
                                        <p>
                                            <? echo $error; ?>
                                        </p>
                                        <button class="btn btn-md btn-success font-bold btn-block shadow textbox-height mw320" name="Submit" value="Login" type="Submit">SIGN UP</button>
                                    </form>
                                    <a id="sign-in-btn" class="btn btn-md btn-primary font-bold btn-block shadow textbox-height mw320 mt10" href="#">SIGN IN</a>   
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-2"> </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-2"> </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-2"> </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6 text-center ots">
                                        <div class="image">
                                            <img src="img/apple.png" class="circle mb10">
                                        </div>
                                        <div class="image-title">
                                            <span class="f-blue"><strong>APPLE</strong></span>
                                        </div>
                                        <div class="image-description">
                                            <p>SOON</p>
                                            <p><small>Take control with Apple phone app</small></p>
                                        </div>
                                        <button class="btn btn-sm btn-primary btn-blue mt10" name="Submit" value="Login" type="Submit">more info</button>

                                    </div>
                                    <div class="col-md-6 text-center ots">
                                        <div class="image">
                                            <img src="img/andr.png" class="circle mb10">
                                        </div>
                                        <div class="image-title">
                                            <span class="f-blue"><strong>ANDROID</strong></span>
                                        </div>
                                        <div class="image-description">
                                            <p>SOON</p>
                                            <p><small>Take control with Android phone app</small></p>
                                        </div>
                                        <button class="btn btn-sm btn-primary btn-blue mt10" name="Submit" value="Login" type="Submit">more info</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"> </div>
                        </div>
                    </div>
                    <div class="col-md-2"> </div>
                </div>
            </div>
            <div class="col-md-2"> </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/sign-slide.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>