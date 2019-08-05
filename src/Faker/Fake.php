<?php


namespace Faker;
use Faker\vi_VN\Address;
use Faker\vi_VN\Name;
use Faker\vi_VN\Phone;




class Fake
{
    private $Name;
    private $Phone;
    private $Address;


    public function __construct()
    {
        $this->Name= new Name();
        $this->Address= new Address();
        $this->Phone= new Phone();
    }
    public function __get($attribute)
    {
        return $this->$attribute->random();

    }


}