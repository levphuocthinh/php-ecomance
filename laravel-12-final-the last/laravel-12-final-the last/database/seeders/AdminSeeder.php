<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->delete();

        DB::table('admins')->truncate();

        DB::table('admins')->insert([
            [
                'ho_lot'            => 'Boss',
                'ten'               => 'Admis
                n',
                'email'             => 'quoclongdng@gmail.com',
                'so_dien_thoai'     => '0123456789',
                'dia_chi'           => '202 Võ Nguyên Giáp',
                'password'          => bcrypt('12345678'),
                'is_active'         => 1,
                'hash_reset'        => '',
                'id_rule'           => 0,
            ],
        ]);
    }
}
