<?php

namespace Modules\Shop\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Shop\Models\Product;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Shop\Models\Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $name = fake()->words(2, true);

        return [
            'sku' => fake()->isbn10,
            'type' => Product::SIMPLE,
            'name' => $name,
            'slug' => Str::slug($name),
            'price' => fake()->randomFloat,
            'status' => Product::ACTIVE,
            'publish_date' => now(),
            'excerpt' => fake()->text(),
            'body' => fake()->text(),
        ];
    }
}

