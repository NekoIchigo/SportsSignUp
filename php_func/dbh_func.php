<?php
$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "sports_event_management";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if(!$conn){
  die("Connection failed" . mysqli_connect_error());
}
// 000webhost.com
//db name = id19184961_sports_event_managemet
//username = id19184961_sportsmanagement
// pwd = 4LXoBW64(y2$j=-$
