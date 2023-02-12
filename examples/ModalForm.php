<?php

use pocketmine\player\Player;
use jojoe77777\FormAPI\ModalForm;

function sendForm(Player $player) : void
{
    $form = new ModalForm(function(Player $player, bool $data = null) : void
    {
        if ($data === null) return;
        else if ($data === true)
        {
            // code
            return;
        }
        else if ($data === false)
        {
            // code
            return;
        }
    });
    $form->setTitle("Title");
    $form->setContent("Description");
    $form->setButton1("Buton 1, this returns true.");
    $form->setButton2("Buton 2, this returns false.");
    $form->sendToPlayer($player);
}

?>