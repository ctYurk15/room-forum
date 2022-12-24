<?php

class Model
{
    protected static string $table = '';

    public static function pagination($page = 0, $limit = 10)
    {
        $page--;
        return [$page * $limit, ($page * $limit) + $limit];
    }

    public static function getCount($mdb)
    {
        $result = [];
        
        $get_records_sql = 'SELECT COUNT(*) as `c` FROM '.static::$table;
        $raw_result = $mdb->query($get_records_sql);

        return $raw_result->fetch_array()['c'];
    }

    public static function all(mysqli $mdb) : array
    {
        $result = [];
        
        $get_records_sql = 'SELECT * FROM '.static::$table;
        $raw_result = $mdb->query($get_records_sql);

        while($row = $raw_result->fetch_array())
        {
            $result[] = $row;
        }

        return $result;
    }
}