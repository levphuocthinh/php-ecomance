<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chi_tiet_don_hangs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_partner');
            $table->integer('id_customer');
            $table->integer('id_don_hang');
            $table->integer('id_san_pham');
            $table->integer('so_luong_mua');
            $table->integer('don_gia_mua');
            $table->integer('thanh_tien_mua');
            $table->string('ten_san_pham');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_don_hangs');
    }
};
