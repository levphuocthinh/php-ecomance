<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wishlists')->delete();

        DB::table('wishlists')->truncate();

        DB::table('wishlists')->insert([
            [
                'id_customer' => 1,
                'id_san_pham' => 30
            ],
            [
                'id_customer' => 1,
                'id_san_pham' => 15
            ],
            [
                'id_customer' => 1,
                'id_san_pham' => 27
            ],
            [
                'id_customer' => 2,
                'id_san_pham' => 4
            ],
            [
                'id_customer' => 2,
                'id_san_pham' => 20
            ],
            [
                'id_customer' => 2,
                'id_san_pham' => 28
            ],
            [
                'id_customer' => 3,
                'id_san_pham' => 5
            ],
            [
                'id_customer' => 3,
                'id_san_pham' => 12
            ],
            [
                'id_customer' => 3,
                'id_san_pham' => 29
            ],
            [
                'id_customer' => 4,
                'id_san_pham' => 3
            ],
            [
                'id_customer' => 4,
                'id_san_pham' => 11
            ],
            [
                'id_customer' => 4,
                'id_san_pham' => 21
            ],
            [
                'id_customer' => 5,
                'id_san_pham' => 7
            ],
            [
                'id_customer' => 5,
                'id_san_pham' => 16
            ],
            [
                'id_customer' => 5,
                'id_san_pham' => 19
            ],
            [
                'id_customer' => 6,
                'id_san_pham' => 6
            ],
            [
                'id_customer' => 6,
                'id_san_pham' => 17
            ],
            [
                'id_customer' => 6,
                'id_san_pham' => 23
            ],
        ]);

        // $products = range(1, 30);

        // for ($i = 1; $i <= 6; $i++) {
        //     $customerProducts = array_rand($products, 3);

        //     foreach ($customerProducts as $product) {
        //         DB::table('wishlists')->insert([
        //             'id_customer' => $i,
        //             'id_san_pham' => $products[$product],
        //         ]);
        //     }
        // }

    }
}
