<?php
if (isset($_POST["next"])) {
  include 'dbh_func.php';
  include 'func_list.php';

  $tournament_name = $_POST["tournament_name"];
  $sports_type = $_POST["sports_type"];
  $event_handler = $_POST["event_handler"];
  $date = $_POST["date"];
  $time = $_POST["time"];

  $_filename = $_FILES["picture"]["name"];
  $tempname = $_FILES["picture"]["tmp_name"];
  $folder = "../img/event_img/".$_filename;

  if (tournamentNameExist($conn, $tournament_name) !== false) {
    header("location: ../ctournament.php?error=tournamentName_taken");
    exit();
  }

  $sql = "INSERT INTO `tournament`( `toutnamentPic`, `tournamentName`, `sportsType`, `eventHandler`, `tournamentDate`, `tournamentTime`) VALUES ('$_filename','$tournament_name','$sports_type','$event_handler','$date','$time')";
  mysqli_query($conn, $sql);
  if (move_uploaded_file($tempname, $folder)) {
    $sql1 = "SELECT tournamentID FROM tournament WHERE tournamentName = '$tournament_name'";
    $result = mysqli_query($conn, $sql1);
    $data = mysqli_fetch_assoc($result);
    header("location: ../teams.php?tournament=success&tourna=".$data['tournamentID']."");
  } else {
    header("location: ../teams.php?tournament=failed");
  }
}
else{
  header("location: ../index.php");
}
