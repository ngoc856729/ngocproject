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
        Schema::create('oders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_course');
            $table->integer('status');
            $table->integer('price');
            $table->string('payment_method');
            $table->integer('total');
            $table->integer('create_by_id');
            $table->string('code');
            $table->string('note');
            $table->timestamps();
            $table->foreign('id_course')
                 ->references('id')->on('course')->onDelete('cascade');
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
