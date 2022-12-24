<?php

class Styles
{
    public static function generate($page)
    {
        return '
            <link rel="stylesheet" href="resources/css/'.$page.'.css">
        ';
    }
}