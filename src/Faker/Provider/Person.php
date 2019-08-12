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
    public function lastName()
    {
        return static::$lastName[array_rand(static::$lastName)];
    }
    public function title($gender = null)
    {
        if ($gender === static::GENDER_MALE) {
            return static::titleMale();
        } elseif ($gender === static::GENDER_FEMALE) {
            return static::titleFemale();
        }
        return $this->generator->parse(static::$titleFormat[array_rand(static::$titleFormat)]);
    }

    public static function titleMale()
    {
        return static::$titleMale[array_rand(static::$titleMale)];
    }

    public static function titleFemale()
    {
        return static::$titleFemale[array_rand(static::$titleFemale)];
    }
}
