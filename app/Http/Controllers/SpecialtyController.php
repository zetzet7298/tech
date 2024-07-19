<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use DB;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    public function index(Request $request)
    {
        $specialties = Specialty::active()->orderBy('updated_at', 'desc')->paginate(15);
        return view('cms.specialties.index', compact('specialties', 'request'));
    }

    public function create()
    {
        $action = 'create';
        $itemName = 'chuyên ngành';
        return view('cms.specialties._form', compact('action', 'itemName'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $request->validate([
            'name' => 'required|unique:specialties',
        ]);
        try {
            $content = new Specialty();
            $content->name = $request->name;
            $content->save();
            DB::commit();
            return redirect()->route('specialties.index')->with('success', 'Đã tạo chuyên ngành');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }

        return redirect()->route('specialties.index');
    }

    public function edit($id)
    {
        $item = Specialty::active()->findOrFail($id);
        $action = 'edit';
        $itemName = 'chuyên ngành';
        return view('cms.specialties._form', compact('item', 'action', 'itemName'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        $request->validate([
            'name' => 'required|unique:specialties,name,' . $id,
        ]);
        try {
            $content = Specialty::active()->findOrFail($id);
            $content->name = $request->name;
            $content->save();
            DB::commit();
            return redirect()->route('specialties.index')->with('success', 'Đã cập nhật chuyên ngành');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }
    }

    public function show($id)
    {
        $item = Specialty::active()->findOrFail($id);
        $item->active = false;
        $item->save();

        return redirect()->route('specialties.index')->with('success', 'Đã xóa chuyên ngành');
    }
}
