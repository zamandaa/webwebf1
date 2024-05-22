
php
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
        Schema::create('jadwal_matakuliah', function (Blueprint $table) {
            $table->id();
            $table->string('npm', 11);
            $table->foreign('npm')->references('npm')->on('mahasiswa')->onDelete('cascade');
            $table->unsignedBigInteger('id_prodi');
            $table->foreign('id_prodi')->references('id')->on('prodi')->onDelete('cascade');
            $table->unsignedBigInteger('id_matakuliah');
            $table->foreign('id_matakuliah')->references('id')->on('matakuliah')->onDelete('cascade');
            $table->time('jam');
            $table->string('ruangan', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_matakuliah');
    }
};
