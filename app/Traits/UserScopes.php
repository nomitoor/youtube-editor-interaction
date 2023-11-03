<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\UserRolesEnum;
use Illuminate\Database\Eloquent\Builder;

trait UserScopes
{
    public function scopeAdmin(Builder $query): Builder
    {
        return $query->where('role', UserRolesEnum::ADMIN->value);
    }

    public function scopeEditor(Builder $query): Builder
    {
        return $query->where('role', UserRolesEnum::EDITOR->value);
    }
}