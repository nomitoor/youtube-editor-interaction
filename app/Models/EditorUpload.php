<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Parental\HasParent;

class EditorUpload extends Upload
{
    use HasFactory;
    use HasParent;
}
