<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('productid'); 
            $table->string('sku')->nullable();
            $table->string('apmc_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('production')->nullable();
            $table->string('quality')->nullable();
            $table->string('udfield')->nullable();
            $table->string('quantity')->nullable();
            $table->string('productdescription')->nullable();
            $table->string('productreturnpolicy')->nulable();
            $table->string('featureimage')->nullable();
            $table->string('galleryimage')->nullable();
            $table->double('price');
            $table->double('discountprice'); 
            $table->integer('user_id')->nullable();
            $table->date('date')->nullable();
            $table->string('status')->nullable();
            $table->timestamps(); 
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
