<?php

$room = new RoomNumberOne();
$room2 = new RoomNumberTwo();


$room_one_and_wifi_option = new WifiOption($room);
$room_one_and_tv_option = new TvOption($room);


$room_two_and_wifi_option = new WifiOption($room2);
$room_two_and_tv_option = new TvOption($room2);