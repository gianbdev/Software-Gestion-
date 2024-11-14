<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Worker;

interface WorkerRepository
{
    public function save(Worker $worker);
}
