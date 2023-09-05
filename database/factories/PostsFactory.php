<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function Laravel\Prompts\text;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = fake()->randomElement($array = ['published', 'draft', 'pending']);
        return [
            'title' => fake()->title(),
            'author_id' => fake()->randomDigit(),
            'category_id' => fake()->randomDigit(),
            'seo_title' => fake()->title(),
            'excerpt' => fake()->paragraph(1),
            'body' => fake()->paragraph(10),
            'image' => fake()->imageUrl(),
            'slug' => fake()->text(100),     
            'meta_description' => fake()->realText(100),
            'meta_keywords' => fake()->realText(10),
            'status' => $status,
            'featured' => fake()->boolean(),
            'created_at' =>  now(),
        ];
    }
}