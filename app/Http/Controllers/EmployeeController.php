<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\SeoMeta;
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
        if ($request->key) {
            $q->where('title', 'like', "%{$request->key}%");
        }
        if ($request->specialty_id) {
            $q->where('specialty_id', "{$request->specialty_id}");
        }
        $employees = $q->active()->paginate(10);
        $specialties = Specialty::active()->get();
        return view('cms.employees.index', compact('employees', 'specialties', 'request'));
    }

    public function create()
    {
        $action = 'create';
        $itemName = 'nhân sự';
        $specialties = Specialty::active()->get();
        return view('cms.employees._form', compact('action', 'itemName', 'specialties'));
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
            $content->first_name = generateSlug($request->first_name);
            $content->prefix_name = $request->prefix_name;
            $content->email = $request->email;
            $content->phone = $request->phone;
            $content->introduction = $request->introduction;
            if (request()->hasFile('photo') && $path = upload_image2('photo', 'photo')) {
                $content->photo = $path;
            }
            // $content->index = $request->index;
            $content->save();
            $content->specialties()->sync($request->specialties);

            // Save SEO Meta
            $seoMeta = new SeoMeta();
            $seoMeta->employee_id = $content->id;
            $seoMeta->meta_title = $request->meta_title;
            $seoMeta->meta_description = $request->meta_description;
            $seoMeta->meta_url = $request->meta_url;
            $seoMeta->meta_keywords = $request->meta_keywords;
            $seoMeta->meta_site_name = $request->meta_site_name;
            $seoMeta->meta_image_alt = $request->meta_image_alt;
            $seoMeta->og_title = $request->og_title;
            $seoMeta->og_description = $request->og_description;
            $seoMeta->og_url = $request->og_url;
            $seoMeta->og_image = $request->og_image;
            $seoMeta->og_type = $request->og_type;
            $seoMeta->twitter_title = $request->twitter_title;
            $seoMeta->twitter_description = $request->twitter_description;
            $seoMeta->twitter_image = $request->twitter_image;
            $seoMeta->canonical = $request->canonical;
            $seoMeta->meta_robots = $request->meta_robots;
            $seoMeta->save();

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
        $item = Employee::with('seoMeta')->active()->findOrFail($id);
        $item->canonical = $item->seoMeta->canonical ?? '';
        $item->meta_robots = $item->seoMeta->meta_robots ?? '';
        $item->meta_title = $item->seoMeta->meta_title ?? '';
        $item->meta_description = $item->seoMeta->meta_description ?? '';
        $item->meta_url = $item->seoMeta->meta_url ?? '';
        $item->meta_keywords = $item->seoMeta->meta_keywords ?? '';
        $item->meta_site_name = $item->seoMeta->meta_site_name ?? '';
        $item->meta_image_alt = $item->seoMeta->meta_image_alt ?? '';
        $item->og_title = $item->seoMeta->og_title ?? '';
        $item->og_description = $item->seoMeta->og_description ?? '';
        $item->og_url = $item->seoMeta->og_url ?? '';
        $item->og_image = $item->seoMeta->og_image ?? '';
        $item->og_type = $item->seoMeta->og_type ?? '';
        $item->twitter_title = $item->seoMeta->twitter_title ?? '';
        $item->twitter_description = $item->seoMeta->twitter_description ?? '';
        $item->twitter_image = $item->seoMeta->twitter_image ?? '';
        $action = 'edit';
        $itemName = 'nhân sự';
        $specialties = Specialty::active()->get();
        return view('cms.employees._form', compact('item', 'action', 'itemName', 'specialties'));
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
            $content->slug = generateSlug($request->first_name);
            $content->prefix_name = $request->prefix_name;
            $content->email = $request->email;
            $content->phone = $request->phone;
            $content->introduction = $request->introduction;
            if (request()->hasFile('photo') && $path = upload_image2('photo', 'photo')) {
                $content->photo = $path;
            }
            // $content->index = $request->index;
            $content->save();
            $content->specialties()->sync($request->specialties);
            // Save SEO Meta
            $seoMeta = SeoMeta::where('employee_id', $content->id)->first();
            if (empty($seoMeta)) {
                $seoMeta = new SeoMeta();
            }
            $seoMeta->employee_id = $content->id;
            $seoMeta->meta_title = $request->meta_title;
            $seoMeta->meta_description = $request->meta_description;
            $seoMeta->meta_url = $request->meta_url;
            $seoMeta->meta_keywords = $request->meta_keywords;
            $seoMeta->meta_site_name = $request->meta_site_name;
            $seoMeta->meta_image_alt = $request->meta_image_alt;
            $seoMeta->og_title = $request->og_title;
            $seoMeta->og_description = $request->og_description;
            $seoMeta->og_url = $request->og_url;
            $seoMeta->og_image = $request->og_image;
            $seoMeta->og_type = $request->og_type;
            $seoMeta->twitter_title = $request->twitter_title;
            $seoMeta->twitter_description = $request->twitter_description;
            $seoMeta->twitter_image = $request->twitter_image;
            $seoMeta->canonical = $request->canonical;
            $seoMeta->meta_robots = $request->meta_robots;
            $seoMeta->save();
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
        return view('cms.employees.show', compact('employee'));
    }
}
