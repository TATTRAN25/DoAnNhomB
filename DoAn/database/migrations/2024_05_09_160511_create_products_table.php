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
            $table->id('product_id');
            $table->string('product_name', 255)->nullable();
            $table->string('product_photo', 100)->nullable();
            $table->string('product_detail', 255)->nullable();
            $table->integer('quantity')->nullable();
            $table->string('status', 100)->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('voucher_id')->nullable();
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
