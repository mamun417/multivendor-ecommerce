<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $price    = $this->faker->numberBetween(20, 500);
        $attr     = ['pics', 'kg', 'ml', 'gm'];
        $admin_id = $this->faker->randomElement(Admin::all()->except(1)->pluck('id')->toArray());

        return [
            'admin_id'       => $admin_id,
            'category_id'    => $this->faker->randomElement(Category::active()->pluck('id')->toArray()),
            'brand_id'       => $this->faker->randomElement(Admin::find($admin_id)->brands()->active()->pluck('id')->toArray()),
            'name'           => $this->faker->unique()->word,
            'price'          => $price,
            'discount_price' => $price ? ($price - random_int(10, 20)) : null,
            'stock'          => random_int(10, 20),
            'code'           => $this->faker->ean8,
            'details'        => $this->faker->text(400),
            'weight'         => random_int(1, 20) . $this->faker->randomElement($attr),
            'status'         => $this->faker->numberBetween(0, 1),
        ];
    }
}
