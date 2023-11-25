<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['category_name'=>'Mobile','main_category'=>'Gadget','status'=>'active','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['category_name'=>'Laptop','main_category'=>'Gadget','status'=>'active','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['category_name'=>'Tv','main_category'=>'Gadget','status'=>'active','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['category_name'=>'Tablet','main_category'=>'Gadget','status'=>'active','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['category_name'=>'SmartWatch','main_category'=>'Gadget','status'=>'active','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")]
        ];
        
        Category::insert($categories);
    }
}
