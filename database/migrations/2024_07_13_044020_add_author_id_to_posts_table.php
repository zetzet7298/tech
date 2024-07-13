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
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('author_id')->nullable(); // thêm cột author_id
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade'); // tạo khóa ngoại nếu cần thiết
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['author_id']); // xóa khóa ngoại nếu cần thiết
            $table->dropColumn('author_id'); // xóa cột author_id
        });
    }
};
