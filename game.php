<?php
session_start();
$nextPage = "game.php";
$IdIgralca = 1;

$results1 = [];
$results2 = [];
$results3 = [];

if (isset($_POST['username1'])) {
  $_SESSION["Player1"] = $_POST["username1"];
  $_SESSION["Player2"] = $_POST["username2"];
  $_SESSION["Player3"] = $_POST["username3"];
  $_SESSION["score1"] = 0;
	$_SESSION["score2"] = 0;
	$_SESSION["score3"] = 0;
  $_SESSION["steviloMetov"] = $_POST["steviloMetov"];
  $_SESSION["steviloKock"] = $_POST["steviloKock"];

}else{
  for ($i=0; $i < $_SESSION["steviloKock"] ; $i++) { 

    array_push($results1, random(1));
      
  }
  for ($i=0; $i < $_SESSION["steviloKock"] ; $i++) { 

    array_push($results2, random(2));
      
  }
  for ($i=0; $i < $_SESSION["steviloKock"] ; $i++) { 

    array_push($results3, random(3));
      
  }
  $_SESSION["steviloMetov"]--;
  if ($_SESSION["steviloMetov"]==0) {
    $nextPage = "leaderboard.php";
  }
}

function random($i){
      $diceNum = rand(1,6);
      $_SESSION["score".$i] += $diceNum; 
      return $diceNum;
}

?>
<!DOCTYPE html>
<html lang="sl">
  <head>
    <title>Roll the dice</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
  </head>
  <body>
    <div id="naslov">Roll the dice</div>
    <div id="wrapper">
      <form name="obrazec" autocomplete="off" action="<?php echo $nextPage ?>" method="post">
        <div id="playerselect2">
            <div class="StatsDiv">
          <div class="overlay2">
            <h3 class="h">-<?php echo $_SESSION["Player1"]?>-</h3>
            <br />
          </div>
          <div class="overlayStats">
          <div class="Stats">Score: <?php echo $_SESSION["score1"] ?></div>
          <div class="Stats2">Remaining throws: <?php echo $_SESSION["steviloMetov"] ?></div>
</div>
          </div>
          <div class="StatsDiv">
          <div class="overlay2">
            <h3 class="h">-<?php echo $_SESSION["Player2"]?>-</h3>
            <br />
          </div>
          <div class="overlayStats">
          <div class="Stats">Score: <?php echo $_SESSION["score2"] ?></div>
          <div class="Stats2">Remaining throws: <?php echo $_SESSION["steviloMetov"] ?></div>
        </div>
        </div>
            <div class="StatsDiv">
          <div class="overlay2">
            <h3 class="h">-<?php echo $_SESSION["Player3"]?>-</h3>
            <br />
          </div>
          <div class="overlayStats">
          <div class="Stats">Score: <?php echo $_SESSION["score3"] ?></div>
          <div class="Stats2">Remaining throws: <?php echo $_SESSION["steviloMetov"] ?></div>
</div>
        </div>
        <div id="kocke">
        <div class="containerKocke"></div>
        <div class="containerKocke"></div>
        <div class="containerKocke"></div>
        </div>
        <div id="submitdiv2">
          <input type="submit" value="Results" />
        </div>
        <form method="post">
        <div id="throwdiv">
          <button id="thrower"><?php
          if ($_SESSION["steviloMetov"]==0) {
            echo "Results";
          }else{
            echo "Throw";
          } ?></button>
        </div>
          </form>
      </form>
    </div>
    <script>
            const results = [
      [<?php for ($i=0; $i < $_SESSION["steviloKock"]; $i++) { 
        echo $results1[$i].",";
      }  ?>],
      [<?php for ($i=0; $i < $_SESSION["steviloKock"]; $i++) { 
        echo $results2[$i].",";
      }  ?>],
      [<?php for ($i=0; $i < $_SESSION["steviloKock"]; $i++) { 
        echo $results3[$i].",";
      }  ?>],
      ]

    </script>
    <script src="scripts/script.js" defer></script>
  </body>
</html>