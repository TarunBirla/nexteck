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
        if (!Schema::hasTable('industries')) {
            Schema::create('industries', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug')->unique();
                $table->string('tagline')->nullable();
                $table->text('short_desc')->nullable();
                $table->longText('description')->nullable();
                $table->string('image')->nullable();
                $table->json('highlights')->nullable();
                $table->text('why_nexteck')->nullable();
                $table->json('keywords')->nullable();
                $table->string('seo_title')->nullable();
                $table->text('meta_desc')->nullable();
                $table->integer('sort_order')->default(1);
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('industries');
    }
};
