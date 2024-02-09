<?php

namespace Tests;

use App\Cat;
use PHPUnit\Framework\TestCase;

class CatTest extends TestCase
{
    public function testIfCanCreateACat()
    {
        $cat = new Cat('Isis', 'naranja', 'garfield');
        $sut = $cat->getName();
        $this->assertEquals('Isis', $sut);
    } 

    public function testIfAnAdoptedCatCanHaveAGift()
    {
        $cat = new Cat('Isis', 'naranja', 'garfield');
        $cat->setIsAdopted();
        $sut = $cat->giveGift();
        $this->assertEquals("Isis se ganó un snack para gatitos", $sut);
    }



}