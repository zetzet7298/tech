<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\CategoryDataTable;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('id', '<>', 1)->orderBy('updated_at', 'desc')->active()->paginate(10);
        return view('cms.categories.index', compact('categories'));
    }

    public function create()
    {
        $action = 'create';
        $itemName = 'danh mục';
        return view('cms.categories._form', compact('action', 'itemName'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $item = new Category();
            $item->name = $request->name;
            $item->slug = generateSlug($item->name);
            $item->index = $request->index;
            $item->save();
            DB::commit();
            return redirect()->route('categories.index')->with('success', 'Đã tạo danh mục');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }

        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $item = Category::where('id', '<>', 1)->findOrFail($id);
        $action = 'edit';
        $itemName = 'danh mục';
        return view('cms.categories._form', compact('item', 'action', 'itemName'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $item = Category::where('id', '<>', 1)->findOrFail($id);
            $item->name = $request->name;
            $item->slug = generateSlug($item->name);
            $item->index = $request->index;
            $item->save();
            DB::commit();
            return redirect()->route('categories.index')->with('success', 'Đã cập nhật danh mục');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }
    }

    public function show($id)
    {
        $item = Category::where('id', '<>', 1)->findOrFail($id);
        $item->active = false;
        $item->save();

        return redirect()->route('categories.index')->with('success', 'Đã xóa danh mục');
    }
}
