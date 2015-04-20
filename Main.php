<?php

namespace Tanner\Spleef;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerDeathEvent;



class Main extends PluginBase {
	
	public function onEnable(){
		$this->getLogger()->$info("Spleef has been enabled!")
	}
	
	public function onDisable(){
		$this->getLogger()->$info("Spleef has been disabled!")
	}
}

