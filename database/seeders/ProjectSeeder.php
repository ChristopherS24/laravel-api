<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           Schema::withoutForeignKeyConstraints(function() {
             Project::truncate();
        });

        for ($i = 0; $i < 20; $i++) {
            $title = fake()->sentence();

            Project::create([
                'title' => $title,
                'creation_date' => fake()->date(),
                'author' => fake()->name()


            ]);

        }
    }
}
