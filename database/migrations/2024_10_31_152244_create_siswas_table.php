<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_siswa', function (Blueprint $table) {
            $table->unsignedBigInteger('siswa_id')->primary()->autoIncrement();
            $table->unsignedBigInteger('kelas_id');
            $table->string('nama_siswa');
            $table->string('no_induk')->nullable();
            $table->string('no_induk_nasional')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $table->string('alamat')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('agama')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_siswa');
    }
};
