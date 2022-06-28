<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Tournaments</title>
  <link rel="shortcut icon" type="x-icon" href="img/tablogo.png">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>

<body>
  <div class="logo"><a href="index.php"><img src="img/TOP.png"></a>

    <nav>
      <label class="tourna">TOURNAMENTS</label>
      <ul>
        <li><a class="" href="signup.php">Create Admin</a></li>
        <li><a href="ctournament.php">Create Tournament</a></li>
        <li><a href="php_func/logout_func.php">Logout</a></li>
      </ul>
    </nav>
  </div>
  <section class="container">
    <div id="add_here">
      <div class="card">
        <div class="team-card">
          <form action="php_func/insert_teams.php" method="post">
          <input type="hidden" name="tournamentID" value="<?php if(isset($_GET['tourna'])) echo $_GET['tourna'];?>"/>
          <label>Team Name: </label>
          <input type="text" name="teamName" placeholder="Enter Team Name here"/>
          <label>Leader Name: </label>
          <input type="text" name="leader" placeholder="Enter Leader Name here"/>
          <label>Members Name: </label>
          <textarea name="members" rows="5" cols="80" placeholder="Enter Members Name here"></textarea>
        </div>
      </div>
    </div>
  </section>
  <div id="body2">
    <button type="submit" name="submit"><b>SUBMIT TEAM</b></button>
    </form>
    <button type="button" name="button" id="add_more"><b>ADD TEAM +</b></button>
  </div>
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
  <script src="js/teams.js">

  </script>
</body>

</html>
