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
            ['key' => 'company-name', 'value' => 'LEVO SECURITY', 'type' => 'common'],
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
            ['key' => 'about-desc', 'value' => 'Liệu thương hiệu của bạn có đủ lực để chiến tiếp trên thương trường trong thời kỳ chuyển đổi số? 
            Làm sao để tối ưu nguồn lực và đẩy mạnh thương hiệu cho doanh nghiệp của bạn? Miko Tech ở đây  để cùng 
            bạn dựng xây và phát triển thương hiệu thông qua dịch vụ thiết kế website và các giải pháp  Marketing tổng thể: 
            sáng tạo nội dung, quản trị website, SEO tổng thể, giải pháp thương mại điện tử,  thiết kế app, thiết kế nhận diện thương hiệu, 
            quảng cáo đa nền tảng...', 'type' => 'dashboard'],
            ['key' => 'slider-1', 'value' => 'media/default-image.jpg', 'type' => 'dashboard'],
            ['key' => 'slider-2', 'value' => 'media/default-image.jpg', 'type' => 'dashboard'],
            ['key' => 'slider-3', 'value' => 'media/default-image.jpg', 'type' => 'dashboard'],
            ['key' => 'solution-title', 'value' => 'Thiết kế website và dịch vụ Marketing', 'type' => 'dashboard'],
            ['key' => 'solution-description', 'value' => 'Không chỉ thiết kế website chuẩn giao diện và trải nghiệm người dùng, Miko Tech với hệ
            sinh thái các giải pháp Marketing toàn diện sẽ là điểm tựa vững chắc giúp doanh nghiệp của bạn phát triển lâu
            dài và bền vững.', 'type' => 'dashboard'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
