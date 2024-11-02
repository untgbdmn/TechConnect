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
        Schema::create('_kelas', function (Blueprint $table) {
            $table->unsignedBigInteger('kelas_id')->primary()->autoIncrement();
            $table->string('nama_kelas');
            $table->string('tingkat_kelas')->nullable();
            $table->string('kelas_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_kelas');
    }
};
