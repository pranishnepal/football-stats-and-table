<?php

  error_reporting(0);
  ini_set('display_errors', 0);

  try {

    $APIkey='12ed565a36b5792f2344e0dedebff072f3e7262e45f2f2681aa787ddff41a693';
    $league_id = 148;
    $urlLink = file_get_contents("https://apiv2.apifootball.com/?action=get_standings&league_id=$league_id&APIkey=$APIkey");
    $leagueDataArray = json_decode($urlLink, true);

    //position 1

    $pos1Team = $leagueDataArray[0]['team_name'];
    $pos1Played = $leagueDataArray[0]['overall_league_payed'];
    $pos1Won = $leagueDataArray[0]['overall_league_W'];
    $pos1Lost = $leagueDataArray[0]['overall_league_L'];
    $pos1Drawn = $leagueDataArray[0]['overall_league_D'];
    $pos1GD = ($leagueDataArray[0]['overall_league_GF']) - ($leagueDataArray[0]['overall_league_GA']) ;
    $pos1Points = $leagueDataArray[0]['overall_league_PTS'];

    //position 2

    $pos2Team = $leagueDataArray[1]['team_name'];
    $pos2Played = $leagueDataArray[1]['overall_league_payed'];
    $pos2Won = $leagueDataArray[1]['overall_league_W'];
    $pos2Lost = $leagueDataArray[1]['overall_league_L'];
    $pos2Drawn = $leagueDataArray[1]['overall_league_D'];
    $pos2GD = ($leagueDataArray[1]['overall_league_GF']) - ($leagueDataArray[1]['overall_league_GA']) ;
    $pos2Points = $leagueDataArray[1]['overall_league_PTS'];


    //pos3

    $pos3Team = $leagueDataArray[2]['team_name'];
    $pos3Played = $leagueDataArray[2]['overall_league_payed'];
    $pos3Won = $leagueDataArray[2]['overall_league_W'];
    $pos3Lost = $leagueDataArray[2]['overall_league_L'];
    $pos3Drawn = $leagueDataArray[2]['overall_league_D'];
    $pos3GD = ($leagueDataArray[2]['overall_league_GF']) - ($leagueDataArray[2]['overall_league_GA']) ;
    $pos3Points = $leagueDataArray[2]['overall_league_PTS'];

    //position 4


    $pos4Team = $leagueDataArray[3]['team_name'];
    $pos4Played = $leagueDataArray[3]['overall_league_payed'];
    $pos4Won = $leagueDataArray[3]['overall_league_W'];
    $pos4Lost = $leagueDataArray[3]['overall_league_L'];
    $pos4Drawn = $leagueDataArray[3]['overall_league_D'];
    $pos4GD = ($leagueDataArray[3]['overall_league_GF']) - ($leagueDataArray[3]['overall_league_GA']) ;
    $pos4Points = $leagueDataArray[3]['overall_league_PTS'];

    //pos5
    $pos5Team = $leagueDataArray[4]['team_name'];
    $pos5Played = $leagueDataArray[4]['overall_league_payed'];
    $pos5Won = $leagueDataArray[4]['overall_league_W'];
    $pos5Lost = $leagueDataArray[4]['overall_league_L'];
    $pos5Drawn = $leagueDataArray[4]['overall_league_D'];
    $pos5GD = ($leagueDataArray[4]['overall_league_GF']) - ($leagueDataArray[4]['overall_league_GA']) ;
    $pos5Points = $leagueDataArray[4]['overall_league_PTS'];

    //pos6
    $pos6Team = $leagueDataArray[5]['team_name'];
    $pos6Played = $leagueDataArray[5]['overall_league_payed'];
    $pos6Won = $leagueDataArray[5]['overall_league_W'];
    $pos6Lost = $leagueDataArray[5]['overall_league_L'];
    $pos6Drawn = $leagueDataArray[5]['overall_league_D'];
    $pos6GD = ($leagueDataArray[5]['overall_league_GF']) - ($leagueDataArray[5]['overall_league_GA']) ;
    $pos6Points = $leagueDataArray[5]['overall_league_PTS'];

    //pos7

    $pos7Team = $leagueDataArray[6]['team_name'];
    $pos7Played = $leagueDataArray[6]['overall_league_payed'];
    $pos7Won = $leagueDataArray[6]['overall_league_W'];
    $pos7Lost = $leagueDataArray[6]['overall_league_L'];
    $pos7Drawn = $leagueDataArray[6]['overall_league_D'];
    $pos7GD = ($leagueDataArray[6]['overall_league_GF']) - ($leagueDataArray[6]['overall_league_GA']) ;
    $pos7Points = $leagueDataArray[6]['overall_league_PTS'];

    //pos8

    $pos8Team = $leagueDataArray[7]['team_name'];
    $pos8Played = $leagueDataArray[7]['overall_league_payed'];
    $pos8Won = $leagueDataArray[7]['overall_league_W'];
    $pos8Lost = $leagueDataArray[7]['overall_league_L'];
    $pos8Drawn = $leagueDataArray[7]['overall_league_D'];
    $pos8GD = ($leagueDataArray[7]['overall_league_GF']) - ($leagueDataArray[7]['overall_league_GA']) ;
    $pos8Points = $leagueDataArray[7]['overall_league_PTS'];

    //pos9

    $pos9Team = $leagueDataArray[8]['team_name'];
    $pos9Played = $leagueDataArray[8]['overall_league_payed'];
    $pos9Won = $leagueDataArray[8]['overall_league_W'];
    $pos9Lost = $leagueDataArray[8]['overall_league_L'];
    $pos9Drawn = $leagueDataArray[8]['overall_league_D'];
    $pos9GD = ($leagueDataArray[8]['overall_league_GF']) - ($leagueDataArray[8]['overall_league_GA']) ;
    $pos9Points = $leagueDataArray[8]['overall_league_PTS'];


    //pos 10

    $pos10Team = $leagueDataArray[9]['team_name'];
    $pos10Played = $leagueDataArray[9]['overall_league_payed'];
    $pos10Won = $leagueDataArray[9]['overall_league_W'];
    $pos10Lost = $leagueDataArray[9]['overall_league_L'];
    $pos10Drawn = $leagueDataArray[9]['overall_league_D'];
    $pos10GD = ($leagueDataArray[9]['overall_league_GF']) - ($leagueDataArray[9]['overall_league_GA']) ;
    $pos10Points = $leagueDataArray[9]['overall_league_PTS'];


    //pos 11
    $pos11Team = $leagueDataArray[10]['team_name'];
    $pos11Played = $leagueDataArray[10]['overall_league_payed'];
    $pos11Won = $leagueDataArray[10]['overall_league_W'];
    $pos11Lost = $leagueDataArray[10]['overall_league_L'];
    $pos11Drawn = $leagueDataArray[10]['overall_league_D'];
    $pos11GD = ($leagueDataArray[10]['overall_league_GF']) - ($leagueDataArray[10]['overall_league_GA']) ;
    $pos11Points = $leagueDataArray[10]['overall_league_PTS'];

    //pos12

    $pos12Team = $leagueDataArray[11]['team_name'];
    $pos12Played = $leagueDataArray[11]['overall_league_payed'];
    $pos12Won = $leagueDataArray[11]['overall_league_W'];
    $pos12Lost = $leagueDataArray[11]['overall_league_L'];
    $pos12Drawn = $leagueDataArray[11]['overall_league_D'];
    $pos12GD = ($leagueDataArray[11]['overall_league_GF']) - ($leagueDataArray[11]['overall_league_GA']) ;
    $pos12Points = $leagueDataArray[11]['overall_league_PTS'];


    //pos13

    $pos13Team = $leagueDataArray[12]['team_name'];
    $pos13Played = $leagueDataArray[12]['overall_league_payed'];
    $pos13Won = $leagueDataArray[12]['overall_league_W'];
    $pos13Lost = $leagueDataArray[12]['overall_league_L'];
    $pos13Drawn = $leagueDataArray[12]['overall_league_D'];
    $pos13GD = ($leagueDataArray[12]['overall_league_GF']) - ($leagueDataArray[12]['overall_league_GA']) ;
    $pos13Points = $leagueDataArray[12]['overall_league_PTS'];


    //pos14

    $pos14Team = $leagueDataArray[13]['team_name'];
    $pos14Played = $leagueDataArray[13]['overall_league_payed'];
    $pos14Won = $leagueDataArray[13]['overall_league_W'];
    $pos14Lost = $leagueDataArray[13]['overall_league_L'];
    $pos14Drawn = $leagueDataArray[13]['overall_league_D'];
    $pos14GD = ($leagueDataArray[13]['overall_league_GF']) - ($leagueDataArray[13]['overall_league_GA']) ;
    $pos14Points = $leagueDataArray[13]['overall_league_PTS'];

    //pos15

    $pos15Team = $leagueDataArray[14]['team_name'];
    $pos15Played = $leagueDataArray[14]['overall_league_payed'];
    $pos15Won = $leagueDataArray[14]['overall_league_W'];
    $pos15Lost = $leagueDataArray[14]['overall_league_L'];
    $pos15Drawn = $leagueDataArray[14]['overall_league_D'];
    $pos15GD = ($leagueDataArray[14]['overall_league_GF']) - ($leagueDataArray[14]['overall_league_GA']) ;
    $pos15Points = $leagueDataArray[14]['overall_league_PTS'];


    //pos16

    $pos16Team = $leagueDataArray[15]['team_name'];
    $pos16Played = $leagueDataArray[15]['overall_league_payed'];
    $pos16Won = $leagueDataArray[15]['overall_league_W'];
    $pos16Lost = $leagueDataArray[15]['overall_league_L'];
    $pos16Drawn = $leagueDataArray[15]['overall_league_D'];
    $pos16GD = ($leagueDataArray[15]['overall_league_GF']) - ($leagueDataArray[15]['overall_league_GA']) ;
    $pos16Points = $leagueDataArray[15]['overall_league_PTS'];


    //pos17

    $pos17Team = $leagueDataArray[16]['team_name'];
    $pos17Played = $leagueDataArray[16]['overall_league_payed'];
    $pos17Won = $leagueDataArray[16]['overall_league_W'];
    $pos17Lost = $leagueDataArray[16]['overall_league_L'];
    $pos17Drawn = $leagueDataArray[16]['overall_league_D'];
    $pos17GD = ($leagueDataArray[16]['overall_league_GF']) - ($leagueDataArray[16]['overall_league_GA']) ;
    $pos17Points = $leagueDataArray[16]['overall_league_PTS'];

    //pos18

    $pos18Team = $leagueDataArray[17]['team_name'];
    $pos18Played = $leagueDataArray[17]['overall_league_payed'];
    $pos18Won = $leagueDataArray[17]['overall_league_W'];
    $pos18Lost = $leagueDataArray[17]['overall_league_L'];
    $pos18Drawn = $leagueDataArray[17]['overall_league_D'];
    $pos18GD = ($leagueDataArray[17]['overall_league_GF']) - ($leagueDataArray[17]['overall_league_GA']) ;
    $pos18Points = $leagueDataArray[17]['overall_league_PTS'];


    //pos19

    $pos19Team = $leagueDataArray[18]['team_name'];
    $pos19Played = $leagueDataArray[18]['overall_league_payed'];
    $pos19Won = $leagueDataArray[18]['overall_league_W'];
    $pos19Lost = $leagueDataArray[18]['overall_league_L'];
    $pos19Drawn = $leagueDataArray[18]['overall_league_D'];
    $pos19GD = ($leagueDataArray[18]['overall_league_GF']) - ($leagueDataArray[18]['overall_league_GA']) ;
    $pos19Points = $leagueDataArray[18]['overall_league_PTS'];

    //pos20

    $pos20Team = $leagueDataArray[19]['team_name'];
    $pos20Played = $leagueDataArray[19]['overall_league_payed'];
    $pos20Won = $leagueDataArray[19]['overall_league_W'];
    $pos20Lost = $leagueDataArray[19]['overall_league_L'];
    $pos20Drawn = $leagueDataArray[19]['overall_league_D'];
    $pos20GD = ($leagueDataArray[19]['overall_league_GF']) - ($leagueDataArray[19]['overall_league_GA']) ;
    $pos20Points = $leagueDataArray[19]['overall_league_PTS'];


  } catch (Exception $e) {

      echo "<h1 style = 'color: red;'>Something went wrong, please try again later</h1>";

  }




