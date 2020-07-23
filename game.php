<?php

$urlContents = file_get_contents("https://apiv2.apifootball.com/?action=get_players&player_name=messi%20lionel&APIkey=12ed565a36b5792f2344e0dedebff072f3e7262e45f2f2681aa787ddff41a693");

$weatherArray = json_decode($urlContents, true);

print_r($weatherArray);




?>
