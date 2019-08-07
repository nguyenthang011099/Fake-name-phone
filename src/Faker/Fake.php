<?php


namespace Faker;
use Faker\vi_VN\Address;
use Faker\vi_VN\Name;
use Faker\vi_VN\Phone;
use Faker\vi_VN\Digit;
use Faker\vi_VN\Birth;




class Fake
{
    private $name;
    private $phone;
    private $address;
    private $birth;
    private $digit;


    public function __construct()
    {
        $this->name= new Name();
        $this->address= new Address();
        $this->phone= new Phone();
        $this->birth = new Birth();
        $this->digit= new Digit();

    }

    public function __get($attribute)
    {
        return $this->$attribute->random();

    }



}