<?php

use pocketmine\player\Player;
use jojoe77777\FormAPI\SimpleForm;

function sendForm(Player $player) : void
{
    $form = new SimpleForm(function(Player $player, int $data = null) : void
    {
        if ($data === null) return;
        switch($data)
        {
            case 0:
                // code
                break;
            case 1:
                // code
                break;
        }
    });
    $form->setTitle("Title");
    $form->setContent("Input title", "Input Description", "Input Default");
    $form->addButton("Buton 1. This returns data 0");
    $form->addButton("Buton 2. This returns data 1");
    $form->sendToPlayer($player);
}

?>