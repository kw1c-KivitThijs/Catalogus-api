<?php

namespace Database\Factories;

use App\Models\Product;
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
        $price = $this->faker->randomFloat(2, 50, 100);

        // Genereer een uniek getal om te gebruiken in de URL
        $uniqueNumber = $this->faker->unique()->randomNumber();

        // URL voor de hoofdafbeelding
        $mainimageUrl = "https://i.pravatar.cc?u={$uniqueNumber}";

        $sideImageUrls = "https://i.pravatar.cc?u={$uniqueNumber}";

            return [
                'name' => $this->faker->sentence,
                'price' => $price, // Assign the generated price directly
                'slug' => $this->faker->slug(),
                'mainimage_url' => $mainimageUrl,
                'sideimage_url' => $sideImageUrls
            ];
        }
    }
