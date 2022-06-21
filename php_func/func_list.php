<?php
//sign up
function emptyInputSignup($uname, $email, $pwd, $conpwd)
{
  $result;
  if (empty($uname) || empty($email) || empty($pwd) || empty($conpwd)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function emptyInputLogin($uname, $pwd)
{
  $result;
  if (empty($uname) || empty($pwd)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidUid($uname)
{
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}
function unameLength($uname)
{
  $result;
  if (strlen($uname) < 5) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}
function invalidEmail($email)
{
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}
function pwdShort($pwd)
{
  $result;
  if (strlen($pwd) < 8) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}
function invalidPassword($pwd)
{
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $pwd)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function pwdMatch($pwd, $conpwd)
{
  $result;
  if ($pwd !== $conpwd) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function unameEmailExist($conn, $uname, $email)
{
  $sql = "SELECT * FROM users WHERE usersName = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=username/stmt_failed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $uname, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  } else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function createUser($conn, $uname, $email, $pwd)
{
  $date = date("m/d/Y");
  $filename = "default.png";
  $description = "Describe yourself!";
  $sql = "INSERT INTO users (usersName, usersEmail, usersPwd, dateJoined, filename, description) VALUES (?, ?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=username/stmt_failed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ssssss", $uname, $email, $pwd, $date, $filename, $description);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../login.php?signup=success");
  exit();
}
//login
function loginUser($conn, $uname, $pwd){
  $unameEmailExist = unameEmailExist($conn, $uname, $uname);
  if ($unameEmailExist === false) {
    header("location: ../login.php?error=usernotexist");

    exit();
  }

  $getPwd = $unameEmailExist["usersPwd"];
  if ($getPwd === $pwd) {
    session_start();
    $_SESSION["usersName"] = $unameEmailExist["usersName"];
    $_SESSION["usersID"] = $unameEmailExist["usersID"];
    $_SESSION["usersPwd"] = $unameEmailExist["usersPwd"];
    $_SESSION["usersEmail"] = $unameEmailExist["usersEmail"];
    $_SESSION["dateJoined"] = $unameEmailExist["dateJoined"];
    $_SESSION["filename"] = $unameEmailExist["filename"];
    $_SESSION["description"] = $unameEmailExist["description"];
    header("location: ../index.php?login=success");
    exit();
  } else {
    header("location: ../login.php?error=wrongpassword");
    exit();
  }
}

function unameExist($conn, $uname)
{
  $sql = "SELECT * FROM users WHERE usersName = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=username/stmt_failed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $uname);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  } else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function emailExist($conn, $email)
{
  $sql = "SELECT * FROM users WHERE usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=username/stmt_failed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  } else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}
