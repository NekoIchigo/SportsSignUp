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
  $status = $_POST["status"];

  $_filename = $_FILES["picture"]["name"];
  $tempname = $_FILES["picture"]["tmp_name"];
  $folder = "../img/event_img/".$_filename;

  if (empty($tournament_name) || empty($sports_type) ||empty($event_handler) || empty($date) ||empty($time) || empty($no_participants) ||empty($_filename)) {
    header("location: ../ctournament.php?error=emptyinput");
    exit();
  }

  if (tournamentNameExist($conn, $tournament_name) !== false) {
    header("location: ../ctournament.php?error=tournamentName_taken");
    exit();
  }
  //upload picture
  if (move_uploaded_file($tempname, $folder)) {
  // insert tournament
  $sql = "INSERT INTO `tournament`( `toutnamentPic`, `tournamentName`, `sportsType`, `eventHandler`, `tournamentDate`, `tournamentTime`, `no_participants`, `tournamentStatus`) VALUES ('$_filename','$tournament_name','$sports_type','$event_handler','$date','$time','$no_participants', '$status')";
  if (!mysqli_query($conn, $sql)) {
    echo("Error description in inserting tournament: " . mysqli_error($conn));
  }
  // insert tournament end
  // insert Participants
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
      if (!mysqli_query($conn, $sql1)) {
        echo("Error description in inserting teams: " . mysqli_error($conn));
      }
    }
    // insert Participants end
    //insert bracketing
    $teamArr = array();
    $sql2 = mysqli_query($conn, "SELECT * FROM teams WHERE tournamentID = '$_tournamentID'");
    while ($teams = mysqli_fetch_assoc($sql2)) {
        $teamArr[] = $teams["id"];
      }
    //creating random numbers
    $sql3 = mysqli_query($conn, "SELECT * FROM tournament WHERE tournamentID = '$_tournamentID';");
    $data = mysqli_fetch_assoc($sql3);
    $randarr = range(0,($data["no_participants"]-1));
    shuffle($randarr);
    $arr = array_slice($randarr, 0, $data["no_participants"]);
    //creating random end

    //insert matches
    $k = 0;
    for ($i=0; $i < $data["no_participants"]/2; $i++) {
        $teamOne = $teamArr[$arr[$k]];
        $teamTwo = $teamArr[$arr[++$k]];
        $sql4 = "INSERT INTO `matches`(`teamOne`, `teamTwo`, `mResult`, `tournamentID`) VALUES ('$teamOne','$teamTwo','0','$_tournamentID')";
        if (!mysqli_query($conn, $sql4)) {
          echo("Error description in matches: " . mysqli_error($conn));
        }
        $k++;
    }

    header("location: ../index.php?tournament=success");
  } else {
    header("location: ../index.php?tournament=failed");
  }
}
else{
  header("location: ../index.php");
}
