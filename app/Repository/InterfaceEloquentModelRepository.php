<?php

namespace App\Repository;

interface InterfaceEloquentModelRepository
{
    public function getById(int $id);

    public function delete(int $id);

    public function create(array $attributes = []);

}
