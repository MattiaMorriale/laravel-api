<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run($projects): void
    {

        foreach ($projects as $project) {
            $newProject = new Project();

            $newProject->name = $project['name'];
            $newProject->slug = Str::slug($newProject->name);
            $newProject->description = $project['description'];
            $newProject->image = $project['image'];
            $newProject->link_GitHub = $project['link_GitHub'];

            $newProject->save();
        }

    }
}
