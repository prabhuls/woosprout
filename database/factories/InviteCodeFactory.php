<?php

namespace Database\Factories;

use App\Models\InviteCode;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InviteCode>
 */
class InviteCodeFactory extends Factory
{
    protected $model = InviteCode::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->word,
            'uses' => $this->faker->numberBetween(0, 4),
            'max_uses' => $this->faker->numberBetween(5, 15),
        ];
    }
}
