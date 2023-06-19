<?php

namespace App\Repository\UserRepository;

use App\Repository\EloquentModelRepository;
use App\Models\User;

class UserRepository extends EloquentModelRepository
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}
