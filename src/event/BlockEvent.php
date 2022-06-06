<?php

namespace hibari\straight_plugin;

use Monolog\Logger;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\Listener;
use pocketmine\Server;


class BlockEvent implements Listener {


    public function onBreak(BlockBreakEvent $e){
        $e->getPlayer()->sendMessage("You broken block");
        if (!$e->getPlayer()->hasPermission("straight.server.admin")) {
            $e->cancel();
        }
    }

    public function onPlace(BlockPlaceEvent $e){
        if($e->getPlayer()->hasPermission("straight.server.admin")){
            $e->cancel();
            $worldName = "world";
            $e->getPlayer()->teleport(Server::getInstance()->getWorldManager()->getWorldByName($worldName)->getSafeSpawn());
        }
    }


}