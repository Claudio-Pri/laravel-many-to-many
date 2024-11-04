<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//per slug da documentazione laravel
use Illuminate\Support\Str;

//Models
use App\Models\Project;
use App\Models\Type;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();

        for ($i = 0; $i < 5; $i++) {
            $title = fake()->catchPhrase();
            //slug da documentazione laravel
            $slug = Str::of($title)->slug('-');
            //type casuale
            $randomType = Type::inRandomOrder()->first();

            Project::create([
                'title' => $title,
                'slug' => $slug,
                'url' => fake()->url(),
                'description' => fake()->paragraph(),
                'type_id' => $randomType->id,
            ]);
        }
    }
}


//errore sul seeder da vedere
