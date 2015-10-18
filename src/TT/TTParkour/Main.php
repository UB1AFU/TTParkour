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
         $floor = $player->getY();
          if($floor === <= 9){
             $player->teleport(new Vector3(118.5, 15, 126.5));
          }
     }
}
