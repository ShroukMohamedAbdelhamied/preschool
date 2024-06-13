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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('classname', 100);
            $table->string('nameteacher', 100);
            $table->string('titleteacher', 100);
            $table->string('imageteacher', 100)->nullable(); 
            $table->tinyInteger('price');
            $table->tinyInteger('childage');
            $table->time('time');
            $table->tinyInteger('Capacity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
