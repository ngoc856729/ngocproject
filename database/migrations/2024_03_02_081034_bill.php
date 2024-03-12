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
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_oders');
            $table->string('code');
            $table->integer('status');
            $table->integer('price');
            $table->string('payment_method');
            $table->integer('total');
            $table->timestamps();
            $table->foreign('id_oders')
                 ->references('id')->on('oders')->onDelete('cascade');
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
