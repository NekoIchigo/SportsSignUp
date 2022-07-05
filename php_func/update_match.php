<?php
require "dbh_func.php";
$matchid = $_GET["matchid"];
$winner = $_GET["winner"];
$matchnum = $_GET["matchnum"];
$teamId = $_GET["teamId"];
$tournamentID = $_GET["tournamentID"];
$branch = $_GET["branch"];

if ($branch == 1) {
  $sql = "UPDATE matches SET mResult = '$winner' WHERE matchId = '$matchid';";
  if (!mysqli_query($conn, $sql)) {
    header("location: ../_bracket.php?tournamentID=".$tournamentID."&resupdt=failed");
  }
  if($matchnum == 0 || $matchnum == 2){
    $res = "INSERT INTO `matches`(`teamOne`, `teamTwo`, `mResult`, `tournamentID`, `branch`) VALUES ('$teamId', '1','0','$tournamentID','2')";
    if (!mysqli_query($conn, $res)) {
      header("location: ../_bracket.php?tournamentID=".$tournamentID."&resupdtsql=failed");
    }
    else{
      header("location: ../_bracket.php?tournamentID=".$tournamentID."&resupdt=succes");
    }
  }
  else {
    $result = mysqli_query($conn, "SELECT max(matchId) FROM matches WHERE tournamentID=$tournamentID AND branch=2");
    $id = mysqli_fetch_assoc($result);
    $_matchId = $id["max(matchId)"];

    $sql1 = "UPDATE matches SET teamTwo = '$teamId' WHERE matchId = '$_matchId';";
    echo $sql1;
    if (!mysqli_query($conn, $sql1)) {
      header("location: ../_bracket.php?tournamentID=".$tournamentID."&resupdt=failed");
    }
    else {
      header("location: ../_bracket.php?tournamentID=".$tournamentID."&resupdt=succes");
    }
  }
}
elseif ($branch == 2) {
  $sql = "UPDATE matches SET mResult = '$winner' WHERE matchId = '$matchid';";
  if (!mysqli_query($conn, $sql)) {
    header("location: ../_bracket.php?tournamentID=".$tournamentID."&resupdt=failed");
  }
  if($matchnum == 0 || $matchnum == 2){
  $res = "INSERT INTO `matches`(`teamOne`, `teamTwo`, `mResult`, `tournamentID`, `branch`) VALUES ('$teamId', '1','0','$tournamentID','3')";
    if (!mysqli_query($conn, $res)) {
      header("location: ../_bracket.php?tournamentID=".$tournamentID."&resupdtsql=failed");
    }
    else{
      header("location: ../_bracket.php?tournamentID=".$tournamentID."&resupdt=succes");
    }
  }
  else {
    $result = mysqli_query($conn, "SELECT max(matchId) FROM matches WHERE tournamentID=$tournamentID AND branch=3");
    $id = mysqli_fetch_assoc($result);
    $_matchId = $id["max(matchId)"];

    $sql1 = "UPDATE matches SET teamTwo = '$teamId' WHERE matchId = '$_matchId';";
    echo $sql1;
    if (!mysqli_query($conn, $sql1)) {
      header("location: ../_bracket.php?tournamentID=".$tournamentID."&resupdt=failed");
    }
    else {
      header("location: ../_bracket.php?tournamentID=".$tournamentID."&resupdt=succes");
    }
  }
}
elseif ($branch == 3) {
  //setting winner in the matches table
  $sql = "UPDATE matches SET mResult = '$winner' WHERE matchId = '$matchid';";
  if (!mysqli_query($conn, $sql)) {
    header("location: ../_bracket.php?tournamentID=".$tournamentID."&resupdt=failed");
  }
  //getting winner name
  $sql_b2 = mysqli_query($conn, "SELECT teamName FROM teams WHERE id = '$teamId'");
  $_teams1_b2 = mysqli_fetch_assoc($sql_b2);
  $_winner = $_teams1_b2['teamName'];
  //setting winner in tournament table
  $sql = "UPDATE tournament SET winner = '$_winner', tournamentStatus = 1 WHERE tournamentID = '$tournamentID';";
  if (!mysqli_query($conn, $sql)) {
    echo "error: " .mysqli_error($conn);
    //header("location: ../_bracket.php?tournamentID=".$tournamentID."&resupdtsql=failed");
  }
  else {
    header("location: ../_bracket.php?tournamentID=".$tournamentID."&resupdt=succes");
  }
}
else {
  header("location: ../_bracket.php?tournamentID=".$tournamentID."&resupdt=failed");
}
