<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class productSeeder extends Seeder
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
                'name'=>'Iphone',
                "price"=>"120000",
                "category"=>"mobile",
                "gallery"=>"https://www.att.com/idpassets/global/devices/phones/apple/apple-iphone-12-pro-max/graphite/6900C-1.png",
                "description"=>"Smart Phone"
            ],
            [
                'name'=>'Samsung TV',
                "price"=>"110000",
                "category"=>"TV",
                "gallery"=>"https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6268/6268404_sd.jpg",
                "description"=>"Smart TV"
            ]
        ]);
    }
}
