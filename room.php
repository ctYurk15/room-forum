<?php

include_once 'models'.DIRECTORY_SEPARATOR.'Messages.php';
include_once 'database'.DIRECTORY_SEPARATOR.'connect.php';
include_once 'views'.DIRECTORY_SEPARATOR.'MessagePart.php';
include_once 'views'.DIRECTORY_SEPARATOR.'Styles.php';

$room_id = htmlspecialchars($_GET['id']);
$room_id = (int)floor($room_id);

$page = htmlspecialchars(isset($_GET['page']) ? $_GET['page'] : 1);
$page = (int)floor($page);

$room_messages = Messages::allOfRoom($mdb, $room_id, $page);
$messages_count = Messages::getCount($mdb, $room_id);

//page generation
echo Styles::generate('room');

echo '<a href="index.php">Back</a>';

foreach($room_messages as $message)
{
    echo MessagePart::generate($message);
}

$links = floor($messages_count/10);
if($messages_count - $links*10 > 0) $links++;
for($i = 1; $i <= $links; $i++)
{
    echo '<a href=room.php?id='.$room_id.'&page='.$i.'>'.$i.'.</a>&nbsp;';
}