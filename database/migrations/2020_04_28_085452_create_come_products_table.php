<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComeProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('come_products', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->double('number');
            $table->double('number_left');
            $table->double('price_per');
            $table->dateTime('NSX');
            $table->dateTime('HSD');
            $table->integer('user_id');
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
        Schema::dropIfExists('come_products');
    }
}
