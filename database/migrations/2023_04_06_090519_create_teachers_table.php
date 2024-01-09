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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone');
            $table->string('gender');
            $table->string('age_range');
            $table->string('status');
            $table->string('education');
            $table->string('experience_school');
            $table->string('subject');
            $table->string('certification');
            $table->string('competency');
            $table->string('ict_level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
