<?php

namespace App;
use App\Pet;

class Dog extends Pet implements GiftInterface {

    //ABSTRACCIÓN: traer atributos de la vida real
    //ENCAPSULACIÓN: visibilidad de los atributos o métodos -> public, protected, private
    //getters y setters
    //HERENCIA: crear una clase madre y que sus hijos hereden los atributos y métodos
    //POLIMORFISMO: por herencia / por interfaces

    public function __construct(string $name, string $color, string $breed)
    {
        Parent::__construct($name, $color, $breed);
    }

    public function giveBirth(int $babies)
    {
        return "{$this->getName()} tuvo {$babies} puppies";
    }

    public function giveGift()
    {
        if($this->getIsAdopted() == true){
            return "{$this->getName()} se ganó un snack para perritos";
        }
        
    }
    

}