<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Parental\HasChildren;

class Upload extends Model
{
    use HasChildren;
    use HasFactory;

    protected $fillable = [
        'file_name',
        'file_path',
        'file_size',
        'description',
        'category',
        'is_public',
        'user_type',
    ];
    protected $childColumn = 'user_type';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
