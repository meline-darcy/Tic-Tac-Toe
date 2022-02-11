<?php
require_once "include/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/header.css' type='text/css'/>
    <link rel='stylesheet' href='css/index.css' type='text/css'/>
    <title>Document</title>
</head>
<body>
<header>
<?php include("include/header.php") ?></header>
<form method="post" action="register-players.php">
    <div class="welcome">
        <h1>Commencer la partie</h1>
        <h2>Rentrez les prénoms des joueurs</h2>

        <div class="player-name">
            <label for="player-x">Premier Joueurs (X)</label>
            <input type="text" id="player-x" name="player-x" required />
        </div>

        <div class="player-name">
            <label for="player-o">Deuxième Joueurs (O)</label>
            <input type="text" id="player-o" name="player-o" required />
        </div>

        <button type="submit">Commencer</button>
    </div>
</form>

<?php