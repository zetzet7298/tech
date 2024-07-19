<?php

namespace App\Http\Controllers;

use App\Models\Office;
use DB;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function index(Request $request)
    {
        $offices = Office::orderBy('updated_at', 'desc')->paginate(15);
        return view('cms.offices.index', compact('offices', 'request'));
    }

    public function create()
    {
        $action = 'create';
        $itemName = 'văn phòng';
        return view('cms.offices._form', compact('action', 'itemName'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        // dd($request->all());
        // $request->validate([
        //     'name' => 'required|unique:offices',
        // ]);
        try {
            $content = new Office();
            $content->address = $request->address;
            $content->phone = $request->phone;
            $content->email = $request->email;
            $content->google_map = $request->google_map;
            $content->time_working = $request->time_working;
            $content->is_primary = $request->is_primary == 'on' ? true : false;
            $content->save();
            DB::commit();
            return redirect()->route('offices.index')->with('success', 'Đã tạo văn phòng');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }

        return redirect()->route('offices.index');
    }

    public function edit($id)
    {
        $item = Office::findOrFail($id);
        $action = 'edit';
        $itemName = 'văn phòng';
        return view('cms.offices._form', compact('item', 'action', 'itemName'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        // $request->validate([
        //     'name' => 'required|unique:offices,name,' . $id,
        // ]);
        try {
            $content = Office::findOrFail($id);
            $content->address = $request->address;
            $content->phone = $request->phone;
            $content->email = $request->email;
            $content->google_map = $request->google_map;
            $content->time_working = $request->time_working;
            $content->is_primary = $request->is_primary == 'on' ? true : false;
            $content->save();
            DB::commit();
            return redirect()->route('offices.index')->with('success', 'Đã cập nhật văn phòng');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }
    }

    public function show($id)
    {
        $item = Office::findOrFail($id);
        $item->active = false;
        $item->save();

        return redirect()->route('offices.index')->with('success', 'Đã xóa văn phòng');
    }
}
