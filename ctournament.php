<?php
  if (!isset($_SESSION["uname"])) {
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title> CREATE TOURNAMENT </title>
  <link rel="stylesheet" href="css/c_tournament.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>
<body>
  <div class="logo"><a href="index.php"><img src="img/TOP.png"></a>
    <nav>
      <ul>
        <li><a class="" href="createAdmin.php">Create Admin</a></li>
        <li><a href="ctournament.php">Create Tournament</a></li>
        <li><a href="php_func/logout_func.php">Logout</a></li>
      </ul>
    </nav>
  </div>
  <br>
  <table align="center" cellpadding="25">
    <tr>
      <td>
        <h1>CREATE TOURNAMENT</h1><br><br><br>
      </td>
    </tr>
    <tr>
      <form action="php_func/crate_tourna.php" method="post" enctype="multipart/form-data">
        <td><br>Tournament Name :</td>
        <td> <br><input type="text" placeholder=" Enter Tournament Name" class="name" name="tournament_name" autocomplete="off"/>
        </td>
    </tr>
    <tr>
      <td class="txt"><br><br> Sports Type :</br>
      <td><br><br><select class="sportsType" style="padding: 5px" name="sports_type">
          <option value="S">Select</option>
          <option value="Basketball">Basketball</option>
          <option value="Volleyball">Volleyball</option>
          <option value="Football">Football</option>
          <option value="Chess">Chess</option>
          <option value="Table Tennis">Table Tennis</option>
          <option value="Tennis">Tennis</option>
          <option value="Badminton">Badminton</option>
          <option value="Mobile Game">Mobile Game</option>
        </select>
      </td>
      </td>
    </tr>
    <tr>
      <td><br> <br>Event Handler : </td>
      <td><br> <br><input type="text" placeholder=" Enter Event Handler" class="name" name="event_handler" autocomplete="off"/> </td>
    </tr>
    <tr>
      <td> <br><br>Date : </td>
      <td><br><br> <input type="date" class="name" name="date" autocomplete="off"/> </td>
    </tr>
    <tr>
      <td> <br><br>Time : </td>
      <td><br><br> <input type="time" class="name" name="time" autocomplete="off"/> </td>
    </tr>
    <tr>
      <td><br> <br>Event Picture : </td>
      <td><br> <br><input type="file" id="inpFile" name="picture"/>
        <div class="image-preview" id="imagePreview">
          <img src="" alt="Image Preview" class="image-preview__image">
          <span class="image-preview__default-text">Image Preview</span>
        </div>
      </td>
    </tr>
    <tr>
      <td class="txt"><br><br> Number of Participants :</br>
        <td><br><br><select id="partcipants" class="sportsType" style="padding: 5px" name="no_participants">
            <option value="0">Select</option>
            <option value="4">4 Participants</option>
            <option value="8">8 Participants</option>
          </select>
        </td>
      </td>
    </tr>
    <tbody id="part_4">
      <tr>
        <td><br> <br>Participant\'s Name/ Team Name :</td>
        <td><br> <br><input type="text" placeholder=" Enter Participant's Name/ Team Name" class="name" name="partcipant0" autocomplete="off"/> </td>
      </tr>
      <tr>
        <td><br> <br>Participant\'s Name/ Team Name :</td>
        <td><br> <br><input type="text" placeholder=" Enter Participant's Name/ Team Name" class="name" name="partcipant1" autocomplete="off"/> </td>
      </tr>
      <tr>
        <td><br> <br>Participant\'s Name/ Team Name :</td>
        <td><br> <br><input type="text" placeholder=" Enter Participant's Name/ Team Name" class="name" name="partcipant2" autocomplete="off"/> </td>
      </tr>
      <tr>
        <td><br> <br>Participant\'s Name/ Team Name :</td>
        <td><br> <br><input type="text" placeholder=" Enter Participant's Name/ Team Name" class="name" name="partcipant3" autocomplete="off"/> </td>
      </tr>
    </tbody>
    <tbody id="part_8">
      <tr>
        <td><br> <br>Participant\'s Name/ Team Name :</td>
        <td><br> <br><input type="text" placeholder=" Enter Participant's Name/ Team Name" class="name" name="partcipant4" autocomplete="off"/> </td>
      </tr>
      <tr>
        <td><br> <br>Participant\'s Name/ Team Name :</td>
        <td><br> <br><input type="text" placeholder=" Enter Participant's Name/ Team Name" class="name" name="partcipant5" autocomplete="off"/> </td>
      </tr>
      <tr>
        <td><br> <br>Participant\'s Name/ Team Name :</td>
        <td><br> <br><input type="text" placeholder=" Enter Participant's Name/ Team Name" class="name" name="partcipant6" autocomplete="off"/> </td>
      </tr>
      <tr>
        <td><br> <br>Participant\'s Name/ Team Name :</td>
        <td><br> <br><input type="text" placeholder=" Enter Participant's Name/ Team Name" class="name" name="partcipant7" autocomplete="off"/> </td>
      </tr>
    </tbody>
    <tr>
      <td align="center" colspan="2">
        <br>
        <input type="submit" value="SUBMIT" name="submit" id="button1"/>
        </form>
      </td>
    </tr>
  </table>
  <br><br><br><br><br>
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
  <script src="js/c_tournament.js">
  </script>
</body>
</html>
