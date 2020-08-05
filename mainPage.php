<?php


  error_reporting(0);
  ini_set('display_errors', 0);

  $playerDataArray = "";
  $number = "";
  $team = "";
  $gamesPlayed = "";
  $goalScored  = "";
  $goalsPerGame= "";
  $age = "";
  $position= "";
  $yellowCards= "";
  $redCards= "";

  try {

    if(array_key_exists('playerOne', $_POST)){

      $fullName = $_POST['playerOne'];
      $playerName =  (explode(" ", $fullName));
      $firstName = $playerName[0];
      $lastName = $playerName[1];

      $urlAPI =  file_get_contents("https://apiv2.apifootball.com/?action=get_players&player_name=$lastName%$firstName&APIkey=YOUR_API");
      $playerDataArray = json_decode($urlAPI, true);

      $number= $playerDataArray[0]['player_number'];
      $team = $playerDataArray[0]['team_name'];
      $gamesPlayed = $playerDataArray[0]['player_match_played'];
      $goalScored =  $playerDataArray[0]['player_goals'];
      $goalsPerGame = sprintf('%0.2f', ($gamesPlayed / $goalScored));
      $age = $playerDataArray[0]['player_age'];
      $position = $playerDataArray[0]['player_type'];
      $yellowCards = $playerDataArray[0]['player_yellow_cards'];
      $redCards = $playerDataArray[0]['player_red_cards'];


    }


  } catch (Exception $e) {

      echo "<h1 style = 'color: red;'>Something went wrong, please try again later</h1>";

  }


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>StatGround</title>

    <link rel="stylesheet" type="text/css" href="mainPage.css">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@700&display=swap" rel="stylesheet">

  </head>
  <body>



    <div id="navBar">
      <img src="PL.jpg" width="80%">
    </div>


    <div id="bplLogoBar">


    <a href="mainPage.php"><img src="clLogoNew.png" height="40px" id="clLogo"></a>
    </div>


    <div id="menuBar">
      <div id="menuOptions">
          <a href="mainPage.php">Player Stats</a>
          <a href="compare.php" id="compareStatsTab">Compare Players</a>
          <a href="league.php">League Table</a>
      </div>

    </div>

    <div class="clearFloat">
    </div>


    <div class="mainContent">

            <!-- Search Area Begins -->
            <div class="searchArea">

              <div class="playerSearch1">

                <form method="post" class="p1p2Bar" >
                  <label for="playerOne">Player's Name:</label>
                  <input type="text" name="playerOne" class="searchBar" placeholder="Eg: Cristiano Ronaldo">
                  <!-- submit button for player1 = submitOne -->
                  <input type="submit" name="submitOne" value="Let's Go!" class="submitButton">
                </form>

              </div>

            </div>
            <!-- Search Area Ends -->

            <div class="clearFloat">

            </div>

            <div id="tableL">
              <table align = "center">

                <!-- Age -->
                <tr>
                  <td>   <?php echo "<div class = 'textColor'>Age: "."".$age."</div>"."<br>"; ?></td>
                </tr>

                <!-- Age -->
                <tr>
                  <td><?php echo "<div class = 'textColor'>Shirt Number: "."".$number."</div>"."<br>"; ?></td>
                </tr>

                <tr>
                  <td><?php echo "<div class = 'textColor'>Club: "."".$team."</div>"."<br>"; ?></td>
                </tr>

                <tr>
                  <td><?php echo "<div class = 'textColor'>Games Played: "."".$gamesPlayed."</div>"."<br>"; ?></td>
                </tr>

                <tr>
                  <td><?php echo "<div class = 'textColor'>Goals Scored: "."".$goalScored."</div>"."<br>"; ?></td>
                </tr>

                <tr>
                  <td><?php echo "<div class = 'textColor'>Goals Per Game: "."".$goalsPerGame."</div>"."<br>"; ?></td>
                </tr>

                <tr>
                  <td><?php echo "<div class = 'textColor'>Yellow Cards: "."".$yellowCards."</div>"."<br>"; ?></td>
                </tr>

                <tr>
                  <td><?php echo "<div class = 'textColor'>Red Cards: "."".$redCards."</div>"."<br>"; ?></td>
                </tr>

              </table>

          </div>

          <div id="message">
            <h2 align = "center">All stats are for the current season!</h2>
          </div>

    </div>


  </body>
</html>
