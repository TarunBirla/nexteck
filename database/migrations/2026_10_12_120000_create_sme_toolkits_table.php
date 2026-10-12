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
        Schema::create('sme_toolkits', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('company_name');
            $table->string('client_email');
            $table->string('phone')->nullable();
            $table->json('diagnostic_data')->nullable();
            $table->json('benchmark_data')->nullable();
            $table->json('competitor_data')->nullable();
            $table->json('opportunity_data')->nullable();
            $table->json('sop_data')->nullable();
            $table->json('kpi_data')->nullable();
            $table->string('status')->default('Submitted');
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sme_toolkits');
    }
};
