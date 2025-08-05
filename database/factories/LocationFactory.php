<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Nama model yang sesuai dengan factory.
     *
     * @var string
     */
    protected $model = Location::class;

    /**
     * Definisikan state default model.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'latitude' => $this->faker->latitude(-8, -6), // Koordinat area Indonesia
            'longitude' => $this->faker->longitude(106, 110), // Koordinat area Indonesia
            'description' => $this->faker->text(200),
            'category' => $this->faker->randomElement(['Kehutanan', 'ESDM', 'Kelautan']),
            'address' => $this->faker->address(),
        ];
    }
}
