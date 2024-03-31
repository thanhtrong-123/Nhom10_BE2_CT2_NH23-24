<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Data of admins
        DB::table('admins')->insert([
            'admin_email' => 'admin',
            'admin_password' => md5('123123'),
            'admin_name' => 'admin',
            'admin_phone' => '0123456789',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Data of brands
        // 1
        DB::table('brands')->insert([
            'brand_name' => 'GODSON',
            'brand_slug' => 'godson',
            'brand_desc' => 'Được biết đến là một thương hiệu trẻ mới ra mắt thị trường cách đây không lâu. Nhưng Godson đã được rất nhiều bạn trẻ ưa thích và lựa chọn bởi những sản phẩm vô cùng đặc biệt, mang những dấu ấn riêng. Mỗi sản phẩm mà Godson tung ra thị trường thường rất chỉnh chu trong thiết kế cho đến chất lượng sản phẩm. Được làm từ chất vải cotton 100% nhằm tạo đến cho người mặc sự thoải mái. Về hình ảnh được in nơi áo, Godson đã có sự kết hợp giữa Screen Printing và DTG Printing. Hai chất liệu in này khi kết hợp sẽ mang tới sự bền bỉ, tạo nên những hình ảnh sắc nét dành cho sản phẩm. Godson đã có sự đầu tư tìm hiểu rất kỹ lưỡng cho từng sản phẩm trước khi cho ra mắt, đó chính là điều khiến thương hiệu này có thể thu hút được lượng lớn khách hàng, mặc dù chỉ mới ra mắt cách đây không lâu.',
            'brand_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 2
        DB::table('brands')->insert([
            'brand_name' => 'COOLMATE',
            'brand_slug' => 'coolmate',
            'brand_desc' => 'Một tên thương hiệu được nhiều bạn trẻ ưa chuộng hiện nay đó là Coolmate. Nghe cái tên chúng ta cũng đã có thể thấy được dấu ấn phong cách nổi bật của thương hiệu này. Coolmate với sự kết hợp giữa "Cool" và "Mate". Với ý nghĩa muốn mang đến cho khách hàng một vẻ ngoài vừa “cool” ngầu vừa mới mẻ, năng động. Hơn nữa, giữa người bán và người mua sẽ có sự đồng hành- “mate” với nhau để cùng phát triển.',
            'brand_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 3
        DB::table('brands')->insert([
            'brand_name' => 'CLOWNZ',
            'brand_slug' => 'clownz',
            'brand_desc' => 'Nếu như những thương hiệu trên đều mang một style riêng biệt thì ClownZ lại là nơi mà các tính đồ streetwear Hà Thành có thể tìm thấy tất cả những gì mình cần.Từ Baseball Jacket, Tee, Jogger Pants cho đến sneakers trong bức ảnh này đều có thể tìm thấy ở ClownZ.',
            'brand_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 4
        DB::table('brands')->insert([
            'brand_name' => 'BOBUI',
            'brand_slug' => 'bobui',
            'brand_desc' => 'BOBUI là một thương hiệu quần áo đường phố được thành lập tại Sài Gòn, Việt Nam vào năm 2014 bởi Nguyễn Thanh Dũng. Không chỉ là thương hiệu thời trang đường phố BOBUI vừa là nhà sản xuất quần áo tại Sài Gòn. Các thiết kế lấy cảm hứng từ thời trang của các nền văn hóa Hip Hop, Rock mang đậm hơi thở thời trang đường phố. Brand đa dạng về mẫu mã qua các items như: Tee, Shirt, Jacket, Pant, Accessories,…Với mong muốn mang đến cái nhìn tích cực hơn về chất lượng thời trang trong nước BOBUI không ngừng đổi mới và hoàn thiện mình từng ngày.',
            'brand_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 5
        DB::table('brands')->insert([
            'brand_name' => 'DEGREY',
            'brand_slug' => 'degrey',
            'brand_desc' => 'Degrey là một local brand giá rẻ được thành lập từ năm 2016 cho đến nay đã phát triển và được giới trẻ săn đón không chỉ bởi giá thành mà còn ở chất lượng sản phẩm.',
            'brand_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Data of categories
        // 1
        DB::table('categories')->insert([
            'category_name' => 'T-Shirt',
            'category_slug' => 't-shirt',
            'category_desc' => 'Áo thun, hay áo phông thường được dệt theo nốt jersey và bằng sợi cotton, đôi khi bằng chất liệu khác, tạo sự mềm mại đặc trưng. Áo thun có thể được trang trí bằng chữ và/hoặc hình ảnh thường dùng để quảng bá điều gì đó hoặc quảng cáo sản phẩm, công ty hoặc trang web.',
            'category_keywords' => '#t-shirt',
            'category_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 2
        DB::table('categories')->insert([
            'category_name' => 'Shorts',
            'category_slug' => 'shorts',
            'category_desc' => 'Quần short là kiểu quần có chiều dài khoảng 5-7cm đến phía trên đầu gối, với thiết kế tương tự như quần thông thường, chỉ khác biệt chủ yếu ở độ dài. Việc lựa chọn chất liệu cho quần short rất đa dạng, từ kaki, thun, cotton đến lanh, đũi, tùy thuộc vào nhu cầu và mục đích sử dụng của mỗi người.',
            'category_keywords' => '#shorts',
            'category_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 3
        DB::table('categories')->insert([
            'category_name' => 'Hoodie',
            'category_slug' => 'hoodie',
            'category_desc' => 'Áo hoodie là một loại áo nỉ có mũ trùm đầu che một phần hoặc toàn bộ đầu hoặc mặt của người mặc. Áo hoodie có khóa kéo thường có hai túi ở mặt trước phía dưới, một túi ở hai bên dây kéo, trong khi áo hoodie "áo thun" thường có một túi hoặc một túi bịt lớn duy nhất ở cùng một vị trí.',
            'category_keywords' => '#hoodie',
            'category_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 4
        DB::table('categories')->insert([
            'category_name' => 'Jacket',
            'category_slug' => 'jacket',
            'category_desc' => 'Áo khoác là loại trang phục dành cho phần thân trên, thường kéo dài đến dưới hông. Áo khoác thường có tay áo và buộc chặt ở phía trước hoặc hơi lệch sang một bên. Áo khoác thường nhẹ hơn, bó sát hơn và ít cách nhiệt hơn áo khoác ngoài. Một số áo khoác là thời trang, trong khi một số khác dùng làm quần áo bảo hộ.',
            'category_keywords' => '#jacket',
            'category_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 5
        DB::table('categories')->insert([
            'category_name' => 'Pants',
            'category_slug' => 'pants',
            'category_desc' => 'Quần là một loại trang phục che phần thân dưới của con người. Quần có nhiều kiểu dáng và chất liệu khác nhau, được sử dụng cho nhiều mục đích và trong nhiều hoàn cảnh khác nhau.',
            'category_keywords' => '#pants',
            'category_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Data of products
        // 1
        DB::table('products')->insert([
            'product_name' => 'Áo Thun Care & Share Pastel',
            'product_qty' => 10,
            'product_slug' => 'ao-thun-care-share-pastel',
            'product_price' => 199000,
            'product_image' => 'product01.jpg',
            'product_desc' => 'Áo thun Care & Share Pastel có thiết kế tối giản, dễ mặc với dòng chữ trang trí màu Pastel lạ mắt ngay trên ngực áo.',
            'product_content' => 'Áo được làm từ chất liệu 100% cotton mềm mại, co giãn, thấm hút mồ hôi tốt. Bên cạnh đó, định lượng vải 200gsm cũng giúp áo có độ dày dặn, bền bỉ hơn so với áo thun cotton thông thường. Áo có form dáng regular fit suông mà không quá thùng thình, mang đến cảm giác thoải mái và dễ chịu dù là đi tập, đi chơi, đi làm hay mặc ở nhà.',
            'category_id' => 1,
            'brand_id' => 2,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 2
        DB::table('products')->insert([
            'product_name' => 'Áo thun Stitch Summer Surfing',
            'product_qty' => 10,
            'product_slug' => 'ao-thun-stitch-summer-surfing',
            'product_price' => 249000,
            'product_image' => 'product02.jpg',
            'product_desc' => 'Cảm hứng mùa hè từ nhân vật Stitch và một Hawaii nhiệt đới với những bãi biển mát mẻ, đầy nắng.',
            'product_content' => 'Áo được làm từ chất liệu 100% cotton mềm mại, co giãn, thấm hút mồ hôi tốt. Bên cạnh đó, định lượng vải 200gsm cũng giúp áo có độ dày dặn, bền bỉ hơn so với áo thun cotton thông thường. Áo có form dáng regular fit suông mà không quá thùng thình, mang đến cảm giác thoải mái và dễ chịu dù là đi tập, đi chơi, đi làm hay mặc ở nhà.',
            'category_id' => 1,
            'brand_id' => 2,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 3
        DB::table('products')->insert([
            'product_name' => 'Bear Icon T-Shirt',
            'product_qty' => 10,
            'product_slug' => 'bear-icon-t-shirt',
            'product_price' => 1260000,
            'product_image' => 'product03.jpg',
            'product_desc' => 'Silicone Printed logo. DTF Printed Bear Icon on back. Traditional Red Logo Hang/tag. True to size. Order size down for tighter fit',
            'product_content' => 'Silicone Printed logo. DTF Printed Bear Icon on back. Traditional Red Logo Hang/tag. True to size. Order size down for tighter fit',
            'category_id' => 1,
            'brand_id' => 1,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 4
        DB::table('products')->insert([
            'product_name' => 'CLOWNZ FLORAL T-SHIRT',
            'product_qty' => 10,
            'product_slug' => 'clown-floral-t-shirt',
            'product_price' => 280000,
            'product_image' => 'product04.jpg',
            'product_desc' => 'Cảm hứng thiết kế : Mẫu T-shirt với graphic logo kèm text ClownZ được cách điệu và phối cùng với graphic hoa lá ở mặt trước, kết hợp với màu áo beige cực dễ phối đồ, tạo ra một vibe cực kỳ fresh và hợp với mùa hè.',
            'product_content' => 'Cảm hứng thiết kế : Mẫu T-shirt với graphic logo kèm text ClownZ được cách điệu và phối cùng với graphic hoa lá ở mặt trước, kết hợp với màu áo beige cực dễ phối đồ, tạo ra một vibe cực kỳ fresh và hợp với mùa hè.',
            'category_id' => 1,
            'brand_id' => 3,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 5
        DB::table('products')->insert([
            'product_name' => 'ÁO THUN OVERSIZED RETRO LOGO',
            'product_qty' => 10,
            'product_slug' => 'ao-thun-oversized-retro-logo',
            'product_price' => 550000,
            'product_image' => 'product05.jpg',
            'product_desc' => '100% COTTON. 320GSM. IN LỤA THỦ CÔNG. OVERSIZED FIT',
            'product_content' => '100% COTTON. 320GSM. IN LỤA THỦ CÔNG. OVERSIZED FIT',
            'category_id' => 1,
            'brand_id' => 4,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // 6
        DB::table('products')->insert([
            'product_name' => 'Quần Shorts Nam Daily Short',
            'product_qty' => 10,
            'product_slug' => 'quan-shorts-nam-daily-short',
            'product_price' => 269000,
            'product_image' => 'product06.jpg',
            'product_desc' => 'Quần nam Daily Shorts - sợi Sorona, nhuộm Cleandye',
            'product_content' => 'Sorona là sợi được tạo ra và phát triển bởi Dupont, một công ty dẫn đầu thị trường về các giải giáp bền vững, đem đến một cuộc sống tốt hơn, an toàn hơn cho sức khoẻ của con người. Thành phần quan trọng trong Sorona là Bio-PDO, được thực hiện thông qua quá trình lên men đường có chiết xuất từ NGÔ (bắp).',
            'category_id' => 2,
            'brand_id' => 2,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 7
        DB::table('products')->insert([
            'product_name' => 'Quần Shorts Nam Thể Thao 9',
            'product_qty' => 10,
            'product_slug' => 'quan-shorts-nam-the-thao-9',
            'product_price' => 219000,
            'product_image' => 'product07.jpg',
            'product_desc' => 'Chất liệu: 88% Polyester + 12% Spandex. Vải có khả năng thấm hút tốt và nhanh khô. Co giãn 4 chiều, thoải mái vận động. Túi to và sâu tiện lợi, thoải mái đựng đồ cá nhân. Có 1 túi khoá kéo ẩn, đựng vừa chìa khoá hay Airpods. Độ dài đo từ đũng đến viền ống quần: 9. Tự hào sản xuất tại Việt Nam',
            'product_content' => 'Chất liệu: 88% Polyester + 12% Spandex. Vải có khả năng thấm hút tốt và nhanh khô. Co giãn 4 chiều, thoải mái vận động. Túi to và sâu tiện lợi, thoải mái đựng đồ cá nhân. Có 1 túi khoá kéo ẩn, đựng vừa chìa khoá hay Airpods. Độ dài đo từ đũng đến viền ống quần: 9. Tự hào sản xuất tại Việt Nam',
            'category_id' => 2,
            'brand_id' => 2,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 8
        DB::table('products')->insert([
            'product_name' => 'Concept Shorts',
            'product_qty' => 10,
            'product_slug' => 'concept-shorts',
            'product_price' => 1260000,
            'product_image' => 'product08.jpg',
            'product_desc' => 'Polyester blend exterior. Mesh interior. Adjustable drawstring. 6.5" inseam. Rubber logo stitched on. Godson Brand ™ embroidered . Fit true to size',
            'product_content' => 'Polyester blend exterior. Mesh interior. Adjustable drawstring. 6.5" inseam. Rubber logo stitched on. Godson Brand ™ embroidered . Fit true to size',
            'category_id' => 2,
            'brand_id' => 1,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 9
        DB::table('products')->insert([
            'product_name' => 'QUẦN SHORT KAKI ANGEL THÊU',
            'product_qty' => 10,
            'product_slug' => 'quan-short-kaki-angel-theu',
            'product_price' => 500000,
            'product_image' => 'product09.jpg',
            'product_desc' => 'VẢI CHÍNH: 100% SỢI BÔNG COTTON. VẢI PHỤ: 100% SỢI BÔNG COTTON. TRANG TRÍ: THÊU VI TÍNH PHỤ LIỆU. DÂY KÉO YKK YKK ZIPPER. NÚT KIM LOẠI BOBUI BOBUI METALS BUTTON. KẸP KIM LOẠI BOBUI BOBUI METALS TAG. KIỂU DÁNG: RELAXED FIT',
            'product_content' => 'VẢI CHÍNH: 100% SỢI BÔNG COTTON. VẢI PHỤ: 100% SỢI BÔNG COTTON. TRANG TRÍ: THÊU VI TÍNH PHỤ LIỆU. DÂY KÉO YKK YKK ZIPPER. NÚT KIM LOẠI BOBUI BOBUI METALS BUTTON. KẸP KIM LOẠI BOBUI BOBUI METALS TAG. KIỂU DÁNG: RELAXED FIT',
            'category_id' => 2,
            'brand_id' => 4,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 10
        DB::table('products')->insert([
            'product_name' => 'Quần Shorts Nam Gym 7 Power',
            'product_qty' => 10,
            'product_slug' => 'quan-shorts-nam-gym-7-power',
            'product_price' => 339000,
            'product_image' => 'product10.jpg',
            'product_desc' => 'Quần Shorts Nam Gym 7 Power tại Coolmate được thiết kế phù hợp với mọi hoạt động thể thao như tập gym, chạy bộ và các hoạt động thường ngày khác. Với chất liệu thấm hút mồ hôi, thoáng khí và mang lại thoải mái cho người mặc, đây thực sự là lựa chọn hoàn hảo cho những chàng trai yêu thể thao. ',
            'product_content' => 'Quần Shorts Nam Gym 7 Power tại Coolmate được thiết kế phù hợp với mọi hoạt động thể thao như tập gym, chạy bộ và các hoạt động thường ngày khác. Với chất liệu thấm hút mồ hôi, thoáng khí và mang lại thoải mái cho người mặc, đây thực sự là lựa chọn hoàn hảo cho những chàng trai yêu thể thao. ',
            'category_id' => 2,
            'brand_id' => 2,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 11
        DB::table('products')->insert([
            'product_name' => 'Hoodie Degrey Is Us Kem - HDISK',
            'product_qty' => 10,
            'product_slug' => 'hoodie-degrey-is-us-kem-hdisk',
            'product_price' => 390000,
            'product_image' => 'product11.jpg',
            'product_desc' => 'Chất liệu: Chân Cua 350gsm. Họa tiết: Được thêu trực tiếp lên sản phẩm. Size: S/ M/ L. Thương hiệu: Degrey. Sản xuất: Việt Nam. Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
            'product_content' => 'Chất liệu: Chân Cua 350gsm. Họa tiết: Được thêu trực tiếp lên sản phẩm. Size: S/ M/ L. Thương hiệu: Degrey. Sản xuất: Việt Nam. Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
            'category_id' => 3,
            'brand_id' => 5,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 12
        DB::table('products')->insert([
            'product_name' => 'Hoodie Degrey Is Us - HDIS',
            'product_qty' => 10,
            'product_slug' => 'hoodie-degrey-is-us-hdis',
            'product_price' => 390000,
            'product_image' => 'product12.jpg',
            'product_desc' => 'Chất liệu: Chân Cua 350gsm. Họa tiết: Được thêu trực tiếp lên sản phẩm. Size: S/ M/ L. Thương hiệu: Degrey. Sản xuất: Việt Nam. Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
            'product_content' => 'Chất liệu: Chân Cua 350gsm. Họa tiết: Được thêu trực tiếp lên sản phẩm. Size: S/ M/ L. Thương hiệu: Degrey. Sản xuất: Việt Nam. Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
            'category_id' => 3,
            'brand_id' => 5,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 13
        DB::table('products')->insert([
            'product_name' => 'Three Heart Hoodie',
            'product_qty' => 10,
            'product_slug' => 'three-heart-hoodie',
            'product_price' => 1713000,
            'product_image' => 'product13.jpg',
            'product_desc' => 'Three Heart Embroidery. Logo Stitched Patch on sleeve. Made With Patience Screen-print. Fits True To Size. 65% Premium Cotton/ 35% Polyester',
            'product_content' => 'Three Heart Embroidery. Logo Stitched Patch on sleeve. Made With Patience Screen-print. Fits True To Size. 65% Premium Cotton/ 35% Polyester',
            'category_id' => 3,
            'brand_id' => 1,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 14
        DB::table('products')->insert([
            'product_name' => 'CLOWNZ METAL BASIC HOODIE',
            'product_qty' => 10,
            'product_slug' => 'clownz-metal-basic-hoodie',
            'product_price' => 450000,
            'product_image' => 'product14.jpg',
            'product_desc' => 'Cảm hứng thiết kế : Mẫu hoodie basic, form boxy, đặc biệt không sử dụng bo như các mẫu hoodie thông thường, với các đường may ghép vải ở mặt trước, kèm tag kim loại đúc chữ ClownZ màu bạc nhám. Sử dụng chun có chốt màu gun metal ở các vị trí : gấu áo, cửa tay, mũ, hoodie này còn có thêm đinh tán ở các vị trí góc túi bụng tạo điểm nhấn.',
            'product_content' => 'Cảm hứng thiết kế : Mẫu hoodie basic, form boxy, đặc biệt không sử dụng bo như các mẫu hoodie thông thường, với các đường may ghép vải ở mặt trước, kèm tag kim loại đúc chữ ClownZ màu bạc nhám. Sử dụng chun có chốt màu gun metal ở các vị trí : gấu áo, cửa tay, mũ, hoodie này còn có thêm đinh tán ở các vị trí góc túi bụng tạo điểm nhấn.',
            'category_id' => 3,
            'brand_id' => 3,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 15
        DB::table('products')->insert([
            'product_name' => 'CLOWNZ LONG LONELY HOODIE',
            'product_qty' => 10,
            'product_slug' => 'clownz-long-lonely-hoodie',
            'product_price' => 500000,
            'product_image' => 'product15.jpg',
            'product_desc' => 'Cảm hứng thiết kế : nằm trong BST F/W 2023 - Synthetic Realms của ClownZ, với dòng quote được lấy cảm hứng từ bộ phim Blade Runner 2049, được in to ở mặt trước. Túi bụng được thiết kế ẩn ở bên sườn áo, tạo cảm giác tinh tế khi sử dụng, đi cùng form boxy.',
            'product_content' => 'Cảm hứng thiết kế : nằm trong BST F/W 2023 - Synthetic Realms của ClownZ, với dòng quote được lấy cảm hứng từ bộ phim Blade Runner 2049, được in to ở mặt trước. Túi bụng được thiết kế ẩn ở bên sườn áo, tạo cảm giác tinh tế khi sử dụng, đi cùng form boxy.',
            'category_id' => 3,
            'brand_id' => 3,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // 16
        DB::table('products')->insert([
            'product_name' => 'ÁO KHOÁC DÙ LAST JUDGEMENT',
            'product_qty' => 10,
            'product_slug' => 'ao-khoac-du-last-judgement',
            'product_price' => 1500000,
            'product_image' => 'product16.jpg',
            'product_desc' => 'VẢI CHÍNH: 90% NYLON 10% SPANDEX. VẢI PHỤ: 100% POLYESTER. TRANG TRÍ:. "LAST JUDGEMENT" IN NHIỆT. MÓC KHÓA THIÊN THẦN BẠC. DÂY KÉO YKK YKK ZIPPER. FORM ÁO RỘNG',
            'product_content' => 'VẢI CHÍNH: 90% NYLON 10% SPANDEX. VẢI PHỤ: 100% POLYESTER. TRANG TRÍ:. "LAST JUDGEMENT" IN NHIỆT. MÓC KHÓA THIÊN THẦN BẠC. DÂY KÉO YKK YKK ZIPPER. FORM ÁO RỘNG',
            'category_id' => 4,
            'brand_id' => 4,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //17
        DB::table('products')->insert([
            'product_name' => 'ÁO KHOÁC DÙ ANGELS',
            'product_qty' => 10,
            'product_slug' => 'ao-khoac-du-angels',
            'product_price' => 950000,
            'product_image' => 'product17.jpg',
            'product_desc' => 'VẢI CHÍNH: 90% NYLON 10% SPANDEX. VẢI PHỤ: 100% POLYESTER. TRANG TRÍ:. "LAST JUDGEMENT" IN NHIỆT. MÓC KHÓA THIÊN THẦN BẠC. DÂY KÉO YKK YKK ZIPPER. FORM ÁO RỘNG',
            'product_content' => 'VẢI CHÍNH: 90% NYLON 10% SPANDEX. VẢI PHỤ: 100% POLYESTER. TRANG TRÍ:. "LAST JUDGEMENT" IN NHIỆT. MÓC KHÓA THIÊN THẦN BẠC. DÂY KÉO YKK YKK ZIPPER. FORM ÁO RỘNG',
            'category_id' => 4,
            'brand_id' => 4,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 18
        DB::table('products')->insert([
            'product_name' => 'Áo Khoác Nam gió Thể Thao phối màu',
            'product_qty' => 10,
            'product_slug' => 'ao-khoac-nam-gio-the-thao-phoi-mau',
            'product_price' => 499000,
            'product_image' => 'product18.jpg',
            'product_desc' => 'Chất liệu 100% Polyester. Công nghệ ứng dụng: HeiQ ViroBlock giúp ức chế và tiêu diệt vi khuẩn trên bề mặt vải. Vải hoàn thiện tính năng trượt nước và chống UV 99%. Logo phản quang giúp tăng nhận diện trong trời tối. Tính năng trượt nước của vải hiệu quả lên đến 30 lần giặt. Tự hào sản xuất tại Việt Nam',
            'product_content' => 'Chất liệu 100% Polyester. Công nghệ ứng dụng: HeiQ ViroBlock giúp ức chế và tiêu diệt vi khuẩn trên bề mặt vải. Vải hoàn thiện tính năng trượt nước và chống UV 99%. Logo phản quang giúp tăng nhận diện trong trời tối. Tính năng trượt nước của vải hiệu quả lên đến 30 lần giặt. Tự hào sản xuất tại Việt Nam',
            'category_id' => 4,
            'brand_id' => 2,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 19
        DB::table('products')->insert([
            'product_name' => 'CLOWNZ CORDUROY HOOD JACKET',
            'product_qty' => 10,
            'product_slug' => 'clownz-corduroy-hood-jacket',
            'product_price' => 550000,
            'product_image' => 'product19.jpg',
            'product_desc' => 'Cảm hứng thiết kế : khóa 2 chiều tiện lợi, chất liệu nhung tăm, có thêm lót 1 lớp vải gió giúp áo không bị quá nặng nhưng vẫn rất ấm áp, phù hợp với thời tiết mùa xuân. Với kiểu dáng thiết kế basic, mặt trước được thêu chữ ClownZ tinh tế.',
            'product_content' => 'Cảm hứng thiết kế : khóa 2 chiều tiện lợi, chất liệu nhung tăm, có thêm lót 1 lớp vải gió giúp áo không bị quá nặng nhưng vẫn rất ấm áp, phù hợp với thời tiết mùa xuân. Với kiểu dáng thiết kế basic, mặt trước được thêu chữ ClownZ tinh tế.',
            'category_id' => 4,
            'brand_id' => 3,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 20
        DB::table('products')->insert([
            'product_name' => 'Áo khoác da Degrey.Madmonks Biker Jacket',
            'product_qty' => 10,
            'product_slug' => 'ao-khoac-da-degrey.madmonks-biker-jacket',
            'product_price' => 1200000,
            'product_image' => 'product20.jpg',
            'product_desc' => 'Chất liệu: da PVC. Hoạ tiết: Được may trực tiếp lên sản phẩm cực ngầu. Thương hiệu: Degrey. Sản xuất: Việt Nam. Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
            'product_content' => 'Chất liệu: da PVC. Hoạ tiết: Được may trực tiếp lên sản phẩm cực ngầu. Thương hiệu: Degrey. Sản xuất: Việt Nam. Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
            'category_id' => 4,
            'brand_id' => 5,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 21
        DB::table('products')->insert([
            'product_name' => 'Quần Dài Nam Kaki Excool',
            'product_qty' => 10,
            'product_slug' => 'quan-dai-nam-kaki-excool',
            'product_price' => 499000,
            'product_image' => 'product21.jpg',
            'product_desc' => 'Quần Dài Nam Kaki Excool dáng straight ống rộng cực kì tiện lợi và thoải mái. Với nhiều đặc tính nổi trội từ sợi sorona tự nhiên, đây chắc chắn là một chiếc quần của nhà Coolmate mà chàng nên có trong tủ quần áo của mình đấy.',
            'product_content' => 'Quần Dài Nam Kaki Excool dáng straight ống rộng cực kì tiện lợi và thoải mái. Với nhiều đặc tính nổi trội từ sợi sorona tự nhiên, đây chắc chắn là một chiếc quần của nhà Coolmate mà chàng nên có trong tủ quần áo của mình đấy.',
            'category_id' => 5,
            'brand_id' => 2,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 22
        DB::table('products')->insert([
            'product_name' => 'Quần Jeans Nam Basics dáng Straight',
            'product_qty' => 10,
            'product_slug' => 'quan-jeans-nam-basics-dang-straight',
            'product_price' => 499000,
            'product_image' => 'product22.jpg',
            'product_desc' => 'Quần Jeans Nam Basics dáng straight ống rộng cực kì tiện lợi và thoải mái. Với nhiều đặc tính nổi trội từ sợi sorona tự nhiên, đây chắc chắn là một chiếc quần của nhà Coolmate mà chàng nên có trong tủ quần áo của mình đấy.',
            'product_content' => 'Quần Jeans Nam Basics dáng straight ống rộng cực kì tiện lợi và thoải mái. Với nhiều đặc tính nổi trội từ sợi sorona tự nhiên, đây chắc chắn là một chiếc quần của nhà Coolmate mà chàng nên có trong tủ quần áo của mình đấy.',
            'category_id' => 5,
            'brand_id' => 2,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 23
        DB::table('products')->insert([
            'product_name' => 'Perception Sweatpants',
            'product_qty' => 10,
            'product_slug' => 'perception-sweatpants',
            'product_price' => 1889000,
            'product_image' => 'product23.jpg',
            'product_desc' => 'Lightweight Spring Sweatpants. Puff Print (3D) Godson Brand ™ Logo on right leg. Screenprint concept message "For those who seek a higher power. Communication, trust & love". MADE WITH PERCEPTION. 65% Cotton. 35% Polyester . True to size, order normal size',
            'product_content' => 'Lightweight Spring Sweatpants. Puff Print (3D) Godson Brand ™ Logo on right leg. Screenprint concept message "For those who seek a higher power. Communication, trust & love". MADE WITH PERCEPTION. 65% Cotton. 35% Polyester . True to size, order normal size',
            'category_id' => 5,
            'brand_id' => 1,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 24
        DB::table('products')->insert([
            'product_name' => 'CLOWNZ KAKI STRAIGHT PANTS V2',
            'product_qty' => 10,
            'product_slug' => 'cownz-kaki-straight-pants-v2',
            'product_price' => 320000,
            'product_image' => 'product24.jpg',
            'product_desc' => 'Cảm hứng thiết kế : Mẫu quần kaki ống xuông với các chi tiết túi ở mặt sau, và có túi ẩn kèm khóa zip. Một mẫu quần kaki xuông basic có thể phối được với hầu hết các items trong tủ đồ của bạn.',
            'product_content' => 'Cảm hứng thiết kế : Mẫu quần kaki ống xuông với các chi tiết túi ở mặt sau, và có túi ẩn kèm khóa zip. Một mẫu quần kaki xuông basic có thể phối được với hầu hết các items trong tủ đồ của bạn.',
            'category_id' => 5,
            'brand_id' => 3,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 25
        DB::table('products')->insert([
            'product_name' => 'QUẦN JEANS THIÊN THẦN PHUN SƠN MÀU XANH',
            'product_qty' => 10,
            'product_slug' => 'quan-jeans-thien-than-phun-son-mau-xanh',
            'product_price' => 650000,
            'product_image' => 'product25.jpg',
            'product_desc' => 'HỌA TIÊT THIỀN THẦN: KÉO LỤA THỦ CÔNG. HỌA TIẾT CUSTOM ANGEL: PHUN SƠN THỦ CÔNG. TRANG TRÍ: NÚT KIM LOẠI, DÂY KÉO YKK, NHÃN DA BOBỤI. VẢI CHÍNH: 100% SỢI BÔNG COTTON',
            'product_content' => 'HỌA TIÊT THIỀN THẦN: KÉO LỤA THỦ CÔNG. HỌA TIẾT CUSTOM ANGEL: PHUN SƠN THỦ CÔNG. TRANG TRÍ: NÚT KIM LOẠI, DÂY KÉO YKK, NHÃN DA BOBỤI. VẢI CHÍNH: 100% SỢI BÔNG COTTON',
            'category_id' => 5,
            'brand_id' => 5,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 26
        DB::table('products')->insert([
            'product_name' => 'Áo thun Degrey thiết kế 2 lớp Signature Degrey double tee - SIG',
            'product_qty' => 10,
            'product_slug' => 'ao-thun-degrey-thiet-ke-2-lop-signature-degrey-double-tee-sig',
            'product_price' => 350000,
            'product_image' => 'product26.jpg',
            'product_desc' => 'Chất liệu: 250gsm, cotton 2 chiều. Họa tiết: Được In lụa. Size: S/M/L. Thương hiệu: Degrey. Sản xuất: Việt Nam. Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
            'product_content' => 'Chất liệu: 250gsm, cotton 2 chiều. Họa tiết: Được In lụa. Size: S/M/L. Thương hiệu: Degrey. Sản xuất: Việt Nam. Màu sắc và họa tiết được thiết kế riêng bởi team design DEGREY',
            'category_id' => 1,
            'brand_id' => 5,
            'product_status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
