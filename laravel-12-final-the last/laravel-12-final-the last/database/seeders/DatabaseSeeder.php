<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\NhapKho;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Schema::disableForeignKeyConstraints();
        $this->call(ChuyenMucSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(SanPhamSeeder::class);
        $this->call(KhachHangSeeder::class);
        $this->call(NhapKhoSeeder::class);
        $this->call(TinTucSeeder::class);
        $this->call(DonHangSeeder::class);
        $this->call(DiaChiSeeder::class);
        $this->call(DanhGiaSeeder::class);
        $this->call(WishlistSeeder::class);
    }
}
