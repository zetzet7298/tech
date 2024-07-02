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
            Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.ABOUT_TITLE'), $request->ABOUT_TITLE);
            Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.ABOUT_DESC'), $request->ABOUT_DESC);
            Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.SOLUTION_TITLE'), $request->SOLUTION_TITLE);
            Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.SOLUTION_DESCRIPTION'), $request->SOLUTION_DESCRIPTION);
            // $request->validate([
            //     'key' => 'required|unique:settings,key,'.$id,
            //     'value' => 'required',
            // ]);
                    // include to save avatar
            if (request()->hasFile('SLIDER_1') && $path = upload_image('SLIDER_1', 'SLIDER_1')) {
                Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.SLIDER_1'), $path);
            }
            if (request()->hasFile('SLIDER_2') && $path = upload_image('SLIDER_2', 'SLIDER_2')) {
                Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.SLIDER_2'), $path);
            }
            if (request()->hasFile('SLIDER_3') && $path = upload_image('SLIDER_3', 'SLIDER_3')) {
                Setting::set(config('constants.SETTING_TYPE_DASHBOARD'), config('constants.SLIDER_3'), $path);
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
