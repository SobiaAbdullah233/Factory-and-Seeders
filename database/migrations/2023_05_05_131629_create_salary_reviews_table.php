<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Salary_Reviews:

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('salary_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employ_id')->constrained('employees');
            $table->date('last_rewiew');
            $table->date('comimg_rewiew');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salary_reviews');
    }
};
