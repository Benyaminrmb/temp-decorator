<?php

class WifiOption extends RoomStructure
{

    public function getPrice()
    {
        return parent::getPrice() + 100;
    }

    public function getDescription()
    {
        return parent::getDescription().' wifi option';
    }
}