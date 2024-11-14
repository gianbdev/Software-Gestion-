<?php

namespace App\Infrastructure\Http\Controllers;

use App\Application\UseCases\CreateWorker;
use App\Application\DTOs\WorkerDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Worker\StoreWorkerRequest;

class WorkerController extends Controller
{
    private $createWorker;

    public function __construct(CreateWorker $createWorker)
    {
        $this->createWorker = $createWorker;
    }

    public function store(StoreWorkerRequest $request) // Usa el FormRequest aquí
    {
        // Los datos ya están validados automáticamente, por lo que no necesitas validar manualmente
        $workerDTO = new WorkerDTO(
            $request->name,
            $request->email,
            $request->position,
            $request->start_date
        );

        // Llamar al caso de uso para crear el trabajador
        $this->createWorker->execute($workerDTO);

        return response()->json(['message' => 'Worker created successfully!']);
    }

}
