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
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title');
            $table->text('meta_description');
            $table->string('meta_url');
            $table->string('meta_keywords')->nullable();
            $table->string('meta_site_name');
            $table->string('meta_image_alt');
            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_url')->nullable();
            $table->string('og_image')->nullable();
            $table->string('og_type')->nullable();
            $table->string('twitter_title')->nullable();
            $table->text('twitter_description')->nullable();
            $table->string('twitter_image')->nullable();
            $table->string('canonical')->nullable();
            $table->string('meta_robots')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seos');
    }
};
