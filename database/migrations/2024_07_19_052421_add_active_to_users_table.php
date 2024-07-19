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
        Schema::table('users', function (Blueprint $table) {
            //
            Schema::table('users', function (Blueprint $table) {
                $table->boolean('active')->default(1); // Thêm cột active với giá trị mặc định là 1 (true)
                $table->string('phone');
                $table->string('photo')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('active'); // Xóa cột active nếu rollback migration
                $table->dropColumn('phone'); // Xóa cột active nếu rollback migration
                $table->dropColumn('photo'); // Xóa cột active nếu rollback migration
            });
        });
    }
};
