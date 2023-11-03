<?php

namespace App\Models;

use App\Enums\UserRolesEnum;
use Illuminate\Database\Eloquent\{
    Factories\HasFactory, 
    Model, 
    Relations\BelongsTo, 
    Relations\HasMany,
    Builder
};

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "name",
        "description"
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function uploads(): HasMany
    {
        return $this->hasMany(Upload::class);
    }

    public function scopeAdminProjects(Builder $query): Builder
    {
        return $query->whereHas("user", function (Builder $query) {
            $query->where("role", UserRolesEnum::ADMIN->value);
        });
    }
}
