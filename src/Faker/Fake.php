<?php


namespace Faker;



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
    public function __get($name)
    {
        return $this->$name->random();
    }



}