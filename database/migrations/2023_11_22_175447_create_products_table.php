<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable();
            $table->string('product_name');
            $table->string('product_code');
            $table->integer('product_category');
            $table->integer('product_subcategory')->nullable();
            $table->decimal('product_original_price', 9, 3);
            $table->enum('product_has_discount', ['YES', 'NO']);
            $table->decimal('product_discount_price', 9, 3);
            $table->integer('product_quantity');
            $table->string('product_image');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->integer('product_brand');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
