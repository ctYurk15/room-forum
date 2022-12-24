<?php

class Rooms
{
    private static string $table = 'rooms';

    public static function all(mysqli $mdb) : array
    {
        $result = [];
        
        $get_records_sql = 'SELECT * FROM rooms';
        $raw_result = $mdb->query($get_records_sql);

        while($row = $raw_result->fetch_array())
        {
            $result[] = $row;
        }

        return $result;
    }
}