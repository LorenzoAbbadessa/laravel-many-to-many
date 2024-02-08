<?php

namespace Database\Seeders;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [
                'name' => 'Engineering',
            ],
            [
                'name' => 'Hydrodinamics',
            ],
            [ 'name' => 'Botanics'
            ],
            ['name' => 'Organic Chemistry'
            ]];

            foreach ($technologies as $technology) {
                $new_technology = new Technology();
                $new_technology-> fill($technology);
                $new_technology-> save();

            }

    }
}
