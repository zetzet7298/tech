<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use DB;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index()
    {
        $pages  = Seo::orderBy('created_at', 'desc')->paginate(10);
        return view('cms.seos.index', compact('pages'));
    }

    public function create()
    {
        $action = 'create';
        $itemName = 'seo';
        return view('cms.seos._form', compact('action', 'itemName'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_url' => 'required',
            'meta_keywords' => 'nullable',
            'meta_site_name' => 'required',
            'meta_image_alt' => 'required',
            'og_title' => 'nullable',
            'og_description' => 'nullable',
            'og_url' => 'nullable',
            'og_image' => 'nullable',
            'og_type' => 'nullable',
            'twitter_title' => 'nullable',
            'twitter_description' => 'nullable',
            'twitter_image' => 'nullable',
            'meta_robots' => 'nullable',
        ]);

        DB::beginTransaction();

        try {
            $item = new Seo();
            $item->meta_title = $request->meta_title;
            $item->meta_description = $request->meta_description;
            $item->meta_url = $request->meta_url;
            $item->meta_keywords = $request->meta_keywords;
            $item->meta_site_name = $request->meta_site_name;
            $item->meta_image_alt = $request->meta_image_alt;
            $item->og_title = $request->og_title;
            $item->og_description = $request->og_description;
            $item->og_url = $request->og_url;
            $item->og_image = $request->og_image;
            $item->og_type = $request->og_type;
            $item->twitter_title = $request->twitter_title;
            $item->twitter_description = $request->twitter_description;
            $item->twitter_image = $request->twitter_image;
            $item->meta_robots = $request->meta_robots;
            $item->save();
            DB::commit();
            return redirect()->route('seos.index')->with('success', 'Đã tạo seo');
        } catch (\Exception $e) {
            report($e);
            DB::rollback();
            return redirect()->back()->with("error", "Cập nhật thất bại");
        }

        return redirect()->route('seos.index');
    }

    public function edit($id)
    {
        $item = Seo::findOrFail($id);
        $action = 'edit';
        $itemName = 'seo';
        return view('cms.seos._form', compact('item', 'action', 'itemName'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'meta_title' => 'required',
        'meta_description' => 'required',
        'meta_url' => 'required',
        'meta_keywords' => 'nullable',
        'meta_site_name' => 'required',
        'meta_image_alt' => 'required',
        'og_locale' => 'nullable',
        'fb_app_id' => 'nullable',
        'og_type' => 'nullable',
        'og_title' => 'nullable',
        'og_description' => 'nullable',
        'og_url' => 'nullable',
        'og_site_name' => 'nullable',
        'og_image' => 'nullable',
        'og_image_secure_url' => 'nullable',
        'fb_admins' => 'nullable',
        'og_image_type' => 'nullable',
        'twitter_card' => 'nullable',
        'twitter_site' => 'nullable',
        'twitter_title' => 'nullable',
        'twitter_description' => 'nullable',
        'twitter_image' => 'nullable',
        'twitter_creator' => 'nullable',
        'meta_robots' => 'nullable',
        'canonical' => 'nullable',
        'alternate_hreflang' => 'nullable',
    ]);

    DB::beginTransaction();

    try {
        $item = Seo::findOrFail($id);
        $item->meta_title = $request->meta_title;
        $item->meta_description = $request->meta_description;
        $item->meta_url = $request->meta_url;
        $item->meta_keywords = $request->meta_keywords;
        $item->meta_site_name = $request->meta_site_name;
        $item->meta_image_alt = $request->meta_image_alt;
        $item->og_locale = $request->og_locale;
        $item->fb_app_id = $request->fb_app_id;
        $item->og_type = $request->og_type;
        $item->og_title = $request->og_title;
        $item->og_description = $request->og_description;
        $item->og_url = $request->og_url;
        $item->og_site_name = $request->og_site_name;
        $item->og_image = $request->og_image;
        $item->og_image_secure_url = $request->og_image_secure_url;
        $item->fb_admins = $request->fb_admins;
        $item->og_image_type = $request->og_image_type;
        $item->twitter_card = $request->twitter_card;
        $item->twitter_site = $request->twitter_site;
        $item->twitter_title = $request->twitter_title;
        $item->twitter_description = $request->twitter_description;
        $item->twitter_image = $request->twitter_image;
        $item->twitter_creator = $request->twitter_creator;
        $item->meta_robots = $request->meta_robots;
        $item->canonical = $request->canonical;
        $item->alternate_hreflang = $request->alternate_hreflang;
        $item->save();
        
        DB::commit();
        return redirect()->route('seos.index')->with('success', 'Đã cập nhật SEO');
    } catch (\Exception $e) {
        dd($e);
        report($e);
        DB::rollback();
        return redirect()->back()->with("error", "Cập nhật thất bại");
    }
}


    public function show($id)
    {
        $item = Seo::findOrFail($id);
        $item->active = false;
        $item->save();

        return redirect()->route('seos.index')->with('success', 'Đã xóa seo');
    }
}
