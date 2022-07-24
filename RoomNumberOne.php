<?php

class RoomNumberOne implements RoomInterface
{
    public function getDescription()
    {
        return "first room";
    }

    public function getPrice()
    {
        return 1000;
    }
}