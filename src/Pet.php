<?php

// 1. Terminar de hacer getters y setters
// 2. Terminar de hacer los tests de Dog y Cat
// 3. Crear la clase User, rellenar atributos y métodos (si cal) y testeada
 

namespace App;

abstract class Pet 
{
    private string $name;
    private string $color;
    private string $breed;
    private bool $is_vaccinated;
    private bool $is_adopted;
    private bool $is_spayed;

    public function __construct(string $name, string $color, string $breed)
    {
        $this->name = $name;
        $this->color = $color;
        $this->breed = $breed;
        $this->is_vaccinated = false;
        $this->is_adopted = false;
        $this->is_spayed = false; 

    }

    public function getName()
    {
        return $this->name;
    }

    public function getIsVaccinated()
    {
        return $this->is_vaccinated;
    }

    public function setIsVaccinated()
    {
        return $this->is_vaccinated = true;
    }

    public function getIsAdopted()
    {
        return $this->is_adopted;
    }

    public function setIsAdopted()
    {
        if($this->is_adopted == false){
            return $this->is_adopted = true;
        } else {
            return $this->is_adopted = false;
        }
    }

    public abstract function giveBirth(int $babies);
}