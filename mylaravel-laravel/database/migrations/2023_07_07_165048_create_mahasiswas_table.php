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
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('akun_id');
            $table->foreign('akun_id')->references('id')->on('akuns');
            $table->string('nama_mhs',30);
            $table->char('nim',9)->unique();
            $table->string('mail_mhs',30)->unique()->nullable();
            $table->string('telp_mhs',13)->unique();
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
