<?php
  session_start();
  if (!isset($_SESSION["uname"])) {
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lan="en" and dir="Itr">

<head>
  <meta charset="utf-8">
  <title> Interactive Login Form</title>
  <link rel="stylesheet" href="css/signupStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src=js/signupJava.js>
  </script>
</head>
<title>Tournaments</title>
<link rel="shortcut icon" type="x-icon" href="tablogo.png">

<body>
<div class="logo"><a href="index.php"><img src="img/TOP.png"></a>

      <nav>
        <label class="tourna">TOURNAMENTS</label>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="ctournament.php">Create Tournament</a></li>
            <li><a href="php_func/logout_func.php">Logout</a></li>
          </ul>
      </nav>
      </div>
  <form class="box" action="php_func/create_admin.php" method="post">
    <h1>create admin</h1>
    <input type="text" name="uname" placeholder="Enter Username" id="username" autocomplete ="off">
    <input type="password" name="pwd" placeholder="Enter Password" id="password" autocomplete ="off">
    <input type="password" name="conpwd" placeholder="Confirm Password" id="confirmpass" autocomplete ="off">

    <?php
    if(isset($_GET["error"]))
    {
      if($_GET["error"]=="emptyinput"){
        echo '<script>alert("Empty input, please enter username,password and password confirmation");</script>';
      }
      else if($_GET["error"]=="invalid_uname"){
        echo '<script>alert("Username is already taken");</script>';
      }
      else if($_GET["error"]=="uname_tooshort"){
        echo '<script>alert("Username is too short (min: 5 characters)");</script>';
      }
      else if($_GET["error"]=="pwd_tooshort"){
        echo '<script>alert("Password is too short (min: 5 characters)");</script>';
      }
      else if($_GET["error"]=="invalid_password"){
        echo '<script>alert("Password is Invalid");</script>';
      }
      else if($_GET["error"]=="pwd_notmatch"){
        echo '<script>alert("Password confirmation does not match");</script>';
      }
      else if($_GET["error"]=="username_taken"){
        echo '<script>alert("Username is already taken");</script>';
      }
    }
    ?>
    <input type="submit" name="submit" value="Login">
  </form>
  <section class="footer">
        <div class="social">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fa fa-envelope"></i></a>
        </div>

        <img src="img/topfooter.png" class="topfooter">
        <p class="copyright">
          © ALL RIGHTS RESERVED 2022
        </p>
      </section>
</body>

</html>
