<?php

namespace App\Application\DTOs;

class WorkerDTO
{
    public $name;
    public $email;
    public $position;
    public $startDate;

    public function __construct($name, $email, $position, $startDate)
    {
        $this->name = $name;
        $this->email = $email;
        $this->position = $position;
        $this->startDate = $startDate;
    }
}
