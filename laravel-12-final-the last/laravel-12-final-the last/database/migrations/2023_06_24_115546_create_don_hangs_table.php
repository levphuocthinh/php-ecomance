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
        Schema::create('don_hangs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_partner');
            $table->integer('id_customer');
            $table->integer('tong_tien')->nullable();
            $table->integer('tinh_trang');
            $table->string('ten_nguoi_nhan');
            $table->string('dia_chi');
            $table->string('so_dien_thoai');
            $table->string('ghi_chu')->nullable();
            $table->string('ma_don_hang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_hangs');
    }
};
