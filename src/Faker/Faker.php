<?php
namespace App\Faker;

use Faker\Factory;

class Faker
{
    public function create(string $locale = Factory::DEFAULT_LOCALE): Factory
    {
        return Factory::create($locale);
    }
}
