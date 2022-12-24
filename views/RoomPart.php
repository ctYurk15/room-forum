<?php

class RoomPart
{
    public static function generate($room)
    {
        return '
            <div class="room-part">
                <span>
                    Name: '.$room['name'].'<br>
                    Description: '.$room['description'].'<br>
                    <a href="room.php?id='.$room['id'].'">Link</a>
                </span>
                <span>
                    Created time: '.$room['createdtime'].'
                </span>
            </div>
        ';
    }
}