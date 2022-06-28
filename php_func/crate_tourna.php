<?php
if (isset($_POST["next"])) {
  include 'dbh_func.php';

  $tournament_name = $_POST["tournament_name"];
  $sports_type = $_POST["sports_type"];
  $event_handler = $_POST["event_handler"];
  $date = $_POST["date"];
  $time = $_POST["time"];

  $_filename = $_FILES["picture"]["name"];
  $tempname = $_FILES["picture"]["tmp_name"];
  $folder = "../img/event_img/".$_filename;

  $sql = "INSERT INTO `tournament`( `toutnamentPic`, `tournamentName`, `sportsType`, `eventHandler`, `tournamentDate`, `tournamentTime`) VALUES ('$_filename','$tournament_name','$sports_type','$event_handler','$date','$time')";
  if (mysqli_query($conn, $sql)) {
    move_uploaded_file($tempname, $folder);
    header("location: ../teams.html?tournament=success?".$_filename."");
  } else {
    header("location: ../teams.html?tournament=failed");
  }
}
else{
  header("location: ../index.php");
}
