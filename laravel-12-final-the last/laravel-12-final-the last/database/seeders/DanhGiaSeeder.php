<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhGiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('danh_gias')->delete();
        DB::table('danh_gias')->truncate();

        $list_danh_gia = [
            'Sản phẩm này thực sự tuyệt vời!',
            'Tôi rất hài lòng với chất lượng của sản phẩm.',
            'Sản phẩm này đáng giá mọi xu tốn của tôi.',
            'Chất lượng và thiết kế sản phẩm đều rất ấn tượng.',
            'Tôi không thể tin nổi sản phẩm lại tốt đến vậy.',
            'Đây là một sản phẩm tuyệt vời cho giá trị của nó.',
            'Tôi đã mua nhiều sản phẩm khác nhau, nhưng sản phẩm này là tốt nhất.',
            'Sản phẩm này đáng để mọi người đầu tư.',
            'Tôi đã sử dụng sản phẩm này trong thời gian dài và nó vẫn như mới.',
            'Mỗi lần sử dụng sản phẩm, tôi đều cảm thấy hài lòng.',
            'Sản phẩm này không đáp ứng được mong đợi của tôi.',
            'Chất lượng của sản phẩm không như tôi mong đợi.',
            'Sản phẩm này gây thất vọng về hiệu suất.',
            'Tôi đã gặp vấn đề với sản phẩm sau một thời gian sử dụng.',
            'Sản phẩm này có vấn đề về độ bền.',
            'Tôi cảm thấy sản phẩm này không đáng giá số tiền tôi trả.',
            'Sản phẩm không hoạt động như quảng cáo.',
            'Tôi không hài lòng với chất lượng vật liệu sử dụng trong sản phẩm.',
            'Sản phẩm này không dễ sử dụng như tôi tưởng.',
            'Tôi đã gặp sự cố với sản phẩm và không có hỗ trợ tốt từ nhà sản xuất.',
        ];

        for($i = 0; $i < rand(200, 300); $i++) {
            $rand = rand(0, 19);
            DB::table('danh_gias')->insert([
                [
                    'noi_dung'      => $list_danh_gia[$rand],
                    'id_customer'   => rand(1, 6),
                    'id_san_pham'   => rand(1, 30),
                    'sao'           => $rand > 10 ? rand(4, 5) : rand(1, 3),
                    'created_at'    => Carbon::now()->toDateTimeString(),
                ]
            ]);
        }
    }
}
