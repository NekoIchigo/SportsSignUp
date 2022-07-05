<?php
  session_start();
  if (!isset($_SESSION["uname"])) {
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title> EDIT TOURNAMENT </title>
  <link rel="shortcut icon" type="x-icon" href="img/tablogo.png">
  <link rel="stylesheet" href="css/c_tournament.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>
<body onload="show_parti()">
  <div class="logo"><a href="index.php"><img src="img/TOP.png"></a>
    <nav>
      <label class="tourna">TOURNAMENTS</label>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="createAdmin.php">Create Admin</a></li>
        <li><a href="ctournament.php">Create Tournament</a></li>
        <li><a href="php_func/logout_func.php">Logout</a></li>
      </ul>
    </nav>
  </div>
  <br>
  <?php
  // fetching data fromm database
  require "php_func/dbh_func.php";
  $id = $_GET["id"];
  $result = mysqli_query($conn, "SELECT * FROM tournament WHERE tournamentID = $id");
  $data = mysqli_fetch_assoc($result);
  ?>
  <table align="center" cellpadding="25">
    <tr>
      <td>
        <h1>EDIT TOURNAMENT</h1><br><br><br>
      </td>
    </tr>
    <tr>
      <form action="php_func/edit_del_func.php" method="POST" enctype="multipart/form-data">
        <input type="text" value="<?php echo $id ?>" name="tournament_id" hidden/>
        <td><br>Tournament Name :</td>
        <td> <br><input type="text" placeholder=" Enter Tournament Name" value="<?php echo $data["tournamentName"] ?>" class="name" name="tournament_name" autocomplete="off"/>
        </td>
    </tr>
    <tr>
      <td class="txt"><br><br> Sports Type :</br>
      <td><br><br><select class="sportsType" value="<?php echo $data["sportsType"] ?>" style="padding: 5px" name="sports_type">
          <option value="<?php echo $data["sportsType"] ?>"><?php echo $data["sportsType"] ?></option>
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
      <td><br> <br><input type="text" placeholder=" Enter Event Handler" value="<?php echo $data["eventHandler"] ?>" class="name" name="event_handler" autocomplete="off"/> </td>
    </tr>
    <tr>
      <td> <br><br>Date : </td>
      <td><br><br> <input type="date" class="name" name="date" value="<?php echo $data["tournamentDate"] ?>" autocomplete="off"/> </td>
    </tr>
    <tr>
      <td> <br><br>Time : </td>
      <td><br><br> <input type="time" class="name" name="time" value="<?php echo $data["tournamentTime"] ?>" autocomplete="off"/> </td>
    </tr>
    <tr>
      <td><br> <br>Event Picture : </td>
      <td><br> <br><input type="file" id="inpFile" value="<?php echo $data["toutnamentPic"] ?>" name="picture"/>
        <div class="image-preview" id="imagePreview">
          <img src="" alt="Image Preview" class="image-preview__image">
          <span class="image-preview__default-text">Image Preview</span>
        </div>
      </td>
    </tr>
    <tr>
      <td class="txt"><br><br> Event Status :</br>
        <td><br><br><select class="sportsType" style="padding: 5px" name="status">
            <option value="2">Select</option>
            <option value="0">On-Going</option>
            <option value="1">Finished</option>
          </select>
        </td>
      </td>
    </tr>
    <tr>
      <td class="txt"><br><br> Number of Participants :</br>
        <td><br><br><select id="partcipants" class="sportsType" style="padding: 5px" name="no_participants">
            <option value="<?php echo $data["no_participants"] ?>"><?php echo $data["no_participants"] ?> Participants</option>
            <option value="4">4 Participants</option>
            <option value="8">8 Participants</option>
          </select>
        </td>
      </td>
    </tr>
    <tbody id="part_4">
      <?php
      $slq =  mysqli_query($conn, "SELECT * FROM teams WHERE tournamentID = $id");
      $i = 0;
      while ($teams = mysqli_fetch_assoc($slq)) {
        echo '
        <tr>
          <td><br> <br>Participant\'s Name/ Team Name :</td>
          <td><br> <br><input type="text" value="'.$teams["id"].'" name="partcipant_id'.$i.'" hidden/><input type="text" value="'.$teams["teamName"].'" placeholder=" Enter Participant\'s Name/ Team Name" class="name" name="partcipant'.$i.'" autocomplete="off"/> </td>
        </tr>';
        $i++;
      }
       ?>
    </tbody>
    <tbody id="part_8">
    <?php
      if ($i != 8) {
        echo '
          <tr>
            <td><br> <br>Participant\'s Name/ Team Name :</td>
            <td><br> <br><input type="text" placeholder=" Enter Participant\'s Name/ Team Name" class="name" name="partcipant4" autocomplete="off"/> </td>
          </tr>
          <tr>
            <td><br> <br>Participant\'s Name/ Team Name :</td>
            <td><br> <br><input type="text" placeholder=" Enter Participant\'s Name/ Team Name" class="name" name="partcipant5" autocomplete="off"/> </td>
          </tr>
          <tr>
            <td><br> <br>Participant\'s Name/ Team Name :</td>
            <td><br> <br><input type="text" placeholder=" Enter Participant\'s Name/ Team Name" class="name" name="partcipant6" autocomplete="off"/> </td>
          </tr>
          <tr>
            <td><br> <br>Participant\'s Name/ Team Name :</td>
            <td><br> <br><input type="text" placeholder=" Enter Participant\'s Name/ Team Name" class="name" name="partcipant7" autocomplete="off"/> </td>
          </tr>
        ';
      }
     ?>
     </tbody>
    <tr>
      <td align="center" colspan="2">
        <div class="btn">
        <br>
        <input type="submit" value="DELETE" name="delete" class="button1"/>
        <input type="submit" value="SUBMIT" name="submit" class="button1"/>
        </div>
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
