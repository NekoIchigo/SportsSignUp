<?php
if (isset($_POST["submit"])) {
  include 'dbh_func.php';
  include 'func_list.php';

  $tournament_name = $_POST["tournament_name"];
  $sports_type = $_POST["sports_type"];
  $event_handler = $_POST["event_handler"];
  $date = $_POST["date"];
  $time = $_POST["time"];
  $no_participants = $_POST["no_participants"];

  $_filename = $_FILES["picture"]["name"];
  $tempname = $_FILES["picture"]["tmp_name"];
  $folder = "../img/event_img/".$_filename;

  if (empty($tournament_name) || empty($sports_type) ||empty($event_handler) || empty($date) ||empty($time) || empty($no_participants) ||empty($_filename)) {
    header("location: ../ctournament.php?error=emptyinput20");
    exit();
  }

  if (tournamentNameExist($conn, $tournament_name) !== false) {
    header("location: ../ctournament.php?error=tournamentName_taken");
    exit();
  }
// insert tournament
  $sql = "INSERT INTO `tournament`( `toutnamentPic`, `tournamentName`, `sportsType`, `eventHandler`, `tournamentDate`, `tournamentTime`, `no_participants`) VALUES ('$_filename','$tournament_name','$sports_type','$event_handler','$date','$time','$no_participants')";
  mysqli_query($conn, $sql);
  // inser Participants
    $result = mysqli_query($conn, "SELECT max(tournamentID) FROM tournament");
    $id = mysqli_fetch_assoc($result);
    $_tournamentID = $id["max(tournamentID)"];

    for ($i=0; $i < $no_participants; $i++) {
      $_teamName = $_POST["partcipant".$i];
      if (empty($_teamName)) {
        header("location: ../ctournament.php?error=emptyinput".$i);
        exit();
      }
      $sql1 = "INSERT INTO `teams`(`teamName`, `tournamentID`) VALUES ('$_teamName','$_tournamentID');";
      mysqli_query($conn, $sql1);
    }
  if (move_uploaded_file($tempname, $folder)) {
    $sql1 = "SELECT tournamentID FROM tournament WHERE tournamentName = '$tournament_name'";
    $result = mysqli_query($conn, $sql1);
    $data = mysqli_fetch_assoc($result);
    header("location: ../index.php?tournament=success&tourna=".$data['tournamentID']."");
  } else {
    header("location: ../index.php?tournament=failed");
  }

}
else{
  header("location: ../index.php");
}
