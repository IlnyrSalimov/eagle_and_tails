<?php

namespace app;
class Player
{
    public string $name;
    public int $coins;

    public function __construct($name,$coins)
    {
        $this->name = $name;
        $this->coins = $coins;
    }

    public function point(Player $player) {
        $this->coins++;
        $player->coins--;
    }

    public function bankrupt() {
        return $this->coins == 0;
    }

    public function bank() {
        return $this->coins;
    }

    public function oods(Player $player) {
        return round($this->bank() / ($this->bank() + $player->bank()), 2) * 100 . '%';
    }
}