<?php

namespace HG\ArenaModel;

use HG\Loader;

use pocketmine\Player;
use pocketmine\Server;

class Arena{
  
  public $players = [];
  public $arenaworld;
  
  public function getPlayers(){
      return \in_array($player->getName(), $this->players);
  }
  
  public function addPlayer(Player $player){
      $this->players[$player->getName()] = $player->getName();
  }
  
  public function delPlayer(Player $player){
      unset($this->players[$player->getName()]);
  }
  
  public function getArenaWorld(){
      return $this->arenaworld;
  }
  
  public function setArenaWorld($arenaworld){
      $this->arenaworld = $arenaworld;
  }
  
}
