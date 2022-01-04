<?php

class Car 
{
    // private, public, protected
    // private - only accessible inside the class
    // public - accessible inside the class, and outside
    // protected - accessible inside the class, and in any child classes

    /**
     * Make of the car
     * @var string
     */
    private $make = 'Honda';

    /**
     * Model of the car
     * @var string
     */
    private $model = 'Civic';

    /**
     * Color of the car
     * @var string
     */
    public $color = 'Blue';


    /**
     * Get value of model
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Get value of make
     * @return string
     */
    public function getMake()
    {
        return $this->make;
    }

}