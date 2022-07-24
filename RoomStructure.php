<?php

class RoomStructure implements RoomInterface
{
    private $this_room = RoomInterface::class;

    public function __construct(RoomInterface $room)
    {
        $this->this_room = $room;
    }

    public function getPrice()
    {
        return $this->this_room->getPrice();
    }

    public function getDescription()
    {
        return $this->this_room->getDescription();
    }
}