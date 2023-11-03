<?php

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Project::class, 'project_id')->constrained('projects')->cascadeOnDelete();
            $table->string('file_name', 256);
            $table->string('file_path', 256);
            $table->string('file_size', 256);
            $table->longText('description');
            $table->string('category', 256);
            $table->boolean('is_public')->default(false);
            $table->string('user_type')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uploads');
    }
};
