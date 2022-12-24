<?php

include_once 'database/connect.php';
include_once 'models/Rooms.php';
include_once 'views/RoomPart.php';
include_once 'views/Styles.php';

$rooms = Rooms::all($mdb);

//page generation
echo Styles::generate('rooms');

foreach($rooms as $room)
{
    echo RoomPart::generate($room);
}