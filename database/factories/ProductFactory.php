<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word(),
            'reference' => 'REF-' . $this->faker->unique()->randomNumber(5),
            'description' => $this->faker->paragraph(3),
            'prix' => $this->faker->randomFloat(2, 10, 100),
            'stock' => $this->faker->randomNumber(2),
            'image' => $this->faker->imageUrl(),
            'category_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
