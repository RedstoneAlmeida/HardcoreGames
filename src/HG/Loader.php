<?php

namespace HG;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

use HG\ArenaModel\Arena;
use HG\ArenaModel\ArenaManager;

class Loader extends PluginBase implements Listener{
  
  /*
  * @return Arena[]
  */
  public $arenas = [];
  
  public function onEnable(){
    
    foreach($this->arenas as $arena){
      $this->getServer()->loadlevel($arenas->getArenaWorld());
    }
    
  }
  
}
