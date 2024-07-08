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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('thumbnail', 255)->nullable();
            $table->string('title', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->text('summary');
            $table->text('content', 255)->nullable();
            $table->integer('view_count')->default(0);
            $table->boolean('active')->default(true);
            $table->boolean('is_approve')->default(false);
            $table->boolean('is_feature')->default(false);
            $table->boolean('is_edit_request')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
