<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true), // ex: "Tissu wax", "Pagne royal"
            'description' => $this->faker->paragraph(2), // un paragraphe court
            'price' => $this->faker->randomFloat(2, 5, 500), // entre 5 et 500 €, format 00.00
            'stock' => $this->faker->numberBetween(0, 100), // stock entre 0 et 100
            'image' => $this->faker->imageUrl(640, 480, 'fashion'), // fausse image catégorie mode
        ];
    }
}
