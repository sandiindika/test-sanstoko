<?php

namespace Modules\Shop\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Shop\Models\ProductAttribute;

class ProductAttributeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = ProductAttribute::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}

