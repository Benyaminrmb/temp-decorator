<?php

class TvOption extends RoomStructure
{

    public function getPrice()
    {
        return parent::getPrice() + 500;
    }

    public function getDescription()
    {
        return parent::getDescription().' tv option';
    }
}