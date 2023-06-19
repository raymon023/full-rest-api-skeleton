<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use App\Repository\InterfaceEloquentModelRepository;

class EloquentRepository implements InterfaceEloquentModelRepository
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function getById(int $id)
    {
    }

    public function create(array $attributes = [])
    {
    }

    public function delete(int $id)
    {
    }
}
