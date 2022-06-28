<!DOCTYPE html>
<html lan="en" and dir="Itr">

<head>
  <meta charset="utf-8">
  <title> Interactive Login Form</title>
  <link rel="stylesheet" href="css/loginStyle.css">
  <script src=js/loginJava.js>
  </script>
</head>

<body>
  <div class="logo"><a href=""><img src="img/TOP.png"></a>
    <nav>
    </nav>
  </div>
  <form class="box" action="php_func/login_func.php" method="POST">
    <h1>login</h1>
    <input type="text" name="uname" placeholder="Enter Username" id="username">
    <input type="password" name="pwd" placeholder="Enter Password" id="password">
    <input type="submit" name="submit" value="Login" onclick="validate()">
  </form>

  <div id="container">
    <div id="bottom">
      <ul>
        <li id="copyright"><a>Copyright © 2022 TOP. All Rights Reserved</a></li>
      </ul>
    </div>
    <div id="icons">
      <!-- visit => "fontawesome.com" for icons -->
      <ul>
        <li id="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li id="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li id="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
      </ul>
    </div>
  </div>
</body>

</html>
