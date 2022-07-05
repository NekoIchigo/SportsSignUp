<?php
require "dbh_func.php";
//delete tournament
if (isset($_POST['delete'])) {
  $id = $_POST["tournament_id"];
  $res = "DELETE FROM matches WHERE tournamentID = '$id';";
  mysqli_query($conn, $res);
  $res = "DELETE FROM teams WHERE tournamentID = '$id';";
  mysqli_query($conn, $res);
  $sql = "DELETE FROM tournament WHERE tournamentID = '$id';";
  mysqli_query($conn, $sql);

  $result = mysqli_query($conn, "SELECT tournamentID FROM tournament WHERE tournamentID = '$id';");
  $user = mysqli_fetch_array($result);
  if (!$user) {
    header("location: ../index.php?delete=success");
  } else {
    header("location: ../index.php?delete=failed");
  }
}
//edit tournament
else if (isset($_POST["submit"])) {
  $id = $_POST["tournament_id"];
  $tournament_name = $_POST["tournament_name"];
  $sports_type = $_POST["sports_type"];
  $event_handler = $_POST["event_handler"];
  $date = $_POST["date"];
  $time = $_POST["time"];
  $no_participants = $_POST["no_participants"];
  $status = $_POST["status"];

  $update = false;

  $_filename = $_FILES["picture"]["name"];
  $tempname = $_FILES["picture"]["tmp_name"];
  $folder = "../img/event_img/".$_filename;

  // get tournament from db
  $result = mysqli_query($conn, "SELECT * FROM tournament WHERE tournamentID = $id;");
  $data = mysqli_fetch_assoc($result);

  //update tournament_name
  if ($tournament_name != $data["tournament_name"]) {
    $sql = "UPDATE tournament SET tournamentName = '$tournament_name' WHERE tournamentID = '$id';";
    mysqli_query($conn, $sql);
    $update = true;
  }

  //update sportsType
  if ($sports_type != $data["sportsType"]) {
    $sql = "UPDATE tournament SET sportsType = '$sports_type' WHERE tournamentID = '$id';";
    mysqli_query($conn, $sql);
    $update = true;
  }
  //update eventHandler
  if ($event_handler != $data["eventHandler"]) {
    $sql = "UPDATE tournament SET eventHandler = '$event_handler' WHERE tournamentID = '$id';";
    mysqli_query($conn, $sql);
    $update = true;
  }
  //update tournamentDate
  if ($date != $data["tournamentDate"]) {
    $sql = "UPDATE tournament SET tournamentDate = '$date' WHERE tournamentID = '$id';";
    mysqli_query($conn, $sql);
    $update = true;
  }
  //update tournamentTime
  if ($time != $data["tournamentTime"]) {
    $sql = "UPDATE tournament SET tournamentTime = '$time' WHERE tournamentID = '$id';";
    mysqli_query($conn, $sql);
    $update = true;
  }
  //update no_participants
  if ($no_participants != $data["no_participants"]) {
    $sql = "UPDATE tournament SET no_participants = '$no_participants' WHERE tournamentID = '$id';";
    mysqli_query($conn, $sql);
    $update = true;
  }
  //update status
  if ($status != $data["tournamentStatus"]) {
    $sql = "UPDATE tournament SET tournamentStatus = '$status' WHERE tournamentID = '$id';";
    mysqli_query($conn, $sql);
    $update = true;
  }
  //update toutnamentPic
  if ($_filename != $data["toutnamentPic"]) {
    if (move_uploaded_file($tempname, $folder)) {
    $sql = "UPDATE tournament SET toutnamentPic = '$_filename' WHERE tournamentID = '$id';";
    mysqli_query($conn, $sql);
    $update = true;
    }
  }

  //update teams
  $i = 0;
  $slq1 = mysqli_query($conn, "SELECT * FROM teams WHERE tournamentID = $id");
  while ($teams = mysqli_fetch_assoc($slq1)) {
      $_teamName = $_POST["partcipant".$i];
      $_teamId = $_POST["partcipant_id".$i];
      $teamName = $teams["teamName"];
      if ($_teamName != $teamName) {
        $sql2 = "UPDATE teams SET teamName = '$_teamName' WHERE id = '$_teamId';";
        //return mysqli_error
        if (!mysqli_query($conn, $sql2)) {// return error of sql
          echo("Error description: " . mysqli_error($conn));
        }
        $i++;
        $update = true;
      }
      else{
        $i++;
      }
  }

  //adding more teams
  if ($no_participants > $data["no_participants"]) {
    for ($i=$data["no_participants"]; $i < $no_participants; $i++) {
      $_teamName = $_POST["partcipant".$i];
      if (empty($_teamName)) {
        header("location: ../ctournament.php?error=emptyinput".$i);
        exit();
      }
      $sql1 = "INSERT INTO `teams`(`teamName`, `tournamentID`) VALUES ('$_teamName','$id');";
      mysqli_query($conn, $sql1);
    }
  }
  elseif ($no_participants < $data["no_participants"]) {
    for ($i=$no_participants; $i < $data["no_participants"]; $i++) {
      $slq1 = mysqli_query($conn, "SELECT max(id) FROM teams WHERE tournamentID = $id");
      $res = mysqli_fetch_assoc($slq1);
      echo $res['max(id)']."<br>";
      $del = $res['max(id)'];
      $sql = "DELETE FROM teams WHERE id = $del;";
      mysqli_query($conn, $sql);
      $update = true;
    }
  }

  if ($update === true) {
    header("location: ../index.php?tournamentEdit=success");
  } else {
    header("location: ../index.php?tournamentEdit=failed");
  }
}
else{
  header("location: ../index.php");
}
