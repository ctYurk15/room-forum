<?php

include_once 'Model.php';

class Messages extends Model
{
    protected static string $table = 'messages';

    public static function getCount($mdb, int $room_id = 0)
    {
        $result = [];
        
        $get_records_sql = 'SELECT COUNT(*) as `c` FROM '.static::$table.' WHERE `room_id`='.$room_id;
        $raw_result = $mdb->query($get_records_sql);

        return $raw_result->fetch_array()['c'];
    }
    
    public static function allOfRoom(mysqli $mdb, int $room_id, int $page = 0) : array
    {
        $result = [];

        $borders = static::pagination($page, 10);
        
        $get_records_sql = '
            SELECT * FROM '.static::$table.' 
            WHERE `room_id`='.$room_id.'
            AND `id` BETWEEN '.$borders[0].' AND '.$borders[1];
        $raw_result = $mdb->query($get_records_sql);

        while($row = $raw_result->fetch_array())
        {
            $result[] = $row;
        }

        return $result;
    }
}