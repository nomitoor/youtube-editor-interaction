<?php

namespace Database\Factories;

use App\Models\AdminUpload;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AdminUpload>
 */
class AdminUploadFactory extends Factory
{
    public function definition(): array
    {
        return [
            'file_name' => $this->faker->word . '.pdf',
            'file_path' => $this->faker->url,
            'file_size' => $this->faker->numberBetween(100, 10000),
            'description' => $this->faker->sentence,
            'category' => $this->faker->randomElement(['image', 'document', 'video']),
            'is_public' => $this->faker->boolean,
        ];
    }
}
