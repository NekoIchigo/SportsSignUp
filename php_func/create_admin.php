<?php

if (isset($_POST["submit"])) {
  $uname = $_POST["uname"];
  $email = $_POST["email"];
  $pwd = $_POST["pwd"];
  $conpwd = $_POST["conpwd"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyInputSignup($uname, $email, $pwd, $conpwd) !== false) {
    header("location: ../signup.php?error=emptyinput");
    exit();
  }
  if (invalidUid($uname) !== false) {
    header("location: ../signup.php?error=invalid_uname");
    exit();
  }
  if (unameLength($uname) !== false) {
    header("location: ../signup.php?error=uname_tooshort");
    exit();
  }
  if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalid_email");
    exit();
  }
  if (pwdShort($pwd) !== false) {
    header("location: ../signup.php?error=pwd_tooshort");
    exit();
  }
  if (invalidPassword($pwd) !== false) {
    header("location: ../signup.php?error=invalid_password");
    exit();
  }
  if (pwdMatch($pwd, $conpwd) !== false) {
    header("location: ../signup.php?error=pwd_notmatch");
    exit();
  }
  if (unameExist($conn, $uname) !== false) {
    header("location: ../signup.php?error=username_taken");
    exit();
  }
  if (emailExist($conn, $email) !== false) {
    header("location: ../signup.php?error=email_taken");
    exit();
  }

  createUser($conn, $uname, $email, $pwd);
} else {
  header("location: ../signup.php");
}
<?php

if (isset($_POST["submit"])) {
  $uname = $_POST["uname"];
  $email = $_POST["email"];
  $pwd = $_POST["pwd"];
  $conpwd = $_POST["conpwd"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyInputSignup($uname, $email, $pwd, $conpwd) !== false) {
    header("location: ../signup.php?error=emptyinput");
    exit();
  }
  if (invalidUid($uname) !== false) {
    header("location: ../signup.php?error=invalid_uname");
    exit();
  }
  if (unameLength($uname) !== false) {
    header("location: ../signup.php?error=uname_tooshort");
    exit();
  }
  if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalid_email");
    exit();
  }
  if (pwdShort($pwd) !== false) {
    header("location: ../signup.php?error=pwd_tooshort");
    exit();
  }
  if (invalidPassword($pwd) !== false) {
    header("location: ../signup.php?error=invalid_password");
    exit();
  }
  if (pwdMatch($pwd, $conpwd) !== false) {
    header("location: ../signup.php?error=pwd_notmatch");
    exit();
  }
  if (unameExist($conn, $uname) !== false) {
    header("location: ../signup.php?error=username_taken");
    exit();
  }
  if (emailExist($conn, $email) !== false) {
    header("location: ../signup.php?error=email_taken");
    exit();
  }

  createUser($conn, $uname, $email, $pwd);
} else {
  header("location: ../signup.php");
}
