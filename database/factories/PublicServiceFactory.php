<?php

namespace Database\Factories;

use App\Models\PublicService;
use Illuminate\Database\Eloquent\Factories\Factory;

class PublicServiceFactory extends Factory
{
    protected $model = PublicService::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word() . ' Service',
            'description' => $this->faker->sentence(10),
            'form_link' => $this->faker->url(),
        ];
    }
}
