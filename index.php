<?php

include_once 'database'.DIRECTORY_SEPARATOR.'connect.php';
include_once 'models'.DIRECTORY_SEPARATOR.'Rooms.php';
include_once 'views'.DIRECTORY_SEPARATOR.'RoomPart.php';
include_once 'views'.DIRECTORY_SEPARATOR.'Styles.php';

$rooms = Rooms::all($mdb);

//page generation
echo Styles::generate('rooms');

foreach($rooms as $room)
{
    echo RoomPart::generate($room);
}