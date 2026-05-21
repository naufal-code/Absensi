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
        Schema::create('absensi', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('user_id');

            $table->unsignedBigInteger('kegiatan_id');

            $table->enum('status', ['hadir', 'izin', 'sakit']);

            $table->text('alasan')->nullable();

            $table->date('tanggal_absen');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi');
    }
};