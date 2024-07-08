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

class PostController extends Controller
{
    public function index(Request $request)
    {
        $q = Post::orderBy('updated_at', 'desc');
        if($request->key){
            $q->where('title', 'like', "%{$request->key}%");
        }
        if($request->category_id){
            $q->where('category_id', "{$request->category_id}");
        }
        $posts = $q->active()->paginate(10);
        $categories = Category::active()->get();
        return view('admin.posts.index', compact('posts', 'categories', 'request'));
    }
    
    public function create()
    {
        $action = 'create';
        $itemName = 'tin tức';
        $categories = Category::active()->get();
        return view('admin.posts._form', compact('action', 'itemName', 'categories'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $item = new Post();
            $item->title = $request->title;
            $item->category_id = $request->category_id;
            $item->slug = generateSlug($item->title);
            $item->summary = $request->summary;
            $item->content = $request->content;
            if (request()->hasFile('thumbnail') && $path = upload_image2('thumbnail', 'thumbnail')) {
                $item->thumbnail = $path;
            }
            $item->save();
            DB::commit();
            return redirect()->route('posts.index')->with('success', 'Đã tạo tin tức');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }

        return redirect()->route('posts.index');
    }

    public function edit($id)
    {
        $item = Post::findOrFail($id);
        $action = 'edit';
        $itemName = 'tin tức';
        $categories = Category::active()->get();
        return view('admin.posts._form', compact('item', 'action', 'itemName', 'categories'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $item = Post::findOrFail($id);
            $item->title = $request->title;
            $item->category_id = $request->category_id;
            $item->slug = generateSlug($item->title);
            $item->summary = $request->summary;
            $item->content = $request->content;

            if (request()->hasFile('thumbnail') && $path = upload_image2('thumbnail', 'thumbnail')) {
                $item->thumbnail = $path;
            }
            $item->save();
            DB::commit();
            return redirect()->route('posts.index')->with('success', 'Đã cập nhật tin tức');
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

        return redirect()->route('posts.index')->with('success', 'Đã xóa tin tức');
    }
}
