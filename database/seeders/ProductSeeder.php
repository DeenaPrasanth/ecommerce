<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'product_name'=>'14 pro max',	
                'product_code'=>'apple14',		
                'product_category'=>'1',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'140000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'120000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/3d219f28-2976-416f-898f-6c322617404922090603_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'1',
                'slug'=>'1212',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'product_name'=>'Samsung S23 Ultra',	
                'product_code'=>'s23',		
                'product_category'=>'1',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'139000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'119000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/4b20cd43-eb55-4272-b55f-d5643ed4958323021151_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'2',
                'slug'=>'1213',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'product_name'=>'Pixel 8 Pro',	
                'product_code'=>'pixel8',		
                'product_category'=>'1',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'90000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'85000',
                'product_quantity'=>'8',	
                'product_image'=>'https://lh3.googleusercontent.com/nqsUxoT3lOuekMugkIoPhEA2c0e7h1VAHs7pvsuCUFXe-PFPDwSdmA0fXWWdzWSHORc4sHD9RSdTyt2f71Zr58iKoXzDqOLU_dKB=rw-e365-nu-w1350',	
                'status'=>'active',	
                'product_brand'=>'3',
                'slug'=>'1213',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'product_name'=>'Xperia',	
                'product_code'=>'pixel8',		
                'product_category'=>'1',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'80000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'78000',
                'product_quantity'=>'8',	
                'product_image'=>'https://fdn2.gsmarena.com/vv/bigpic/sony-xperia-1-iv-.jpg',	
                'status'=>'active',	
                'product_brand'=>'4',
                'slug'=>'1413',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'product_name'=>'Zenfone 9',	
                'product_code'=>'asus9',		
                'product_category'=>'1',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'50000',
                'product_has_discount'=>'NO',	
                'product_discount_price'=>'78000',
                'product_quantity'=>'8',	
                'product_image'=>'https://dlcdnwebimgs.asus.com/gain/99d0a96f-4ea5-4be5-8a91-95c8e0908176/w800',	
                'status'=>'active',	
                'product_brand'=>'7',
                'slug'=>'1313',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'product_name'=>'Samsung S23',	
                'product_code'=>'s23g',		
                'product_category'=>'1',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'80000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'68000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/2ae1fcf8-0671-4608-8ac2-1651000df2f523090546_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'2',
                'slug'=>'1313',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'product_name'=>'Mac Book M1',	
                'product_code'=>'m1',		
                'product_category'=>'2',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'120000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'112000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/a0c99c99-257d-4b62-aa23-329a59ddf9f222071308_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'1',
                'slug'=>'1313',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'product_name'=>'Mac Book M2',	
                'product_code'=>'m1',		
                'product_category'=>'2',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'180000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'162000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/0d6c3a24-e66b-4a55-ba96-205e35d5335f23070652_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'1',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'product_name'=>'Samsung Book2 Pro',	
                'product_code'=>'pro1',		
                'product_category'=>'2',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'180000',
                'product_has_discount'=>'NO',	
                'product_discount_price'=>'162000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/0bc1e8ac-223b-43a2-8abb-c61fbdba77ad22251142_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'2',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'product_name'=>'Acer Neo 16',	
                'product_code'=>'neo1',		
                'product_category'=>'2',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'159000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'142000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/6fa502cc-5060-46fd-a689-15c3b8b1807323260733_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'6',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'product_name'=>'Asus ROG 16',	
                'product_code'=>'rog1',		
                'product_category'=>'2',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'149000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'132000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/1961128f-5c18-42d6-9a2b-369506d2245c23261247_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'7',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'product_name'=>'LG QLED 16',	
                'product_code'=>'lg5',		
                'product_category'=>'3',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'149000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'132000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/a980533c-974c-4bfc-8060-6e1d4ee2508c22251032_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'5',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'product_name'=>'LG QLED ',	
                'product_code'=>'lgf5',		
                'product_category'=>'3',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'139000',
                'product_has_discount'=>'NO',	
                'product_discount_price'=>'132000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/51ac3ca3-9e13-406c-bf0b-d37cad4636ea23160806_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'5',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],

            [
                'product_name'=>'LG OLED ',	
                'product_code'=>'lgf5',		
                'product_category'=>'3',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'439000',
                'product_has_discount'=>'NO',	
                'product_discount_price'=>'412000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/4cae2c10-1c77-436e-8cea-b4da699b1aef23041024_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'5',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],

            [
                'product_name'=>'Sony OLED ',	
                'product_code'=>'lgf5',		
                'product_category'=>'3',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'339000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'312000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/8cf9ad18-9e51-4189-80cd-bf97fb6c6d4923270953_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'4',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],

            [
                'product_name'=>'IPad 9 ',	
                'product_code'=>'ipad',		
                'product_category'=>'4',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'39000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'32000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/8d60b712-bdb4-43ee-8625-49b836936beb22241409_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'1',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            
            [
                'product_name'=>'Samsung Tab ',	
                'product_code'=>'ipad',		
                'product_category'=>'4',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'79000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'62000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/81e9e5fd-cef8-44a6-996b-457e8b598fc7_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'2',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],

            [
                'product_name'=>'Apple Watch S9 ',	
                'product_code'=>'iwatch',		
                'product_category'=>'5',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'49000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'42000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/aad9943f-300e-4d1d-a33f-1b56840dcd5123181153_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'1',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'product_name'=>'Apple Watch S9 ',	
                'product_code'=>'iwatch',		
                'product_category'=>'5',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'42000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'39000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/05d7433b-d99d-4039-82b2-1675f8abc8ee23141216_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'1',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'product_name'=>'Apple Watch S9 ',	
                'product_code'=>'iwatch',		
                'product_category'=>'5',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'49000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'47000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/1f269670-2ab8-4f23-8ca6-baf9483715a423161201_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'1',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],

            [
                'product_name'=>'Samsung Watch S9 ',	
                'product_code'=>'iwatch',		
                'product_category'=>'5',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'49000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'47000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/2e6a2ebc-171c-44fa-a797-8e9ed0722c8223280738_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'2',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],

            [
                'product_name'=>'Samsung Watch S8 ',	
                'product_code'=>'iwatch',		
                'product_category'=>'5',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'42000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'39000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/5d9642ca-f481-4eaa-b84c-978f834b1f8222230908_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'2',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'product_name'=>'Samsung Watch S2 ',	
                'product_code'=>'iwatch',		
                'product_category'=>'5',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'40000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'37000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/2cca78e5-a963-430f-bf50-ed25bf82077222040853_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'2',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'product_name'=>'Samsung Watch S ',	
                'product_code'=>'iwatcwh',		
                'product_category'=>'5',	
                // 'product_subcategory'=>'test',
                'product_original_price'=>'29000',
                'product_has_discount'=>'YES',	
                'product_discount_price'=>'17000',
                'product_quantity'=>'8',	
                'product_image'=>'https://d2xamzlzrdbdbn.cloudfront.net/products/259b431e-e0ac-4f49-a735-7e1eb69be22e22130843_182x182.jpg',	
                'status'=>'active',	
                'product_brand'=>'2',
                'slug'=>'1383',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            

            
            

            

            

            
            
        ];
        
        Product::insert($products);
    }
}
