<?php

namespace Database\Seeders;

use App\Enums\UserRolesEnum;
use App\Models\Admin;
use App\Models\AdminUpload;
use App\Models\Editor;
use App\Models\EditorUpload;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = Admin::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            'role' => UserRolesEnum::ADMIN->value,
        ]);

        $admin->projects()->saveMany(Project::factory()->count(10)->make());

        $editor = Editor::create([
            'name' => 'editor',
            'email' => 'editor@mail.com',
            'password' => Hash::make('password'),
            'role' => UserRolesEnum::EDITOR->value,
        ]);

        $editor->projects()->saveMany(Project::factory()->count(10)->make());
    }
}
