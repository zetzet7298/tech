<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Specialty;
use DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    //
    public function index(Request $request)
    {
        $q = Employee::orderBy('updated_at', 'desc');
        if($request->key){
            $q->where('title', 'like', "%{$request->key}%");
        }
        if($request->specialty_id){
            $q->where('specialty_id', "{$request->specialty_id}");
        }
        $employees = $q->active()->paginate(10);
        $specialties = Specialty::active()->get();
        return view('admin.employees.index', compact('employees', 'specialties', 'request'));
    }

    public function create()
    {
        $action = 'create';
        $itemName = 'nhân sự';
        $specialties = Specialty::active()->get();
        return view('admin.employees._form', compact('action', 'itemName', 'specialties'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        // dd( $request->all());
        $request->validate([
            'first_name' => 'required',
            'email' => 'required|email|unique:employees',
            'phone' => 'required',
            'photo' => 'nullable|image',
            'specialties' => 'array',
        ]);
        try {
            $content = new Employee();
            $content->first_name = $request->first_name;
            $content->email = $request->email;
            $content->phone = $request->phone;
            $content->introduction = $request->introduction;
            if (request()->hasFile('photo') && $path = upload_image2('photo', 'photo')) {
                $content->photo = $path;
            }
            // $content->index = $request->index;
            $content->save();
            $content->specialties()->sync($request->specialties);
            DB::commit();
            return redirect()->route('employees.index')->with('success', 'Đã tạo nhân sự');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }

        return redirect()->route('employees.index');
    }

    public function edit($id)
    {
        $item = Employee::active()->findOrFail($id);
        $action = 'edit';
        $itemName = 'nhân sự';
        $specialties = Specialty::active()->get();
        return view('admin.employees._form', compact('item', 'action', 'itemName', 'specialties'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'email' => 'required|email|unique:employees,email,' . $id,
            'phone' => 'required',
            'photo' => 'nullable|image',
            'specialties' => 'array',
        ]);
        DB::beginTransaction();
        try {
            $content = Employee::active()->findOrFail($id);
            $content->first_name = $request->first_name;
            $content->email = $request->email;
            $content->phone = $request->phone;
            $content->introduction = $request->introduction;
            if (request()->hasFile('photo') && $path = upload_image2('photo', 'photo')) {
                $content->photo = $path;
            }
            // $content->index = $request->index;
            $content->save();
            $content->specialties()->sync($request->specialties);
            DB::commit();
            return redirect()->route('employees.index')->with('success', 'Đã cập nhật nhân sự');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }
    }

    public function destroy($id)
    {
        $item = Employee::active()->findOrFail($id);
        $item->active = false;
        $item->save();

        return redirect()->route('employees.index')->with('success', 'Đã xóa nhân sự');
    }
    
    public function show($id)
    {
        $employee = Employee::active()->with('specialties')->findOrFail($id);
        return view('admin.employees.show', compact('employee'));
        
    }
}
