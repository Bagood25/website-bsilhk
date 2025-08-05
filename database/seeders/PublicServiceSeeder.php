<?php

namespace Database\Seeders;

use App\Models\PublicService;
use Illuminate\Database\Seeder;

class PublicServiceSeeder extends Seeder
{
    public function run(): void
    {
        PublicService::factory()->count(3)->create();
    }
}
