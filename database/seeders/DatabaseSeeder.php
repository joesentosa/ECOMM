<?php

namespace Database\Seeders;

use App\Models\AdminModel;
use App\Models\BarangModel;
use App\Models\PromoModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        AdminModel::factory(5)->create();
        // BarangModel::factory(5)->create();
        PromoModel::factory(5)->create();

        $this->call([
            BrandSeeder::class,
            KategoriSeeder::class,
            BarangSeeder::class,
            GambarSeeder::class
        ]);
    }
}
