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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('images')->nullable();
            $table->string('street_address')->nullable();
            $table->string('address_locality')->nullable();
            $table->string('address_region')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('address_country')->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('url')->nullable();
            $table->string('price_range')->nullable();
            $table->string('telephone')->nullable();
            $table->text('opening_hours')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
