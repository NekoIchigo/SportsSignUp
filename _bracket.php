<?php
  require "php_func/dbh_func.php";
  session_start();
?>

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
    <?php
    if (isset($_SESSION["uname"])) {echo '<style>
    button:hover{
      background: #303540;
      transition: .5s;
    }
    </style>';
    }
    ?>
</head>
<body>
  <?php
  $tournaID = $_GET['tournamentID'];
  $result = mysqli_query($conn, "SELECT * FROM tournament WHERE tournamentID = '$tournaID';");
  $tourna = mysqli_fetch_assoc($result);
  $no_parti = $tourna['no_participants'];
   ?>
      <div class="logo"><a href="index.php"><img src="img/TOP.png"></a>
        <!-- navbar -->
        <div id="navbar">
            <nav>
              <div id="textbox" style="width:100%; height:0px;">
                <label class="tourna"><?php echo $tourna["tournamentName"]; ?></label>
              </div>
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <?php
                    if (isset($_SESSION["uname"])) {
                      echo '
                        <li><a href="createAdmin.php">Create Admin</a></li>
                        <li><a href="ctournament.php">Create Tournament</a></li>
                        <li><a href="php_func/logout_func.php">Logout</a></li>
                        <li><a href="_bracket.php?tournamentID='.$tournaID.'&edit=true"><b>Edit Status</b></a></li>';
                      if ($tourna["tournamentStatus"] == 0) {
                      echo '
                        <li><a href="edit_del.php?id='.$tournaID.'"><b>Edit Tournament</b></a></li>
                      ';
                      }
                    }
                   ?>

                </ul>

            </nav>
        </div>
      </div>
      <form class="" action="index.html" method="post">

      </form>
     <?php
     if ($no_parti == 8) {
       echo '
 <!-- For 8 participants -->
     <div class="Container">
 <!-- Start of 1st branch -->
     <div class="Branch_1">
       ';
         $matchID = array();
         $teamOne = array();
         $teamTwo = array();
         $res = mysqli_query($conn, "SELECT * FROM matches WHERE tournamentID='$tournaID'");
         while ($match = mysqli_fetch_assoc($res)) {
             $matchID[] = $match["matchId"];
             $teamOne[] = $match["teamOne"];
             $teamTwo[] = $match["teamTwo"];
           }

         $first_branch = $no_parti/2;
         for ($i=0; $i < $first_branch; $i++) {
           echo '
               <div class="Match">
               <div class="Object_1">';
             $sql = mysqli_query($conn, "SELECT teamName FROM teams WHERE id = '$teamOne[$i]'");
             $_teams1 = mysqli_fetch_assoc($sql);
             echo '
               <div class="Name_Forward" type="text">
                 '.$_teams1["teamName"].'
               </div>';
            echo '
               <a href="php_func/update_match.php?matchid='.$matchID[$i].'&winner=1&matchnum='.$i.'&teamId='.$teamOne[$i].'&tournamentID='.$tournaID.'&branch=1">
               <button type="button">';
               if (isset($_GET['edit'])) {
                 echo 'WIN';
               }
             echo '</button>
             </a>';
             $sql = mysqli_query($conn, "SELECT teamName FROM teams WHERE id = '$teamTwo[$i]'");
             $_teams2 = mysqli_fetch_assoc($sql);
             echo '
               <div class="Name_Forward" type="text">
                 '.$_teams2["teamName"].'
               </div>';
               echo '
                  <a href="php_func/update_match.php?matchid='.$matchID[$i].'&winner=2&matchnum='.$i.'&teamId='.$teamTwo[$i].'&tournamentID='.$tournaID.'&branch=1"><button type="button">';
                  if (isset($_GET['edit'])) {
                    echo 'WIN';
                  }
                echo '</button></a>';
           echo    '
               </div>
               </div>

         ';
         }
     echo '
     </div>
 <!-- end of 1st branch -->

 <!-- Start of 2nd branch -->
     <div class="Branch_2">
       ';
       $k = 0;
       $res_b2 = mysqli_query($conn, "SELECT * FROM matches WHERE tournamentID='$tournaID' AND branch=2");
       if (mysqli_num_rows($res_b2) == 0) {
         $matchID_b2 = array(1,1);
         $teamOne_b2 = array(1,1);
         $teamTwo_b2 = array(1,1);
       }
       else {
         $matchID_b2 = array();
         $teamOne_b2 = array();
         $teamTwo_b2 = array();
       }
       while ($match_b2 = mysqli_fetch_assoc($res_b2)) {
              $matchID_b2[] = $match_b2["matchId"];
              $teamOne_b2[] = $match_b2["teamOne"];
              $teamTwo_b2[] = $match_b2["teamTwo"];
         }
         $second_branch = $first_branch/2;
         for ($i=0; $i < $second_branch; $i++) {
           if(count($matchID_b2) == 1 || count($teamOne_b2) == 1 || count($teamTwo_b2) == 1){
             $matchID_b2[1] = 1;
             $teamOne_b2[1] = 1;
             $teamTwo_b2[1] = 1;
           }
           echo '
               <div class="Match_02">
               <div class="Object_2">';
           $sql_b2 = mysqli_query($conn, "SELECT teamName FROM teams WHERE id = '$teamOne_b2[$i]'");
           $_teams1_b2 = mysqli_fetch_assoc($sql_b2);
           echo '
             <div class="Name_Forward" type="text">
               '.$_teams1_b2["teamName"].'
             </div>';
           echo '
              <a href="php_func/update_match.php?matchid='.$matchID_b2[$i].'&winner=1&matchnum='.$i.'&teamId='.$teamOne_b2[$i].'&tournamentID='.$tournaID.'&branch=2"><button type="button">';
              if (isset($_GET['edit'])) {
                echo 'WIN';
              }
          echo '</button></a>';
          $sql_b2 = mysqli_query($conn, "SELECT teamName FROM teams WHERE id = '$teamTwo_b2[$i]'");
          $_teams2_b2 = mysqli_fetch_assoc($sql_b2);
          echo '
            <div class="Name_Forward" type="text">
              '.$_teams2_b2["teamName"].'
            </div>';
          echo '
             <a href="php_func/update_match.php?matchid='.$matchID_b2[$i].'&winner=2&matchnum='.$i.'&teamId='.$teamTwo_b2[$i].'&tournamentID='.$tournaID.'&branch=2"><button type="button">';
             if (isset($_GET['edit'])) {
               echo 'WIN';
             }
           echo '</button></a>';
           echo    '
               </div>
               </div>

         ';
         }
     echo '
     </div>
 <!-- end of 2nd branch -->

   <div class="Branch_3">
     ';
     $res_b3 = mysqli_query($conn, "SELECT * FROM matches WHERE tournamentID='$tournaID' AND branch='3'");
     $match_b3 = mysqli_fetch_assoc($res_b3);
     $third_branch = $second_branch/2;
     if ($match_b3 == 0) {
       $matchid_b3 =1;
       $teamOne_b3 =1;
       $teamTwo_b3 =1;
     }else {
       $matchid_b3 = $match_b3['matchId'];
       $teamOne_b3 = $match_b3['teamOne'];
       $teamTwo_b3 = $match_b3['teamTwo'];
     }
     for ($i=0; $i < $third_branch; $i++) {
       echo '
           <div class="Match_03">
           <div class="Object_3">';
       if ($teamOne_b3 == 0) {
         $teamOne_b3 =1;
       }
       $sql = mysqli_query($conn, "SELECT teamName FROM teams WHERE id = $teamOne_b3");
       $_teams1 = mysqli_fetch_assoc($sql);
       echo '
         <div class="Name_Forward" type="text">
           '.$_teams1["teamName"].'
         </div>';
       echo '
          <a href="php_func/update_match.php?matchid='.$matchid_b3.'&winner=1&matchnum=1&teamId='.$teamOne_b3.'&tournamentID='.$tournaID.'&branch=3"><button type="button">';
          if (isset($_GET['edit'])) {
            echo 'WIN';
          }
      echo '</button></a>';
      if ($teamTwo_b3 == 0) {
        $teamTwo_b3 =1;
      }
      $sql = mysqli_query($conn, "SELECT teamName FROM teams WHERE id = $teamTwo_b3");
      $_teams2 = mysqli_fetch_assoc($sql);
      echo '
        <div class="Name_Forward" type="text">
          '.$_teams2["teamName"].'
        </div>';
      echo '
         <a href="php_func/update_match.php?matchid='.$matchid_b3.'&winner=2&matchnum=1&teamId='.$teamTwo_b3.'&tournamentID='.$tournaID.'&branch=3"><button type="button">';
         if (isset($_GET['edit'])) {
           echo 'WIN';
         }
       echo '</button></a>';
       echo    '
           </div>
           </div>

     ';
     }
   echo    '
   </div>
 <!--start Winner Goes Here -->
   <div class="Branch_4">
   <div class="Match_04">
   <div class="Object_4">
     ';
     if ($tourna["winner"] == 0) {
       echo '<div class="Name_Forward" type="text"> player</div>';
     }else{
       echo '<div class="Name_Forward" type="text"> '.$tourna["winner"].'</div>';
     }
   echo    '
       <i class="fas fa-crown crown-icon"></i>
   </div>
   </div>

   </div>
   </div>
 <!--end Winner Goes Here -->
 <!--End For 8 participants -->
   ';
     }
     elseif ($no_parti == 4) {
       echo    '
    <!-- Start For 4 participants -->
        <div class="Container">
          <!-- Start of 2nd branch -->
              <div class="Branch_2">
                ';
                $matchID = array();
                $teamOne = array();
                $teamTwo = array();
                $res = mysqli_query($conn, "SELECT * FROM matches WHERE tournamentID='$tournaID'");
                while ($match = mysqli_fetch_assoc($res)) {
                    $matchID[] = $match["matchId"];
                    $teamOne[] = $match["teamOne"];
                    $teamTwo[] = $match["teamTwo"];
                  }
                  $first_branch = $no_parti/2;
                  for ($i=0; $i < $first_branch; $i++) {
                    echo '
                        <div class="Match_02">
                        <div class="Object_2">';
                    $sql = mysqli_query($conn, "SELECT teamName FROM teams WHERE id = '$teamOne[$i]'");
                    $_teams1 = mysqli_fetch_assoc($sql);
                    echo '
                      <div class="Name_Forward" type="text">
                        '.$_teams1["teamName"].'
                      </div>';
                    echo '
                       <a href="php_func/update_match.php?matchid='.$matchID[$i].'&winner=1&matchnum='.$i.'&teamId='.$teamOne[$i].'&tournamentID='.$tournaID.'&branch=2"><button type="button">';
                       if (isset($_GET['edit'])) {
                         echo 'WIN';
                       }
                   echo '</button></a>';
                    $sql = mysqli_query($conn, "SELECT teamName FROM teams WHERE id = '$teamTwo[$i]'");
                    $_teams2 = mysqli_fetch_assoc($sql);
                    echo '
                      <div class="Name_Forward" type="text">
                        '.$_teams2["teamName"].'
                      </div>';
                    echo '
                       <a href="php_func/update_match.php?matchid='.$matchID[$i].'&winner=2&matchnum='.$i.'&teamId='.$teamTwo[$i].'&tournamentID='.$tournaID.'&branch=2"><button type="button">';
                       if (isset($_GET['edit'])) {
                         echo 'WIN';
                       }
                   echo '</button></a>';
                    echo    '
                        </div>
                        </div>

                  ';
                  }
              echo '
              </div>
          <!-- end of 2nd branch -->

            <div class="Branch_3">
              ';
              $res_b3 = mysqli_query($conn, "SELECT * FROM matches WHERE tournamentID='$tournaID' AND branch='3'");
              $match_b3 = mysqli_fetch_assoc($res_b3);
              if($match_b3==0){
                $matchid_b3 = 1;
                $teamOne_b3 = 1;
                $teamTwo_b3 = 1;
              }else {
                $matchid_b3 = $match_b3['matchId'];
                $teamOne_b3 = $match_b3['teamOne'];
                $teamTwo_b3 = $match_b3['teamTwo'];
              }
              $second_branch = $first_branch/2;
              for ($i=0; $i < $second_branch; $i++) {
                echo '
                    <div class="Match_03">
                    <div class="Object_3">';
                $sql = mysqli_query($conn, "SELECT teamName FROM teams WHERE id = $teamOne_b3");
                $_teams1 = mysqli_fetch_assoc($sql);
                echo '
                  <div class="Name_Forward" type="text">
                    '.$_teams1["teamName"].'
                  </div>';
                echo '
                   <a href="php_func/update_match.php?matchid='.$matchid_b3.'&winner=1&matchnum=1&teamId='.$teamOne_b3.'&tournamentID='.$tournaID.'&branch=3"><button type="button">';
                   if (isset($_GET['edit'])) {
                     echo 'WIN';
                   }
               echo '</button></a>';
               if ($teamTwo_b3 == 0) {
                 $teamTwo_b3 =1;
               }
               $sql = mysqli_query($conn, "SELECT teamName FROM teams WHERE id = $teamTwo_b3");
               $_teams2 = mysqli_fetch_assoc($sql);
               echo '
                 <div class="Name_Forward" type="text">
                   '.$_teams2["teamName"].'
                 </div>';
               echo '
                  <a href="php_func/update_match.php?matchid='.$matchid_b3.'&winner=2&matchnum=1&teamId='.$teamTwo_b3.'&tournamentID='.$tournaID.'&branch=3"><button type="button">';
                  if (isset($_GET['edit'])) {
                    echo 'WIN';
                  }
                echo '</button></a>';
                echo    '
                    </div>
                    </div>

              ';
              }
            echo    '
            </div>
          <!--start Winner Goes Here -->
            <div class="Branch_4">
            <div class="Match_04">
            <div class="Object_4">
              ';
            if ($tourna["winner"] == 0) {
              echo '<div class="Name_Forward" type="text"> player</div>';
            }else{
              echo '<div class="Name_Forward" type="text"> '.$tourna["winner"].'</div>';
            }
            echo    '
                <i class="fas fa-crown crown-icon"></i>
            </div>
            </div>

            </div>
            </div>
          <!--end Winner Goes Here -->
    <!-- end For 4 participants -->
    ';
     }
      ?>

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
