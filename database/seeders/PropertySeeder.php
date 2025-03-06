<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    public function run(): void
    {
        Property::create(['name' => 'Appartement Paris', 'description' => 'Bel appartement au cœur de Paris']);
        Property::create(['name' => 'Villa Nice', 'description' => 'Villa avec vue sur la mer']);
        Property::create(['name' => 'Chalet Chamonix', 'description' => 'Chalet en montagne']);
    }
}
