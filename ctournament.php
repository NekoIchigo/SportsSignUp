<!DOCTYPE html>
<html>

<head>
  <title> CREATE TOURNAMENT </title>
  <link rel="stylesheet" href="css/c_tournament.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />

</head>

<body>
  <div class="logo"><a href=""><img src="img/TOP.png"></a>
    <nav>
      <ul>
        <li><a class="" href="#">Create Admin</a></li>
        <li><a href="#">Create Tournament</a></li>
        <li><a href="#">Logout</a></li>
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
        <td> <br><input type="text" placeholder=" Enter Tournament Name" id="name" name="tournament_name"/>
        </td>
    </tr>
    <tr>
      <td class="txt"><br><br> Sports Type :</br>
      <td><br><br><select id="sportsType" style="padding: 5px" name="sports_type">
          <option value="S">Select</option>
          <option value="Basketball">Basketball</option>
          <option value="Volleyball">Volleyball</option>
          <option value="Football">Football</option>
          <option value="Chess">Chess</option>
          <option value="Table Tennis">Table Tennis</option>
          <option value="Tennis">Tennis</option>
          <option value="Badminton">Badminton</option>
        </select>
      </td>
      </td>
    </tr>
    <tr>
      <td><br> <br>Event Handler : </td>
      <td><br> <br><input type="text" placeholder=" Enter Event Handler" id="name" name="event_handler"/> </td>
    </tr>
    <tr>
      <td> <br><br>Date : </td>
      <td><br><br> <input type="date" id="name" name="date"> </td>
    </tr>
    <tr>
      <td> <br><br>Time : </td>
      <td><br><br> <input type="time" id="name" name="time"> </td>
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
      <td align="center" colspan="2">
        <br>
        <input type="submit" value="NEXT" name="next" id="button1"/>
        </form>
      </td>
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
