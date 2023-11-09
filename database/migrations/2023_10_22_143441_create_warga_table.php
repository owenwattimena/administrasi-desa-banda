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
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            $table->string('no_kk');
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('status_hubungan_keluarga');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('status_perkawinan');
            $table->string('pekerjaan');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('alamat');
            // $table->char('rw', 3);
            $table->unsignedBigInteger('id_rt');
            $table->foreign('id_rt')->references('id')->on('rukun_tetangga');
            $table->timestamp('confirmed_at')->nullable();
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
        Schema::dropIfExists('warga');
    }
};
