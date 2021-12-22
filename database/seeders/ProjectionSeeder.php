<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Projection;

class ProjectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Projection::factory(15)->create();
    }
}
