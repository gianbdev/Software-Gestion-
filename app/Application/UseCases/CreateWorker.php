<?php

namespace App\Application\UseCases;

use App\Application\Services\WorkerService;
use App\Application\DTOs\WorkerDTO;

class CreateWorker
{
    private $workerService;

    public function __construct(WorkerService $workerService)
    {
        $this->workerService = $workerService;
    }

    public function execute(WorkerDTO $workerDTO)
    {
        // Se llama al servicio para crear un trabajador
        return $this->workerService->createWorker($workerDTO);
    }
}
