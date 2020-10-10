<?php


class Employee
{
    public $firstName;
    public $lastName;
    public $birthday;
    public $address;
    public $position;


    public function __construct($firstName, $lastName, $birthday, $address, $position)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->position = $position;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setFirstName($_firstname)
    {
        $this->firstName = $_firstname;
    }

    public function setLastName($_lastname)
    {
        $this->lastName = $_lastname;
    }

    public function setBirthday($_birthday)
    {
        $this->birthday = $_birthday;
    }

    public function setAddress($_address)
    {
        $this->address = $_address;
    }

    public function setPosition($_position)
    {
        $this->position = $_position;
    }
}