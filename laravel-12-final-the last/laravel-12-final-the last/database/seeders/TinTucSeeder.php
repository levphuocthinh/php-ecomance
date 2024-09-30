<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TinTucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tin_tucs')->delete();

        DB::table('tin_tucs')->truncate();

        DB::table('tin_tucs')->insert([
            [
                'tieu_de'       => 'Mảnh vỡ tàu Titan được trục vớt',
                'slug_tin_tuc'  => Str::slug('Mảnh vỡ tàu Titan được trục vớt'),
                'hinh_anh'      => 'https://i1-vnexpress.vnecdn.net/2023/06/29/noname-8730-1687995161.png?w=680&h=0&q=100&dpr=2&fit=crop&s=yTIeztNeKSMnjQOcYU_ASQ',
                'mo_ta_ngan'    => 'Mảnh vỡ tàu lặn Titan được trục vớt và đưa về cảng ở Canada, trong đó có thể chứa cả các mảnh thi thể của nạn nhân.',
                'chi_tiet'      => 'Mảnh vỡ tàu lặn Titan được trục vớt và đưa về cảng ở Canada, trong đó có thể chứa cả các mảnh thi thể của nạn nhân.

                Những mảnh vỡ từ xác tàu lặn Titan, trong đó dường như có phần mũi tàu và một bảng điều khiển, được đưa về cảng St. John, Canada, hôm 28/6. Pelagic Research, công ty Mỹ sở hữu robot điều khiển từ xa Odysseus được dùng trong quá trình tìm kiếm tàu Titan, cho biết hoạt động trục vớt của họ đã hoàn tất.

                "Quá trình tìm kiếm và thu hồi xác tàu vô cùng nguy hiểm. Nhóm đã làm việc suốt ngày đêm, gần như không ngủ trong hơn 10 ngày", phát ngôn viên Jeff Mahoney của Pelagic Research nói.
                Các mảnh vỡ từ tàu Titan sẽ được chuyển tới Mỹ để phân tích thêm. Tuần duyên Mỹ sau đó xác nhận có thể đã thu được các mảnh thi thể của nạn nhân trên tàu trong quá trình trục vớt.

                "Vẫn còn nhiều việc phải làm để tìm hiểu nguyên nhân dẫn tới sự cố thảm khốc của tàu Titan, cũng như ngăn thảm kịch này không xảy ra lần nữa", Jason Neubauer, trưởng nhóm điều tra về sự cố tàu Titan của Mỹ, nói.

                Tàu lặn Titan mất liên lạc từ hôm 18/6, gần hai giờ sau khi rời tàu mẹ Polar Prince để bắt đầu hành trình thám hiểm xác Titanic. Tuần duyên Mỹ hôm 22/6 xác nhận con tàu đã bị ép nát dưới đáy biển, khiến 5 người trong khoang thiệt mạng. Các mảnh vỡ được tìm thấy ở khu vực cách mũi xác tàu Titanic 488 m.',
                'tinh_trang'    => 1,
                'created_at'    => '2023-06-28 01:27:52',
                'updated_at'    => '2023-06-28 01:27:52',
            ],
            [
                'tieu_de'       => 'Chủ tịch nước: Thanh tra toàn diện ngành điện theo hai hướng',
                'slug_tin_tuc'  => Str::slug('Chủ tịch nước: Thanh tra toàn diện ngành điện theo hai hướng'),
                'hinh_anh'      => 'https://i1-vnexpress.vnecdn.net/2023/06/28/AJ6I8926-JPG-2419-1687959646.jpg?w=680&h=0&q=100&dpr=2&fit=crop&s=0Yf0U7Aim85sC9KuZQY7Og',
                'mo_ta_ngan'    => 'ĐÀ NẴNGTrả lời cử tri, Chủ tịch nước Võ Văn Thưởng cho biết việc thanh tra ngành điện sẽ đồng thời với thanh kiểm tra trách nhiệm của Bộ Công Thương.',
                'chi_tiet'      => 'ĐÀ NẴNGTrả lời cử tri, Chủ tịch nước Võ Văn Thưởng cho biết việc thanh tra ngành điện sẽ đồng thời với thanh kiểm tra trách nhiệm của Bộ Công Thương.

                Chiều 28/6, Chủ tịch nước Võ Văn Thưởng và Đoàn đại biểu Quốc hội TP Đà Nẵng tiếp xúc cử tri báo cáo kết quả kỳ họp thứ 5, Quốc hội khóa 15.

                Cử tri Bùi Đức Nhược (quận Thanh Khê) phản ánh giá điện tăng 3% từ tháng 5 ảnh hưởng đời sống người dân, trong khi ngành điện thua lỗ kéo dài và mới đây lại đề xuất tiếp tục tăng giá tháng 9 tới.

                "Chúng tôi đề nghị thanh, kiểm tra toàn diện Tập đoàn Điện lực Việt Nam - EVN", ông Nhược nói, nhưng đề xuất không nên để Thanh tra Bộ Công Thương, cơ quan chủ quản, thực hiện "vì không khách quan".
                5
                Thời sựChính trịThứ tư, 28/6/2023, 23:08 (GMT+7)
                Chủ tịch nước: Thanh tra toàn diện ngành điện theo hai hướng
                ĐÀ NẴNGTrả lời cử tri, Chủ tịch nước Võ Văn Thưởng cho biết việc thanh tra ngành điện sẽ đồng thời với thanh kiểm tra trách nhiệm của Bộ Công Thương.

                Chiều 28/6, Chủ tịch nước Võ Văn Thưởng và Đoàn đại biểu Quốc hội TP Đà Nẵng tiếp xúc cử tri báo cáo kết quả kỳ họp thứ 5, Quốc hội khóa 15.

                Cử tri Bùi Đức Nhược (quận Thanh Khê) phản ánh giá điện tăng 3% từ tháng 5 ảnh hưởng đời sống người dân, trong khi ngành điện thua lỗ kéo dài và mới đây lại đề xuất tiếp tục tăng giá tháng 9 tới.

                "Chúng tôi đề nghị thanh, kiểm tra toàn diện Tập đoàn Điện lực Việt Nam - EVN", ông Nhược nói, nhưng đề xuất không nên để Thanh tra Bộ Công Thương, cơ quan chủ quản, thực hiện "vì không khách quan".

                Chủ tịch nước Võ Văn Thưởng tại buổi tiếp xúc cử tri Đà Nẵng, chiều 28/6. Ảnh: Nguyễn Đông
                Chủ tịch nước Võ Văn Thưởng tại buổi tiếp xúc cử tri Đà Nẵng, chiều 28/6. Ảnh: Nguyễn Đông

                Chủ tịch nước Võ Văn Thưởng đồng ý kiến nghị của cử tri về việc cần phải thanh tra toàn diện ngành điện. "Đây là nội dung nhiều đại biểu Quốc hội đã nêu. Họp lãnh đạo chủ chốt, Bộ Chính trị, Ban Bí thư cũng nêu vấn đề này và sắp tới sẽ làm rất nghiêm túc", ông nói.

                Chủ tịch nước cho biết có hai hướng thanh tra ngành điện. Hướng thứ nhất đang thanh tra, kiểm tra chủ trương, trách nhiệm của Bộ Công Thương và sớm thông báo cho người dân biết. Hướng thứ hai thanh tra Tập đoàn Điện lực, trước mắt Thủ tướng giao Bộ Công Thương thực hiện.

                "Cử tri đừng lo lắng giao Bộ Công Thương thanh tra thì không khách quan, xử lý không đầy đủ hay bỏ qua. Tôi khẳng định không có chuyện đó. Nếu Bộ thực hiện không nghiêm túc sẽ tiếp tục bị thanh tra, kiểm tra", Chủ tịch nước nói.

                Trước đó, triển khai chỉ thị của Thủ tướng, Bộ Công Thương đã lập đoàn thanh tra EVN từ 10/6 để làm rõ việc quản lý, cung ứng điện giai đoạn từ 1/2021 đến 6/2023. Cùng với lập đoàn thanh tra, Bộ trưởng Công Thương Nguyễn Hồng Diên cũng chỉ đạo lập đoàn giám sát thanh tra. Quyết định này được đưa ra sau khi người dân các tỉnh thành miền Bắc trải qua nhiều ngày bị cắt điện, đối mặt nguy cơ "thiếu điện hầu hết giờ trong ngày".',
                'tinh_trang'    => 1,
                'created_at'    => '2023-06-28 01:27:52',
                'updated_at'    => '2023-06-28 01:27:52',
            ],
            [
                'tieu_de'       => 'Ôtô rẻ nhất Việt Nam ra mắt, giá từ 239 triệu đồng',
                'slug_tin_tuc'  => Str::slug('Ôtô rẻ nhất Việt Nam ra mắt, giá từ 239 triệu đồng'),
                'hinh_anh'      => 'https://i1-vnexpress.vnecdn.net/2023/06/29/WulingHongguangMiniEV2-1688008-2705-6846-1688008056.jpg?w=220&h=132&q=100&dpr=2&fit=crop&s=_igKkCTtPpcIzmexO6Mtmg',
                'mo_ta_ngan'    => 'Mẫu xe điện nhỏ nhất Việt Nam bán ra 2 phiên bản, môtơ điện công suất 26,8 mã lực, tầm hoạt động 120-170 km, giá cao nhất 279 triệu đồng.',
                'chi_tiet'      => 'Mẫu xe điện nhỏ nhất Việt Nam bán ra 2 phiên bản, môtơ điện công suất 26,8 mã lực, tầm hoạt động 120-170 km, giá cao nhất 279 triệu đồng.

                Ngày 29/6 tại Hà Nội và TP HCM, công ty TMT ra mắt chiếc Wuling Hongguang Mini EV lắp ráp tại nhà máy ở Hưng Yên. Xe bán ra 2 phiên bản, gồm tiêu chuẩn (LV1) và nâng cao (LV2). Mỗi bản có hai tùy chọn về dung lượng pin.

                Giá bán cụ thể các phiên bản của Wuling Hongguang Mini EV như sau:

                Phiên bản	LV1	LV2
                Pin (kWh)/ Quãng đường (km)	9,6/120	13,9/170	9,6/120	13,9/170
                Giá (triệu đồng)	239	265	255	279
                Riêng bản LV2 pin 9,6 kWh có phần nóc sơn trắng/đen có giá 258 triệu đồng, và bản LV2 pin 13,9 kWh nóc trắng/đen là 282 triệu đồng.

                Ngoại thất

                Wuling Hongguang Mini EV sở hữu kích thước dài, rộng, cao lần lượt 2.920 mm, 1.493 mm, 1.621 mm, chiều dài cơ sở 1.940 mm. Những thông số này nhỏ hơn nhiều các mẫu hatcback cỡ A trên thị trường, ví dụ như Kia Morning với chiều dài x rộng x cao là 3.595 x 1.595 x 1.495 mm, chiều dài cơ sở 2.400 mm.
                Mẫu xe điện mini của hãng Trung Quốc sở hữu ngoại hình kiểu khối hộp, giống những mẫu keicar của ngành ôtô Nhật Bản. Thân xe chủ yếu là những đường nét vuông vức, không cầu kỳ. Đây cũng là cách để tối ưu không gian bên trong bởi kích thước xe khiêm tốn.

                Hai phiên bản tiêu chuẩn và nâng cao của Wuling Hongguang Mini EV đi kèm với các trang bị khác nhau. Bản thấp lắp đèn pha và đèn hậu halogen, trong khi bản cao là halogen thêm bóng projector. Đèn pha bản nâng cao có thêm dải định vị và trang trí LED hai bên logo phát sáng.

                Cả hai bản đều đi kèm lốp kích thước 145/70R12, tức tương đương bánh xe máy Vespa. Hệ thống treo dạng Mac Pherson phía trước và bán độc lập phía sau, phanh tang trống.',
                'tinh_trang'    => 1,
                'created_at'    => '2023-06-28 01:27:52',
                'updated_at'    => '2023-06-28 01:27:52',
            ],
            [
                'tieu_de'       => 'Hyundai Palisade sắp bán chính hãng ở Việt Nam',
                'slug_tin_tuc'  => Str::slug('Hyundai Palisade sắp bán chính hãng ở Việt Nam'),
                'hinh_anh'      => 'https://i1-vnexpress.vnecdn.net/2023/06/27/palisade-vne-1687832247-1516-1687833045.png?w=680&h=0&q=100&dpr=2&fit=crop&s=9Lw44hKUHR4kj_Y54YZRWA',
                'mo_ta_ngan'    => 'Mẫu SUV 3 hàng ghế lớn và đắt nhất của Hyundai dự kiến ra mắt vào cuối 2023, cạnh tranh với Ford Explorer, Volkswagen Teramont.',
                'chi_tiet'      => 'Mẫu SUV 3 hàng ghế lớn và đắt nhất của Hyundai dự kiến ra mắt vào cuối 2023, cạnh tranh với Ford Explorer, Volkswagen Teramont.

                Sau vài năm thăm dò thị trường, Hyundai Thành Công sẽ phân phối Palisade chính hãng ở Việt Nam. "Kế hoạch là cuối 2023 sẽ bán ra nhưng với tình hình thị trường ảm đạm như hiện nay, việc ra mắt xe có thể chậm hơn dự kiến", nguồn tin của VnExpress cho biết.

                Hồi 2019, Hyundai Thành Công từng nhập về lô hàng khoảng 10 chiếc Palisade với mục đích nghiên cứu thị trường. Khi đó hãng nói chưa có kế hoạch bán hàng cụ thể.
                Palisade bán tại Việt Nam nhiều khả năng nhập khẩu. Với những dòng sản phẩm mới, Hyundai Thành Công thường nhập khẩu trước, sau đó nếu dung lượng thị trường ổn định mới lắp ráp, như Creta, Stargazer. Palisade hiện lắp ráp tại hai nhà máy của Hyundai, một tại Hàn Quốc, một tại Nga.

                Quảng cáo
                Hyundai Palisade là một trong những sản phẩm mới được hãng này lên kế hoạch giới thiệu tại Việt Nam, cùng với xe điện Ioniq 5 hay mẫu MPV Custo (cỡ C). Mục tiêu của hãng là đa dạng hoá dải sản phẩm và cạnh tranh ngôi đầu doanh số với đối thủ chính Toyota.

                Palisade kết cấu unibody và khi có mặt trên thị trường, sẽ trở thành đối thủ của những mẫu SUV 3 hàng ghế như Ford Explorer giá 2,399 tỷ đồng, Volkswagen Teramont giá 2,499 tỷ đồng, đều nhập khẩu Mỹ. Chưa có giá bán chính thức nhưng trong bảng giá tính lệ phí trước bạ của Bộ Tài chính, Hyundai Palisade có giá 1,87 tỷ đồng.',
                'tinh_trang'    => 1,
                'created_at'    => '2023-06-28 01:27:52',
                'updated_at'    => '2023-06-28 01:27:52',
            ],
            [
                'tieu_de'       => 'Lòng trung thành của khách hàng giảm sút khi mua xe điện.',
                'slug_tin_tuc'  => Str::slug('Lòng trung thành của khách hàng giảm sút khi mua xe điện'),
                'hinh_anh'      => 'https://i1-vnexpress.vnecdn.net/2023/06/27/Tesla-1-9981-1687855599.jpg?w=680&h=0&q=100&dpr=2&fit=crop&s=98zWdvzNraAQFHr13mo71A',
                'mo_ta_ngan'    => 'MỸTrong số 10 người mua xe điện, có 8 khách hàng sẵn sàng chuyển sang thương hiệu khác khi có cơ hội mua sắm tiếp theo.',
                'chi_tiet'      => 'MỸTrong số 10 người mua xe điện, có 8 khách hàng sẵn sàng chuyển sang thương hiệu khác khi có cơ hội mua sắm tiếp theo.

                Sự trỗi dậy của xe điện làm thay đổi ngành công nghiệp ôtô theo nhiều cách khác nhau. Xu hướng cũng làm thay đổi chính những người chi tiền mua xe, khi nghiên cứu mới của Edmunds - nguồn thông tin và dữ liệu khổng lồ về ôtô của Mỹ - cho thấy đến 85% khách hàng nói họ sẵn sàng mua một xe từ một hãng khác chưa từng sử dụng sản phẩm trước đó.

                Nhưng không chỉ nói suông. Trong quý I năm nay, số khách hàng đổi từ xe điện đang đi sang một xe thuộc thương hiệu khác chiếm 63% tổng số vụ giao dịch. Trong khi đó, tỷ lệ này trong toàn ngành chỉ là 51%.
                Tỷ lệ này ở Tesla thấp nhất. Vẫn là một thương hiệu non trẻ so với toàn ngành, nhiều khách hàng của hãng cũng là mới, và hãng gần như đảm bảo được sự hấp dẫn bằng những thứ mới mẻ và đặc biệt.

                Quảng cáo
                Kết quả nghiên cứu cũng cho thấy những thực tế trên thị trường xe điện cũng như toàn ngành nói chung tại Mỹ.

                Cụ thể, doanh số xe điện tiếp tục tăng trưởng dù giá tăng. Thị phần của phân khúc này hiện khoảng 6,7% tính đến hết tháng 5, tăng so với 5,2% cùng kỳ 2022. Mức giá giao dịch trung bình của một xe điện là 65.400 USD cũng trong tháng 5, so với mức trung bình của toàn thị trường là 47.900 USD.

                Có những cơ hội bị bỏ lỡ khi một số hãng sản xuất không nắm bắt lợi thế từ sự tin tưởng của khách hàng để tăng tốc trong lĩnh vực xe điện. Top 5 thương hiệu được khách hàng tin rằng đang làm ra những chiếc xe điện tốt nhất là Tesla, BMW, Toyota, Chevrolet và Audi.

                Các chủ xe hạng sang có xu hướng chuộng xe điện hơn những người khác. Đến 59% người đi xe sang nói rằng họ thích xe điện so với 27% những người sở hữu ôtô phổ thông. 79% các chủ xe sang cân nhắc mua xe điện so với chỉ 39% các chủ xe bình dân.

                Độ nhạy cảm và sự quan tâm đến xe điện ở người trẻ cũng cao hơn. 75% khách hàng độ tuổi 25-34 và 88% độ tuổi 35-44 có thể mua xe điện trong lần giao dịch tiếp theo, so với 60% độ tuổi 45-54 và chỉ 27% độ tuổi 55-64.

                Trong trường hợp mua xe điện, 23% người tham gia khảo sát nói muốn một chiếc có giá dưới 30.000 USD, chưa kể các khoản hỗ trợ và giảm thuế, nhưng rất ít xe ở mức giá này. Ngoài ra, 49% nói rằng họ đang tìm một xe điện có hành trình 482 km trở lên, trong khi phần lớn xe điện ngày nay không đạt mục tiêu này, theo ước tính của EPA cũng như thử nghiệm của Edmunds.',
                'tinh_trang'    => 1,
                'created_at'    => '2023-06-28 01:27:52',
                'updated_at'    => '2023-06-28 01:27:52',
            ],
        ]);
    }
}
