<?php

namespace Database\Factories;
use App\Models\ProductDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductDetail>
 */
class ProductDetailFactory extends Factory
{
    protected $model = ProductDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_code' => $this->faker->unique()->bothify('???-###'),
            'product_name' => $this->faker->word,
            'length' => $this->faker->numberBetween(1, 100),
            'height' => $this->faker->numberBetween(1, 100),
            'depth' => $this->faker->numberBetween(1, 100),
            'customer_id' => $this->faker->numberBetween(1, 1000),
            'customer_name' => $this->faker->name,
            'project_id' => $this->faker->numberBetween(1, 1000),
            'project_name' => $this->faker->word,
            'address' => $this->faker->address,
            'production_date' => $this->faker->date(),
            'delivery_date' => $this->faker->date(),
            'description' => $this->faker->paragraph,
        ];
    }
}
