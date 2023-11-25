<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',		
		'product_name',	
		'product_code',		
		'product_category',	
		'product_subcategory',
		'product_original_price',
		'product_has_discount',	
		'product_discount_price',
		'product_quantity',	
		'product_image',	
		'status',	
		'product_brand',
       ];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'product_code'
            ]
        ];
    }
}