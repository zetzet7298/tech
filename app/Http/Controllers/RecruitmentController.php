<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use DB;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    //
    public function index()
    {
        $recruitments = Recruitment::orderBy('updated_at', 'desc')->get();
        return view('cms.recruitments.index', compact('recruitments'));
    }

    public function create()
    {
        return view('cms.recruitments.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $content = new Recruitment();
            $content->title = $request->title;
            $content->name = $request->name;
            $content->desc = $request->desc;
            // $content->index = $request->index;
            $content->save();
            DB::commit();
            return redirect()->route('recruitments.index')->with('success', 'Đã tạo tin tuyển dụng');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }

        return redirect()->route('recruitments.index');
    }

    public function edit($id)
    {
        $recruitment = Recruitment::findOrFail($id);
        return view('cms.recruitments.edit', compact('recruitment'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $content = Recruitment::findOrFail($id);
            $content->title = $request->title;
            $content->name = $request->name;
            $content->desc = $request->desc;
            $content->save();
            DB::commit();
            return redirect()->route('recruitments.index')->with('success', 'Đã cập nhật tin tuyển dụng');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }
    }

    public function show($id)
    {
        $content = Recruitment::findOrFail($id);
        $content->delete();

        return redirect()->route('recruitments.index')->with('success', 'Đã xóa tin tuyển dụng');
    }

   
}
