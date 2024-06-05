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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nik','16');
            $table->string('nama_pasien');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin',['P','L']);
            $table->text('alamat');
            $table->string('telepon');
            $table->enum('status',['rawat jalan,','inap','keluar']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
};
