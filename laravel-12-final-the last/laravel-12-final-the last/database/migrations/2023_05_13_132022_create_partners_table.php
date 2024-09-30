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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('ho_lot');
            $table->string('ten');
            $table->date('ngay_sinh');
            $table->string('so_dien_thoai');
            $table->string('dia_chi');
            $table->string('ma_so_thue')->nullable();
            $table->string('ten_cong_ty')->nullable();
            $table->string('anh_minh_chung')->nullable();
            $table->string('email');
            $table->string('password');
            $table->integer('tinh_trang')->comment('0: Chưa kích hoạt, 1: Hoạt động, 2: Bị khóa');
            $table->double('tong_tien_da_ban')->default(0);
            $table->double('tong_don_hang_da_ban')->default(0);
            $table->double('tong_don_hang_doi_tra')->default(0);
            $table->string('hash_reset')->nullable();
            $table->string('hash_active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
