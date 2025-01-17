<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use DB;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    //
    public function index()
    {
        $solutions = Solution::orderBy('updated_at', 'desc')->get();
        return view('cms.solutions.index', compact('solutions'));
    }

    public function create()
    {
        return view('cms.solutions.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $content = new Solution();
            $content->title = $request->title;
            // $content->name = $request->name;
            $content->description = $request->description;
            if (request()->hasFile('image') && $path = upload_image3(generateSlug($request->title), 'solution', 'image')) {
                $content->image = $path;
            }
            $content->index = $request->index;
            $content->save();
            DB::commit();
            return redirect()->route('solutions.index')->with('success', 'Đã tạo giải pháp');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }

        return redirect()->route('solutions.index');
    }

    public function edit($id)
    {
        $solution = Solution::findOrFail($id);
        return view('cms.solutions.edit', compact('solution'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $content = Solution::findOrFail($id);
            $content->title = $request->title;
            // $content->name = $request->name;
            $content->description = $request->description;
            if (request()->hasFile('image') && $path = upload_image3(generateSlug($request->title), 'solution', 'image')) {
                $content->image = $path;
            }
            $content->index = $request->index;
            $content->save();
            DB::commit();
            return redirect()->route('solutions.index')->with('success', 'Đã cập nhật giải pháp');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }
    }

    public function show($id)
    {
        $content = Solution::findOrFail($id);
        $content->delete();

        return redirect()->route('solutions.index')->with('success', 'Đã xóa giải pháp');
    }
}
