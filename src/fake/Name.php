<?php
namespace fake;
class Name{
    public function random()
    {
        $txt= fopen("name.txt", "r") or die("Unable to open file!");
        $result= [];
        while(!feof($txt))  {
            $result[]= fgets($txt);

        }
        //if you write  $result[array_rand($result)]);return array_rand($result) it will return key  of array
        fclose($txt);
        return ($result[array_rand($result)]);
    }
}
