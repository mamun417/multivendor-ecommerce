<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->foreignId('admin_id')->constrained('admins')->cascadeOnDelete(); // admin_id === vendor
            $table->foreignId('category_id');
            $table->foreignId('brand_id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('price')->nullable();
            $table->string('discount_price')->nullable();
            $table->integer('stock')->nullable();
            $table->string('code')->nullable();
            $table->longText('details')->nullable();
            $table->string('weight')->nullable();
            $table->boolean('status')->default(false);
            $table->boolean('featured')->default(false);
            $table->boolean('onsale')->default(false);
            $table->boolean('top_rated')->default(false);
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
}
