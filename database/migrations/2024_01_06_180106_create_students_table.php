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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('class');
            $table->string('place_of_birth')->nullable();
            $table->string('nationality');
            $table->foreignId('lga_id')->references('id')->on('lgas')->onDelete('cascade');
            $table->foreignId('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->string('home_address');
            $table->string('guardian_name');
            $table->string('guardian_phone');
            $table->string('attendance_percentage');
            $table->string('performance_percentage');
            $table->string('special_needs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
