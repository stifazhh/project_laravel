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
        Schema::create('t_percobaan', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_antrian');
            $table->integer('nik');
            $table->integer('nomor_pendaftaran');
            $table->string('nama_lengkap', 100);
            $table->integer('tanggal_lahir');
            $table->string('jenis_kelamin', 1);
            $table->integer('umur');
            $table->string('agama', 100);
            $table->string('kebangsaan', 100);
            $table->string('alamat', 100);
            $table->string('status', 100);
            $table->string('penghargaan', 100);
            $table->integer('nomor_telepon');
            $table->string('mobile', 100);
            $table->string('media_sosial');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_percobaan');
    }
};
