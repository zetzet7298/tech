<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use DB;
use Illuminate\Http\Request;
use App\Models\Store;
class SettingController extends Controller
{
    // Hiển thị danh sách settings
    public function index($type)
    {
        switch ($type) {
            case 'common':
                return view('cms.settings.chung', compact('type'));
                break;
            case 'service':
                return view('cms.settings.dichvu', compact('type'));
                break;
            case 'recruitment':
                return view('cms.settings.tuyendung', compact('type'));
                break;
            case 'about':
                return view('cms.settings.gioithieu', compact('type'));
                break;
            case 'hr':
                return view('cms.settings.nhansu', compact('type'));
                break;
            case 'chitietbaiviet':
                return view('cms.settings.chitietbaiviet', compact('type'));
                break;
            case 'localbusiness':
                $settings = \App\Models\Setting::getByType('localbusiness');

                // dd($settings);
                $store = new Store();
                foreach($settings as $k => $setting){
                    $store->$k = $setting['value'];
                }
                return view('cms.settings.localbusiness', compact('type', 'store'));
                break;
            case 'post':
                return view('cms.settings.tintuc', compact('type'));
                break;
            default:
                $settings = Setting::all();
                return view('cms.settings.trangchu', compact('type'));
        }
        // return view('cms.settings.index', compact('type'));
    }

    // Hiển thị form tạo setting mới
    public function create()
    {
        return view('settings.create');
    }

