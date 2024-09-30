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
        Schema::create('nhap_khos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_partner');
            $table->string('ma_phieu_nhap');
            $table->dateTime('ngay_nhap');
            $table->integer('id_san_pham');
            $table->string('ten_san_pham');
            $table->double('so_luong_nhap');
            $table->double('don_gia_nhap');
            $table->double('thanh_tien_nhap');
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhap_khos');
    }
};
