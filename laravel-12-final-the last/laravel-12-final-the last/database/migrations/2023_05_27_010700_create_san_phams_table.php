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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ten_san_pham');
            $table->string('slug_san_pham');
            $table->integer('so_luong_nhap')->default(0);
            $table->integer('so_luong_ban')->default(0);
            $table->integer('id_partner')->default(1);
            $table->text('hinh_anh');
            $table->integer('tinh_trang');
            $table->string('mo_ta_ngan');
            $table->longText('mo_ta_chi_tiet');
            $table->integer('gia_ban');
            $table->integer('gia_khuyen_mai')->nullable();
            $table->integer('id_chuyen_muc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
