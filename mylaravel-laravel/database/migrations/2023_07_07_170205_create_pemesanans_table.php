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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('tglpesan');
            $table->integer('total_pesanan');
            $table->char('nim', 9); // Menggunakan kolom 'nim' sebagai foreign key
            $table->foreign('nim')->references('nim')->on('mahasiswas'); // Mengacu pada kolom 'nim' di tabel 'mahasiswas'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
