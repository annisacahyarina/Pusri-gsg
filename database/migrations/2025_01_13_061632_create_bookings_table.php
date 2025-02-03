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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); //id
            $table->string('name'); //nama penyewa
            $table->string('address'); //alamat penyewa
            $table->string('email'); //email penyewa
            $table->string('phone'); //no. telpon penyewa
            $table->date('booking_date'); //tanggal pemesanan
            $table->string('booking_type'); //jenis pesanan (wo+gedung/gedung saja)
            $table->string('status')->default('Belum Approve'); //status approve/belum approve
            $table->string('image', 300); //bukti pembayaran
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
