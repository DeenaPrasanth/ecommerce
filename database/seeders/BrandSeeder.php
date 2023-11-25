<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            ['brand_name'=>'Apple','status'=>'active','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['brand_name'=>'Samsung','status'=>'active','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['brand_name'=>'Google','status'=>'active','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['brand_name'=>'Sony','status'=>'active','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['brand_name'=>'LG','status'=>'active','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['brand_name'=>'Acer','status'=>'active','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['brand_name'=>'Asus','status'=>'active','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")]
        ];
        
        Brand::insert($brands);
    }
}
