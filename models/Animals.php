<?php

class Animals
{
    private $listOfCars = [];

    public function __construct(array $listOfCars)
    {
        $this->listOfCars = $listOfCars;
    }

    /**
     * Returns a list of animals
     *
     * @return array
     */
    public function getListOfAnimals() : array
    {
        return $this->listOfCars;
    }
}