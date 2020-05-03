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
            $table->string('qr_code')->nullable();
            $table->string('name');
            $table->integer('category_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('place_id')->nullable();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->string('img5')->nullable();
            $table->double('price');
            $table->double('in')->nullable();
            $table->tinyInteger('order');
            $table->string('standard_unit');
            $table->integer('least_left');
            $table->integer('most_left');
            $table->text('description')->nullable();
            $table->text('note')->nullable();
            $table->string('sale_with_id')->nullable();
            $table->integer('user_id');
            $table->timestamps();
            $table->unique('qr_code');
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
