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
            $table->string('grup')->nullable();
            $table->string('judul')->nullable();
            $table->string('category');
            $table->string('album')->nullable();
            $table->text('desc')->nullable();
            $table->string('image1');
            $table->string('desc1');
            $table->string('image2')->nullable();
            $table->string('desc2')->nullable();
            $table->string('image3')->nullable();
            $table->string('desc3')->nullable();
            $table->string('image4')->nullable();
            $table->string('desc4')->nullable();
            $table->string('image5')->nullable();
            $table->string('desc5')->nullable();
            $table->string('image6')->nullable();
            $table->string('desc6')->nullable();
            $table->string('image7')->nullable();
            $table->string('desc7')->nullable();
            $table->bigInteger('price_ver');
            $table->bigInteger('price_full')->nullable();
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
