<?php

require_once "include/functions.php";

if (! playersRegistered()) {
    header("location: index.php");
}

resetBoard();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/result.css' type='text/css'/>
    <link rel='stylesheet' href='css/header.css' type='text/css'/>
    <title>Document</title>
</head>
<body>
    
<header>
<?php include("include/header.php") ?></header>
<div id="tsparticles"></div>
<section>
  <div class="container">
      <div class="box">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <div class="content">
          

<table class="wrapper" cellpadding="0" cellspacing="0">
    <tr>
        <td>

            <div class="welcome">

                <h1>
                    <?php
                    if ($_GET['player']) {
                        echo currentPlayer() . " à gagner !";
                    }
                    else {
                        echo "It's a tie!";
                    }
                    ?>
                </h1>

                <div class="player-name">
                    <?php echo playerName('x')?>'s score: <b><?php echo score('x')?></b>
                </div>

                <div class="player-name">
                    <?php echo playerName('o')?>' score: <b><?php echo score('o')?></b>
                </div>

                <a href="play.php">Play again</a><br />

                <a href="index.php" class="reset-btn">Reset</a>
            </div>

        </td>
    </tr>
</table>
</div>
        
        </div>
      </div>
  
  </section>
</body>
</html>

