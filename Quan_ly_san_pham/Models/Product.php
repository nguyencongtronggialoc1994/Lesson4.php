<?php

namespace Models;
class Product
{
    private $name;
    private $price;

    public function __construct($_name = null, $_price=0)
    {
        $this->name = $_name;
        $this->price = $_price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}