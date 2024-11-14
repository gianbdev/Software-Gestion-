<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Entities\Worker;
use App\Domain\Repositories\WorkerRepository;
use App\Models\Worker as EloquentWorker;  // Eloquent Model

class EloquentWorkerRepository implements WorkerRepository
{
    public function save(Worker $worker)
    {
        // Convertir la entidad a un modelo de Eloquent
        $eloquentWorker = new EloquentWorker([
            'name' => $worker->name,
            'email' => $worker->email,
            'position' => $worker->position,
            'start_date' => $worker->startDate,
        ]);

        $eloquentWorker->save();
    }
}