?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>StatGround</title>

    <link rel="stylesheet" type="text/css" href="league.css">
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

    <div id="mainContent">

      <div class="searchArea">

        <p align = "center">Premier League Current Standings</p>

      </div>

      <div class="clearFloat">
      </div>

      <!-- Start table -->

      <table>

        <thead id="tableHeader">
          <tr>
            <td>Position</td>
            <td>Team</td>
            <td>P</td>
            <td>W</td>
            <td>L</td>
            <td>D</td>
            <td>GD</td>
            <td>Pts</td>
          </tr>
        </thead>

        <tbody>




            <!-- 1 -->
          <tr class="pl">
            <td>                        1                           </td>
            <td>          <?php     echo $pos1Team;      ?>         </td>
            <td>          <?php     echo $pos1Played;      ?>       </td>
            <td>          <?php     echo $pos1Won;      ?>          </td>
            <td>          <?php     echo $pos1Lost;      ?>         </td>
            <td>          <?php     echo $pos1Drawn;      ?>        </td>
            <td>          <?php     echo $pos1GD;      ?>           </td>
            <td>          <?php     echo $pos1Points;      ?>       </td>
          </tr>

              <!-- 2 -->

          <tr class="cl">
            <td>                        2                          </td>
            <td>          <?php     echo $pos2Team;      ?>        </td>
            <td>          <?php     echo $pos2Played;      ?>      </td>
            <td>          <?php     echo $pos2Won;      ?>         </td>
            <td>          <?php     echo $pos2Lost;      ?>        </td>
            <td>          <?php     echo $pos2Drawn;      ?>       </td>
            <td>          <?php     echo $pos2GD;      ?>          </td>
            <td>          <?php     echo $pos2Points;      ?>      </td>
          </tr>


          <!-- 3 -->

      <tr class="cl">
        <td>                        3                          </td>
        <td>          <?php     echo $pos3Team;      ?>        </td>
        <td>          <?php     echo $pos3Played;      ?>      </td>
        <td>          <?php     echo $pos3Won;      ?>         </td>
        <td>          <?php     echo $pos3Lost;      ?>        </td>
        <td>          <?php     echo $pos3Drawn;      ?>       </td>
        <td>          <?php     echo $pos3GD;      ?>          </td>
        <td>          <?php     echo $pos3Points;      ?>      </td>
      </tr>


      <tr class="cl">
        <td>                        4                          </td>
        <td>          <?php     echo $pos4Team;      ?>        </td>
        <td>          <?php     echo $pos4Played;      ?>      </td>
        <td>          <?php     echo $pos4Won;      ?>         </td>
        <td>          <?php     echo $pos4Lost;      ?>        </td>
        <td>          <?php     echo $pos4Drawn;      ?>       </td>
        <td>          <?php     echo $pos4GD;      ?>          </td>
        <td>          <?php     echo $pos4Points;      ?>      </td>
      </tr>



      <tr class="el">
        <td>                        5                          </td>
        <td>          <?php     echo $pos5Team;      ?>        </td>
        <td>          <?php     echo $pos5Played;      ?>      </td>
        <td>          <?php     echo $pos5Won;      ?>         </td>
        <td>          <?php     echo $pos5Lost;      ?>        </td>
        <td>          <?php     echo $pos5Drawn;      ?>       </td>
        <td>          <?php     echo $pos5GD;      ?>          </td>
        <td>          <?php     echo $pos5Points;      ?>      </td>
      </tr>


      <tr>
        <td>                        6                          </td>
        <td>          <?php     echo $pos6Team;      ?>        </td>
        <td>          <?php     echo $pos6Played;      ?>      </td>
        <td>          <?php     echo $pos6Won;      ?>         </td>
        <td>          <?php     echo $pos6Lost;      ?>        </td>
        <td>          <?php     echo $pos6Drawn;      ?>       </td>
        <td>          <?php     echo $pos6GD;      ?>          </td>
        <td>          <?php     echo $pos6Points;      ?>      </td>
      </tr>


      <tr>
        <td>                        7                          </td>
        <td>          <?php     echo $pos7Team;      ?>        </td>
        <td>          <?php     echo $pos7Played;      ?>      </td>
        <td>          <?php     echo $pos7Won;      ?>         </td>
        <td>          <?php     echo $pos7Lost;      ?>        </td>
        <td>          <?php     echo $pos7Drawn;      ?>       </td>
        <td>          <?php     echo $pos7GD;      ?>          </td>
        <td>          <?php     echo $pos7Points;      ?>      </td>
      </tr>


      <tr>
        <td>                        8                          </td>
        <td>          <?php     echo $pos8Team;      ?>        </td>
        <td>          <?php     echo $pos8Played;      ?>      </td>
        <td>          <?php     echo $pos8Won;      ?>         </td>
        <td>          <?php     echo $pos8Lost;      ?>        </td>
        <td>          <?php     echo $pos8Drawn;      ?>       </td>
        <td>          <?php     echo $pos8GD;      ?>          </td>
        <td>          <?php     echo $pos8Points;      ?>      </td>
      </tr>


      <tr>
        <td>                        9                          </td>
        <td>          <?php     echo $pos9Team;      ?>        </td>
        <td>          <?php     echo $pos9Played;      ?>      </td>
        <td>          <?php     echo $pos9Won;      ?>         </td>
        <td>          <?php     echo $pos9Lost;      ?>        </td>
        <td>          <?php     echo $pos9Drawn;      ?>       </td>
        <td>          <?php     echo $pos9GD;      ?>          </td>
        <td>          <?php     echo $pos9Points;      ?>      </td>
      </tr>


      <tr>
        <td>                        10                          </td>
        <td>          <?php     echo $pos10Team;      ?>        </td>
        <td>          <?php     echo $pos10Played;      ?>      </td>
        <td>          <?php     echo $pos10Won;      ?>         </td>
        <td>          <?php     echo $pos10Lost;      ?>        </td>
        <td>          <?php     echo $pos10Drawn;      ?>       </td>
        <td>          <?php     echo $pos10GD;      ?>          </td>
        <td>          <?php     echo $pos10Points;      ?>      </td>
      </tr>

      <tr>
        <td>                        11                          </td>
        <td>          <?php     echo $pos11Team;      ?>        </td>
        <td>          <?php     echo $pos11Played;      ?>      </td>
        <td>          <?php     echo $pos11Won;      ?>         </td>
        <td>          <?php     echo $pos11Lost;      ?>        </td>
        <td>          <?php     echo $pos11Drawn;      ?>       </td>
        <td>          <?php     echo $pos11GD;      ?>          </td>
        <td>          <?php     echo $pos11Points;      ?>      </td>
      </tr>

      <tr>
        <td>                        12                          </td>
        <td>          <?php     echo $pos12Team;      ?>        </td>
        <td>          <?php     echo $pos12Played;      ?>      </td>
        <td>          <?php     echo $pos12Won;      ?>         </td>
        <td>          <?php     echo $pos12Lost;      ?>        </td>
        <td>          <?php     echo $pos12Drawn;      ?>       </td>
        <td>          <?php     echo $pos12GD;      ?>          </td>
        <td>          <?php     echo $pos12Points;      ?>      </td>
      </tr>

      <tr>
        <td>                        13                          </td>
        <td>          <?php     echo $pos13Team;      ?>        </td>
        <td>          <?php     echo $pos13Played;      ?>      </td>
        <td>          <?php     echo $pos13Won;      ?>         </td>
        <td>          <?php     echo $pos13Lost;      ?>        </td>
        <td>          <?php     echo $pos13Drawn;      ?>       </td>
        <td>          <?php     echo $pos13GD;      ?>          </td>
        <td>          <?php     echo $pos13Points;      ?>      </td>
      </tr>


      <tr>
        <td>                        14                          </td>
        <td>          <?php     echo $pos14Team;      ?>        </td>
        <td>          <?php     echo $pos14Played;      ?>      </td>
        <td>          <?php     echo $pos14Won;      ?>         </td>
        <td>          <?php     echo $pos14Lost;      ?>        </td>
        <td>          <?php     echo $pos14Drawn;      ?>       </td>
        <td>          <?php     echo $pos14GD;      ?>          </td>
        <td>          <?php     echo $pos14Points;      ?>      </td>
      </tr>


      <tr>
        <td>                        15                          </td>
        <td>          <?php     echo $pos15Team;      ?>        </td>
        <td>          <?php     echo $pos15Played;      ?>      </td>
        <td>          <?php     echo $pos15Won;      ?>         </td>
        <td>          <?php     echo $pos15Lost;      ?>        </td>
        <td>          <?php     echo $pos15Drawn;      ?>       </td>
        <td>          <?php     echo $pos15GD;      ?>          </td>
        <td>          <?php     echo $pos15Points;      ?>      </td>
      </tr>


      <tr>
        <td>                        16                          </td>
        <td>          <?php     echo $pos16Team;      ?>        </td>
        <td>          <?php     echo $pos16Played;      ?>      </td>
        <td>          <?php     echo $pos16Won;      ?>         </td>
        <td>          <?php     echo $pos16Lost;      ?>        </td>
        <td>          <?php     echo $pos16Drawn;      ?>       </td>
        <td>          <?php     echo $pos16GD;      ?>          </td>
        <td>          <?php     echo $pos16Points;      ?>      </td>
      </tr>


      <tr>
        <td>                        17                          </td>
        <td>          <?php     echo $pos17Team;      ?>        </td>
        <td>          <?php     echo $pos17Played;      ?>      </td>
        <td>          <?php     echo $pos17Won;      ?>         </td>
        <td>          <?php     echo $pos17Lost;      ?>        </td>
        <td>          <?php     echo $pos17Drawn;      ?>       </td>
        <td>          <?php     echo $pos17GD;      ?>          </td>
        <td>          <?php     echo $pos17Points;      ?>      </td>
      </tr>

      <tr class="rel">
        <td>                        18                          </td>
        <td>          <?php     echo $pos18Team;      ?>        </td>
        <td>          <?php     echo $pos18Played;      ?>      </td>
        <td>          <?php     echo $pos18Won;      ?>         </td>
        <td>          <?php     echo $pos18Lost;      ?>        </td>
        <td>          <?php     echo $pos18Drawn;      ?>       </td>
        <td>          <?php     echo $pos18GD;      ?>          </td>
        <td>          <?php     echo $pos18Points;      ?>      </td>
      </tr>

      <tr class="rel">
        <td>                        19                          </td>
        <td>          <?php     echo $pos19Team;      ?>        </td>
        <td>          <?php     echo $pos19Played;      ?>      </td>
        <td>          <?php     echo $pos19Won;      ?>         </td>
        <td>          <?php     echo $pos19Lost;      ?>        </td>
        <td>          <?php     echo $pos19Drawn;      ?>       </td>
        <td>          <?php     echo $pos19GD;      ?>          </td>
        <td>          <?php     echo $pos19Points;      ?>      </td>
      </tr>


      <tr class="rel">
        <td>                        20                          </td>
        <td>          <?php     echo $pos20Team;      ?>        </td>
        <td>          <?php     echo $pos20Played;      ?>      </td>
        <td>          <?php     echo $pos20Won;      ?>         </td>
        <td>          <?php     echo $pos20Lost;      ?>        </td>
        <td>          <?php     echo $pos20Drawn;      ?>       </td>
        <td>          <?php     echo $pos20GD;      ?>          </td>
        <td>          <?php     echo $pos20Points;      ?>      </td>
      </tr>




        </tbody>



      </table>


    </div>





  </body>
</html>
