<?php

declare(strict_types=1);

use App\Animals\Animal;
use PHPUnit\Framework\TestCase;

class AnimalTest extends TestCase
{
    public function testAnimalCanEat()
    {
        $animal = new Animal;

        $this->assertEquals('OMNOMNOM', $animal->eat());
    }
}