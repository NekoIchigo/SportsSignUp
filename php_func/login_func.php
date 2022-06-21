<?php
if (isset($_POST["submit"])) {
  $uname = $_POST["uname"];
  $pwd = $_POST["pwd"];

  require_once 'dbh_func.php';
  require_once 'func_list.php';

  if (emptyInputLogin($uname, $pwd) !== false) {
    header("location: ../login.php?error=emptyinput");
    exit();
  }

  loginUser($conn, $uname, $pwd);
} else {
  header("location: ../login.php");
  exit();
}
