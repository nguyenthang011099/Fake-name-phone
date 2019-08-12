<?php

namespace Faker\Provider;

use Faker\Generator;


class Base
{
    /**
     * @var \Faker\Generator
     */
    protected $generator;


    public function __construct(Generator $generator)
    {
        $this->generator = $generator;
    }
}
