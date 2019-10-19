<?php

namespace App\Classes;

use Carbon\Carbon;
use Exception;

class Person
{
    private $name, $dob;

    public function __construct()
    {
        // 
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name = 'John Doe')
    {
        $this->name = $name;
    }

    public function getDob()
    {
        return $this->dob;
    }

    public function setDob($dob)
    {
        if (Carbon::createFromFormat('Y-m-d', $dob) === false) {
            throw new Exception('Date should be in format Y-m-d');
        }
        $this->dob = $dob;
    }

    public function age()
    {
        return Carbon::now()->diff($this->getDob())->format("%Y");
    }
}
