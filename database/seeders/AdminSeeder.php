<?php

namespace Database\Seeders;

use App\Models\AdminModel;
use Database\Factories\AdminModelFactory;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        AdminModel::factory(5)->create();
    }
}
