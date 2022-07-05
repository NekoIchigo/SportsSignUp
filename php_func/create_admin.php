<?php

if (isset($_POST["submit"])) {
  $uname = $_POST["uname"];
  $pwd = $_POST["pwd"];
  $conpwd = $_POST["conpwd"];

  require_once 'dbh_func.php';
  require_once 'func_list.php';

  if (emptyInputSignup($uname, $pwd, $conpwd) !== false) {
    header("location: ../createAdmin.php?error=emptyinput");
    exit();
  }
  if (invalidUid($uname) !== false) {
    header("location: ../createAdmin.php?error=invalid_uname");
    exit();
  }
  if (unameLength($uname) !== false) {
    header("location: ../createAdmin.php?error=uname_tooshort");
    exit();
  }
  if (pwdShort($pwd) !== false) {
    header("location: ../createAdmin.php?error=pwd_tooshort");
    exit();
  }
  if (invalidPassword($pwd) !== false) {
    header("location: ../createAdmin.php?error=invalid_password");
    exit();
  }
  if (pwdMatch($pwd, $conpwd) !== false) {
    header("location: ../createAdmin.php?error=pwd_notmatch");
    exit();
  }
  if (unameExist($conn, $uname) !== false) {
    header("location: ../createAdmin.php?error=username_taken");
    exit();
  }

  createUser($conn, $uname, $pwd);
} else {
  header("location: ../createAdmin.php");
}
