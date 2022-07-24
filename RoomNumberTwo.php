<?php

class RoomNumberTwo implements RoomInterface
{
    public function getDescription()
    {
        return "another room";
    }

    public function getPrice()
    {
        return 1000;
    }
}