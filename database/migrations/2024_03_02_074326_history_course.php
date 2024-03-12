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
        Schema::create('history_course', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users_course');
            $table->integer('count_lesson');
            $table->string('comment_teacher');
            $table->timestamps();
            $table->foreign('id_users_course')
                 ->references('id')->on('course_user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
