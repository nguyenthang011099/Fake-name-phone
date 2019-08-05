<?php
namespace Faker\vi_VN;
class Phone{
    public $phoneNumber=array(
        '098234585','0964736459','0312343267','0945698725','0361597532','0345897536',
        '0325487965','0971236987','0981236584','0981565473','0972587413','0970258740',
        '0322345234','0987492823',
    );

    public function random(){
        return $this->phoneNumber[array_rand($this->phoneNumber)];
    }
}