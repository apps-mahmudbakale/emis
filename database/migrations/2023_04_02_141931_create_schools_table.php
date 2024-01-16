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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('location')->nullable();
            $table->string('type_school')->nullable();
            $table->string('education_level')->nullable();
            $table->integer('state_id');
            $table->integer('lga_id');
            $table->integer('no_of_students')->nullable();
            $table->integer('no_of_staff')->nullable();
            $table->integer('no_of_boys')->nullable();
            $table->integer('no_of_girls')->nullable();
            $table->string('agency')->nullable();
            $table->string('gender')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
