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
        if (!Schema::hasTable('visitors')) {
            Schema::create('visitors', function (Blueprint $table) {
                $table->id();
                $table->string('ip_address', 64)->unique();
                $table->string('country')->nullable();
                $table->string('country_code', 12)->nullable();
                $table->string('region')->nullable();
                $table->string('city')->nullable();
                $table->string('isp')->nullable();
                $table->string('timezone')->nullable();
                $table->string('browser')->nullable();
                $table->string('os')->nullable();
                $table->string('device')->nullable();
                $table->text('user_agent')->nullable();
                $table->integer('total_visits')->default(1);
                $table->string('last_page')->nullable();
                $table->json('pages_visited')->nullable();
                $table->json('forms_submitted')->nullable();
                $table->timestamp('first_visited_at')->nullable();
                $table->timestamp('last_visited_at')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
