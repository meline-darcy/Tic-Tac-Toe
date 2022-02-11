<?php

require_once "include/functions.php";

registerPlayers($_POST['player-x'], $_POST['player-o']);

if (playersRegistered()) {
    header("location: play.php");
}
