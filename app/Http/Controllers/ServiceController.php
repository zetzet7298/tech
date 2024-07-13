<?php

namespace App\Http\Controllers;

use AccountConstant;
use App\DataTables\PostDataTable;
use App\Models\Category;
use App\Models\Income;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Withdrawal;
use DB;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $q = Post::with('author')->where('category_id', 1)->orderBy('updated_at', 'desc');
        if($request->key){
            $q->where('title', 'like', "%{$request->key}%");
        }
        $services = $q->active()->paginate(10);
        $categories = Category::active()->get();
        return view('cms.services.index', compact('services', 'categories', 'request'));
    }
    
    public function create()
    {
        $action = 'create';
        $itemName = 'tin tức';
        $categories = Category::active()->get();
        return view('cms.services._form', compact('action', 'itemName', 'categories'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $item = new Post();
            $item->title = $request->title;
            $item->category_id = 1;
            $item->slug = generateSlug($item->title);
            $item->summary = $request->summary;
            $item->content = $request->content;
            $item->author_id = auth()->id();
            if (request()->hasFile('thumbnail') && $path = upload_image3($item->slug, 'thumbnail', 'thumbnail')) {
                $item->thumbnail = $path;
            }
            $item->save();
            DB::commit();
            return redirect()->route('services.index')->with('success', 'Đã tạo tin tức');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }

        return redirect()->route('services.index');
    }

    public function edit($id)
    {
        $item = Post::findOrFail($id);
        $action = 'edit';
        $itemName = 'tin tức';
        $categories = Category::active()->get();
        return view('cms.services._form', compact('item', 'action', 'itemName', 'categories'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $item = Post::findOrFail($id);
            $item->title = $request->title;
            $item->category_id = 1;
            $item->slug = generateSlug($item->title);
            $item->summary = $request->summary;
            $item->content = $request->content;
            $item->author_id = auth()->id();
            if (request()->hasFile('thumbnail') && $path = upload_image3($item->slug, 'thumbnail', 'thumbnail')) {
                $item->thumbnail = $path;
            }
            $item->save();
            DB::commit();
            return redirect()->route('services.index')->with('success', 'Đã cập nhật tin tức');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }
    }

    public function show($id)
    {
        $item = Post::findOrFail($id);
        $item->active = false;
        $item->save();

        return redirect()->route('services.index')->with('success', 'Đã xóa tin tức');
    }
}
