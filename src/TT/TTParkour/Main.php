<?php

namespace TT\TTParkour;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\math\Vector3;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\Player;

class Main extends PluginBase implements Listener{

     public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("TTParkour enabled!");
     }

     public function onDisable(){
        $this->getLogger()->info("TTParkour disabled!");
     }
   
     public function onPlayerMove(PlayerMoveEvent $event){
         $player = $event->getPlayer();
         $floor = new Vector3($player->getFloorY() - 1);
          if(($floor == 8)){
             $player->teleport(118.50, 15, 126.50);
          }
     }
}
