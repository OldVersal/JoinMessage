<?php

namespace JoinMessage;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener {

    public function onEnable(): void {

        $this->getLogger()->info("JoinMessage ha sido activado");

        $this->getServer()->getPluginManager()->registerEvents($this, $this);

    }

    public function onDisable(): void  {

        $this->getLogger()->info("JoinMessage ha sido deshabilitado!");

    }

    // Ejemplo de evento: Cuando un jugador se une al servido.

    public function onPlayerJoin(PlayerJoinEvent $event) {

        $player = $event->getPlayer();

        $player->sendMessage(TextFormat::colorize("&8[&a+&8]" . $player->getName() . ""));

    }

}
