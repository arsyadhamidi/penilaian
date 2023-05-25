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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->increments('id_peserta');
            $table->string('nama_peserta')->nullable();
            $table->string('email_peserta')->nullable();
            $table->string('asal_peserta')->nullable();
            $table->string('kategori_peserta')->nullable();
            $table->string('judul_peserta')->nullable();
            $table->string('status_peserta')->nullable();
            $table->string('poster_peserta')->nullable();
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
        Schema::dropIfExists('pesertas');
    }
};
