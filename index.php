<?php
require_once "vendor/autoload.php";

$game = new \app\Game(new \app\Player("Alex", 100), new \app\Player("Sasha", 100));

$game->start();