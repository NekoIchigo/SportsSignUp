<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link style rel="stylesheet" href="css/bracket.css">
    <link rel="shortcut icon" type="x-icon" href="img/tablogo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Bracket</title>
</head>
<body>
      <div class="logo"><a href="index.php"><img src="img/TOP.png"></a>
        <!-- navbar -->
        <div id="navbar">
            <nav>
                <label class="aboutus">TOURNAMENTS</label>
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="createAdmin.php">Create Admin</a></li>
                  <li><a href="ctournament.php">Create Tournament</a></li>
                  <li><a href="php_func/logout_func.php">Logout</a></li>
                </ul>
            </nav>
        </div>
      </div>
    <div class="Container"> <!--part 1: Branch 1 going to contain everything 1x of this-->
        <!--navbar-->
    <!-------------------------1-------------------------------------------->
        <div class="Branch_1"><!--Part 2: The part which contain each 4 of the matches in this branch.-->

            <div class="Match">
            <div class="Object_1"> <!--Part 3: Name of player & Result 4x of this in this branch-->

                <div><select class="Name"   type="text" placeholder="Player 1" id="Player1">
                    <option value="Player1">Player1</option>
                    <option value="Player2">Player2</option>
                    <option value="Player3">Player3</option>
                    <option value="Player4">Player4</option>
                    <option value="Player5">Player5</option>
                    <option value="Player6">Player6</option>
                    <option value="Player7">Player7</option>
                    <option value="Player8">Player8</option>

                </select></div>  <!--Part 4: Name of player 8x of this in this branch-->

                <div> <!--Part 4: Results 8x of this-->
                <form name="FormId1" class="Result">
                <input type="number" id="Result1">
                </form>
                </div>

                <div><select class="Name" type="text" id="Player2">
                    <option value="Player2">Player2</option>
                    <option value="Player1">Player1</option>
                    <option value="Player3">Player3</option>
                    <option value="Player4">Player4</option>
                    <option value="Player5">Player5</option>
                    <option value="Player6">Player6</option>
                    <option value="Player7">Player7</option>
                    <option value="Player8">Player8</option>
                </select></div><!--Part 4: Name of player 8x of this-->

                <div> <!--Part 4: Results 8x of this-->
                <form name="FormId2" class="Result">
                <input type="number" id="Result2">
                </form>
                </div>
            </div>

            </div>
<!----------------------------------2----------------------------------->
            <div class="Match">
            <div class="Object_1"> <!--Part 3: Name of player & Result 4x of this in this branch-->

                <div><select class="Name" type="text" id="Player3">
                    <option value="Player3">Player3</option>
                    <option value="Player4">Player4</option>
                    <option value="Player1">Player1</option>
                    <option value="Player2">Player2</option>
                    <option value="Player5">Player5</option>
                    <option value="Player6">Player6</option>
                    <option value="Player7">Player7</option>
                    <option value="Player8">Player8</option>
                </select></div><!--Part 4: Name of player 8x of this in this branch-->

                <div> <!--Part 4: Results 8x of this-->
                <form name="FormId3" class="Result">
                <input type="number" id="Result3">
                </form>
                </div>

                <div><select class="Name" type="text" id="Player4">
                    <option value="Player4">Player4</option>
                    <option value="Player3">Player3</option>
                    <option value="Player1">Player1</option>
                    <option value="Player2">Player2</option>
                    <option value="Player5">Player5</option>
                    <option value="Player6">Player6</option>
                    <option value="Player7">Player7</option>
                    <option value="Player8">Player8</option>
                </select></div><!--Part 4: Name of player 8x of this in this branch-->

                <div> <!--Part 4: Results 8x of this-->
                <form name="FormId4" class="Result">
                <input type="number" id="Result4">
                </form>
                </div>
                </div>
            </div>
<!---------------------------------3 (Half)------------------------------------>
<div class="Match">
<div class="Object_1"> <!--Part 3: Name of player & Result 4x of this in this branch-->

    <div><select class="Name" type="text" id="Player5">
        <option value="Player5">Player5</option>
        <option value="Player6">Player6</option>
        <option value="Player1">Player1</option>
        <option value="Player2">Player2</option>
        <option value="Player3">Player3</option>
        <option value="Player4">Player4</option>
        <option value="Player7">Player7</option>
        <option value="Player8">Player8</option>
    </select></div><!--Part 4: Name of player 8x of this in this branch-->

    <div> <!--Part 4: Results 8x of this-->
    <form name="FormId5" class="Result">
    <input type="number" id="Result5">
    </form>
    </div>

    <div><select class="Name" type="text" id="Player6">
        <option value="Player6">Player6</option>
        <option value="Player5">Player5</option>
        <option value="Player1">Player1</option>
        <option value="Player2">Player2</option>
        <option value="Player3">Player3</option>
        <option value="Player4">Player4</option>
        <option value="Player7">Player7</option>
        <option value="Player8">Player8</option>
    </select></div><!--Part 4: Name of player 8x of this in this branch-->

    <div> <!--Part 4: Results 8x of this-->
    <form name="FormId6" class="Result">
        <input type="number" id="Result6">
    </form>
    </div>
