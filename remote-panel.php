<?php
    include ("bd.php");
    if(!empty($_COOKIE['login']) )   
    {
        $login = $_COOKIE['login'];
        $password = $_COOKIE['password'];
        $result = mysql_query("SELECT * FROM Users WHERE login='$login' AND password='$password'",$db);
        $myrow = mysql_fetch_array($result);
        if (empty($myrow['userID']))
        {
            die("<html><head><meta http-equiv='Refresh' content='0; URL=exit.php'></head></html>");
        }
        else 
        {
            session_start();
            $_SESSION['password']=$_COOKIE['password']; 
            $_SESSION['login']=$_COOKIE['login'];
            $_SESSION['userID']=$_COOKIE['userID'];
        }
    }
else
    {
        die("<html><head><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>");
    }
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>EnergoKuznya</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/eremote.css">
    <link rel="stylesheet" type="text/css" href="css/styleContextMenu.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script type="text/javascript" src="js/JQuery.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body class="control-page">
    <div class="container" id="main_cont">
        <div class="row" id="header">
            <div class="cl-sm-12">
                <div id="logo" class="col-md-4  col-sm-4">
                    <img src="img/logo.png" alt="" id="logoimg">
                    <div id="title">EnergoKuznya</div>
                    <div id="subtitle">EnergoRemote Panel</div>
                </div>
                <div class="col-md-3 col-md-offset-5" id="social_links">
                    <ul class="list-unstyled list-inline soc">
                        <li>
                            <a class="" href="http://vk.com/public95055356"><i class="fa fa-vk fa-2x"></i></a>
                        </li>
                        <li>
                            <a class="" href="https://www.facebook.com/energokuznya"><i class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a class="" href="https://twitter.com/EnergoKyznya"><i class="fa fa-twitter-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a class="" href="exit.php"><i class="fa fa-power-off fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" id="profile">
                <div class="col-md-1 col-xs-4 col-sm-2" id="avatar"></div>
                <div class="col-md-2 col-sm-2" id="user">
                    <div class="titleText">
                        <? echo $login; ?>
                    </div>
                    <div class="subText">
                        <? echo $_SESSION['password']; ?>
                    </div>
                </div>
                <div class="col-md-2  col-sm-2">
                    <div class="titleText"></div>
                    <div class="subText"></div>
                </div>
                <div class="col-md-2  col-sm-2">
                    <div class="titleText"></div>
                    <div class="subText"></div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="titleText"></div>
                    <div class="subText"></div>
                </div>
                <div class="playerbox">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 remote-nav">
                <div class="remote-btn remote-btn-active">
                    <a href="" class="">
                        <i class="fa fa-rss fa-2x"></i>
                        <div>Remote</div>
                    </a>
                </div>
                <div class="remote-btn">
                    <a href="" class="">
                        <i class="fa fa-bar-chart fa-2x"></i>
                        <div>Statistics</div>

                    </a>
                </div>
                <div class="remote-btn">
                    <a href="" class="">
                        <i class="fa fa-sliders fa-2x"></i>
                        <div>Settings</div>
                    </a>
                </div>
            </div>
            <div class="col-md-11 max-width" id="content">
                <div class="" id="image_room">
                    <div class="accesspoint" id="r1p1">
                        <div class="internal"></div>
                    </div>
                    <div class="menu" id="r1m1">
                        <div class="price-slider">
                            <div class="col-sm-12">
                                <div id="slider"></div>
                            </div>
                        </div>

                        <ul class="menuul">
                            <form id="OnOffMode">
                                <span class="mt ml"><input type="radio" name="data" value ="1"></span>
                                <span class="mt ml"><input type="radio" name="data" value = "0"></span>
                                <input type="hidden" name="log" value="<?echo $login?>">
                                <input type="hidden" name="pass" value="<?echo $password?>">
                                <input type="hidden" name="id_group" value="2">
                                <input type="hidden" name="typedata" value="onoff">
                                <span class="mt ml">On/Off</span>
                            </form>
                            <form id="sendData">
                                <input type="hidden" name="log" value="<?echo $login?>">
                                <input type="hidden" name="pass" value="<?echo $password?>">
                                <input type="hidden" name="id_group" value="2">
                                <input type="hidden" name="typedata" value="bright_white">
                                <input type="hidden" id="amount" name="data" value="">
                            </form>

                            <li>Slider</li>
                            <li>Auto</li>
                            <li><span class="r">R</span><span class="g">G</span><span class="b">B</span></li>
                            <li>Sleep</li>
                            <li>Party</li>
                            <li>Simulations</li>
                        </ul>
                    </div>
                </div>

                <div class="" id="menu_room">
                    <div class="rooms">
                        <div class="borderbg activeroom">
                            <div class="roomsbg " id="roomno1"></div>
                        </div>
                    </div>
                    <div class="rooms">
                        <div class="borderbg">
                            <div class="roomsbg" id="roomno2"></div>
                        </div>
                    </div>
                    <div class="rooms">
                        <div class="borderbg">
                            <div class="roomsbg" id="roomno3"></div>
                        </div>
                    </div>
                    <div class="rooms">
                        <div class="borderbg">
                            <div class="roomsbg" id="roomno4"></div>
                        </div>
                    </div>
                    <div class="rooms">
                        <div class="borderbg">
                            <div class="roomsbg" id="roomno5"></div>
                        </div>
                    </div>
                    <div class="rooms">
                        <div class="borderbg">
                            <div class="roomsbg" id="addroom">
                                <div id="horiz"></div>
                                <div id="vert"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="adv">
                    <div class="row ml">
                        <div class="col-md-7 usefull">
                            <div class="usefulladvice">Usefull advice</div>
                        </div>
                        <div class="mt col-md-5">
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="onoffswitch" checked>
                                <label class="onoffswitch-label" for="onoffswitch"></label>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div id="usefullcontent">
                            <div class="advice">
                                <div class="adv-img-container">
                                    <img src="img/phone.png" class="adv-img" alt="">
                                    <img src="/img/connect.png" class="adv-img" alt="">
                                </div>
                                <div class="advice-content">
                                    <div class="advicetitle">Charge your mobile phone
                                        <div class="advdate">3 hours ago</div>
                                    </div>
                                    <div class="advicedescription">
                                        If you charge your mobile phone at night, when the electrecity is cheaper - you'll save up to 30 GRN per mounth.
                                    </div>
                                    <button class="reminder "><img src="img/reminder.png" alt=""> Reminder</button>
                                </div>
                            </div>
                            <div class="advice">
                                <div class="adv-img-container">
                                    <img src="img/carSample.png" class="adv-img" alt="">
                                    <img src="/img/connect.png" class="adv-img" alt="">
                                </div>
                                <div class="advice-content">
                                    <div class="advicetitle">Charge your Nissan Leaf at night
                                        <div class="advdate">3 hours ago</div>
                                    </div>
                                    <div class="advicedescription">
                                        Charge your Nissan Leaf at night, when the electrecity is cheaper - you'll save up to 500 GRN per mounth.
                                    </div>
                                    <button class="reminder "><img src="img/reminder.png" alt=""> Reminder</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/switchAdvice.js"></script>

</body>

</html>