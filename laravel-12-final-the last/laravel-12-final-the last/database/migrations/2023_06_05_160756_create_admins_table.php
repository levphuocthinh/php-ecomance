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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('ho_lot');
            $table->string('ten');
            $table->string('email');
            $table->string('so_dien_thoai');
            $table->string('dia_chi');
            $table->string('password');
            $table->integer('is_active')->default(1);
            $table->string('hash_reset')->nullable();
            $table->integer('id_rule')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
