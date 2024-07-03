<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use DB;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    // Hiển thị danh sách settings
    public function index()
    {
        $settings = Setting::all();
        return view('settings.index', compact('settings'));
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
    public function update(Request $request)
    {
        DB::beginTransaction();
        try {
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

            Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.ABOUT_TITLE'), $request->ABOUT_TITLE);
            Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.ABOUT_DESC'), $request->ABOUT_DESC);
            Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.SOLUTION_TITLE'), $request->SOLUTION_TITLE);
            Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.SOLUTION_DESCRIPTION'), $request->SOLUTION_DESCRIPTION);
            // $request->validate([
            //     'key' => 'required|unique:settings,key,'.$id,
            //     'value' => 'required',
            // ]);
                    // include to save avatar
            // dd($path = upload_image2('SLIDER_1', 'SLIDER_1'));
            if (request()->hasFile('SLIDER_1') && $path = upload_image2('SLIDER_1', 'SLIDER_1')) {
                Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.SLIDER_1'), $path);
            }
            if (request()->hasFile('SLIDER_2') && $path = upload_image2('SLIDER_2', 'SLIDER_2')) {
                Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.SLIDER_2'), $path);
            }
            if (request()->hasFile('SLIDER_3') && $path = upload_image2('SLIDER_3', 'SLIDER_3')) {
                Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.SLIDER_3'), $path);
            }
            if (request()->hasFile('LOGO') && $path = upload_image2('LOGO', 'LOGO')) {
                Setting::set(config('constants.SETTING_TYPE_COMMON'), config('constants.LOGO'), $path);
            }

            DB::commit();
            return redirect()->back()->with("success", "Đã cập nhật cấu hình");
        }catch(\Exception $e){
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
