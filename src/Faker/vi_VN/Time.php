<?php


namespace Faker\vi_VN;

class Time
{

    public static function random()
    {
        $time =rand( strtotime("Jan 01 1950"), strtotime("Dec 31 2019"));
        return date("M-d-Y", $time);

    }
}

