<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

interface InterfaceEloquentModelRepository
{
    public function getById(int $id);

    public function create(array $attributes = []);

    public function update(Model $model, array $attributes = []);

    public function delete(Model $model);
}