    // Lưu setting mới
    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|unique:settings,key',
            'value' => 'required',
        ]);

        $setting = new Setting();
        $setting->key = $request->key;
        $setting->value = $request->value;
        $setting->additional_value = $request->additional_value;
        $setting->type = $request->type;
        $setting->save();

        return redirect()->route('settings.index')
            ->with('success', 'Setting created successfully.');
    }

    // Hiển thị chi tiết setting
    public function show($id)
    {
        $setting = Setting::find($id);
        return view('settings.show', compact('setting'));
    }

    // Hiển thị form chỉnh sửa setting
    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('settings.edit', compact('setting'));
    }

    // Cập nhật setting
    public function update($type, Request $request)
    {
        DB::beginTransaction();
        try {
            switch ($type) {
                case 'common':
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), config('constants.COMPANY_NAME'), $request->COMPANY_NAME);
                    // Setting::set(config('constants.SETTING_TYPE_COMMON'), config('constants.LOGO'), $request->LOGO);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), config('constants.PRICE_QUOTE'), $request->PRICE_QUOTE);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), config('constants.MISSION'), $request->MISSION);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), config('constants.ADDRESS'), $request->ADDRESS);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), config('constants.PHONE'), $request->PHONE);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), config('constants.EMAIL'), $request->EMAIL);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), config('constants.DKKD'), $request->DKKD);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), config('constants.ZALO'), $request->ZALO);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), config('constants.MESSENGER'), $request->MESSENGER);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), config('constants.FACEBOOK'), $request->FACEBOOK);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), config('constants.TIME_WORKING'), $request->TIME_WORKING);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), config('constants.GOOGLE_MAP'), $request->GOOGLE_MAP);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), 'vanphong', $request->VANPHONG);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), 'diachivanphong', $request->DIACHIVANPHONG);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), 'emailvanphong', $request->EMAILVANPHONG);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), 'tghdvanphong', $request->TGHDVANPHONG);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), 'bocongthuong_link', $request->bocongthuong_link);
                    Setting::set(config('constants.SETTING_TYPE_COMMON'), 'loading-text', $request->loadingText);
                    if (request()->hasFile('LOGO') && $path = upload_image2('LOGO', 'LOGO')) {
                        Setting::set(config('constants.SETTING_TYPE_COMMON'), config('constants.LOGO'), $path);
                    }
                case 'dashboard':
                    Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.ABOUT_TITLE'), $request->ABOUT_TITLE);
                    Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.ABOUT_DESC'), $request->ABOUT_DESC);
                    Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.SOLUTION_TITLE'), $request->SOLUTION_TITLE);
                    Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.SOLUTION_DESCRIPTION'), $request->SOLUTION_DESCRIPTION);
                    // dd(Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), 'h1', $request->h1));
                    Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), 'h1', $request->h1);

                    if (request()->hasFile('SLIDER_1') && $path = upload_image2('SLIDER_1', 'SLIDER_1')) {
                        Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.SLIDER_1'), $path);
                    }
                    if (request()->hasFile('SLIDER_2') && $path = upload_image2('SLIDER_2', 'SLIDER_2')) {
                        Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.SLIDER_2'), $path);
                    }
                    if (request()->hasFile('SLIDER_3') && $path = upload_image2('SLIDER_3', 'SLIDER_3')) {
                        Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.SLIDER_3'), $path);
                    }
                    break;
                case 'service':
                    if (request()->hasFile('banner') && $path = upload_image2('banner', 'banner')) {
                        Setting::set('service', 'banner', $path);
                    }
                    if (request()->hasFile('banner_mobile') && $path = upload_image2('banner_mobile', 'banner_mobile')) {
                        Setting::set('service', 'banner_mobile', $path);
                    }
                    if (request()->hasFile('nangtam_banner') && $path = upload_image2('nangtam_banner', 'nangtam_banner')) {
                        Setting::set('service', 'nangtam_banner', $path);
                    }
                    Setting::set('service', 'h1', $request->h1);
                    Setting::set('service', 'title', $request->title);
                    Setting::set('service', 'description', $request->description);
                    Setting::set('service', 'nangtam_title', $request->nangtam_title);
                    Setting::set('service', 'giatri_title', $request->giatri_title);
                    Setting::set('service', 'giatri_description', $request->giatri_description);
                    Setting::set('service', 'giatri_item_1', $request->giatri_item_1);
                    Setting::set('service', 'giatri_item_2', $request->giatri_item_2);
                    Setting::set('service', 'giatri_item_3', $request->giatri_item_3);
                    Setting::set('service', 'giatri_item_4', $request->giatri_item_4);
                    Setting::set('service', 'giatri_item_1_val', $request->giatri_item_1_val);
                    Setting::set('service', 'giatri_item_2_val', $request->giatri_item_2_val);
                    Setting::set('service', 'giatri_item_3_val', $request->giatri_item_3_val);
                    Setting::set('service', 'giatri_item_4_val', $request->giatri_item_4_val);
                    Setting::set('service', 'title', $request->title);
                    Setting::set('service', 'title', $request->title);
                    Setting::set('service', 'title', $request->title);
                    Setting::set('service', 'title', $request->title);
                    Setting::set('service', 'title', $request->title);
                    Setting::set('service', 'title', $request->title);
                    Setting::set('service', 'title', $request->title);
                    Setting::set('service', 'title', $request->title);

                    break;
                case 'recruitment':
                    // dd($path = upload_image2('banner_mobile', 'banner_mobile'));
                    if (request()->hasFile('banner') && $path = upload_image2('banner', 'banner')) {
                        Setting::set('recruitment', 'banner', $path);
                    }
                    if (request()->hasFile('banner_mobile') && $path = upload_image2('banner_mobile', 'banner_mobile')) {
                        Setting::set('recruitment', 'banner_mobile', $path);
                    }
                    if (request()->hasFile('avatar_post') && $path = upload_image2('avatar_post', 'avatar_post')) {
                        Setting::set('recruitment', 'avatar_post', $path);
                    }
                    Setting::set('recruitment', 'title', $request->title);
                    Setting::set('recruitment', 'description', $request->description);
                    Setting::set('recruitment', 'h1', $request->h1);
                    break;
                case 'about':
                    if (request()->hasFile('banner') && $path = upload_image2('banner', 'banner')) {
                        Setting::set('about', 'banner', $path);
                    }
                    if (request()->hasFile('banner_mobile') && $path = upload_image2('banner_mobile', 'banner_mobile')) {
                        Setting::set('about', 'banner_mobile', $path);
                    }
                    if (request()->hasFile('dichvu_banner') && $path = upload_image2('dichvu_banner', 'dichvu_banner')) {
                        Setting::set('about', 'dichvu_banner', $path);
                    }
                    if (request()->hasFile('chienloipham_banner') && $path = upload_image2('chienloipham_banner', 'chienloipham_banner')) {
                        Setting::set('about', 'chienloipham_banner', $path);
                    }
                    if (request()->hasFile('diemdadang_banner') && $path = upload_image2('diemdadang_banner', 'diemdadang_banner')) {
                        Setting::set('about', 'diemdadang_banner', $path);
                    }
                    if (request()->hasFile('video_avatar') && $path = upload_image2('video_avatar', 'video_avatar')) {
                        Setting::set('about', 'video_avatar', $path);
                    }
                    if (request()->hasFile('video') && $path = upload_video('video', 'video')) {
                        Setting::set('about', 'video', $path);
                    }
                    Setting::set('about', 'title', $request->title);
                    Setting::set('about', 'description', $request->description);
                    Setting::set('about', 'gioithieu_title', $request->gioithieu_title);
                    Setting::set('about', 'gioithieu_description', $request->gioithieu_description);
                    Setting::set('about', 'giatri_title', $request->giatri_title);
                    Setting::set('about', 'giatri_description', $request->giatri_description);
                    Setting::set('about', 'giatri_item_1', $request->giatri_item_1);
                    Setting::set('about', 'giatri_item_2', $request->giatri_item_2);
                    Setting::set('about', 'giatri_item_3', $request->giatri_item_3);
                    Setting::set('about', 'giatri_item_4', $request->giatri_item_4);
                    Setting::set('about', 'giatri_item_1_val', $request->giatri_item_1_val);
                    Setting::set('about', 'giatri_item_2_val', $request->giatri_item_2_val);
                    Setting::set('about', 'giatri_item_3_val', $request->giatri_item_3_val);
                    Setting::set('about', 'giatri_item_4_val', $request->giatri_item_4_val);
                    Setting::set('about', 'video_title', $request->video_title);
                    Setting::set('about', 'video_description', $request->video_description);
                    Setting::set('about', 'chienloipham_title', $request->chienloipham_title);
                    Setting::set('about', 'chienloipham_description', $request->chienloipham_description);
                    Setting::set('about', 'diemdadang_title', $request->diemdadang_title);
                    Setting::set('about', 'diemdadang_item_1', $request->diemdadang_item_1);
                    Setting::set('about', 'diemdadang_item_2', $request->diemdadang_item_2);
                    Setting::set('about', 'diemdadang_item_3', $request->diemdadang_item_3);
                    Setting::set('about', 'diemdadang_item_4', $request->diemdadang_item_4);
                    Setting::set('about', 'h1', $request->h1);
                    break;
                case 'hr':
                    Setting::set('hr', 'title', $request->title);
                    Setting::set('hr', 'description', $request->description);
                    if (request()->hasFile('banner') && $path = upload_image2('banner', 'banner')) {
                        Setting::set('hr', 'banner', $path);
                    }
                    if (request()->hasFile('banner_mobile') && $path = upload_image2('banner_mobile', 'banner_mobile')) {
                        Setting::set('hr', 'banner_mobile', $path);
                    }
                    Setting::set('hr', 'h1', $request->h1);
                    break;
                case 'post':
                    Setting::set('post', 'title', $request->title);
                    Setting::set('post', 'description', $request->description);
                    if (request()->hasFile('banner') && $path = upload_image2('banner', 'banner')) {
                        Setting::set('post', 'banner', $path);
                    }
                    if (request()->hasFile('banner_mobile') && $path = upload_image2('banner_mobile', 'banner_mobile')) {
                        Setting::set('post', 'banner_mobile', $path);
                    }
                    Setting::set('post', 'h1', $request->h1);
                    break;
                case 'chitietbaiviet':
                    if (request()->hasFile('banner') && $path = upload_image2('banner', 'banner')) {
                        Setting::set('chitietbaiviet', 'banner', $path);
                    }
                    if (request()->hasFile('banner_mobile') && $path = upload_image2('banner_mobile', 'banner_mobile')) {
                        Setting::set('chitietbaiviet', 'banner_mobile', $path);
                    }
                    break;
                case 'localbusiness':
                    Setting::set('localbusiness', 'name', $request->name);
                    Setting::set('localbusiness', 'images', $request->images);
                    Setting::set('localbusiness', 'street_address', $request->street_address);
                    Setting::set('localbusiness', 'address_locality', $request->address_locality);
                    Setting::set('localbusiness', 'address_region', $request->address_region);
                    Setting::set('localbusiness', 'postal_code', $request->postal_code);
                    Setting::set('localbusiness', 'address_country', $request->address_country);
                    Setting::set('localbusiness', 'latitude', $request->latitude);
                    Setting::set('localbusiness', 'longitude', $request->longitude);
                    Setting::set('localbusiness', 'url', $request->url);
                    Setting::set('localbusiness', 'price_range', $request->price_range);
                    Setting::set('localbusiness', 'telephone', $request->telephone);
                    Setting::set('localbusiness', 'opening_hours', $request->opening_hours);
                    break;
                    // default: return view('cms.settings.trangchu', compact('type'));
            }

            DB::commit();
            return redirect()->back()->with("success", "Đã cập nhật cấu hình");
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }
    }

    // Xóa setting
    public function destroy($id)
    {
        $setting = Setting::find($id);
        $setting->delete();

        return redirect()->route('settings.index')
            ->with('success', 'Setting deleted successfully.');
    }
}
