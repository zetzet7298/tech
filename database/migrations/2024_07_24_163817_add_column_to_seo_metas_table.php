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
        Schema::table('seo_metas', function (Blueprint $table) {
            //
            $table->string('fb_app_id')->nullable()->after('meta_robots');
            $table->string('og_locale')->nullable()->after('fb_app_id');
            $table->string('og_site_name')->nullable()->after('fb_app_id');
            $table->string('og_image_secure_url')->nullable()->after('og_image');
            $table->string('fb_admins')->nullable()->after('og_image_secure_url');
            $table->string('og_image_type')->default('image/jpeg')->after('fb_admins');
            $table->string('twitter_card')->default('summary')->after('twitter_image');
            $table->string('twitter_site')->nullable()->after('twitter_card');
            $table->string('twitter_creator')->nullable()->after('twitter_site');
            $table->string('alternate_hreflang')->nullable()->after('canonical');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('seo_metas', function (Blueprint $table) {
            //
            $table->dropColumn('fb_app_id');
            $table->dropColumn('og_locale');
            $table->dropColumn('og_site_name');
            $table->dropColumn('og_image_secure_url');
            $table->dropColumn('fb_admins');
            $table->dropColumn('og_image_type');
            $table->dropColumn('twitter_card');
            $table->dropColumn('twitter_site');
            $table->dropColumn('twitter_creator');
            $table->dropColumn('alternate_hreflang');
        });
    }
};
