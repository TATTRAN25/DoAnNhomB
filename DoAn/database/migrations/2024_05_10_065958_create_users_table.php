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
        Schema::create('users', function (Blueprint $table) {
<<<<<<< HEAD
<<<<<<<< HEAD:DoAn/database/migrations/2024_05_10_065958_create_users_table.php
========

>>>>>>>> laravel-10x/2.1-register:DoAn/database/migrations/2024_05_13_053615_create_users_table.php
=======
<<<<<<<< HEAD:DoAn/database/migrations/2024_05_13_053615_create_users_table.php

========
>>>>>>>> laravel-10x/2.2-account:DoAn/database/migrations/2024_05_10_065958_create_users_table.php
>>>>>>> laravel-10x/2.2-account
            $table->bigIncrements('user_id');
            $table->string('user_name', 100);
            $table->string('email', 255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('is_admin')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};