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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->timestamps();
            $table->string('nama_mhs', 30);
            $table->char('nim', 9)->primary(); // Menggunakan kolom nim sebagai primary key
            $table->string('mail_mhs', 30)->unique();
            $table->enum('role', ['mahasiswa', 'admin']);
            $table->string('telp_mhs', 13)->unique();
            $table->string('password', 255)->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
