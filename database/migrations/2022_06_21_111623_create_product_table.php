<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
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
            $table->string('ProductName')->nullable(false);
            $table->string('ProductImageURL')->nullable(false);
            $table->string('ProductDescription')->nullable(false);
            $table->string('ProductIngredients');
            $table->unsignedInteger('ProductPrice')->nullable(false);
            $table->unsignedInteger('ProductStock')->nullable(false);
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
