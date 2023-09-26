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
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->integer('num_of_classroom');
            $table->integer('unavailable_classroom');
            $table->integer('combined_classroom');
            $table->string('electricity');
            $table->string('school_amenities');
            $table->string('extra_curricular_activities');
            $table->string('water');
            $table->string('toilet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};
