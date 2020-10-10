<?php


class EmployeeManager
{
    public static $employee;

    public function __construct()
    {
        self::$employee = [];
    }

    function add($_employee)
    {
        self::$employee [] = $_employee;
    }

    function delete($key)
    {
        self::$employee [$key] = [];
    }

    function setEmployee($_employee)
    {
        self::$employee = $_employee;
    }

    function display()
    {

    }
}