<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="sl">
  <head>
    <title>Roll the dice</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div id="naslov">Roll the dice</div>
    <div id="wrapper">
      <form name="obrazec" autocomplete="off" action="game.php" method="post">
        <div id="header">
          <br />
        </div>
        <div id="playerselect">
          <div class="overlay">
            <h3 class="h">Player B<span style="font-size:24px">o</span>ard 1</h3>
              <label></label>
              <input
                class="PlayerInput"
                name="username1"
                type="text"
                placeholder="Username"
                required
                maxlength="9"
              />
            <br />
          </div>
          <div class="overlay">
            <h3 class="h">Player B<span style="font-size:24px">o</span>ard 2</h3>
              <label></label>
              <input
                class="PlayerInput"
                name="username2"
                type="text"
                placeholder="Username"
                required
                maxlength="9"
              />
            <br />
          </div>
          <div class="overlay">
            <h3 class="h">Player B<span style="font-size:24px">o</span>ard 3</h3>
              <label></label>
              <input
              class="PlayerInput"
              name="username3"
                type="text"
                placeholder="Username"
                required
                maxlength="9"
              />
            <br />
          </div>
        </div>
        <div id="diceselector">
          <div id="leva">
            <label class="options">Number of dices&nbsp &nbsp </label>
            <select name="steviloKock" class="number">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>

          <div id="desna">
            <label class="options">Number of throws&nbsp &nbsp </label>
            <select name="steviloMetov" class="number">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="5">4</option>
            </select>
          </div>
        </div>
        <div id="submitdiv">
          <input type="submit" value="Start" />
        </div>
      </form>
    </div>
  </body>
</html>
