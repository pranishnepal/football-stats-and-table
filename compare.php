<?php

error_reporting(0);
ini_set('display_errors', 0);

try {


    //initialize variables for first player
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

    //initialize variables for second player
    $playerDataArray2 = "";
    $number2 = "";
    $team2 = "";
    $gamesPlayed2 = "";
    $goalScored2  = "";
    $goalsPerGame2 = "";
    $age2 = "";
    $position2 = "";
    $yellowCards2 = "";
    $redCards2 = "";

    if((array_key_exists('playerOne', $_POST)) && (array_key_exists('playerTwo', $_POST))){

      //fetch info for first player
      $fullName = $_POST['playerOne'];
      $playerName =  (explode(" ", $fullName));
      $firstName = $playerName[0];
      $lastName = $playerName[1];

      $urlAPI =  file_get_contents("https://apiv2.apifootball.com/?action=get_players&player_name=$lastName%$firstName&APIkey=12ed565a36b5792f2344e0dedebff072f3e7262e45f2f2681aa787ddff41a693");
      $playerDataArray = json_decode($urlAPI, true);

      //fetch info for second player
      $fullName2 = $_POST['playerTwo'];
      $playerName2 =  (explode(" ", $fullName2));
      $firstName2 = $playerName2[0];
      $lastName2 = $playerName2[1];

      $urlAPI2 =  file_get_contents("https://apiv2.apifootball.com/?action=get_players&player_name=$lastName2%$firstName2&APIkey=12ed565a36b5792f2344e0dedebff072f3e7262e45f2f2681aa787ddff41a693");
      $playerDataArray2 = json_decode($urlAPI2, true);

      //setting values  for player 1

      $number= $playerDataArray[0]['player_number'];
      $team = $playerDataArray[0]['team_name'];
      $gamesPlayed = $playerDataArray[0]['player_match_played'];
      $goalScored =  $playerDataArray[0]['player_goals'];
      $goalsPerGame = sprintf('%0.2f', ($gamesPlayed / $goalScored));
      $age = $playerDataArray[0]['player_age'];
      $position = $playerDataArray[0]['player_type'];
      $yellowCards = $playerDataArray[0]['player_yellow_cards'];
      $redCards = $playerDataArray[0]['player_red_cards'];


      //setting values for player 2

      $number2= $playerDataArray2[0]['player_number'];
      $team2 = $playerDataArray2[0]['team_name'];
      $gamesPlayed2 = $playerDataArray2[0]['player_match_played'];
      $goalScored2 =  $playerDataArray2[0]['player_goals'];
      $goalsPerGame2 = sprintf('%0.2f', ($gamesPlayed2 / $goalScored2));
      $age2 = $playerDataArray2[0]['player_age'];
      $position2 = $playerDataArray2[0]['player_type'];
      $yellowCards2 = $playerDataArray2[0]['player_yellow_cards'];
      $redCards2 = $playerDataArray2[0]['player_red_cards'];



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

    <link rel="stylesheet" type="text/css" href="compare.css">
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

              <div class="playerSearch">
                <form method="post" class="p1p2Bar" >
                  <p id="enterPlayerNames">Player Names:</p>
                  <input type="text" name="playerOne" class="searchBar" placeholder="Eg: Cristiano Ronaldo" id="searchBoxOne">
                  <label for="playerTwo" id="playerTwoLabelvs">vs.</label>
                  <input type="text" name="playerTwo" class="searchBar" placeholder="Eg: Lionel Messi" id="searchBoxTwo">
                  <!-- submit button for player1 = submitOne -->

                  <input type="submit" name="submitButton" value="Compare!" id="compareSubmit" class="submitButton">

                </form>

              </div>

            </div>
            <!-- Search Area Ends -->

            <div class="clearFloat">

            </div>

            <div class="tableArea">

            <!-- Left and Right Tables -->
              <div id="leftDiv">

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

              <div id="rightDiv">

                <table align = "center">
                  <!-- Age -->
                  <tr>
                    <td>   <?php echo "<div class = 'textColor'>Age: "."".$age2."</div>"."<br>"; ?></td>
                  </tr>

                  <!-- Age -->
                  <tr>
                    <td><?php echo "<div class = 'textColor'>Shirt Number: "."".$number2."</div>"."<br>"; ?></td>
                  </tr>

                  <tr>
                    <td><?php echo "<div class = 'textColor'>Club: "."".$team2."</div>"."<br>"; ?></td>
                  </tr>

                  <tr>
                    <td><?php echo "<div class = 'textColor'>Games Played: "."".$gamesPlayed2."</div>"."<br>"; ?></td>
                  </tr>

                  <tr>
                    <td><?php echo "<div class = 'textColor'>Goals Scored: "."".$goalScored2."</div>"."<br>"; ?></td>
                  </tr>

                  <tr>
                    <td><?php echo "<div class = 'textColor'>Goals Per Game: "."".$goalsPerGame2."</div>"."<br>"; ?></td>
                  </tr>

                  <tr>
                    <td><?php echo "<div class = 'textColor'>Yellow Cards: "."".$yellowCards2."</div>"."<br>"; ?></td>
                  </tr>

                  <tr>
                    <td><?php echo "<div class = 'textColor'>Red Cards: "."".$redCards2."</div>"."<br>"; ?></td>
                  </tr>

                </table>

                <div class="clearFloat">

                </div>


                <div>
                  <br>
                  <br>
                  <h1 id="endingMessage">So, who's the better player?</h1>
                </div>

              </div>
            <!-- Left and Right Tables End-->




            </div>


    </div>


  </body>
</html>
