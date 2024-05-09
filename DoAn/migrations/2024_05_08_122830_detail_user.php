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
        Schema::create('detail_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->date('date');
            $table->string('address', 255);
            $table->char('sex', 20)->nullable();
            // Thêm phương thức enum và truyền vào một mảng các giá trị sex
            $table->enum('sex', ['Nam', 'Nữ', 'Giới tính khác'])->nullable();
            $table->string('user_image', 100);
            $table->string('full_name', 100);
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_users');
    }
};
