<?php

namespace App\Models;

use App\Enums\UserRolesEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Parental\HasChildren;
use App\Traits\HasRoles;
use App\Traits\UserScopes;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasChildren;
    use HasFactory;
    use Notifiable;
    use UserScopes;
    use HasRoles;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'type',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
        'role' => UserRolesEnum::class,
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
