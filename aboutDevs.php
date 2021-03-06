<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About us</title>
    <link rel="shortcut icon" type="x-icon" href="img/tablogo.png">
    <link rel="stylesheet" type="text/css" href="css/meet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="logo"><a href="index.php"><img src="img/TOP.png"></a>

    <nav>
        <label class="aboutus">ABOUT THE DEVS</label>
        <ul>
          <li><a href="index.php">Home</a></li>
          <?php
          session_start();
          require "php_func/dbh_func.php";
            if(isset($_SESSION["uname"])){
              echo '
                <li><a class="" href="createAdmin.php">Create Admin</a></li>
                <li><a href="ctournament.php">Create Tournament</a></li>
                <li><a href="php_func/logout_func.php">Logout</a></li>';
            }
           ?>
        </ul>
    </nav>
    </div>

    <div id="body2"></div>
    <h2>MEET THE TEAM</h2>
    <section class="container">
      <div class="card" >
        <div class="card-image" style="background-image:url(img/devs/reydan.jpg)" ></div>
        <h1>Reydan John Belen</h1>
        <p class="title">BSIT 3DNS</p>
        <p>Technological University of </p>
        <p>the Philippines</p>
        <div class="social">
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
          <a href="mailto:vonmeanshopee@gmail.com"<p><button>Contact</button></p></a>
      </div>

      <div class="card" >
        <div class="card-image" style="background-image:url(img/devs/shaun.jpg)"></div>
        <h1>Shaun De Vera</h1>
        <p class="title">BSIT 3DNS</p>
        <p>Technological University of </p>
        <p>the Philippines</p>
        <div class="social">
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
        <a href="mailto:vonmeanshopee@gmail.com"<p><button>Contact</button></p></a>
      </div>

      <div class="card" >
        <div class="card-image" style="background-image:url(img/devs/yoji.jpg)"></div>
        <h1>Yoji Gamboa</h1>
        <p class="title">BSIT 3DNS</p>
        <p>Technological University of </p>
        <p>the Philippines</p>
        <div class="social">
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
          <a href="mailto:vonmeanshopee@gmail.com"<p><button>Contact</button></p></a>
      </div>

      <div class="card" >
        <div class="card-image" style="background-image:url(img/devs/and.png)"></div>
        <h1>Andrei James P. Pantia</h1>
        <p class="title">BSIT 3DNS</p>
        <p>Technological University of </p>
        <p>the Philippines</p>
        <div class="social">
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
        <a href="mailto:vonmeanshopee@gmail.com"<p><button>Contact</button></p></a>
      </div>

      <div class="card" >
        <div class="card-image" style="background-image:url(img/devs/eman.jpg)"></div>
        <h1>Ronil Eman S. Sitjar</h1>
        <p class="title">BSIT 3DNS</p>
        <p>Technological University of </p>
        <p>the Philippines</p>
        <div class="social">
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
          <a href="mailto:vonmeanshopee@gmail.com"<p><button>Contact</button></p></a>
      </div>

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
        ?? ALL RIGHTS RESERVED 2022
      </p>
    </section>
  </body>
</html>
