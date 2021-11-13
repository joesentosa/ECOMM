<?php

namespace Database\Seeders;

use App\Models\BrandModel;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        BrandModel::insert([
            'id_brand'  => 1,
            'namaBrand' => 'ASUS',
            'gambar'    => 'https://logos-world.net/wp-content/uploads/2020/07/Asus-Logo.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 2,
            'namaBrand' => 'Cougar',
            'gambar'    => 'https://cougargaming.com/_cgrwdr_/wwdpp/wp-content/uploads/2018/01/cropped-COUGAR-logo-512x512-5.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 3,
            'namaBrand' => 'Digital Alliance',
            'gambar'    => 'https://digitalalliance.co.id/wp-content/uploads/2021/02/logo-da.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 4,
            'namaBrand' => 'Dxracer',
            'gambar'    => 'assets/images/logo/logo_dxracer.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 5,
            'namaBrand' => 'Eblue',
            'gambar'    => '//cdn.shopify.com/s/files/1/0278/9487/4211/files/Logo_756cde5b-0545-4ba9-bd0a-adfd4692a5f4_150x150.jpg?v=1598263939',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 6,
            'namaBrand' => 'Onex',
            'gambar'    => 'assets/images/logo/logo_Onex.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 7,
            'namaBrand' => 'Stracing',
            'gambar'    => 'assets/images/logo/logo_STRacing.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 8,
            'namaBrand' => 'Thunderx3',
            'gambar'    => 'https://i0.wp.com/thunderx3.com/wp-content/uploads/2017/05/ThunderX3-Logo.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 10,
            'namaBrand' => 'Fantech',
            'gambar'    => 'https://fantech.id/media/logo/stores/2/Logo-Fantech-170-1px.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 11,
            'namaBrand' => 'Cooler Master',
            'gambar'    => 'https://www.coolermaster.com/Content/img/logo-white.svg',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 12,
            'namaBrand' => 'Corsair',
            'gambar'    => 'https://www.topmarket.co.il/images/feature_variant/14/corsair.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 13,
            'namaBrand' => 'Dareu',
            'gambar'    => 'https://dareu.co.id/wp-content/uploads/2019/02/dareu-white.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 14,
            'namaBrand' => 'dbE',
            'gambar'    => 'https://dbe-id.com/content-management/img/Images/20200411/cdd35e21184fd18736e7244c7a7ca3ff.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 15,
            'namaBrand' => 'Havit',
            'gambar'    => 'https://www.havit.hk/wp-content/uploads/2021/06/logo3-01-1-3.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 16,
            'namaBrand' => 'Hyperx',
            'gambar'    => 'assets/images/logo/logo_Hyperx.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 17,
            'namaBrand' => 'JBL',
            'gambar'    => 'assets/images/logo/logo_JBL.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 18,
            'namaBrand' => 'Logitech',
            'gambar'    => 'https://1000logos.net/wp-content/uploads/2020/05/Logitech-Logo.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 19,
            'namaBrand' => 'NYK',
            'gambar'    => 'https://www.nyk.co.id/wp-content/uploads/2018/10/nyk-nemesis.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 20,
            'namaBrand' => 'Razer',
            'gambar'    => 'https://d2o7dtsnwzl7g9.cloudfront.net/tekzone/media/image/4d/46/g0/razer-logo.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 21,
            'namaBrand' => 'Rexus',
            'gambar'    => 'https://rexus.id/wp-content/uploads/2016/08/rexus_logo_01.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 22,
            'namaBrand' => 'Sades',
            'gambar'    => 'https://www.sades.co.id/wp-content/uploads/2018/10/Sades-logo.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 23,
            'namaBrand' => 'Saramonic',
            'gambar'    => '//www.saramonic.com/wp-content/uploads/2020/06/logo-1.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 24,
            'namaBrand' => 'Steelseries',
            'gambar'    => 'https://overclocking.com/wp-content/uploads/2019/10/logo-steelseries.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 25,
            'namaBrand' => 'Tecware',
            'gambar'    => 'https://static.wixstatic.com/media/db5cbe_ae317a970637424b9fc72a15069842b4.png/v1/fill/w_264,h_60,al_c,q_85,usm_0.66_1.00_0.01/db5cbe_ae317a970637424b9fc72a15069842b4.webp',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 26,
            'namaBrand' => 'Thronmax',
            'gambar'    => 'https://www.thronmax.com/wp-content/uploads/2021/03/logo-thronmax.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 27,
            'namaBrand' => 'Ducky',
            'gambar'    => 'https://www.duckychannel.com.tw/assets/img/homeLogo_white.svg',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 28,
            'namaBrand' => 'Funsty',
            'gambar'    => 'assets/images/logo/logo_funsty.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 29,
            'namaBrand' => 'Leopold',
            'gambar'    => 'assets/images/logo/logo_Leopold.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 30,
            'namaBrand' => 'Acer',
            'gambar'    => 'https://cdn.statically.io/img/www.acerid.com/f=auto%2Cq=80/wp-content/themes/barcelona/assets/intel11-revamp/image/Mobile_Logo_Acer.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 31,
            'namaBrand' => 'AOC',
            'gambar'    => 'assets/images/logo/logo_AOC.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 32,
            'namaBrand' => 'LG',
            'gambar'    => 'https://www.lg.com/lg5-common-gp/images/common/header/logo-b2c.jpg',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 33,
            'namaBrand' => 'Zowie',
            'gambar'    => 'assets/images/logo/logo_Zowie.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 34,
            'namaBrand' => 'MSI',
            'gambar'    => 'https://cdn.freebiesupply.com/logos/large/2x/msi-5-logo-png-transparent.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 35,
            'namaBrand' => 'Glorious',
            'gambar'    => '//cdn.shopify.com/s/files/1/0549/2681/t/164/assets/nav_logo.svg?v=7325042580381377433',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 36,
            'namaBrand' => 'Gwolves',
            'gambar'    => 'assets/images/logo/logo_gwolves.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);
        BrandModel::insert([
            'id_brand'  => 37,
            'namaBrand' => 'AKKO',
            'gambar'    => 'https://en.akkogear.com/wp-content/uploads/2020/05/AKKO.png',
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'updated_at'=> Carbon::now()->format('Y-m-d')
        ]);        
    }
}
