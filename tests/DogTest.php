<?php

namespace Tests;

use App\Dog;
use PHPUnit\Framework\TestCase;

class DogTest extends TestCase
{
    public function testIfCanCreateADog()
    {
        $dog = new Dog('Bru', 'chocolate', 'mestizo');
        $sut = $dog->getName();
        $this->assertEquals('Bru', $sut);
    }

    public function testIfICanChangeIsVaccinated()
    {
        $dog = new Dog('Bru', 'chocolate', 'mestizo');
        $dog->setIsVaccinated();
        $sut = $dog->getIsVaccinated();
        $this->assertTrue($sut);
    }

    public function testIfCanAdoptADog()
    {
        $dog = new Dog('Bru', 'chocolate', 'mestizo');
        $dog->setIsAdopted();
        $sut = $dog->getIsAdopted();
        $this->assertTrue($sut);
    }

    public function testIfDogCanHavePuppies()
    {
        $dog = new Dog('Bruna', 'gris', 'husky');
        //system under test
        $sut = $dog->giveBirth(3); 
        $this->assertEquals('Bruna tuvo 3 puppies', $sut);
    }

    public function testIfDogCanHaveAGift()
    {
        $dog = new Dog('Bruna', 'gris', 'husky');
        $dog->setIsAdopted();
        $sut = $dog->giveGift();
        $this->assertEquals("Bruna se ganó un snack para perritos", $sut);
    }
}