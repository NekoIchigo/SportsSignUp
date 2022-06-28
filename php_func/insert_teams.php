<?php
if (isset($_POST["submit"])) {
  include 'dbh_func.php';

  $_teamName = $_POST["teamName"];
  $_leader = $_POST["leader"];
  $_members = $_POST["members"];
  $_tournamentID = $_POST["tournamentID"];

  $sql = "INSERT INTO `teams`(`teamName`, `members`, `tournamentID`, `leader`) VALUES ('$_teamName','$_members','$_tournamentID','$_leader');";
  if (mysqli_query($conn, $sql)) {
    header("location: ../index.php?teamadd=success");
  }
  else {
    header("location: ../index.php?teamadd=false");
  }
}
