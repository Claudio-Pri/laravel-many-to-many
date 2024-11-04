<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technology::truncate();
        $allTechnologies = [
            'HTML',
            'CSS',
            'JS',
            'VUE',
            'PHP',
            'SQL',
            'LARAVEL'
        ];
        foreach ($allTechnologies as $singleTechnology) {
            $technology = Technology::create([
                'title' => $singleTechnology,
            ]);
        }
    }
}
