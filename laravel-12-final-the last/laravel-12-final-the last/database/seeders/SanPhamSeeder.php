<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('san_phams')->delete();

        DB::table('san_phams')->truncate();

        DB::table('san_phams')->insert([
            //partner 1
            [
                'ten_san_pham'      => 'Tủ lạnh Sharp Inverter 150 lít SJ-X176E-SL',
                'slug_san_pham'     => Str::slug('Tủ lạnh Sharp Inverter 150 lít SJ-X176E-SL'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '1',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/1943/145456/tu-lanh-sharp-sj-x176e-sl-11-300x300.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => '-Kiểu tủ: Ngăn đá trên
                -Dung tích sử dụng: 150 lít - 2 - 3 người',
                'mo_ta_chi_tiet'    => 'Tủ lạnh Sharp Inverter 150 lít SJ-X176E-SL với thiết kế màu bạc tinh tế, kích thước nhỏ gọn sẽ dễ dàng kết hợp với bất kì kiểu không gian nội thất nào của gia đình, đồng thời bạn cũng sẽ không phải lo lắng tủ chiếm quá nhiều diện tích.

                Được trang bị công nghệ J-Tech Inverter, chiếc tủ lạnh 2 cửa này không chỉ mang đến khả năng vận hành êm ái, làm lạnh ổn định với 36 cấp độ làm lạnh mà nó còn giúp bạn không còn phải quá lo lắng về chi phí điện năng hàng tháng.

                Bộ khử mùi phân tử bạc Nano Ag+ xóa tan nỗi ám ảnh về mùi hôi khó chịu trong tủ lạnh
                Với bộ khử mùi phân tử bạc Nano Ag+, tủ lạnh sẽ sử dụng các phân tử bạc có kích thước siêu nhỏ để tiêu diệt vi khuẩn và tác nhân gây mùi hôi khó chịu phát sinh trong tủ lạnh. Giờ đây, bạn không còn bị ám ảnh về mùi hôi thực phẩm mỗi lần mở tủ lạnh nữa.

                Tính năng làm đá nhanh của tủ lạnh Sharp Inverter mang đến cho bạn những viên đá mát lạnh
                Nhờ tính năng làm đá nhanh, tủ lạnh Sharp Inverter đáp ứng nhu cầu sử dụng đá cho gia đình bạn.

                Sử dụng chất liệu kính chịu lực cho kệ chứa, tủ lạnh Sharp giúp bạn thoải mái chứa nhiều thực phẩm bảo quản lên kệ với khối lượng lên đến 100 kg mà không lo kệ bị hư hỏng, nứt, vỡ.
                ',
                'gia_ban'           => 59,
                'gia_khuyen_mai'    => 49,
                'id_chuyen_muc'     => 11,
            ],
            [
                'ten_san_pham'      => 'Tủ lạnh Sharp Inverter 572 lít SJ-FX640V-SL ',
                'slug_san_pham'     => Str::slug('Tủ lạnh Sharp Inverter 572 lít SJ-FX640V-SL '),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '1',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/1943/237924/sharp-sj-fx640v-sl50-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Kiểu tủ:
                Multi Door
                Dung tích sử dụng:

                572 lít - Trên 5 người',
                'mo_ta_chi_tiet'    => 'Tủ lạnh Sharp Inverter 572 lít SJ-FX640V-SL sẽ bảo quản thực phẩm tốt nhờ khả năng làm lạnh đồng đều của công nghệ Hybrid cooling. Công nghệ này sẽ giúp khí lạnh được phân bố đều mọi ngóc ngách, làm thực phẩm để ở vị trí nào cũng được bảo quản đúng mức.

                Làm đông nhanh với khả năng đưa nhiệt độ ngăn đông xuống -24⁰C
                Đặc biệt, tủ lạnh này sẽ giữ thực phẩm tươi sống được tươi ngon do ngăn đông có khả năng giảm xuống -24⁰C nhanh chóng.

                Tiết kiệm điện năng, vận hành êm ái nhờ công nghệ J-tech
                Nhờ công nghệ J-tech mà chiếc tủ lạnh Sharp sẽ tiết kiệm điện năng tối ưu. Trong quá trình sử dụng, máy luôn vận hành êm ái tạo sự thoải mái cho người dùng.

                Thiết kế tủ lạnh Multi Door sang trọng, mặt kim loại chống bám bẩn
                Với thiết kế kiểu Multi Door 4 cánh mang đến thiết kế sang trọng cho không gian. Sản phẩm có những ngăn để thực phẩm riêng, nên tránh thất thoát hơi lạnh hiệu quả. Bề mặt cánh tủ có mặt kim loại chống bám bẩn, an toàn khi dùng.

                Thực phẩm luôn tươi ngon khi để trong ngăn rau quả giữ ẩm
                Tủ lạnh Sharp Inverter có ngăn rau củ cân bằng độ ẩm, giúp rau củ luôn nhận có độ ẩm phù hợp, giúp thực phẩm luôn tươi ngon và mọng nước trong quá trình bảo quản.',
                'gia_ban'           => 28,
                'gia_khuyen_mai'    => 28,
                'id_chuyen_muc'     => 9,
            ],
            [
                'ten_san_pham'      => 'Tủ lạnh Samsung Inverter 276 lít RB27N4170BU/SV',
                'slug_san_pham'     => Str::slug('Tủ lạnh Samsung Inverter 276 lít RB27N4170BU/SV'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '1',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/1943/220305/samsung-rb27n4170bu-sv-1-300x300.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Kiểu tủ:

                Ngăn đá dưới
                Dung tích sử dụng:

                276 lít - 3 - 4 người',
                'mo_ta_chi_tiet'    => 'Công nghệ Digital Inverter mang đến khả năng làm lạnh vô cùng ổn định nhưng vẫn tiết kiệm điện năng và hoạt động êm ái.

                Công nghệ làm lạnh dạng vòm trên chiếc tủ lạnh 2 cánh này sẽ mang luồng khí lạnh đi khắp từng ngóc ngách, luôn đảm bảo thực phẩm của bạn nhận được hơi lạnh thích hợp. Giữ thực phẩm luôn tươi trong thời gian bảo quản trong tủ lạnh.

                Lọc sạch không khí, mùi hôi khó chịu với bộ lọc than hoạt tính
                Bộ lọc than hoạt tính có khả năng thanh lọc không khí, loại bỏ mùi hôi, trả lại luồng không khí tươi mát, trong lành cho thực phẩm được tươi mới dài lâu và không bị lẫn mùi khó chịu.

                Ngăn đông mềm -1 độ C Optimal Fresh Zone tạo nên môi trường lý tưởng để bạn có thể bảo quản thực phẩm mà không cần phải lo lắng là thực phẩm bị khô, mất nước do bị đông đá hay không. Ngoài ra, bạn cũng không cần phải rã đông thực phẩm trước khi chế biến, giúp tiết kiệm một khoảng kha khá thời gian cho việc rã đông.',
                'gia_ban'           => 95,
                'gia_khuyen_mai'    => 79,
                'id_chuyen_muc'     => 10,
            ],
            [
                'ten_san_pham'      => 'Máy lạnh tủ đứng LG Inverter 3 HP ZPNQ30GR5E0',
                'slug_san_pham'     => Str::slug('Máy lạnh tủ đứng LG Inverter 3 HP ZPNQ30GR5E0'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '1',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/2002/299812/may-lanh-tu-dung-lg-zpnq30gr5e0-thumb-1-550x160.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại máy:

                1 chiều (chỉ làm lạnh)Có Inverter
                Công suất làm lạnh:

                3 HP - 30.000 BTU',
                'mo_ta_chi_tiet'    => '- Máy lạnh tủ đứng LG ZPNQ30GR5E0 được thiết kế dạng hình chữ nhật đứng với chất liệu vỏ máy cao cấp có độ bền tốt và giảm thiểu trầy xước.

                - Kiểu thiết kế hình hộp chữ nhật quen thuộc với chất liệu vỏ cứng cáp, bền màu và chịu được sự tác động của môi trường.

                - Dàn tản nhiệt lá nhôm được phủ lớp Gold Fin màu vàng có khả năng chống ăn mòn, nhờ đó có thể vận hành ở nhiệt độ ngoài trời trong khoảng -15℃ đến 50℃, đồng thời góp phần duy trì tuổi thọ máy tốt hơn.

                - Ống dẫn gas bằng đồng ở cả dàn nóng và dàn lạnh, có độ bền tốt và góp phần hỗ trợ làm lạnh sâu, nhanh.

                - Sử dụng gas R32 thân thiện với môi trường và cho hiệu quả làm lạnh cao, tiết kiệm chi phí năng lượng.

                Máy lạnh tủ đứng LG Inverter 3 HP ZPNQ30GR5E0 - Thiết kế sang trọng, chất liệu vỏ máy cao cấp, bền ',
                'gia_ban'           => 39,
                'gia_khuyen_mai'    => 30,
                'id_chuyen_muc'     => 12,
            ],
            [
                'ten_san_pham'      => 'Máy lạnh âm trần Panasonic Inverter 5 HP S-3448PU3HA/U-48PRH1H5',
                'slug_san_pham'     => Str::slug('Máy lạnh âm trần Panasonic Inverter 5 HP S-3448PU3HA/U-48PRH1H5'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '1',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/2002/306964/product-306964-090523-120039-550x160.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại máy:

                1 chiều (chỉ làm lạnh)Có Inverter
                Công suất làm lạnh:

                5 HP - 47800 BTU',
                'mo_ta_chi_tiet'    => 'Có kiểu thiết kế hình vuông với vỏ máy được làm bằng chất liệu nhựa cao cấp màu trắng, chống rạn nứt và giảm thiểu tối đa tình trạng bám bụi.

                - Có kiểu hình hộp chữ nhật nằm ngang quen thuộc, vỏ dàn nóng được làm bằng chất liệu hợp kim chống gỉ sét và cho khả năng chịu được nhiệt độ không khí ngoài trời lên đến 52°C.

                - Dàn lá tản nhiệt bên trong làm bằng nhôm, ống dẫn gas bằng đồng nguyên chất có độ bền cao, đồng thời hỗ trợ máy lạnh có hiệu suất hoạt động cao và ổn định.

                - Với công suất 5 HP, chiếc máy lạnh âm trần Panasonic phù hợp cho không gian lắp đặt từ 55 - 75m².

                - Trang bị chế độ làm lạnh nhanh Turbo: Sau khi kích hoạt, máy nén sẽ hoạt động với công suất tối đa, để làm giảm nhiệt độ trong căn phòng nhanh chóng, giúp cho người dùng tận hưởng được bầu không gian mát lạnh chỉ trong thời gian ngắn. Chưa hết, quạt Turbo được thiết kế lưỡi xoáy 3D, giúp thổi luồng gió mạnh và tản rộng 360 độ mà vẫn đảm bảo cảm giác dễ chịu cho người dùng.',
                'gia_ban'           => 65,
                'gia_khuyen_mai'    => 60,
                'id_chuyen_muc'     => 13,
            ],
            [
                'ten_san_pham'      => 'Máy lạnh Panasonic Inverter 1 HP CU/CS-XU9ZKH-8',
                'slug_san_pham'     => Str::slug('Máy lạnh Panasonic Inverter 1 HP CU/CS-XU9ZKH-8'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '1',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/2002/303867/may-lanh-panasonic-inverter-1-hp-cu-cs-xu9zkh-8-1-550x160.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại máy:

                1 chiều (chỉ làm lạnh)Có Inverter
                Công suất làm lạnh:

                1 HP - 8.700 BTU',
                'mo_ta_chi_tiet'    => '- Panasonic CU/CS-XU9ZKH-8 có vẻ ngoài thời thượng với tông màu trắng thuần khiết, đường viền màu bạc nổi bật tạo điểm nhấn cho tổng thể thiết kế thêm đẹp mắt, sang trọng. Kiểu dáng hình chữ nhật thích hợp lắp đặt trong không gian phòng khách, phòng ngủ, phòng làm việc của bạn.

                - Kiểu dáng tối giản, có lớp vỏ máy chất liệu tốt cho độ bền cao, rắn chắc, bảo vệ các chi tiết an toàn khỏi tác động của các yếu tố từ môi trường bên ngoài.

                - Trang bị ống dẫn gas bằng đồng, lá tản nhiệt làm từ nhôm dẫn nhiệt tốt, hạn chế ăn mòn, duy trì hiệu quả làm lạnh tối ưu, sử dụng dài lâu.

                - Đáp ứng nhu cầu làm lạnh trong phạm vi dưới 15m² (từ 30 đến 45m³) với công suất 1 HP.

                - Hỗ trợ công nghệ iAuto-X với sự kết hợp của công nghệ P-TECH đẩy công suất máy nén và quạt thổi gió lên cao, cho nhiệt độ trong phòng nhanh chóng đạt đến mức nhiệt bạn đã thiết lập trong thời gian ngắn, cho bạn cảm thấy mát mẻ tức thì.',
                'gia_ban'           => 19,
                'gia_khuyen_mai'    => 19,
                'id_chuyen_muc'     => 14,
            ],
            [
                'ten_san_pham'      => 'Máy giặt Panasonic Inverter 9.5 Kg NA-V95FC1LVT',
                'slug_san_pham'     => Str::slug('Máy giặt Panasonic Inverter 9.5 Kg NA-V95FC1LVT'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '1',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/1944/283843/may-giat-panasonic-inverter-95-kg-na-v95fc1lvt-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại máy:

                Cửa trướcLồng ngangCó Inverter
                Khối lượng giặt:

                Giặt 9.5 Kg - Sấy tiện ích 2 KgTừ 5 - 7 người',
                'mo_ta_chi_tiet'    => '- Kiểu dáng: máy giặt lồng ngang gọn đẹp, bề mặt phủ màu xám thanh lịch, kết cấu chắc chắn, phối hợp hài hòa với thiết kế nội thất của mọi không gian.

                - Bảng điều khiển cảm ứng song ngữ Anh - Việt kèm màn hình hiển thị sắc nét các thông số, cho người dùng quan sát và tùy chọn chức năng chính xác, tiện lợi.

                - Nắp máy giặt bằng kính chịu lực dày chắc, cho khả năng chịu lực tác động tốt, thiết kế đóng mở linh hoạt, sử dụng an toàn.

                - Lồng giặt được làm từ vật liệu thép không gỉ bóng sáng, chống oxy hóa, ăn mòn, gia công tinh tế, đảm bảo hiệu suất giặt đồ tốt, hạn chế vi khuẩn, mảng bám tích tụ trong máy.

                - Khối lượng giặt 9.5 kg và khối lượng sấy tiện ích 2 kg, đáp ứng nhu cầu giặt cho gia đình có từ 5 - 7 thành viên, tính năng sấy tiện ích phù hợp cho các gia đình có nhu cầu làm khô nhanh lượng ít quần áo vào những lúc cấp bách hay không có thời gian làm khô quần áo.',
                'gia_ban'           => 19,
                'gia_khuyen_mai'    => 12,
                'id_chuyen_muc'     => 15,
            ],
            [
                'ten_san_pham'      => 'Máy giặt Panasonic Inverter 10.5 Kg NA-FD10AR1BV',
                'slug_san_pham'     => Str::slug('Máy giặt Panasonic Inverter 10.5 Kg NA-FD10AR1BV'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '1',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/1944/216015/panasonic-na-fd10ar1bv-12-300x300.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại máy:

                Cửa trênLồng đứngCó Inverter
                Khối lượng giặt:

                10.5 KgTrên 7 người',
                'mo_ta_chi_tiet'    => 'Máy giặt Panasonic Inverter 10.5 Kg NA-FD10AR1BV sở hữu tính năng giặt Stainmaster, giúp giặt sạch các vết bẩn cứng đầu và tăng cường hiệu quả giặt sạch quần áo tốt hơn.

                Nâng cao hiệu quả giặt sạch cùng xoáy nước Water Bazooka với TD inverter
                Nhờ công nghệ TD Inverter cải tiến của hãng Panasonic, máy giặt này có thể tạo ra luồng xoáy nước mạnh mẽ Water Bazooka, nước giặt được luân chuyển và thẩm thấu đều vào bên trong quần áo, đánh bay vết bẩn cứng đầu một cách dễ dàng cũng như nâng cao hiệu quả giặt sạch bên cạnh yếu tố vận hành êm ái và khả năng tiết kiệm điện đến 30%.

                Hòa tan bột giặt, thẩm thấu cực nhanh nhờ hệ thống Active Foam
                Máy giặt Panasonic Inverter NA-FD10AR1BV còn sở hữu công nghệ độc quyền của hãng, chính là Active Foam, có khả năng tạo ra siêu bọt mịn đậm đặc, thẩm thấu cực nhanh giúp loại bỏ các vết bẩn từ sâu bên trong sợi vải.',
                'gia_ban'           => 15,
                'gia_khuyen_mai'    => 10,
                'id_chuyen_muc'     => 16,
            ],
            [
                'ten_san_pham'      => 'Tủ chăm sóc quần áo thông minh LG S5GOC',
                'slug_san_pham'     => Str::slug('Tủ chăm sóc quần áo thông minh LG S5GOC'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '1',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/1944/299765/tu-cham-soc-quan-ao-thong-minh-lg-s5goc-090223-110244-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại máy:

                Tủ chăm sóc quần áo thông minhCó Inverter
                Khối lượng giặt:

                6.5 KgTừ 2 - 3 người',
                'mo_ta_chi_tiet'    => '- Tủ chăm sóc quần áo thông minh LG có thiết kế sang trọng đến từng chi tiết, màu sắc và chất liệu hài hòa với hầu hết mọi không gian nội thất.

                - Vỏ máy được làm từ kim loại sơn tĩnh điện chống gỉ sét và oxy hóa, cho độ bền cao. Bên trong tủ được thiết kế móc treo giúp cất giữ quần áo tiện lợi, nhanh gọn.

                - Bảng điều khiển cảm ứng với chỉ dẫn tiếng Anh nằm ngay ở mặt trước của tủ, màn hình LED hiển thị thông số rõ ràng giúp bạn quan sát và tùy chỉnh các chức năng tiện lợi, linh hoạt.

                - Khối lượng giặt tối đa 6.5 kg, có thể xử lý được 5 móc treo trang phục và 1 quần, phù hợp với gia đình từ 2 – 3 thành viên.

                - Tích hợp sẵn 6 chương trình chăm sóc quần áo tiện lợi, bao gồm: làm mới quần áo, chăm sóc đặc biệt, khử trùng, sấy khô nhẹ nhàng, giặt mưa/tuyết, hút ẩm. Người dùng dễ dàng lựa chọn chương trình phù hợp tùy theo nhu cầu sử dụng.',
                'gia_ban'           => 69,
                'gia_khuyen_mai'    => 48,
                'id_chuyen_muc'     => 17,
            ],
            [
                'ten_san_pham'      => 'Nồi cơm điện tử Toshiba 1.8 lít RC-18DR2PV(K)',
                'slug_san_pham'     => Str::slug('Nồi cơm điện tử Toshiba 1.8 lít RC-18DR2PV(K)'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '1',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/1922/220499/noi-com-dien-tu-toshiba-rc-18dr2pv-k-18l-thumb-600x600-1.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại nồi:

                Nồi cơm điện tử
                Dung tích:

                1.8 lít, Số người ăn 4 - 6 người',
                'mo_ta_chi_tiet'    => 'Nồi cơm điện tử Toshiba 1.8 lít RC-18DR2PV(K) thiết kế quai xách dễ cầm, màu sắc sang trọng với dung tích phù hợp cho gia đình 4 - 6 người
                Nấu được khoảng 8 - 10 cốc gạo (cốc kèm nồi) tương đương 4 lon sữa.

                Nấu cơm ngon và chín đều nhờ công nghệ nấu 3D tỏa nhiệt đều
                Khi nấu nhiệt tỏa từ dưới lên từ nắp đến quanh thành nồi làm cơm tơi xốp, chín đều, thơm ngon hơn, không lo khô hay nhão khi nấu. Thời gian nấu chín của nồi cơm điện tử trung bình khoảng 40 phút.

                Nồi giữ nhiệt tốt giúp cơm dẻo ngon hơn nhờ lòng nồi 8 lớp có độ dày đến 4 mm, được phủ chống dính Binchotan (Nhật Bản) dễ vệ sinh
                Lòng nồi Toshiba 1.8 lít RC-18DR2PV(K)',
                'gia_ban'           => 29,
                'gia_khuyen_mai'    => 20,
                'id_chuyen_muc'     => 18,
            ],
            [
                'ten_san_pham'      => 'Máy xay sinh tố Smeg BLF01CREU (535.43.635)',
                'slug_san_pham'     => Str::slug('Máy xay sinh tố Smeg BLF01CREU (535.43.635)'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '1',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/1985/252437/smeg-blf01creu-53543635-020323-101403-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại máy

                Máy xay sinh tố
                Công suất:

                800W',
                'mo_ta_chi_tiet'    => 'Dung tích lớn 1.5 lít sẽ đáp ứng tốt nhu cầu xay sinh tố cho gia đình khoảng 4 - 6 thành viên. Thân cối trong suốt dễ quan sát thực phẩm khi xay, chất liệu nhựa Tritan không chứa BPA (chất gây ung thư), đảm bảo sức khỏe cho người dùng.

                Ngoài ra, cối xay có thang đo mực nước tiện lợi, hỗ trợ cho việc đong nước khi nấu sữa cho bé, làm bánh,...

                Bảng điều khiển núm xoay 4 tốc độ dễ điều chỉnh, phù hợp nhiều nhu cầu sử dụng
                Bảng điều khiển núm xoay có sẵn chế độ xay đá, xay sinh tố giúp bạn thực hiện các thức uống theo ý thích dễ dàng mà không cần tìm hiểu thông số để tùy chỉnh. Thao tác xoay thực hiện vô cùng đơn giản, tiện lợi, phù hợp cho cả người lớn tuổi.',
                'gia_ban'           => 90,
                'gia_khuyen_mai'    => 90,
                'id_chuyen_muc'     => 19,
            ],
            [
                'ten_san_pham'      => 'Bình đun siêu tốc Delonghi 1.7 lít KBOV2001.GR',
                'slug_san_pham'     => Str::slug('Bình đun siêu tốc Delonghi 1.7 lít KBOV2001.GR'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '1',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/1989/283056/delonghi-kbov2001gr-070423-114543-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Dung tích:

                1.7 lít
                Công suất:

                2000W',
                'mo_ta_chi_tiet'    => '- Bình đun siêu tốc Delonghi mang thiết kế cổ điển, sang trọng, màu xanh rêu nhẹ nhàng làm tăng tính thẩm mỹ cho không gian sử dụng.

                - Vỏ bình làm bằng kim loại không gỉ sáng bóng, ruột bình làm từ inox 304 bền bỉ, cao cấp dễ dàng vệ sinh.

                - Nắp ấm có thể tháo rời dễ dàng, thuận tiện cho việc làm sạch.

                - Có thang đo mực nước nằm ở phía sau thân ấm, thuận tiện quản lý lượng nước theo nhu cầu.

                - Đi kèm lưới lọc cặn, đảm bảo nước rót ra sạch cặn và an toàn, có thể tháo rời lưới lọc để vệ sinh. ',
                'gia_ban'           => 30,
                'gia_khuyen_mai'    => 30,
                'id_chuyen_muc'     => 20,
            ],

            //partner 2
            [
                'ten_san_pham'      => 'Quạt đứng KDK M40K GY',
                'slug_san_pham'     => Str::slug('Quạt đứng KDK M40K GY'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '2',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/1992/73337/kdk-m40k-xam-gy-0-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại quạt:

                Quạt đứng - 50W - 3 mức gió
                Đường kính quạt:

                3 cánh - 40 cm',
                'mo_ta_chi_tiet'    => 'Thiết kế hiện đại, màu sắc trang nhã, chất liệu nhựa cao cấp bền đẹp, dễ lau chùi
                Chiều cao thay đổi linh hoạt theo từng không gian sử dụng từ 128 - 143 cm.

                Quạt đứng KDK M40K Xám GY - Thiết kế hiện đại, trang nhã

                Quạt trang bị 3 cánh quạt với sải dài 40 cm có khả năng làm mát hiệu quả ở diện tích rộng
                Quạt đứng KDK M40K Xám GY - Đường kính lồng quạt 40cm giúp thổi mát hơn

                Động cơ bạc đạn hoạt động bền bỉ, không gây ồn, tạo gió mạnh với công suất cao 50W',
                'gia_ban'           => 40,
                'gia_khuyen_mai'    => 30
                ,
                'id_chuyen_muc'     => 21,
            ],
            [
                'ten_san_pham'      => 'Quạt sạc điện Kangaroo KG738',
                'slug_san_pham'     => Str::slug('Quạt sạc điện Kangaroo KG738'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '2',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/1992/271716/271716-1-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại quạt:

                Quạt sạc điện - 40W - 3 mức gió
                Đường kính quạt:

                5 cánh - 40 cm',
                'mo_ta_chi_tiet'    => 'Quạt Kangaroo KG738 thiết kế hiện đại, kiểu dáng đẹp mắt, công suất 40W cùng 3 mức độ gió, có remote điều khiển từ xa tiện lợi, hoạt động mạnh mẽ và bền bỉ với động cơ bạc đạn.

                Tính năng nổi bật
                - Có remote điều khiển từ xa tiện lợi.

                - Hẹn giờ 0.5 tiếng giúp bạn linh động thời gian sử dụng quạt, tiết kiệm điện.

                Thiết kế sản phẩm
                - Quạt sạc có thiết kế gọn, kiểu dáng hiện đại, phù hợp với nhiều không gian nội thất: phòng khách, phòng ngủ, phòng làm việc,...

                - Quạt tích điện Kangaroo KG738 có 2 chế độ hoạt động, linh hoạt điều chỉnh: AC (dùng cắm điện trực tiếp) và chế độ DC (dùng pin sạc). Tại chế độ AC, khi cắm điện sử dụng, pin sẽ đồng thời được sạc, rất tiện lợi. ',
                'gia_ban'           => 20,
                'gia_khuyen_mai'    => 10,
                'id_chuyen_muc'     => 22,
            ],
            [
                'ten_san_pham'      => 'Quạt trần KDK DC inverter U60FW(SIL)',
                'slug_san_pham'     => Str::slug('Quạt trần KDK DC inverter U60FW(SIL)'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '2',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/1992/302725/quat-tran-kdk-u60fw-sil-020323-110109-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại quạt:

                Quạt trần - 37W - 9 mức gió
                Đường kính quạt:

                5 cánh - 150 cm',
                'mo_ta_chi_tiet'    => 'Quạt trần KDK U60FW(SIL) có khả năng tạo ra làn gió mạnh và êm ái với kiểu thiết kế cánh quạt 3D. Bên cạnh đó, quạt trần còn được trang bị chế độ hẹn giờ và đèn LED chiếu sáng tiện lợi.

                Thiết kế của sản phẩm
                - Quạt trần KDK U60FW(SIL) được thiết kế 5 cánh đường kính khoảng 150 cm với kiểu dáng hiện đại, sở hữu gam màu bạc tinh tế, dễ dàng phối hợp với các nội thất khác trong căn phòng.

                - Cánh quạt được làm từ sợi thủy tinh (PPG) có độ bền cao và chống ăn mòn tốt. Ngoài ra, cánh quạt còn được thiết kế theo kiểu 3D giúp tạo ra luồng gió trải rộng.

                - Sản phẩm còn được trang bị khóa cánh an toàn, dây an toàn, công tắc an toàn và cầu chì phát hiện các trường hợp quá dòng điện hoặc quá nhiệt, nhờ đó giúp người dùng cảm thấy yên tâm hơn khi sử dụng.',
                'gia_ban'           => 19,
                'gia_khuyen_mai'    => 19,
                'id_chuyen_muc'     => 23,
            ],
            [
                'ten_san_pham'      => 'Máy lọc nước RO Sunhouse SHA8889K 9 lõi',
                'slug_san_pham'     => Str::slug('Máy lọc nước RO Sunhouse SHA8889K 9 lõi'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '2',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/3385/216014/may-loc-nuoc-ro-sunhouse-sha8889k-9-loi-kg-150223-101934-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại máy:

                Máy lọc nước ROTủ đứng
                Số lõi lọc:

                9 lõiRO 75 GPD sản xuất Hàn Quốc
                Dung tích bình chứa:

                8 lít',
                'mo_ta_chi_tiet'    => 'Chất liệu vỏ bền đẹp, dễ vệ sinh, giữ diện mạo của máy luôn sáng bóng, mới lâu.
                Lọc sạch, bổ sung khoáng chất cho nước, kháng khuẩn bằng Nano bạc với hệ thống lọc 9 lõi lọc hiện đại
                - Lõi PP 5 micron: Loại bỏ tạp chất, cặn bẩn kích thước > 5 micron, tăng tuổi thọ cho các lõi kế tiếp.

                - Lõi Than hoạt tính (dạng hạt): Hấp thụ một phần chất hữu cơ, kim loại nặng, thuốc trừ sâu, chất gây mùi,…

                - Lõi PP 1 micron: Loại bỏ các hạt cặn có kích thước > 1 micron, bảo vệ màng RO.

                - Màng RO nhập khẩu Hàn Quốc: Loại bỏ hoàn toàn tạp chất, ion kim loại nặng, vi khuẩn, các chất hữu cơ, amip, asen,…

                - Lõi tạo vị: Cân bằng pH, tạo khoáng và vị ngọt tự nhiên cho nước.

                - Lõi Maifan: Bổ sung vi lượng khoáng chất từ thiên nhiên cần thiết cho cơ thể như sắt, canxi, magie,…

                - Lõi Alkaline (Lõi tạo kiềm tính): Tăng chỉ số pH, tạo nước kiềm tính và trung hòa axit dư trong cơ thể.

                - Lõi Hồng ngoại xa (Far Infrared): Phân cực phân tử nước, giúp cơ thể hấp thụ nước dễ hơn.

                - Lõi Nano Silver (Nano Bạc): Diệt khuẩn, khử mùi, cân bằng pH, tạo khoáng và vị ngọt tự nhiên cho nước.',
                'gia_ban'           => 89,
                'gia_khuyen_mai'    => 49,
                'id_chuyen_muc'     => 27,
            ],
            [
                'ten_san_pham'      => 'Máy lọc nước ion kiềm Fuji Smart i9 10 tấm điện cực',
                'slug_san_pham'     => Str::slug('Máy lọc nước ion kiềm Fuji Smart i9 10 tấm điện cực'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '2',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/3385/242538/ion-kiem-fuji-smart-i9-10-tam-dien-cuc-140223-035444-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại máy:

                Máy lọc nước điện giải ion kiềmĐể bàn
                Số lõi lọc:

                1 lõi (4 cấp lọc)',
                'mo_ta_chi_tiet'    => '- Máy lọc nước ion kiềm chỉ lắp đặt đối với nước máy thủy cục do các đơn vị cấp nước uy tín theo chuẩn nước sạch của Bộ Y tế có pH: 6.5 – 7.5 và TDS: 45 - 300. Ngoài ra, muốn sử dụng được máy lọc nước này người dùng phải sử dụng bộ tiền xử lý phù hợp với từng nguồn nước khác nhau (khi mua hàng tại Điện Máy XANH sẽ được hãng tặng kèm miễn phí bộ tiền xử lý trị giá 7.000.000 VNĐ, phù hợp theo khu vực bên dưới):

                + Digisui The One hoặc BWT Barrier iMaster ion M cho khu vực Quảng Bình trở vào Nam (TDS 45 - 200).

                + Digisui The One hoặc BWT Barrier iMaster ion H cho khu vực Hà Tĩnh trở ra Bắc (TDS 45 - 300) và khu vực nước cứng.

                 - Trường hợp khách hàng muốn lắp đặt cho các nguồn nước ô nhiễm có tính chất thay đổi theo mùa như nước ao hồ, sông suối, nước giếng, nước phèn, nước mặn,... vui lòng để lại thông tin để Điện máy XANH liên hệ hãng hỗ trợ giải pháp xử lý nước đầu vào. Sau khi khảo sát và phân tích (miễn phí) nguồn nước của quý khách hãng sẽ khuyến nghị giải pháp phù hợp nhất với chi phí phát sinh từ 12.000.000 - 15.000.000 VNĐ (chưa bao gồm VAT) hoặc từ chối lắp đặt trong trường hợp nguồn nước có tính chất ô nhiễm và thay đổi mà không kiểm soát được.',
                'gia_ban'           => 99,
                'gia_khuyen_mai'    => 83,
                'id_chuyen_muc'     => 28,
            ],
            [
                'ten_san_pham'      => 'Máy lọc nước UF IONPIA ION-UFS4P 4 lõi',
                'slug_san_pham'     => Str::slug('Máy lọc nước UF IONPIA ION-UFS4P 4 lõi'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '2',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/3385/246960/uf-ionpia-ion-ufs4p-4-loi-280323-023811-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại máy:

                Máy lọc nước UFLắp âmĐể bàn
                Số lõi lọc:

                4 lõiLõi UF sản xuất Hàn Quốc',
                'mo_ta_chi_tiet'    => '- Máy lọc nước ion kiềm chỉ lắp đặt đối với nước máy thủy cục do các đơn vị cấp nước uy tín theo chuẩn nước sạch của Bộ Y tế có pH: 6.5 – 7.5 và TDS: 45 - 300.

                + Nước máy/ nước thủy cục: Đạt tiêu chuẩn nước sinh hoạt QCVN 02:2009/BYT phù hợp để sử dụng .

                + Nước giếng khoan: Phải xử lý nước đầu nguồn đạt tiêu chuẩn nước sinh hoạt QCVN 02:2009/BYT.

                + Nước mưa: Phù hợp để sử dụng.

                - Một số phương pháp khắc phục khi nước chưa đạt tiêu chuẩn: Sử dụng các lớp lọc chức như: lọc cát, than, lọc sợi bông hoặc các hệ thống lọc tổng hiện có trên thị trường được cấp phép.

                - Để kiểm tra chất lượng nước trước khi lắp đặt người dùng có thể kiểm định tại các đơn vị chức năng được cấp phép, bút đo điện tử TDS hoặc bút đo điện tử pH.',
                'gia_ban'           => 40,
                'gia_khuyen_mai'    => 29,
                'id_chuyen_muc'     => 29,
            ],
            [
                'ten_san_pham'      => 'Máy giặt Panasonic Inverter 9.5 Kg NA-V95FC1LVT',
                'slug_san_pham'     => Str::slug('Máy giặt Panasonic Inverter 9.5 Kg NA-V95FC1LVT'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '2',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/1944/283843/may-giat-panasonic-inverter-95-kg-na-v95fc1lvt-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại máy:

                Cửa trướcLồng ngangCó Inverter
                Khối lượng giặt:

                Giặt 9.5 Kg - Sấy tiện ích 2 KgTừ 5 - 7 người',
                'mo_ta_chi_tiet'    => '- Kiểu dáng: máy giặt lồng ngang gọn đẹp, bề mặt phủ màu xám thanh lịch, kết cấu chắc chắn, phối hợp hài hòa với thiết kế nội thất của mọi không gian.

                - Bảng điều khiển cảm ứng song ngữ Anh - Việt kèm màn hình hiển thị sắc nét các thông số, cho người dùng quan sát và tùy chọn chức năng chính xác, tiện lợi.

                - Nắp máy giặt bằng kính chịu lực dày chắc, cho khả năng chịu lực tác động tốt, thiết kế đóng mở linh hoạt, sử dụng an toàn.

                - Lồng giặt được làm từ vật liệu thép không gỉ bóng sáng, chống oxy hóa, ăn mòn, gia công tinh tế, đảm bảo hiệu suất giặt đồ tốt, hạn chế vi khuẩn, mảng bám tích tụ trong máy.

                - Khối lượng giặt 9.5 kg và khối lượng sấy tiện ích 2 kg, đáp ứng nhu cầu giặt cho gia đình có từ 5 - 7 thành viên, tính năng sấy tiện ích phù hợp cho các gia đình có nhu cầu làm khô nhanh lượng ít quần áo vào những lúc cấp bách hay không có thời gian làm khô quần áo.',
                'gia_ban'           => 19,
                'gia_khuyen_mai'    => 12,
                'id_chuyen_muc'     => 15,
            ],
            [
                'ten_san_pham'      => 'Máy giặt Panasonic Inverter 10.5 Kg NA-FD10AR1BV',
                'slug_san_pham'     => Str::slug('Máy giặt Panasonic Inverter 10.5 Kg NA-FD10AR1BV'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '2',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/1944/216015/panasonic-na-fd10ar1bv-12-300x300.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại máy:

                Cửa trênLồng đứngCó Inverter
                Khối lượng giặt:

                10.5 KgTrên 7 người',
                'mo_ta_chi_tiet'    => 'Máy giặt Panasonic Inverter 10.5 Kg NA-FD10AR1BV sở hữu tính năng giặt Stainmaster, giúp giặt sạch các vết bẩn cứng đầu và tăng cường hiệu quả giặt sạch quần áo tốt hơn.

                Nâng cao hiệu quả giặt sạch cùng xoáy nước Water Bazooka với TD inverter
                Nhờ công nghệ TD Inverter cải tiến của hãng Panasonic, máy giặt này có thể tạo ra luồng xoáy nước mạnh mẽ Water Bazooka, nước giặt được luân chuyển và thẩm thấu đều vào bên trong quần áo, đánh bay vết bẩn cứng đầu một cách dễ dàng cũng như nâng cao hiệu quả giặt sạch bên cạnh yếu tố vận hành êm ái và khả năng tiết kiệm điện đến 30%.

                Hòa tan bột giặt, thẩm thấu cực nhanh nhờ hệ thống Active Foam
                Máy giặt Panasonic Inverter NA-FD10AR1BV còn sở hữu công nghệ độc quyền của hãng, chính là Active Foam, có khả năng tạo ra siêu bọt mịn đậm đặc, thẩm thấu cực nhanh giúp loại bỏ các vết bẩn từ sâu bên trong sợi vải.',
                'gia_ban'           => 15,
                'gia_khuyen_mai'    => 12,
                'id_chuyen_muc'     => 16,
            ],

            //partner 3
            [
                'ten_san_pham'      => 'Điện thoại Samsung Galaxy S23 Ultra 5G 256GB',
                'slug_san_pham'     => Str::slug('Điện thoại Samsung Galaxy S23 Ultra 5G 256GB'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '3',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/42/249948/samsung-galaxy-s23-ultra-thumb-xanh-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Màn hình:

                Dynamic AMOLED 2X6.8"Quad HD+ (2K+)
                Hệ điều hành:

                Android 13',
                'mo_ta_chi_tiet'    => 'Tổng quan thiết kế của S23 Ultra năm nay sẽ không có quá nhiều thay đổi, máy vẫn sở hữu khung nhôm cứng cáp kèm mặt lưng được hoàn thiện từ kính cường lực giúp thiết bị trở nên bền bỉ hơn trong quá trình sử dụng.

                Màn hình sẽ có phần cạnh cong tràn về hai bên như trên S22 Ultra, đem lại cảm giác sang trọng cũng như tăng khả năng hiển thị cho cảm giác liền mạch khi sử dụng.

                Samsung Galaxy S23 Ultra sử dụng màn hình Dynamic AMOLED 2X có độ phân giải (3088 x 1400 Pixels) kết hợp tần số quét 120 Hz, cùng khả năng tối ưu của hãng nhà Samsung trên thì máy tiếp tục sẽ là một trong những thiết bị di động có khả năng hiển thị tốt nhất trên trường ngay thời điểm ra mắt.

                Nhờ hỗ trợ tấm nền hiện đại nên chất lượng ảnh cho ra có màu sắc rực rỡ, màu đen tái hiện sâu cùng khả năng tối ưu năng lượng giúp duy trì thời lượng sử dụng dài lâu.',
                'gia_ban'           => 39,
                'gia_khuyen_mai'    => 29,
                'id_chuyen_muc'     => 24,
            ],
            [
                'ten_san_pham'      => 'Điện thoại iPhone 14 Pro Max 128GB',
                'slug_san_pham'     => Str::slug('Điện thoại iPhone 14 Pro Max 128GB'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '3',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-den-thumb-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Màn hình:

                OLED6.7"Super Retina XDR
                Hệ điều hành:

                iOS 16',
                'mo_ta_chi_tiet'    => 'Màn hình 6.7 inch độ phân giải Super Retina XDR cho khả năng hiển thị siêu sắc nét, màu sắc sống động. Kết hợp cùng công nghệ ProMotion tự động thay đổi tốc độ làm tươi màn hình từ 1 Hz - 120 Hz, để mọi khung hình được chuyển động mượt mà nhất trong khi vẫn tối ưu tiết kiệm được thời lượng pin.

                Màn hình có độ sáng siêu cao lên đến 2000 nits, vẫn có thể hiển thị một cách rõ ràng nhất trong môi trường có ánh sáng cao, thậm chí dưới ánh nắng mặt trời. Đặc biệt là tính năng Always On Display để người dùng có thể xem nhanh thông tin trên màn hình mà không cần phải đánh thức thiết bị.',
                'gia_ban'           => 29,
                'gia_khuyen_mai'    => 24,
                'id_chuyen_muc'     => 25,
            ],
            [
                'ten_san_pham'      => 'Điện thoại OPPO Reno7 Z 5G',
                'slug_san_pham'     => Str::slug('Điện thoại OPPO Reno7 Z 5G'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '3',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/42/271717/oppo-reno7-z-5g-thumb-2-1-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Màn hình:

                AMOLED6.43"Full HD+
                Hệ điều hành:

                Android 11',
                'mo_ta_chi_tiet'    => 'Với khung viền được vát phẳng, Reno7 Z 5G mang đến cái nhìn cá tính, năng động và rất hợp xu hướng hiện nay (03/2022). Sử dụng nhựa làm vật liệu chế tạo bộ khung cùng mặt lưng thủy tinh hữu cơ giúp tăng độ bền bỉ và vẻ ngoài cao cấp cho thiết bị, bên cạnh đó còn tối ưu khối lượng trên máy chỉ còn 173 g.

                Mặt lưng máy sử dụng lối thiết kế OPPO Glow độc quyền giúp chuyển biến ánh sáng thành các màu sắc khác nhau, giúp bạn trở nên nổi bật hơn bao giờ hết.

                Ra mắt với 2 phiên bản màu sắc: Đen Vô Cực và Bạc Đa Sắc cực kỳ cuốn hút, với mặt lưng hoàn thiện nhám giúp hạn chế bám dấu vân tay và mồ hôi nhằm đảm bảo mặt lưng máy luôn được mới mẻ và óng ánh.',
                'gia_ban'           => 70,
                'gia_khuyen_mai'    => 65,
                'id_chuyen_muc'     => 26,
            ],

            // partner 4
            [
                'ten_san_pham'      => 'Laptop Asus Gaming TUF Dash F15',
                'slug_san_pham'     => Str::slug('Laptop Asus Gaming TUF Dash F15'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '4',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/44/274921/asus-tuf-gaming-fx517zc-i5-hn077w-190322-114627-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'CPU:

                i512450H2GHz
                RAM:

                8 GBDDR5 2 khe (1 khe 8GB + 1 khe trống)4800 MHz',
                'mo_ta_chi_tiet'    => 'Laptop Asus được trang bị CPU Intel Core i5 Alder Lake 12450H mạnh mẽ tiết kiệm điện năng cùng card rời RTX 30 series - NVIDIA RTX 3050 4 GB chạy ổn định trơn tru các tựa game nổi tiếng: GTA V, PUBG, CS:GO,... với mức cài đặt cao hay thiết kế đồ hoạ với Photoshop, After Effect, Ai,... cũng không làm khó được chiếc máy.

                Chiếc máy được trang bị RAM 8 GB cho khả năng chơi game, đa nhiệm tốt kết hợp với bộ nhớ trong SSD 512 GB cho không gian lưu trữ đủ dùng, tăng tốc độ truy xuất dữ liệu và khởi động laptop cực nhanh.

                Màn hình 15.6 inch có độ phân giải Full HD (1920 x 1080) sắc nét. Tần số quét 144 Hz, công nghệ Adaptive Sync giúp mượt mà trong từng khung hình chiến game. Công nghệ chống chói Anti Glare giúp loại bỏ hiện tượng bóng gương, tấm nền IPS tích hợp giúp góc nhìn người dùng rộng lên đến 178 độ.',
                'gia_ban'           => 29,
                'gia_khuyen_mai'    => 27,
                'id_chuyen_muc'     => 30,
            ],
            [
                'ten_san_pham'      => 'Laptop Apple MacBook Air 13 inch M2 2022)',
                'slug_san_pham'     => Str::slug('Laptop Apple MacBook Air 13 inch M2 2022)'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '4',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/44/282827/apple-macbook-air-m2-2022-vang-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'CPU:

                Apple M2100GB/s
                RAM:

                8 GB',
                'mo_ta_chi_tiet'    => 'Kiểu dáng mỏng dần mang tính biểu tượng của Macbook Air đã đi vào lịch sử, thay vào đó là thiết kế hoàn toàn mới với độ dày không thay đổi tương tự như MacBook Pro. Sở hữu lớp vỏ kim loại nguyên khối nhưng tổng thể khối lượng lại thấp hơn 20% so với MacBook Air M1, song chiếc Air mới không hề tỏ ra ọp ẹp mà vẫn được làm chắc chắn, độ hoàn thiện tốt hơn so với trước đây. Khung máy cứng, nắp máy gần như không bị uốn cong khi mình tác động lực và đặc biệt vẫn có thể mở lên bằng một tay. Apple luôn đứng đầu khi nói đến chất lượng sản phẩm và chiếc Air mới cũng không ngoại lệ.

                Laptop Apple năm 2022 được giới thiệu với bốn màu sắc khác nhau cho phép người dùng lựa chọn theo sở thích. Cá nhân mình thích nhất màu Midnight với lớp hoàn thiện màu xanh đen đậm thay đổi tuỳ theo ánh sáng nhưng lại dễ bị bám dấu vân tay gây ảnh hưởng đến ngoại hình sang chảnh vốn có của một chiếc laptop cao cấp - sang trọng, bạn có thể chọn màu xám, bạc và vàng sẽ ít bị bám dấu vân tay hơn hoặc chịu khó lau chùi thường xuyên để giữ cho ngoại hình luôn sáng bóng.',
                'gia_ban'           => 39,
                'gia_khuyen_mai'    => 26,
                'id_chuyen_muc'     => 31,
            ],
            [
                'ten_san_pham'      => 'Laptop Lenovo Legion 5 15IAH7',
                'slug_san_pham'     => Str::slug('Laptop Lenovo Legion 5 15IAH7'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '4',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/44/292389/lenovo-legion-5-15iah7-i5-82rc003wvn-a-thumb-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'CPU:

                i512500H2.5GHz
                RAM:

                8 GBDDR5 2 khe (1 khe 8GB + 1 khe trống)4800 MHz',
                'mo_ta_chi_tiet'    => 'Bộ vi xử lý Intel Core i5 12500H thế hệ thứ 12 mang đến một hiệu năng mạnh mẽ cho chiếc laptop Lenovo kết hợp cùng card rời RTX 30 series - NVIDIA GeForce RTX 3050Ti 4 GB giúp chạy mượt các tác vụ đồ họa phức tạp trên Photoshop và giải trí với các tựa game như: LOL, PUBG, World of Tanks, FIFA Online 4,...

                RAM 8 GB tối ưu hóa tốc độ xử lý trên tác vụ, đảm bảo quá trình sử dụng đa nhiệm được diễn ra mượt mà. Đồng thời, ổ cứng SSD 512 GB chuẩn NVMe PCIe còn mang đến khả năng truy xuất dữ liệu cực nhanh và không gian lưu trữ cá nhân rộng rãi.

                Chiếc laptop Lenovo Gaming Legion này sở hữu màn hình 15.6 inch mang đến cho bạn một không gian lớn để làm việc và giải trí. Độ phân giải Full HD (1920 x 1080) mang đến những nội dung sắc nét từng chi tiết. Màu sắc hình ảnh vô cùng chân thực với dải màu cực rộng chuẩn 100% sRGB.',
                'gia_ban'           => 34,
                'gia_khuyen_mai'    => 23,
                'id_chuyen_muc'     => 32,
            ],
            [
                'ten_san_pham'      => 'Điện thoại Samsung Galaxy S23 Ultra 5G 256GB',
                'slug_san_pham'     => Str::slug('Điện thoại Samsung Galaxy S23 Ultra 5G 256GB'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '4',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/42/249948/samsung-galaxy-s23-ultra-thumb-xanh-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Màn hình:

                Dynamic AMOLED 2X6.8"Quad HD+ (2K+)
                Hệ điều hành:

                Android 13',
                'mo_ta_chi_tiet'    => 'Tổng quan thiết kế của S23 Ultra năm nay sẽ không có quá nhiều thay đổi, máy vẫn sở hữu khung nhôm cứng cáp kèm mặt lưng được hoàn thiện từ kính cường lực giúp thiết bị trở nên bền bỉ hơn trong quá trình sử dụng.

                Màn hình sẽ có phần cạnh cong tràn về hai bên như trên S22 Ultra, đem lại cảm giác sang trọng cũng như tăng khả năng hiển thị cho cảm giác liền mạch khi sử dụng.

                Samsung Galaxy S23 Ultra sử dụng màn hình Dynamic AMOLED 2X có độ phân giải (3088 x 1400 Pixels) kết hợp tần số quét 120 Hz, cùng khả năng tối ưu của hãng nhà Samsung trên thì máy tiếp tục sẽ là một trong những thiết bị di động có khả năng hiển thị tốt nhất trên trường ngay thời điểm ra mắt.

                Nhờ hỗ trợ tấm nền hiện đại nên chất lượng ảnh cho ra có màu sắc rực rỡ, màu đen tái hiện sâu cùng khả năng tối ưu năng lượng giúp duy trì thời lượng sử dụng dài lâu.',
                'gia_ban'           => 39,
                'gia_khuyen_mai'    => 29,
                'id_chuyen_muc'     => 24,
            ],
            [
                'ten_san_pham'      => 'Điện thoại iPhone 14 Pro Max 128GB',
                'slug_san_pham'     => Str::slug('Điện thoại iPhone 14 Pro Max 128GB'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '4',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-den-thumb-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Màn hình:

                OLED6.7"Super Retina XDR
                Hệ điều hành:

                iOS 16',
                'mo_ta_chi_tiet'    => 'Màn hình 6.7 inch độ phân giải Super Retina XDR cho khả năng hiển thị siêu sắc nét, màu sắc sống động. Kết hợp cùng công nghệ ProMotion tự động thay đổi tốc độ làm tươi màn hình từ 1 Hz - 120 Hz, để mọi khung hình được chuyển động mượt mà nhất trong khi vẫn tối ưu tiết kiệm được thời lượng pin.

                Màn hình có độ sáng siêu cao lên đến 2000 nits, vẫn có thể hiển thị một cách rõ ràng nhất trong môi trường có ánh sáng cao, thậm chí dưới ánh nắng mặt trời. Đặc biệt là tính năng Always On Display để người dùng có thể xem nhanh thông tin trên màn hình mà không cần phải đánh thức thiết bị.',
                'gia_ban'           => 29,
                'gia_khuyen_mai'    => 24,
                'id_chuyen_muc'     => 25,
            ],
            [
                'ten_san_pham'      => 'Điện thoại OPPO Reno7 Z 5G',
                'slug_san_pham'     => Str::slug('Điện thoại OPPO Reno7 Z 5G'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '4',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/42/271717/oppo-reno7-z-5g-thumb-2-1-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Màn hình:

                AMOLED6.43"Full HD+
                Hệ điều hành:

                Android 11',
                'mo_ta_chi_tiet'    => 'Với khung viền được vát phẳng, Reno7 Z 5G mang đến cái nhìn cá tính, năng động và rất hợp xu hướng hiện nay (03/2022). Sử dụng nhựa làm vật liệu chế tạo bộ khung cùng mặt lưng thủy tinh hữu cơ giúp tăng độ bền bỉ và vẻ ngoài cao cấp cho thiết bị, bên cạnh đó còn tối ưu khối lượng trên máy chỉ còn 173 g.

                Mặt lưng máy sử dụng lối thiết kế OPPO Glow độc quyền giúp chuyển biến ánh sáng thành các màu sắc khác nhau, giúp bạn trở nên nổi bật hơn bao giờ hết.

                Ra mắt với 2 phiên bản màu sắc: Đen Vô Cực và Bạc Đa Sắc cực kỳ cuốn hút, với mặt lưng hoàn thiện nhám giúp hạn chế bám dấu vân tay và mồ hôi nhằm đảm bảo mặt lưng máy luôn được mới mẻ và óng ánh.',
                'gia_ban'           => 70,
                'gia_khuyen_mai'    => 60,
                'id_chuyen_muc'     => 26,
            ],
            [
                'ten_san_pham'      => 'Máy giặt Panasonic Inverter 9.5 Kg NA-V95FC1LVT',
                'slug_san_pham'     => Str::slug('Máy giặt Panasonic Inverter 9.5 Kg NA-V95FC1LVT'),
                'so_luong_nhap'     => random_int(100, 300),
                'so_luong_ban'      => random_int(10, 100),
                'id_partner'        => '4',
                'hinh_anh'          => 'https://cdn.tgdd.vn/Products/Images/1944/283843/may-giat-panasonic-inverter-95-kg-na-v95fc1lvt-600x600.jpg',
                'tinh_trang'        => '1',
                'mo_ta_ngan'        => 'Loại máy:

                Cửa trướcLồng ngangCó Inverter
                Khối lượng giặt:

                Giặt 9.5 Kg - Sấy tiện ích 2 KgTừ 5 - 7 người',
                'mo_ta_chi_tiet'    => '- Kiểu dáng: máy giặt lồng ngang gọn đẹp, bề mặt phủ màu xám thanh lịch, kết cấu chắc chắn, phối hợp hài hòa với thiết kế nội thất của mọi không gian.

                - Bảng điều khiển cảm ứng song ngữ Anh - Việt kèm màn hình hiển thị sắc nét các thông số, cho người dùng quan sát và tùy chọn chức năng chính xác, tiện lợi.

                - Nắp máy giặt bằng kính chịu lực dày chắc, cho khả năng chịu lực tác động tốt, thiết kế đóng mở linh hoạt, sử dụng an toàn.

                - Lồng giặt được làm từ vật liệu thép không gỉ bóng sáng, chống oxy hóa, ăn mòn, gia công tinh tế, đảm bảo hiệu suất giặt đồ tốt, hạn chế vi khuẩn, mảng bám tích tụ trong máy.

                - Khối lượng giặt 9.5 kg và khối lượng sấy tiện ích 2 kg, đáp ứng nhu cầu giặt cho gia đình có từ 5 - 7 thành viên, tính năng sấy tiện ích phù hợp cho các gia đình có nhu cầu làm khô nhanh lượng ít quần áo vào những lúc cấp bách hay không có thời gian làm khô quần áo.',
                'gia_ban'           => 19,
                'gia_khuyen_mai'    => 12,
                'id_chuyen_muc'     => 15,
            ],
        ]);
    }
}
