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
        Schema::create('_guru', function (Blueprint $table) {
            $table->unsignedBigInteger('guru_id')->primary()->autoIncrement();
            $table->string('guru_name');
            $table->string('guru_code')->nullable();
            $table->string('nip')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('phone number')->nullable();
            $table->date('join_date')->nullable();
            $table->boolean('is_active')->nullable();
            $table->unsignedBigInteger('subject_id')->nullable()->foreign();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_guru');
    }
};
