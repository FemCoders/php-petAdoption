<?php

namespace App;
use App\Pet;

class Cat extends Pet implements GiftInterface {

    public function __construct(string $name, string $color, string $breed)
    {
        Parent::__construct($name, $color, $breed);
    }

    public function giveBirth(int $babies)
    {
        return "{$this->getName()} tuvo {$babies} kittens";
    }
    
    public function giveGift()
    {
        if($this->getIsAdopted() == true){
            return "{$this->getName()} se ganó un snack para gatitos";
        }
    }

}