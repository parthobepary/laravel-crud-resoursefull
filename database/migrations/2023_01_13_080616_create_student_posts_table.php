<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id')->uniqid();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->string('title');
            $table->string('slug');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_posts');
    }
};
