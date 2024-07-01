<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teachername', 100);
            $table->string('title', 100);
            $table->string('email', 100);
            $table->string('password', 100);
            $table->string('facebook', 200);
            $table->string('twitter', 100);
            $table->string('instagram', 100);
            $table->string('teacherimage', 100)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
