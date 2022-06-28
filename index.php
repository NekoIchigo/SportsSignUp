<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tournaments</title>
    <link rel="shortcut icon" type="x-icon" href="img/tablogo.png">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="logo"><a href=""><img src="img/TOP.png"></a>

    <nav>
        <label class="tourna">TOURNAMENTS</label>
        <?php
        require "php_func/dbh_func.php";
          if(isset($_GET["admin"])){
            echo '
            <ul>
              <li><a class="" href="signup.php">Create Admin</a></li>
              <li><a href="ctournament.php">Create Tournament</a></li>
              <li><a href="php_func/logout_func.php">Logout</a></li>
            </ul>';
          }
         ?>
    </nav>
    </div>

    <div id="body2">
    </div>

    <section class="container">
      <?php
      // fetching data fromm database
      $result = mysqli_query($conn, "SELECT * FROM tournament");
      if ($data = mysqli_fetch_assoc($result)) {
        while ($data = mysqli_fetch_assoc($result)) {
          echo '<div class="card">
                    <div class="card-image" style="background-image:url(img/'.$data["toutnamentPic"].')"></div>
                    <h2>'.$data["tournamentName"].'</h2>
                    <p><i class="fa fa-gamepad"></i>   '.$data["sportsType"].'<br></p>
                    <p><i class="fa fa-users"></i>   No. of participants<br></p>
                    <p><i class="fa fa-calendar"></i>   '.$data["tournamentDate"].'<br></p>
                    <p>Created at 06/23/2002</p>
                    <a href=""> View </a>';
          if(isset($_GET["admin"])){
              echo '<a href=""> Edit </a>';
          }
          echo '</div>';
        }
      }
       ?>
    </section>

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
