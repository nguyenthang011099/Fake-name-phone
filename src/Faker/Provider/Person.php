<?php

namespace Faker\Provider;

class Person extends Base
{
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';

    protected static $titleFormat = array(
      '{{titleMale}}',
      '{{titleFemale}}',
    );

    protected static $firstNameFormat = array(
      '{{firstNameMale}}',
      '{{firstNameFemale}}',
    );

    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
    );


    public static function titleMale()
    {
        return static::$titleMale[array_rand(static::$titleMale)];
    }

    public static function titleFemale()
    {
        return static::$titleFemale[array_rand(static::$titleFemale)];
    }
}
