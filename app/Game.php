<?php

namespace app;
class Game
{
    protected Player $player1;
    protected Player $player2;
    protected int $flips = 1;

    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function flip() {
        return rand(0,1) ? "орел": "решка";
    }

    public function start() {
        while(true) {


            if($this->flip() == "орел") {
                $this->player1->point($this->player2);
            } else {
                $this->player2->point($this->player1);
            }
            if($this->player1->bankrupt() || $this->player2->bankrupt()) return $this->end();

            $this->flips++;
        }
    }
    public function winner():Player {
        return $this->player1->bank() > $this->player2->bank() ? $this->player1 : $this->player2;
    }
    public function end(): void
    {
        echo <<<EOT
                "GAME OVER"
                Победитель: {$this->winner()->name}
                
                {$this->player1->name} : {$this->player1->bank()}
                {$this->player2->name} : {$this->player2->bank()}
                Количество подбрасываний: {$this->flips}
                EOT;
    }
}