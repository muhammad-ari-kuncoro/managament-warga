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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rt_id');
            $table->string('judul_event');
            $table->text('deskripsi');
            $table->string('foto');
            $table->string("tanggal_event");
            $table->string("jam_mulai");
            $table->string("jam_selesai");
            $table->timestamps();

            $table->foreign('rt_id')->references('id')->on('rts')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
