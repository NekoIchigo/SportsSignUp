<?php
  session_start();
  if (!isset($_GET["q-WLJp5sB):y7x`;"]) || isset($_SESSION["uname"])){
    header("location: index.php");
  }
  ?>
<!DOCTYPE html>
<html lan="en" and dir="Itr">

<head>
  <meta charset="utf-8">
  <title> Interactive Login Form</title>
  <link rel="stylesheet" href="css/loginStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src=js/loginJava.js>
  </script>
</head>

<body>
<div class="logo"><a href="index.php"><img src="img/TOP.png"></a>
      <nav>
        <label class="tourna">TOURNAMENTS</label>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutDevs.php">About Us</a></li>
          </ul>
      </nav>
      </div>
  <form class="box" action="php_func/login_func.php" method="POST">
    <h1>login</h1>
    <input type="text" name="uname" placeholder="Enter Username" id="username" autocomplete="off">
    <input type="password" name="pwd" placeholder="Enter Password" id="password" autocomplete="off">
    <?php
    if(isset($_GET["error"])){
      if($_GET["error"]=="emptyinput")
      echo '<script>alert("Empty input, please enter username and password");</script>';{
      }
      if($_GET["error"]=="usernotexist")
      echo '<script>alert("Username does not exist!");</script>';{
      }
      if($_GET["error"]=="wrongpassword")
      echo '<script>alert("You input a wrong password!");</script>';{
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
