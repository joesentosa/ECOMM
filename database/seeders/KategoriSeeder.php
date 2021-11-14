<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\KategoriModel;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriModel::insert([            
            'nama_kategori' => 'Accessories',            
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        KategoriModel::insert([            
            'nama_kategori' => 'Controller',            
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        KategoriModel::insert([            
            'nama_kategori' => 'Creator and Streamers',            
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        KategoriModel::insert([            
            'nama_kategori' => 'Gaming Chair',            
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        KategoriModel::insert([            
            'nama_kategori' => 'Gaming Desk',            
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        KategoriModel::insert([            
            'nama_kategori' => 'Headset',            
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        KategoriModel::insert([            
            'nama_kategori' => 'Keyboard',            
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        KategoriModel::insert([            
            'nama_kategori' => 'Monitor',            
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        KategoriModel::insert([            
            'nama_kategori' => 'Mouse',            
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        KategoriModel::insert([            
            'nama_kategori' => 'Mousepad',            
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        KategoriModel::insert([            
            'nama_kategori' => 'Speaker and Sound',            
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        KategoriModel::insert([            
            'nama_kategori' => 'Uncategorized',            
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
    }
}
