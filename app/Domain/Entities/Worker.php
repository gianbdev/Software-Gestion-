<?php

namespace App\Domain\Entities;

class Worker
{
    public $id;
    public $name;
    public $email;
    public $position;
    public $startDate;

    public function __construct($id, $name, $email, $position, $startDate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->position = $position;
        $this->startDate = $startDate;
    }
}
