<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employee;
use App\Models\Post;
use App\Models\Recruitment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Storage;

class PageController extends Controller
{
    //
    public function index(Request $request)
    {
        $items = Post::active()->with('author')->where('category_id','<>',1)->orderBy('created_at', 'desc')->limit(6)->get();
        return view('pages.trangchu', compact('items'));
    }
    public function tuyendung(Request $request)
    {
        $items = Recruitment::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.tuyendung', compact('items'));
    }
    public function dichvu(Request $request)
    {
        $items = Post::active()->with('author')->where('category_id',1)->where('category_id', 1)->paginate(10);
        $feedbacks = \App\Models\Feedback::orderBy('index', 'asc')->get();
        return view('pages.dichvu', compact('items', 'feedbacks'));
    }
    public function tintuc(Request $request)
    {
        $items = Post::active()->with('author')->where('category_id','<>',1)->orderBy('created_at', 'desc')->paginate(10);
        $categories = Category::active()->where('slug', '<>', 'dich-vu')->orderBy('index','asc')->get();
        return view('pages.tintuc', compact('items', 'categories'));
    }
    public function nhansu(Request $request)
    {
        $items = Employee::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.nhansu', compact('items'));
    }
    public function nhansuDetail($slug)
    {
        $item = Employee::with('seoMeta')->where('slug', $slug)->firstOrFail();
        return view('pages.chitiet_nhansu', compact('item'));
    }
    public function nhansuDetailFrame($slug)
    {
        $item = Employee::where('slug', $slug)->firstOrFail();
        return view('pages.chitiet_nhansu_frame', compact('item'));
    }
    public function lienhe(Request $request)
    {
        return view('pages.lienhe');
    }
    public function gioithieu(Request $request)
    {
        $services = Post::active()->with('author')->where('category_id','=',1)->where('category_id', 1)->limit(10)->get();
        return view('pages.gioithieu', compact('services'));
    }
    public function json(Request $request)
    {
        // Đọc nội dung tệp JSON từ storage
        $jsonContent = Storage::disk('local')->get('data.json');

        // Chuyển đổi nội dung JSON thành mảng
        $data = json_decode($jsonContent, true);

        // Trả về phản hồi JSON
        return response()->json($data);
    }

    public function postDetail($slug)
    {
        $slug = explode('.', $slug);
        $item = Post::active()->with(['author', 'structuredData'])->where('slug', $slug[0])->first();
        if(empty($item)){
            abort(404);
        }
        $categories = Category::active()->where('slug', '<>', 'dich-vu')->orderBy('index','asc')->get();
        return view('pages.chitiet_tintuc', compact('item', 'categories'));
    }

    public function category($slug)
    {
        $item = Category::active()->where('slug', '<>', 'dich-vu')->orderBy('index','asc')->where('slug', $slug)->first();
        if(empty($item)){
            abort(404);
        }
        $items = Post::active()->with('author')->where('category_id','<>',1)->where('category_id', $item->id)->orderBy('created_at', 'desc')->paginate(2);
        $categories = Category::active()->where('slug', '<>', 'dich-vu')->orderBy('index','asc')->get();
        return view('pages.danhmuc_tintuc', compact('items', 'categories', 'item'));
    }

    public function chitietTuyenDung($slug)
    {
        $item = Recruitment::where('slug', $slug)->firstOrFail();
        // $item = Recruitment::active()->first();
        if(empty($item)){
            abort(404);
        }
        return view('pages.chitiet_tuyendung', compact('item'));
    }
}
