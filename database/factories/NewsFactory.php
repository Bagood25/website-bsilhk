<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(6);
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'slug' => $slug,
            'content' => $this->faker->paragraphs(5, true),
            'image_url' => 'https://placehold.co/600x400/000000/FFFFFF/png?text=' . urlencode($title),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'category_id' => Category::factory(), // Asumsi Category sudah ada
            'author_id' => User::factory(), // Asumsi User sudah ada
        ];
    }
}
