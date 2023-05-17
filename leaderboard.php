<?php
	session_start();
    $firstName;
    $secondName;
    $thirdName;
    $firstPoints;
    $secondPoints;
    $thirdPoints;


    if($_SESSION["score1"]>$_SESSION["score2"] && $_SESSION["score1"]>$_SESSION["score3"]){
        $firstName = $_SESSION["Player1"];
        $firstPoints = $_SESSION["score1"];
        if ($_SESSION["score2"]>$_SESSION["score3"]) {
            $secondName = $_SESSION["Player2"];
            $secondPoints = $_SESSION["score2"];
            $thirdName = $_SESSION["Player3"];
            $thirdPoints = $_SESSION["score3"];
        }else{
            $secondName = $_SESSION["Player3"];
            $secondPoints = $_SESSION["score3"];
            $thirdName = $_SESSION["Player2"];
            $thirdPoints = $_SESSION["score2"];
        }
    }
    elseif ($_SESSION["score2"]>$_SESSION["score3"]) {
        $firstName = $_SESSION["Player2"];
        $firstPoints = $_SESSION["score2"];
        if ($_SESSION["score1"]>$_SESSION["score3"]) {
            $secondName = $_SESSION["Player1"];
            $secondPoints = $_SESSION["score1"];
            $thirdName = $_SESSION["Player3"];
            $thirdPoints = $_SESSION["score3"];
        }else {
            $secondName = $_SESSION["Player3"];
            $secondPoints = $_SESSION["score3"];
            $thirdName = $_SESSION["Player1"];
            $thirdPoints = $_SESSION["score1"];
    
        }
    }else {
        $firstName = $_SESSION["Player3"];
        $firstPoints = $_SESSION["score3"];
        if ($_SESSION["score2"]>$_SESSION["score1"]) {
            $secondName = $_SESSION["Player2"];
            $secondPoints = $_SESSION["score2"];
            $thirdName = $_SESSION["Player1"];
            $thirdPoints = $_SESSION["score1"];
        }else {
            $secondName = $_SESSION["Player1"];
            $secondPoints = $_SESSION["score1"];
            $thirdName = $_SESSION["Player2"];
            $thirdPoints = $_SESSION["score2"];
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/x-icon" href="images/favicon.png" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title>Roll the dice</title>
</head>
<body>
	<div id="title">Results</div>
	<div id="wrapper">				
		<div id="second" class="winners">
			<div class="number1" id="numberTwo1" >2</div><br />
			<div class="name1" id="secondPlayer1"><?php echo $secondName ?></div>
			<div class="name1" id="secondScore1"><?php echo $secondPoints ?></div>
		</div>
		<div id="first" class="winners">
			<div class="number1" id="numberOne1" >1</div><br />
			<div class="name1" id="firstPlayer1"><?php echo $firstName ?></div>
			<div class="name1" id="firstScore1"><?php echo $firstPoints ?></div>
		</div>
		<div id="third" class="winners">
			<div class="number1" id="numberThree1" >3</div><br />
			<div class="name1" id="thirdPlayer1"><?php echo $thirdName ?></div>
			<div class="name1" id="thirdScore1"><?php echo $thirdPoints ?></div>
		</div>
		<img id="fireworks" src="images/fireworks.gif" width="100%" height="100%"></img>
	</div>
</body>

</html>