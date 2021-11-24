<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Realme 8 Pro',
            "price"=>"Rs.8000",
            "category"=>"Mobile",
            "description"=>"Android 11, Realme UI 2.0, 128GB storage, microSDXC, 6/8GB RAM, Camera:108 MP, f/1.9, 26mm (wide), 1/1.52', 0.7µm, PDAF",
            "gallery"=>"https://www.gsmarena.com/realme_8_pro-pictures-10809.php",
            ],
            [
                'name'=>'iPhone 12',
                "price"=>"Rs.15000",
                "category"=>"Mobile",
                "description"=>"Black, White, (PRODUCT)RED , Green, Blue, Purple Ceramic Shield front Glass back and aluminum design",
                "gallery"=>"https://www.apple.com/shop/buy-iphone/iphone-12",
            ],
            [
                'name'=>'4K TV',
                "price"=>"Rs.10000",
                "category"=>"TV",
                "description"=>"TCL 75-inch 6-Series 4K UHD Dolby Vision HDR QLED Roku Smart TV - 75R635, 2021 Model",
                "gallery"=>"https://www.samsung.com/levant/tvs/uhd-4k-tv/tu8000-55-inch-crystal-uhd-smart-tv-ua55tu8000uxtw/",
            ],
        ]);
    }
}
