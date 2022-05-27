<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Entity\Point;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PointFactory extends Factory
{
    protected $model = Point::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>faker->name(),
            'type'=>faker->randomElement(['train_station','bus_station','other']),

        ];
    }
}
