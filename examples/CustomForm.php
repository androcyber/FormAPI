<?php

use pocketmine\player\Player;
use jojoe77777\FormAPI\CustomForm;

function sendForm(Player $player) : void
{
    $form = new CustomForm(function(Player $player, array $data = null)
    {
        if ($data === null) return;
        $input = $data[0];
        $toggle = $data[2];
    });
    $form->setTitle("Title");
    $form->addInput("Input title", "Input Description", "Input Default");
    $form->addLabel("This is just a description. There is no data.");
    $form->addToggle("Toggle Title", true);
    $form->sendToPlayer($player);
}

?>