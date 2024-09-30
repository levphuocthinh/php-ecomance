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
        Schema::create('tmp_nhap_khos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_partner');
            $table->integer('id_san_pham');
            $table->double('so_luong')->default(1);
            $table->double('don_gia')->default(0);
            $table->double('thanh_tien')->default(0);
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tmp_nhap_khos');
    }
};
