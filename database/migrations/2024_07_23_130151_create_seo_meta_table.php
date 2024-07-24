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
        Schema::create('seo_metas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->nullable(); // thêm trường employee_id
            $table->unsignedBigInteger('post_id')->nullable(); // nếu bạn vẫn muốn giữ lại post_id
            $table->unsignedBigInteger('recruitment_id')->nullable(); // nếu bạn vẫn muốn giữ lại recruitment_id
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_url')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_site_name')->nullable();
            $table->string('meta_image_alt')->nullable();
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

            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade'); // quan hệ với employe
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('recruitment_id')->references('id')->on('recruitments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_metas');
    }
};
