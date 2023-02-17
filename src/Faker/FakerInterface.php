<?php

namespace App\Faker;

interface FakerInterface
{
    public function create(string $locale = Factory::DEFAULT_LOCALE): Factory;
}
