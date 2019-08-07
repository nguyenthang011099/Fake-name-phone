<?php


namespace Faker\vi_VN;

class Birth
{

    public static function random()
    {
        $birth =rand( strtotime("Jan 01 1950"), strtotime("Dec 31 2019"));
        return date("d-m-Y", $birth)."\n";

    }
}

