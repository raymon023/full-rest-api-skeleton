<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use App\Repository\InterfaceEloquentModelRepository;

class EloquentModelRepository implements InterfaceEloquentModelRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function getById(int $id)
    {
        return $this->model->where('id', $id)->get();
    }

    public function create(array $attributes = [])
    {
        return $this->model->create($attributes);
    }

    public function delete(Model $model)
    {
        return $this->$model->delete();
    }

    public function update(Model $model, array $attributes = [])
    {
        return $this->$model->update($attributes)->refresh();
    }
}
