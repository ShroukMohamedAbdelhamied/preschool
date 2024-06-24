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
            $table->timestamps();
            $table->softDeletes(); // Adds 'deleted_at' column for soft deletes
        });

        Schema::table('teachers', function (Blueprint $table) {
            if (!Schema::hasColumn('teachers', 'deleted_at')) {
                $table->timestamp('deleted_at')->nullable()->after('updated_at');
            }
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
