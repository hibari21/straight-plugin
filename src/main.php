<?php

declare(strict_types=1);

namespace hibari\straight_plugin;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use pocketmine\plugin\PluginBase;

$logger = $this->getLogger();


class main extends PluginBase{



    public function onEnable(): void
    {

        $this->getLogger()->info("Enable");
        $this->getServer()->getPluginManager()->registerEvents(new BlockEvent(),$this);
    }


}