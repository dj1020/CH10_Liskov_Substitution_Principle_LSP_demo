<?php namespace Twk;

class Order {
    private $id;
    private $amount;

    public function __construct($id, $amount)
    {
        $this->id = $id;
        $this->amount = $amount;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }

        throw new Exception('No such property');
    }
}