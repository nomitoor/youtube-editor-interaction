<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\UserRolesEnum;

trait HasRoles
{
    public function isAdmin(): bool
    {
        return $this->role->is(UserRolesEnum::ADMIN);
    }
}