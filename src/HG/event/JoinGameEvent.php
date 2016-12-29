<?php

namespace HG\event;

use pocketmine\event\Cancellable;
use pocketmine\event\player\PlayerEvent;

use HG\ArenaModel\Arena;

use pocketmine\Player;

class JoinGameEvent extends PlayerEvent implements Cancellable{
  
    public $player;
    public $joined;

    public function __construct(Player $player, Arena $joined){
        $this->player = $player;
        $this->joined = $joined;
    }
  
    public function getPlayer();
        return $this->player;
    }

    public function getJoined(){
        return $this->joined;
    }

}
