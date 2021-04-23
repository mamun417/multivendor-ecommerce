<?php

namespace Database\Factories;

use App\Models\Coupon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CouponFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coupon::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'code'       => $this->faker->unique()->word,
            'apply_type' => $this->faker->randomElement(array_keys(Coupon::APPLY_TYPE)),
            'amount'     => $this->faker->numberBetween(0, 90),
            'started_at' => $this->faker->dateTime(),
            'expired_at' => $this->faker->dateTime(),
            'title'      => $this->faker->sentence(2),
            'status'     => $this->faker->boolean
        ];
    }
}
