<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            // ['key' => 'company-name', 'value' => '{{$companyNameValue}}', 'type' => 'common'],
            // ['key' => 'logo', 'value' => '', 'type' => 'common'],
            // ['key' => 'mission', 'value' => '', 'type' => 'common'],
            // ['key' => 'address', 'value' => 'Tầng G, 485B Nguyễn Đình Chiểu, Phường 2, Quận 3, Thành phố Hồ Chí Minh, Việt Nam', 'type' => 'common'],
            // ['key' => 'phone', 'value' => '028 3636 8805 - 0909 326 456', 'type' => 'common'],
            // ['key' => 'email', 'value' => '', 'type' => 'common'],
            // ['key' => 'price_quote', 'value' => 'MIKO TECH luôn tư vấn dịch vụ miễn phí. Chúng tôi sẽ liên hệ báo giá theo thông tin mà bạn để lại.', 'type' => 'common'],
            // ['key' => 'time-working', 'value' => 'Thứ 2 - Thứ 6 từ 8h30 - 17h30|Thứ 7 từ 8h30 - 12h30', 'type' => 'common'],
            // ['key' => 'dkkd', 'value' => 'Số ĐKKD 0316887797 do Sở KH và ĐT TP Hồ Chí Minh cấp ngày 01/06/2021', 'type' => 'common'],
            // ['key' => 'facebook', 'value' => '', 'type' => 'common'],
            // ['key' => 'zalo', 'value' => '', 'type' => 'common'],
            // ['key' => 'messenger', 'value' => '', 'type' => 'common'],
            // ['key' => 'google_map', 'value' => 'https://www.google.com/maps?cid=419312923473929458', 'type' => 'common'],

            // ['key' => 'about-title', 'value' => 'Chúng tôi mang đến giải pháp Marketing SÁNG TẠO, TỐI ƯU VÀ HIỆU QUẢ', 'type' => 'dashboard'],
            // ['key' => 'about-desc', 'value' => 'Liệu thương hiệu của bạn có đủ lực để chiến tiếp trên thương trường trong thời kỳ chuyển đổi số? 
            // Làm sao để tối ưu nguồn lực và đẩy mạnh thương hiệu cho doanh nghiệp của bạn? Miko Tech ở đây  để cùng 
            // bạn dựng xây và phát triển thương hiệu thông qua dịch vụ thiết kế website và các giải pháp  Marketing tổng thể: 
            // sáng tạo nội dung, quản trị website, SEO tổng thể, giải pháp thương mại điện tử,  thiết kế app, thiết kế nhận diện thương hiệu, 
            // quảng cáo đa nền tảng...', 'type' => 'dashboard'],
            // ['key' => 'slider-1', 'value' => 'media/default-image.jpg', 'type' => 'dashboard'],
            // ['key' => 'slider-2', 'value' => 'media/default-image.jpg', 'type' => 'dashboard'],
            // ['key' => 'slider-3', 'value' => 'media/default-image.jpg', 'type' => 'dashboard'],
            // ['key' => 'solution-title', 'value' => 'Thiết kế website và dịch vụ Marketing', 'type' => 'dashboard'],
            // ['key' => 'solution-description', 'value' => 'Không chỉ thiết kế website chuẩn giao diện và trải nghiệm người dùng, Miko Tech với hệ
            // sinh thái các giải pháp Marketing toàn diện sẽ là điểm tựa vững chắc giúp doanh nghiệp của bạn phát triển lâu
            // dài và bền vững.', 'type' => 'dashboard'],

            // ['key' => 'title', 'value' => 'Tin hay', 'type' => 'post'],
            // ['key' => 'description', 'value' => 'Cùng Miko Tech cập nhật những thông tin "nóng sốt" nhất về lĩnh vực Digital Media', 'type' => 'post'],
            // ['key' => 'banner', 'value' => '', 'type' => 'post'],
            // ['key' => 'banner_mobile', 'value' => '', 'type' => 'post'],

            // ['key' => 'title', 'value' => 'GÓC CHIÊU MỘ', 'type' => 'hr'],
            // ['key' => 'description', 'value' => 'TRỞ THÀNH CHIẾN BINH CỦA ĐỘI QUÂN MIKO TECH', 'type' => 'hr'],
            // ['key' => 'banner', 'value' => '', 'type' => 'hr'],
            // ['key' => 'banner_mobile', 'value' => '', 'type' => 'hr'],

            // ['key' => 'title', 'value' => 'GÓC CHIÊU MỘ', 'type' => 'recruitment'],
            // ['key' => 'description', 'value' => 'TRỞ THÀNH CHIẾN BINH CỦA ĐỘI QUÂN MIKO TECH', 'type' => 'recruitment'],
            // ['key' => 'banner', 'value' => '', 'type' => 'recruitment'],
            // ['key' => 'banner_mobile', 'value' => '', 'type' => 'recruitment'],
            // ['key' => 'avatar_post', 'value' => '', 'type' => 'recruitment'],

            // // ['key' => 'title', 'value' => 'Sản phẩm nổi bật', 'type' => 'project'],
            // // ['key' => 'description', 'value' => 'Hơn bất cứ giá trị nào, những sản phẩm khiến khách hàng hài lòng luôn là điều tuyệt vời nhất', 'type' => 'project'],

            // ['key' => 'banner', 'value' => '', 'type' => 'service'],
            // ['key' => 'banner_mobile', 'value' => '', 'type' => 'service'],
            // ['key' => 'title', 'value' => 'Dịch vụ', 'type' => 'service'],
            // ['key' => 'description', 'value' => 'THIẾT KẾ WEBSITE VÀ MARKETING', 'type' => 'service'],
            // ['key' => 'nangtam_banner', 'value' => '', 'type' => 'service'],
            // ['key' => 'nangtam_title', 'value' => 'NÂNG TẦM VỊ THẾ THƯƠNG HIỆU CỦA BẠN VỚI ', 'type' => 'service'],
            // ['key' => 'giatri_title', 'value' => 'Giá trị khác biệt tại Miko Tech', 'type' => 'service'],
            // ['key' => 'giatri_description', 'value' => 'Miko Tech sở hữu đội ngũ chiến binh dày dặn kinh nghiệm thực chiến trên
            // thị trường Marketing. Chúng tôi luôn trong tâm thế sẵn sàng tham gia bất kỳ cuộc chiến nào cùng với doanh nghiệp
            // bạn.', 'type' => 'service'],
            // ['key' => 'giatri_item_1', 'value' => 'sáng tạo', 'type' => 'service'],
            // ['key' => 'giatri_item_2', 'value' => 'kinh nghiệm', 'type' => 'service'],
            // ['key' => 'giatri_item_3', 'value' => 'thấu hiểu', 'type' => 'service'],
            // ['key' => 'giatri_item_4', 'value' => 'Đa dạng', 'type' => 'service'],
            // ['key' => 'giatri_item_1_val', 'value' => 'Sáng tạo trong phong cách thiết kế và luôn cập nhật xu hướng mới thường xuyên. Sản phẩm bạn
            // nhận được là sự
            // hội tụ của sáng tạo, chất lượng và độc đáo', 'type' => 'service'],
            // ['key' => 'giatri_item_2_val', 'value' => 'Kinh nghiệm chiến đấu nhiều năm trên chiến trường Marketing, đội ngũ chiến binh MIKO TECH sẽ
            // giúp bạn giải
            // quyết vấn đề một cách dễ dàng và tiết kiệm.', 'type' => 'service'],
            // ['key' => 'giatri_item_3_val', 'value' => 'Trải qua nhiều cuộc chiến, Miko Tech dễ dàng nhìn nhận và thấu hiểu vấn đề một cách nhanh
            // chóng', 'type' => 'service'],
            // ['key' => 'giatri_item_4_val', 'value' => 'Miko Tech có hệ sinh thái Marketing đa dịch vụ hỗ trợ lẫn nhau, bền vững và lâu dài', 'type' => 'service'],

            // ['key' => 'banner', 'value' => '', 'type' => 'about'],
            // ['key' => 'banner_mobile', 'value' => '', 'type' => 'about'],
            // ['key' => 'title', 'value' => 'Chúng tôi', 'type' => 'about'],
            // ['key' => 'description', 'value' => 'Sở hữu những chiến binh giàu kinh nghiệm thực chiến', 'type' => 'about'],
            // ['key' => 'gioithieu_title', 'value' => 'Chúng tôi', 'type' => 'about'],
            // ['key' => 'gioithieu_description', 'value' => 'Đội ngũ Mikotech với kinh nghiệm tham gia nhiều cuộc chiến trong nhiềunăm liền ở thị trường Marketing, giờ đây chúng tôi chính thức là một đội quân hùng mạnh với mong muốnđồng hành và phát triển cùng bạn trong những cuộc chiến sắp tới, thông qua các dịch vụ và giải pháp Marketing hiệu
            // quả. ', 'type' => 'about'],
            // ['key' => 'dichvu_banner', 'value' => '', 'type' => 'about'],
            // ['key' => 'giatri_title', 'value' => 'Giá trị khác biệt tại Miko Tech', 'type' => 'about'],
            // ['key' => 'giatri_description', 'value' => 'Miko Tech sở hữu đội ngũ chiến binh dày dặn kinh nghiệm thực chiến trên
            // thị trường Marketing. Chúng tôi luôn trong tâm thế sẵn sàng tham gia bất kỳ cuộc chiến nào cùng với doanh nghiệp
            // bạn.', 'type' => 'about'],
            // ['key' => 'giatri_item_1', 'value' => 'sáng tạo', 'type' => 'about'],
            // ['key' => 'giatri_item_2', 'value' => 'kinh nghiệm', 'type' => 'about'],
            // ['key' => 'giatri_item_3', 'value' => 'thấu hiểu', 'type' => 'about'],
            // ['key' => 'giatri_item_4', 'value' => 'Đa dạng', 'type' => 'about'],
            // ['key' => 'giatri_item_1_val', 'value' => 'Sáng tạo trong phong cách thiết kế và luôn cập nhật xu hướng mới thường xuyên. Sản phẩm bạn
            // nhận được là sự
            // hội tụ của sáng tạo, chất lượng và độc đáo', 'type' => 'about'],
            // ['key' => 'giatri_item_2_val', 'value' => 'Kinh nghiệm chiến đấu nhiều năm trên chiến trường Marketing, đội ngũ chiến binh MIKO TECH sẽ
            // giúp bạn giải
            // quyết vấn đề một cách dễ dàng và tiết kiệm.', 'type' => 'about'],
            // ['key' => 'giatri_item_3_val', 'value' => 'Trải qua nhiều cuộc chiến, Miko Tech dễ dàng nhìn nhận và thấu hiểu vấn đề một cách nhanh
            // chóng', 'type' => 'about'],
            // ['key' => 'giatri_item_4_val', 'value' => 'Miko Tech có hệ sinh thái Marketing đa dịch vụ hỗ trợ lẫn nhau, bền vững và lâu dài', 'type' => 'about'],
            // ['key' => 'video', 'value' => '', 'type' => 'about'],
            // ['key' => 'video_avatar', 'value' => '', 'type' => 'about'],
            // ['key' => 'video_title', 'value' => 'Không ngừng nỗ lực nâng cao chất lượng dịch vụ', 'type' => 'about'],
            // ['key' => 'video_description', 'value' => 'Chiến binh của chúng tôi không ngừng nỗ lực mang đến cho bạn những trảinghiệm dịch vụ tốt nhất. Sẵn sàng hỗ trợ bạn 24/7 để giải đáp những thắc mắc và giải quyết các khókhăn bạn gặpphải trong quá trình sử dụng dịch vụ.', 'type' => 'about'],
            // ['key' => 'chienloipham_banner', 'value' => '', 'type' => 'about'],
            // ['key' => 'chienloipham_title', 'value' => '', 'type' => 'about'],
            // ['key' => 'chienloipham_description', 'value' => '', 'type' => 'about'],
            // ['key' => 'diemdadang_banner', 'value' => '', 'type' => 'about'],
            // ['key' => 'diemdadang_title', 'value' => '', 'type' => 'about'],
            // ['key' => 'diemdadang_item_1', 'value' => 'Sử dụng nhiều ngôn ngữ lập trình', 'type' => 'about'],
            // ['key' => 'diemdadang_item_2', 'value' => 'Nhiều đối tác liên kết', 'type' => 'about'],
            // ['key' => 'diemdadang_item_3', 'value' => 'Hệ sinh thái Marketing', 'type' => 'about'],
            // ['key' => 'diemdadang_item_4', 'value' => 'Sáng tạo trong thiết kế', 'type' => 'about'],

            // ['key' => 'title', 'value' => 'Liên hệ', 'type' => 'post'],
            // ['key' => 'description', 'value' => 'HÃY ĐỂ CHÚNG TÔI KẾT NỐI VÀ ĐỒNG HÀNH CÙNG BẠN!', 'type' => 'post'],
            ['key' => 'youtube', 'value' => '', 'type' => 'common'],
            ['key' => 'instagram', 'value' => '', 'type' => 'common'],
            ['key' => 'linkedin', 'value' => '', 'type' => 'common'],
            ['key' => 'tiktok', 'value' => '', 'type' => 'common'],

        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
