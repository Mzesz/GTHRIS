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
        Schema::create('educational_backrounds', function (Blueprint $table) {
            $table->id();
            $table->string('elementary')->nullable();
            $table->string('elementary_year')->nullable();
            $table->string('middle_school')->nullable();
            $table->string('middle_school_year')->nullable();
            $table->string('high_school')->nullable();
            $table->string('high_school_year')->nullable();
            $table->string('tertiary')->nullable();
            $table->string('tertiary_year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educational_backrounds');
    }
};
