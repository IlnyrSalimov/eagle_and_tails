<?php
require_once "vendor/autoload.php";

$game = new \app\Game(new \app\Player("Alex", 200), new \app\Player("Sasha", 140));

$game->start();