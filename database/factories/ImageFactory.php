<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => $this->faker->image('storage/app/public/posts',640,480,false)
        ];
    }
}
//C:\wamp64\www\blog\storage\app\public\posts
// 'url' => 'posts/' . $this->faker->image('public/storage/posts',640,480,false)