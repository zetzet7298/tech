<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Auth;
use DB;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        $q = User::where('email', '<>', 'admin@admin.com')->orderBy('updated_at', 'desc');
        if ($request->key) {
            $q->where('title', 'like', "%{$request->key}%");
        }

        $users = $q->active()->paginate(10);
        return view('cms.users.index', compact('users', 'request'));
    }
    public function assignPermission(Request $request, $id){
        $permissions = $request->permissions ? json_encode($request->permissions): null;
        try {
            $content = User::find($id);
            $content->roles = $permissions;
            $content->save();
            DB::commit();
            return redirect()->back()->with('success', 'Đã cập nhật quyền của user!');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }
    }
    
    public function getPermission($id)
    {
        $user = User::active()->findOrFail($id);
        $settings = Setting::distinct()->pluck('type');
        $permissions = [];
        foreach($settings as $setting){
            $name = null;
            switch ($setting) {
                case 'common':
                    $name = 'Cấu hình';
                    break;
                case 'service':
                    $name = 'Dịch vụ';
                    break;
                case 'recruitment':
                    $name = 'Tuyển dụng';
                    break;
                // case 'about':
                //     $name = 'Giới thiệu';
                //     break;
                case 'hr':
                    $name = 'Nhân sự';
                    break;
                case 'post':
                    $name = 'Bài viết';
                    break;
                // case 'dashboard':
                //     $name = 'Trang chủ';
                //     break;
                default:
                    break;
            }
            if($name){
                $permissions[$setting] = $name;
            }
            
        }
        $permissions['feedback'] = 'Feedback';
        $permissions['solution'] = 'Giải pháp';
        $permissions['specialty'] = 'Chuyên môn nhân sự';
        $permissions['employee'] = 'Nhân sự';
        $permissions['category'] = 'Danh mục bài viết';
        $permissions['edit'] = 'Cập nhật dữ liệu';
        $permissions['delete'] = 'Xóa dữ liệu';
        
        // dd($settings);
        return view('cms.users.permissions', compact('user', 'permissions'));
    }

    public function create()
    {
        $action = 'create';
        $itemName = 'quản trị viên';
        return view('cms.users._form', compact('action', 'itemName'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        // dd( $request->all());
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'unique:users',
        ]);
        try {
            $content = new User();
            $content->name = $request->name;
            $content->email = $request->email;
            $content->phone = $request->phone;
            $content->password = Hash::make($request->password);
            // if (request()->hasFile('photo') && $path = upload_image2('photo', 'photo')) {
            //     $content->photo = $path;
            // }
            // $content->index = $request->index;
            $content->save();
            DB::commit();
            return redirect()->route('users.index')->with('success', 'Đã tạo quản trị viên');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $item = User::active()->findOrFail($id);
        $action = 'edit';
        $itemName = 'quản trị viên';
        return view('cms.users._form', compact('item', 'action', 'itemName'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        DB::beginTransaction();
        try {

            $user = User::find($id);
            if($request->phone != $user->phone){
                $exists = User::where('phone', $request->phone)->first();
                if($exists){
            return redirect()->back()->with("error", "Cập nhật thất bại! Số điện thoại đã tồn tại");
                }
            }
            $user->name = $request->name;
            // $user->email = $request->email;
            $user->phone = $request->phone;
            if ($request->password) {
                $user->password = Hash::make($request->password);
            }
            $user->save();
            DB::commit();
            return redirect()->route('users.index')->with('success', 'Đã cập nhật quản trị viên');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }
    }

    public function destroy($id)
    {
        $item = User::active()->findOrFail($id);
        $item->active = false;
        $item->save();

        return redirect()->route('users.index')->with('success', 'Đã xóa quản trị viên');
    }

    public function show($id)
    {
        $user = User::active()->findOrFail($id);
        return view('cms.users.show', compact('user'));
    }
    public function getUserMe(Request $request)
    {
        $user = Auth::user();
        $request = $request->all();
        return view('cms.users.show', compact('user', 'request'));
    }
    public function UpdateUserMe(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = User::find(Auth::id());
            $user->name = $request->name;
            // $user->email = $request->email;
            $user->phone = $request->phone;
            if ($request->new_password) {
                $user->password = Hash::make($request->new_password);
            }
            $user->save();
            DB::commit();

            return redirect()->route('home')->with('success', 'Đã cập nhật thông tin');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }
    }
}
