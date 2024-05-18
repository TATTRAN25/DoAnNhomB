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
<<<<<<<< HEAD:DoAn/database/migrations/2024_05_10_070503_create_categories_table.php
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('category_id');
            $table->string('category_name', 100);
            $table->text('description')->nullable();
========
        Schema::create('users', function (Blueprint $table) {

            $table->bigIncrements('user_id');
            $table->string('user_name', 100);
            $table->string('email', 255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('is_admin')->default(0);
            $table->rememberToken();
>>>>>>>> laravel-10x/5-magiamgia:DoAn/database/migrations/2014_10_12_000000_create_users_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};