</div>
</div>
<!------------------------------------4--------------------------------->
<div class="Match">
<div class="Object_1"> <!--Part 3: Name of player & Result 4x of this in this branch-->

    <div><select class="Name" type="text" id="Player7">
        <option value="Player7">Player7</option>
        <option value="Player8">Player8</option>
        <option value="Player1">Player1</option>
        <option value="Player2">Player2</option>
        <option value="Player3">Player3</option>
        <option value="Player4">Player4</option>
        <option value="Player5">Player5</option>
        <option value="Player6">Player6</option>
    </select></div><!--Part 4: Name of player 8x of this in this branch-->

    <div> <!--Part 4: Results 8x of this-->
    <form name="FormId7" class="Result">
        <input type="number" id="Result7">
    </form>
    </div>

    <div><select class="Name" type="text" id="Player8">
        <option value="Player8">Player8</option>
        <option value="Player7">Player7</option>
        <option value="Player1">Player1</option>
        <option value="Player2">Player2</option>
        <option value="Player3">Player3</option>
        <option value="Player4">Player4</option>
        <option value="Player5">Player5</option>
        <option value="Player6">Player6</option>
    </select></div><!--Part 4: Name of player 8x of this in this branch-->

    <div> <!--Part 4: Results 8x of this-->
    <form name="FormId8" class="Result">
        <input type="number" id="Result8">
    </form>
    </div>
</div>
</div>

        </div>
<!------------------Quarter-Finals------------------------------------->
<!-----------------------Branch 1 ends here---------------------------->
<!--------------------------------------------------------------------->
<div class="Branch_2"><!--Part 2: The part which contain each 2 of the matches. In this branch-->
    <div class="Match_02">
    <div class="Object_2"> <!--Part 3: Name of player & Result 2x of this in this branch-->

        <div class="Name_Forward" type="text" id="Player9">Player</div><!--Part 4: Name of player 4x of this in this branch-->

        <div> <!--Part 4: Results 8x of this-->
        <form name="FormId9" class="Result">
            <input type="number" id="Result9">
        </form>
        </div>

        <div class="Name_Forward" type="text" id="Player10">Player</div><!--Part 4: Name of player 4x of this in this branch-->

        <div> <!--Part 4: Results 4x of this in this branch-->
        <form name="FormId10" class="Result">
        <input type="number" id="Result10">
        </form>
        </div>
</div>
    </div>
<!----------------------------------2 (half)----------------------------------->
<div class="Match_02">
<div class="Object_2"> <!--Part 3: Name of player & Result 2x of this in this branch-->

        <div class="Name_Forward" type="text" id="Player11">Player</div><!--Part 4: Name of player 4x of this in this branch-->

        <div> <!--Part 4: Results 4x of this in this branch-->
        <form name="FormId11" class="Result">
            <input type="number" id="Result11">
        </form>
        </div>

        <div class="Name_Forward" type="text" id="Player12">Player</div><!--Part 4: Name of player 8x of this-->

        <div> <!--Part 4: Results 4x of this in this branch-->
        <form name="FormId12" class="Result">
            <input type="number" id="Result12">
        </form>
        </div>
</div>
    </div>

</div>
<!-------------------------Semi-Finals--------------------------------->
<!-----------------------Branch 2 ends here---------------------------->
<!--------------------------------------------------------------------->

<div class="Branch_3"><!--Part 2: The part which contain 1 of the matches.-->
    <div class="Match_03">
    <div class="Object_3"> <!--Part 3: Name of player & Result 1x of this in this branch-->

        <div class="Name_Forward" type="text" id="Player13">Player</div><!--Part 2: Name of player 2x of this in this branch-->

        <div> <!--Part 4: Results 2x of this in this branch-->
        <form name="FormId13" class="Result">
            <input type="number" id="Result13">
        </form>
        </div>

        <div class="Name_Forward" type="text" id="Player14">Player</div><!--Part 2: Name of player 2x of this in this branch-->

        <div> <!--Part 4: Results 2x of this in this branch-->
        <form name="FormId14" class="Result">
            <input type="number" id="Result14">
        </form>
        </div>
</div>
    </div>

</div>
<!------------------------------Finals--------------------------------->
<!-----------------------Branch 3 ends here---------------------------->
<!--------------------------------------------------------------------->
<div class="Branch_4"><!--Part 2: The part which contain 1 of the matches.-->
<div class="Match_04">
<div class="Object_4"> <!--Part 3: Name of player & Result 1x of this in this branch-->

    <div class="Name_Forward" type="text" id="Player15"> Winner</div><!--Part 2: Name of player 2x of this in this branch-->

    <i class='fas fa-crown crown-icon'></i>
</div>
</div>

</div>
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

    <script src="js/bracket.js"></script>
</body>
</html>
