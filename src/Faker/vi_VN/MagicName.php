<?php


namespace Faker\vi_VN;


class MagicName
{
    private $femaleName;

    public function __construct()
    {
        $this->femaleName= new Name();
    }

    public function __get($attribute)
    {
        return $this->$attribute->femaleName();
    }
}