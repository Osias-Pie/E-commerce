<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
   // La méthode definition() retourne un tableau de fausses données
    public function definition()
    {
        return [
            // Génère un nom de produit composé de 2 mots
            'name' => $this->faker->words(2, true),

            // Génère une phrase courte comme description
            'description' => $this->faker->sentence(),

            // Génère un prix entre 10 et 200 avec 2 décimales
            'price' => $this->faker->randomFloat(2, 10, 200),

            // Génère un stock aléatoire entre 1 et 100
            'stock' => $this->faker->numberBetween(1, 100),

            // Génère une URL d'image factice de type "mode"
            'image' => $this->faker->imageUrl(640, 480, 'fashion'),
       ];
    }
}
