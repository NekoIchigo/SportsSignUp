<?php
require "dbh_func.php";

// get tournament from db
$result = mysqli_query($conn, "SELECT * FROM tournament WHERE tournamentID = $id;");
$data = mysqli_fetch_assoc($result);

//update sportsType
if ($sports_type != $data["sportsType"]) {
  $sql = "UPDATE tournament SET sportsType = '$sports_type' WHERE tournamentID = '$id';";
  mysqli_query($conn, $sql);
  $update = true;
}
