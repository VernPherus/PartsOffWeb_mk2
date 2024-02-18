<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $prduct_name = $this->faker->unique()->words($nb=2, $asText=true);
        $slug = Str::slug($prduct_name);
        $image_name = $this->faker->numberBetween(1,24).'.jpg';
        return [
            'title' => Str::title($prduct_name),
            'slug' => $slug,
            'description'=> $this->faker->text(200),
            'price' => $this->faker->numberBetween(1,22),
            'stock_status' => 'instock',
            'quantity' => $this->faker->numberBetween(100, 200),
            'image' => $image_name,
            'images' => $image_name,
            'category_id' => $this->faker->numberBetween(1,6)
        ];
    }
}
