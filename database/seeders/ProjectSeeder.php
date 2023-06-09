<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $project = new Project;
            $project->name = $faker->words(3, true);
            $project->description = $faker->paragraph(5, false);
            $project->programming_languages = $faker->words(5, true);
            $project->start_date = $faker->dateTimeThisYear();
            $project->end_date = $faker->dateTimeInInterval($project->start_date, '+3 days');
            $project->save();
        }
    }
}