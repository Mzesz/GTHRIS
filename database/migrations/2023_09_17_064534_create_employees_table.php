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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('suffix')->nullable();
            $table->string('nickname')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('phone')->nullable();
            $table->foreignId('gender_id')->constrained()->cascadeOnDelete();
            $table->foreignId('marital_status_id')->constrained()->cascadeOnDelete();
            $table->string('blood_type')->nullable();
            $table->string('religion')->nullable();
            $table->string('nationality')->nullable();
            $table->double('height')->nullable();
            $table->double('weight')->nullable();
            $table->foreignId('department_id')->constrained()->cascadeOnDelete();
            $table->foreignId('country_id')->constrained()->cascadeOnDelete();
            $table->foreignId('state_id')->constrained()->cascadeOnDelete();
            $table->foreignId('city_id')->constrained()->cascadeOnDelete();
            $table->char('zip_code', 10);
            $table->datetime('birth_date')->nullable();
            $table->datetime('date_hired')->nullable();

           
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
