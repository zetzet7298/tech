<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\User;

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
            ['key' => 'company-name', 'value' => '{{$companyNameValue}}', 'type' => 'common'],
            ['key' => 'logo', 'value' => '', 'type' => 'common'],
            ['key' => 'mission', 'value' => '', 'type' => 'common'],
            ['key' => 'address', 'value' => 'Tầng G, 485B Nguyễn Đình Chiểu, Phường 2, Quận 3, Thành phố Hồ Chí Minh, Việt Nam', 'type' => 'common'],
            ['key' => 'phone', 'value' => '028 3636 8805 - 0909 326 456', 'type' => 'common'],
            ['key' => 'email', 'value' => '', 'type' => 'common'],
            ['key' => 'price_quote', 'value' => 'MIKO TECH luôn tư vấn dịch vụ miễn phí. Chúng tôi sẽ liên hệ báo giá theo thông tin mà bạn để lại.', 'type' => 'common'],
            ['key' => 'time-working', 'value' => 'Thứ 2 - Thứ 6 từ 8h30 - 17h30|Thứ 7 từ 8h30 - 12h30', 'type' => 'common'],
            ['key' => 'dkkd', 'value' => 'Số ĐKKD 0316887797 do Sở KH và ĐT TP Hồ Chí Minh cấp ngày 01/06/2021', 'type' => 'common'],
            ['key' => 'facebook', 'value' => '', 'type' => 'common'],
            ['key' => 'zalo', 'value' => '', 'type' => 'common'],
            ['key' => 'messenger', 'value' => '', 'type' => 'common'],
            ['key' => 'google_map', 'value' => 'https://www.google.com/maps?cid=419312923473929458', 'type' => 'common'],
        
            ['key' => 'about-title', 'value' => 'Chúng tôi mang đến giải pháp Marketing SÁNG TẠO, TỐI ƯU VÀ HIỆU QUẢ', 'type' => 'dashboard'],
            ['key' => 'about-desc', 'value' => 'Liệu thương hiệu của bạn có đủ lực để chiến tiếp trên thương trường trong thời kỳ chuyển đổi số? Làm sao để tối ưu nguồn lực và đẩy mạnh thương hiệu cho doanh nghiệp của bạn? Miko Tech ở đây để cùng bạn dựng xây và phát triển thương hiệu thông qua dịch vụ thiết kế website và các giải pháp Marketing tổng thể: sáng tạo nội dung, quản trị website, SEO tổng thể, giải pháp thương mại điện tử, thiết kế app, thiết kế nhận diện thương hiệu, quảng cáo đa nền tảng...', 'type' => 'dashboard'],
            ['key' => 'slider-1', 'value' => 'media/default-image.jpg', 'type' => 'dashboard'],
            ['key' => 'slider-2', 'value' => 'media/default-image.jpg', 'type' => 'dashboard'],
            ['key' => 'slider-3', 'value' => 'media/default-image.jpg', 'type' => 'dashboard'],
            ['key' => 'solution-title', 'value' => 'Thiết kế website và dịch vụ Marketing', 'type' => 'dashboard'],
            ['key' => 'solution-description', 'value' => 'Không chỉ thiết kế website chuẩn giao diện và trải nghiệm người dùng, Miko Tech với hệ sinh thái các giải pháp Marketing toàn diện sẽ là điểm tựa vững chắc giúp doanh nghiệp của bạn phát triển lâu dài và bền vững.', 'type' => 'dashboard'],
        
            ['key' => 'title', 'value' => 'Tin hay', 'type' => 'post'],
            ['key' => 'description', 'value' => 'Cùng Miko Tech cập nhật những thông tin "nóng sốt" nhất về lĩnh vực Digital Media', 'type' => 'post'],
            ['key' => 'banner', 'value' => '', 'type' => 'post'],
            ['key' => 'banner_mobile', 'value' => '', 'type' => 'post'],
        
            ['key' => 'title', 'value' => 'GÓC CHIÊU MỘ', 'type' => 'hr'],
            ['key' => 'description', 'value' => 'TRỞ THÀNH CHIẾN BINH CỦA ĐỘI QUÂN MIKO TECH', 'type' => 'hr'],
            ['key' => 'banner', 'value' => '', 'type' => 'hr'],
            ['key' => 'banner_mobile', 'value' => '', 'type' => 'hr'],
        
            ['key' => 'title', 'value' => 'GÓC CHIÊU MỘ', 'type' => 'recruitment'],
            ['key' => 'description', 'value' => 'TRỞ THÀNH CHIẾN BINH CỦA ĐỘI QUÂN MIKO TECH', 'type' => 'recruitment'],
            ['key' => 'banner', 'value' => '', 'type' => 'recruitment'],
            ['key' => 'banner_mobile', 'value' => '', 'type' => 'recruitment'],
            ['key' => 'avatar_post', 'value' => '', 'type' => 'recruitment'],
        
            ['key' => 'banner', 'value' => '', 'type' => 'service'],
            ['key' => 'banner_mobile', 'value' => '', 'type' => 'service'],
            ['key' => 'title', 'value' => 'Dịch vụ', 'type' => 'service'],
            ['key' => 'description', 'value' => 'THIẾT KẾ WEBSITE VÀ MARKETING', 'type' => 'service'],
            ['key' => 'nangtam_banner', 'value' => '', 'type' => 'service'],
            ['key' => 'nangtam_title', 'value' => 'NÂNG TẦM VỊ THẾ THƯƠNG HIỆU CỦA BẠN VỚI ', 'type' => 'service'],
            ['key' => 'giatri_title', 'value' => 'Giá trị khác biệt tại Miko Tech', 'type' => 'service'],
            ['key' => 'giatri_description', 'value' => 'Miko Tech sở hữu đội ngũ chiến binh dày dặn kinh nghiệm thực chiến trên thị trường Marketing. Chúng tôi luôn trong tâm thế sẵn sàng tham gia bất kỳ cuộc chiến nào cùng với doanh nghiệp bạn.', 'type' => 'service'],
            ['key' => 'giatri_item_1', 'value' => 'sáng tạo', 'type' => 'service'],
            ['key' => 'giatri_item_2', 'value' => 'kinh nghiệm', 'type' => 'service'],
            ['key' => 'giatri_item_3', 'value' => 'thấu hiểu', 'type' => 'service'],
            ['key' => 'giatri_item_4', 'value' => 'Đa dạng', 'type' => 'service'],
            ['key' => 'giatri_item_1_val', 'value' => 'Sáng tạo trong phong cách thiết kế và luôn cập nhật xu hướng mới thường xuyên. Sản phẩm bạn nhận được là sự hội tụ của sáng tạo, chất lượng và độc đáo', 'type' => 'service'],
            ['key' => 'giatri_item_2_val', 'value' => 'Kinh nghiệm chiến đấu nhiều năm trên chiến trường Marketing, đội ngũ chiến binh MIKO TECH sẽ giúp bạn giải quyết vấn đề một cách dễ dàng và tiết kiệm.', 'type' => 'service'],
            ['key' => 'giatri_item_3_val', 'value' => 'Trải qua nhiều cuộc chiến, Miko Tech dễ dàng nhìn nhận và thấu hiểu vấn đề một cách nhanh chóng', 'type' => 'service'],
            ['key' => 'giatri_item_4_val', 'value' => 'Miko Tech có hệ sinh thái Marketing đa dịch vụ hỗ trợ lẫn nhau, bền vững và lâu dài', 'type' => 'service'],
        
            ['key' => 'banner', 'value' => '', 'type' => 'about'],
            ['key' => 'banner_mobile', 'value' => '', 'type' => 'about'],
            ['key' => 'title', 'value' => 'Chúng tôi', 'type' => 'about'],
            ['key' => 'description', 'value' => 'Sở hữu những chiến binh giàu kinh nghiệm thực chiến', 'type' => 'about'],
            ['key' => 'gioithieu_title', 'value' => 'Chúng tôi', 'type' => 'about'],
            ['key' => 'gioithieu_description', 'value' => 'Đội ngũ Mikotech với kinh nghiệm tham gia nhiều cuộc chiến trong nhiều năm liền ở thị trường Marketing, giờ đây chúng tôi chính thức là một đội quân hùng mạnh với mong muốn đồng hành và phát triển cùng bạn trong những cuộc chiến sắp tới, thông qua các dịch vụ và giải pháp Marketing mà chúng tôi cung cấp.', 'type' => 'about'],
            ['key' => 'camnhan_title', 'value' => 'Cảm nhận từ khách hàng', 'type' => 'about'],
            ['key' => 'camnhan_description', 'value' => 'Khách hàng luôn tin tưởng và hài lòng với dịch vụ của Miko Tech', 'type' => 'about'],

            ['key' => 'banner', 'value' => '', 'type' => 'chitietbaiviet'],
            ['key' => 'banner_mobile', 'value' => '', 'type' => 'chitietbaiviet'],

            ['key' => 'name', 'value' => 'Department Store', 'type' => 'localbusiness'],
            ['key' => 'images', 'value' => '[
                "https://example.com/photos/1x1/photo.jpg",
                "https://example.com/photos/4x3/photo.jpg",
                "https://example.com/photos/16x9/photo.jpg"
               ]', 'type' => 'localbusiness'],
            ['key' => 'street_address', 'value' => '1600 Saratoga Ave', 'type' => 'localbusiness'],
            ['key' => 'address_locality', 'value' => 'San Jose', 'type' => 'localbusiness'],
            ['key' => 'address_region', 'value' => 'CA', 'type' => 'localbusiness'],
            ['key' => 'postal_code', 'value' => '95129', 'type' => 'localbusiness'],
            ['key' => 'address_country', 'value' => 'US', 'type' => 'localbusiness'],
            ['key' => 'latitude', 'value' => '37.293058', 'type' => 'localbusiness'],
            ['key' => 'longitude', 'value' => '-121.988331', 'type' => 'localbusiness'],
            ['key' => 'url', 'value' => 'https://www.example.com/store-locator/sl/San-Jose-Westgate-Store/1427', 'type' => 'localbusiness'],
            ['key' => 'price_range', 'value' => '$$$', 'type' => 'localbusiness'],
            ['key' => 'telephone', 'value' => '+14088717984', 'type' => 'localbusiness'],
            ['key' => 'opening_hours', 'value' => '[
                {
                  "@type": "OpeningHoursSpecification",
                  "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday"
                  ],
                  "opens": "08:00",
                  "closes": "23:59"
                },
                {
                  "@type": "OpeningHoursSpecification",
                  "dayOfWeek": "Sunday",
                  "opens": "08:00",
                  "closes": "23:00"
                }
              ]', 'type' => 'localbusiness'],
        ];
        // foreach ($settings as $setting) {
        //     \App\Models\Setting::updateOrCreate(
        //         ['key' => $setting['key'], 'type' => $setting['type']], 
        //         ['value' => $setting['value']]
        //     );
        // }
        foreach ($settings as $setting) {
            $existingSetting = \App\Models\Setting::where(['key' => $setting['key'], 'type' => $setting['type']])->first();
            if (!$existingSetting) {
                \App\Models\Setting::create($setting);
            }
        }
        
        $seos = [
            [
                'meta_title' => 'Trang Chủ',
                'meta_description' => 'Trang chủ của chúng tôi',
                'meta_url' => route('trangchu'),
                'meta_keywords' => 'trang chủ, home',
                'meta_site_name' => 'Trang Chủ',
                'og_title' => 'Trang Chủ',
                'og_description' => 'Trang chủ của chúng tôi',
                'og_url' => route('trangchu'),
                'og_image' => 'path/to/image1.jpg',
                'og_type' => 'website',
                'twitter_title' => 'Trang Chủ',
                'twitter_description' => 'Trang chủ của chúng tôi',
                'twitter_image' => 'path/to/twitter_image1.jpg',
                'canonical' => route('trangchu'),
                'meta_robots' => 'index, follow',
                'fb_app_id' => '',
                'og_locale' => 'vi_VN',
                'og_image_secure_url' => '',
                'fb_admins' => '',
                'og_image_type' => 'image/jpeg',
                'twitter_card' => 'summary',
                'twitter_site' => '',
                'twitter_creator' => '',
                'alternate_hreflang' => 'vi'
            ],
            [
                'meta_title' => 'Giới Thiệu',
                'meta_description' => 'Giới thiệu về chúng tôi',
                'meta_url' => route('gioithieu'),
                'meta_keywords' => 'giới thiệu, about us',
                'meta_site_name' => 'Giới Thiệu',
                'og_title' => 'Giới Thiệu',
                'og_description' => 'Giới thiệu về chúng tôi',
                'og_url' => route('gioithieu'),
                'og_image' => 'path/to/image2.jpg',
                'og_type' => 'website',
                'twitter_title' => 'Giới Thiệu',
                'twitter_description' => 'Giới thiệu về chúng tôi',
                'twitter_image' => 'path/to/twitter_image2.jpg',
                'canonical' => route('gioithieu'),
                'meta_robots' => 'index, follow',
                'fb_app_id' => '',
                'og_locale' => 'vi_VN',
                'og_image_secure_url' => '',
                'fb_admins' => '',
                'og_image_type' => 'image/jpeg',
                'twitter_card' => 'summary',
                'twitter_site' => '',
                'twitter_creator' => '',
                'alternate_hreflang' => 'vi'
            ],
            [
                'meta_title' => 'Tuyển Dụng',
                'meta_description' => 'Thông tin tuyển dụng',
                'meta_url' => route('tuyendung'),
                'meta_keywords' => 'tuyển dụng, jobs',
                'meta_site_name' => 'Tuyển Dụng',
                'og_title' => 'Tuyển Dụng',
                'og_description' => 'Thông tin tuyển dụng',
                'og_url' => route('tuyendung'),
                'og_image' => 'path/to/image3.jpg',
                'og_type' => 'website',
                'twitter_title' => 'Tuyển Dụng',
                'twitter_description' => 'Thông tin tuyển dụng',
                'twitter_image' => 'path/to/twitter_image3.jpg',
                'canonical' => route('tuyendung'),
                'meta_robots' => 'index, follow',
                'fb_app_id' => '',
                'og_locale' => 'vi_VN',
                'og_image_secure_url' => '',
                'fb_admins' => '',
                'og_image_type' => 'image/jpeg',
                'twitter_card' => 'summary',
                'twitter_site' => '',
                'twitter_creator' => '',
                'alternate_hreflang' => 'vi'
            ],
            [
                'meta_title' => 'Dịch Vụ',
                'meta_description' => 'Các dịch vụ của chúng tôi',
                'meta_url' => route('dichvu'),
                'meta_keywords' => 'dịch vụ, services',
                'meta_site_name' => 'Dịch Vụ',
                'og_title' => 'Dịch Vụ',
                'og_description' => 'Các dịch vụ của chúng tôi',
                'og_url' => route('dichvu'),
                'og_image' => 'path/to/image4.jpg',
                'og_type' => 'website',
                'twitter_title' => 'Dịch Vụ',
                'twitter_description' => 'Các dịch vụ của chúng tôi',
                'twitter_image' => 'path/to/twitter_image4.jpg',
                'canonical' => route('dichvu'),
                'meta_robots' => 'index, follow',
                'fb_app_id' => '',
                'og_locale' => 'vi_VN',
                'og_image_secure_url' => '',
                'fb_admins' => '',
                'og_image_type' => 'image/jpeg',
                'twitter_card' => 'summary',
                'twitter_site' => '',
                'twitter_creator' => '',
                'alternate_hreflang' => 'vi'
            ],
            [
                'meta_title' => 'Bài Viết',
                'meta_description' => 'Các bài viết',
                'meta_url' => route('tintuc'),
                'meta_keywords' => 'bài viết, articles',
                'meta_site_name' => 'Bài Viết',
                'og_title' => 'Bài Viết',
                'og_description' => 'Các bài viết',
                'og_url' => route('tintuc'),
                'og_image' => 'path/to/image5.jpg',
                'og_type' => 'website',
                'twitter_title' => 'Bài Viết',
                'twitter_description' => 'Các bài viết',
                'twitter_image' => 'path/to/twitter_image5.jpg',
                'canonical' => route('tintuc'),
                'meta_robots' => 'index, follow',
                'fb_app_id' => '',
                'og_locale' => 'vi_VN',
                'og_image_secure_url' => '',
                'fb_admins' => '',
                'og_image_type' => 'image/jpeg',
                'twitter_card' => 'summary',
                'twitter_site' => '',
                'twitter_creator' => '',
                'alternate_hreflang' => 'vi'
            ],
            [
                'meta_title' => 'Nhân Sự',
                'meta_description' => 'Thông tin nhân sự',
                'meta_url' => route('nhansu'),
                'meta_keywords' => 'nhân sự, personnel',
                'meta_site_name' => 'Nhân Sự',
                'og_title' => 'Nhân Sự',
                'og_description' => 'Thông tin nhân sự',
                'og_url' => route('nhansu'),
                'og_image' => 'path/to/image6.jpg',
                'og_type' => 'website',
                'twitter_title' => 'Nhân Sự',
                'twitter_description' => 'Thông tin nhân sự',
                'twitter_image' => 'path/to/twitter_image6.jpg',
                'canonical' => route('nhansu'),
                'meta_robots' => 'index, follow',
                'fb_app_id' => '',
                'og_locale' => 'vi_VN',
                'og_image_secure_url' => '',
                'fb_admins' => '',
                'og_image_type' => 'image/jpeg',
                'twitter_card' => 'summary',
                'twitter_site' => '',
                'twitter_creator' => '',
                'alternate_hreflang' => 'vi'
            ],
            [
                'meta_title' => 'Liên Hệ',
                'meta_description' => 'Liên hệ với chúng tôi',
                'meta_url' => route('lienhe'),
                'meta_keywords' => 'liên hệ, contact',
                'meta_site_name' => 'Liên Hệ',
                'og_title' => 'Liên Hệ',
                'og_description' => 'Liên hệ với chúng tôi',
                'og_url' => route('lienhe'),
                'og_image' => 'path/to/image7.jpg',
                'og_type' => 'website',
                'twitter_title' => 'Liên Hệ',
                'twitter_description' => 'Liên hệ với chúng tôi',
                'twitter_image' => 'path/to/twitter_image7.jpg',
                'canonical' => route('lienhe'),
                'meta_robots' => 'index, follow',
                'fb_app_id' => '',
                'og_locale' => 'vi_VN',
                'og_image_secure_url' => '',
                'fb_admins' => '',
                'og_image_type' => 'image/jpeg',
                'twitter_card' => 'summary',
                'twitter_site' => '',
                'twitter_creator' => '',
                'alternate_hreflang' => 'vi'
            ],
        ];
        

        foreach ($seos as $seo) {
            // Kiểm tra xem bản ghi đã tồn tại chưa
            $existingSeo = Seo::where('meta_url', $seo['meta_url'])->first();
            
            // Nếu không tồn tại, thêm mới bản ghi
            if (!$existingSeo) {
                Seo::create($seo);
            }
        }
    }
}
