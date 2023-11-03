<?php

namespace App\Enums;

use App\Traits\BaseEnum;

enum UserRolesEnum: int
{
    use BaseEnum;

    case ADMIN = 1;
    case EDITOR = 2;

    public function title(): string
    {
        return match ($this) {
            self::ADMIN => 'Super Admin',
            self::EDITOR => 'Editor',
        };
    }
}
