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
        <ul>
          <li><a class="" href="#">Create Admin</a></li>
          <li><a href="#">Create Tournament</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
    </nav>
    </div>

    <div id="body2">
    </div>

    <section class="container">
      <?php

        for ($i=0; $i < 5; $i++) {
          echo '<div class="card">
                    <div class="card-image" style="background-image:url(img/badminton.jpg)"></div>
                    <h2>Badmintioon</h2>
                    <p><i class="fa fa-gamepad"></i>   Badminton<br></p>
                    <p><i class="fa fa-users"></i>   No. of participants<br></p>
                    <p><i class="fa fa-calendar"></i>   Date not specified<br></p>
                    <p>Created at 06/23/2002</p>
                    <a href=""> View </a>
                    <a href=""> Edit </a>
                </div>';
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
