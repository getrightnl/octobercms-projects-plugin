<?php

namespace GetRight\Projects\Updates\Seeders;

use GetRight\Projects\Models\Project;
use Illuminate\Support\Facades\App;
use Faker\Factory;
use Seeder;
use Model;

/**
 * Class SeedProjectsTable
 * @package GetRight\Slider\Updates\Seeders
 * @author getRight
 */
class SeedProjectsTable extends Seeder {

    /**
     * Run the seeder.
     */
    public function run() {

        if(App::environment() != 'production') return;

        Model::unguard();

        $faker = Factory::create();

        // Check if directory exists else make it.
        if(!file_exists(storage_path('app/media/projects'))){
            mkdir(storage_path('app/media/projects'));
        }

        for($i = 0; $i < 2; $i++){
            $project = Project::create([
                'title' => $faker->word,
            ]);

            $fileName = $faker->image(storage_path('app/media/projects'),500,500,'business',false);

            $project->image()->create([
                'data' => storage_path('app/media/projects/' . $fileName)
            ]);
        }

    }

}
