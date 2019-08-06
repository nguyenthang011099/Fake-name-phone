<?php


namespace Faker;
use Faker\vi_VN\Address;
use Faker\vi_VN\Name;
use Faker\vi_VN\Phone;
use Faker\vi_VN\Digit;
use Faker\vi_VN\Time;




class Fake
{
    private $Name;
    private $Phone;
    private $Address;
    private $Time;
    private $Digit;


    public function __construct()
    {
        $this->Name= new Name();
        $this->Address= new Address();
        $this->Phone= new Phone();
        $this->Time = new Time();
        $this->Digit= new Digit();
    }
    public function __get($attribute)
    {
        return $this->$attribute->random();

    }


}