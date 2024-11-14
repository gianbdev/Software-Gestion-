<?php

namespace App\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;
use App\Application\Services\WorkerService;
use App\Domain\Repositories\WorkerRepository;
use App\Infrastructure\Persistence\EloquentWorkerRepository;

class WorkerServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Registrar el repositorio con su implementación
        $this->app->bind(WorkerRepository::class, EloquentWorkerRepository::class);

        // Registrar el servicio
        $this->app->bind(WorkerService::class, function ($app) {
            return new WorkerService($app->make(WorkerRepository::class));
        });
    }
}
