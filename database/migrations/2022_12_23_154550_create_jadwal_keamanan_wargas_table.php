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
        Schema::create('jadwal_keamanan_wargas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jadwal_keamanan_id');
            $table->unsignedBigInteger('warga_id');
            $table->timestamps();


            $table->foreign('jadwal_keamanan_id')->references('id')->on('jadwal_keamanans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('warga_id')->references('id')->on('wargas')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_keamanan_wargas');
    }
};
