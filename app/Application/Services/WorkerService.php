<?php

namespace App\Application\Services;

use App\Domain\Repositories\WorkerRepository;
use App\Domain\Entities\Worker;

class WorkerService
{
    private $workerRepository;

    // Inyectamos la dependencia del repositorio para interactuar con los datos
    public function __construct(WorkerRepository $workerRepository)
    {
        $this->workerRepository = $workerRepository;
    }

    /**
     * Método para crear un trabajador.
     *
     * @param  \App\Application\DTOs\WorkerDTO  $workerDTO
     * @return \App\Domain\Entities\Worker
     */
    public function createWorker($workerDTO)
    {
        // Aquí se podría agregar lógica adicional, como reglas de negocio,
        // validaciones o transformaciones de datos antes de crear al trabajador.

        // Crear la entidad de Worker a partir del DTO recibido.
        $worker = new Worker(
            null,  // ID será auto-generado por la base de datos.
            $workerDTO->name,
            $workerDTO->email,
            $workerDTO->position,
            $workerDTO->startDate
        );

        // Usamos el repositorio para guardar al trabajador.
        $this->workerRepository->save($worker);

        return $worker;
    }
}
