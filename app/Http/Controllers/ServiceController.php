<?php

namespace App\Http\Controllers;

use AccountConstant;
use App\DataTables\PostDataTable;
use App\Models\Category;
use App\Models\Income;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\SeoMeta;
use App\Models\User;
use App\Models\Withdrawal;
use DB;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $q = Post::with('author')->where('category_id', 1)->orderBy('updated_at', 'desc');
        if ($request->key) {
            $q->where('title', 'like', "%{$request->key}%");
        }
        $services = $q->active()->paginate(10);
        $categories = Category::active()->get();
        return view('cms.services.index', compact('services', 'categories', 'request'));
    }

    public function create()
    {
        $action = 'create';
        $itemName = 'dịch vụ';
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

            // Save SEO Meta
            $seoMeta = new SeoMeta();
            $seoMeta->post_id = $item->id;
            $seoMeta->meta_title = $request->meta_title;
            $seoMeta->meta_description = $request->meta_description;
            $seoMeta->meta_url = $request->meta_url;
            $seoMeta->meta_keywords = $request->meta_keywords;
            $seoMeta->meta_site_name = $request->meta_site_name;
            $seoMeta->meta_image_alt = $request->meta_image_alt;
            $seoMeta->og_locale = $request->og_locale;
            $seoMeta->fb_app_id = $request->fb_app_id;
            $seoMeta->og_type = $request->og_type;
            $seoMeta->og_title = $request->og_title;
            $seoMeta->og_description = $request->og_description;
            $seoMeta->og_url = $request->og_url;
            $seoMeta->og_site_name = $request->og_site_name;
            $seoMeta->og_image = $request->og_image;
            $seoMeta->og_image_secure_url = $request->og_image_secure_url;
            $seoMeta->fb_admins = $request->fb_admins;
            $seoMeta->og_image_type = $request->og_image_type;
            $seoMeta->twitter_card = $request->twitter_card;
            $seoMeta->twitter_site = $request->twitter_site;
            $seoMeta->twitter_title = $request->twitter_title;
            $seoMeta->twitter_description = $request->twitter_description;
            $seoMeta->twitter_image = $request->twitter_image;
            $seoMeta->twitter_creator = $request->twitter_creator;
            $seoMeta->canonical = $request->canonical;
            $seoMeta->meta_robots = $request->meta_robots;
            $seoMeta->alternate_hreflang = $request->alternate_hreflang;
            $seoMeta->save();

            DB::commit();
            return redirect()->route('services.index')->with('success', 'Đã tạo dịch vụ');
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
        $item->canonical = $item->seoMeta->canonical ?? '';
        $item->meta_robots = $item->seoMeta->meta_robots ?? '';
        $item->meta_title = $item->seoMeta->meta_title ?? '';
        $item->meta_description = $item->seoMeta->meta_description ?? '';
        $item->meta_url = $item->seoMeta->meta_url ?? '';
        $item->meta_keywords = $item->seoMeta->meta_keywords ?? '';
        $item->meta_site_name = $item->seoMeta->meta_site_name ?? '';
        $item->meta_image_alt = $item->seoMeta->meta_image_alt ?? '';
        $item->og_locale = $item->seoMeta->og_locale ?? '';
        $item->fb_app_id = $item->seoMeta->fb_app_id ?? '';
        $item->og_type = $item->seoMeta->og_type ?? '';
        $item->og_title = $item->seoMeta->og_title ?? '';
        $item->og_description = $item->seoMeta->og_description ?? '';
        $item->og_url = $item->seoMeta->og_url ?? '';
        $item->og_site_name = $item->seoMeta->og_site_name ?? '';
        $item->og_image = $item->seoMeta->og_image ?? '';
        $item->og_image_secure_url = $item->seoMeta->og_image_secure_url ?? '';
        $item->fb_admins = $item->seoMeta->fb_admins ?? '';
        $item->og_image_type = $item->seoMeta->og_image_type ?? '';
        $item->twitter_card = $item->seoMeta->twitter_card ?? '';
        $item->twitter_site = $item->seoMeta->twitter_site ?? '';
        $item->twitter_title = $item->seoMeta->twitter_title ?? '';
        $item->twitter_description = $item->seoMeta->twitter_description ?? '';
        $item->twitter_image = $item->seoMeta->twitter_image ?? '';
        $item->twitter_creator = $item->seoMeta->twitter_creator ?? '';
        $item->alternate_hreflang = $item->seoMeta->alternate_hreflang ?? '';

        
        $action = 'edit';
        $itemName = 'dịch vụ';
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

            // Save SEO Meta
            $seoMeta = SeoMeta::where('post_id', $item->id)->first();
            if(empty($seoMeta)){
                $seoMeta = new SeoMeta();
            }
            $seoMeta->post_id = $item->id;
            $seoMeta->meta_title = $request->meta_title;
            $seoMeta->meta_description = $request->meta_description;
            $seoMeta->meta_url = $request->meta_url;
            $seoMeta->meta_keywords = $request->meta_keywords;
            $seoMeta->meta_site_name = $request->meta_site_name;
            $seoMeta->meta_image_alt = $request->meta_image_alt;
            $seoMeta->og_locale = $request->og_locale;
            $seoMeta->fb_app_id = $request->fb_app_id;
            $seoMeta->og_type = $request->og_type;
            $seoMeta->og_title = $request->og_title;
            $seoMeta->og_description = $request->og_description;
            $seoMeta->og_url = $request->og_url;
            $seoMeta->og_site_name = $request->og_site_name;
            $seoMeta->og_image = $request->og_image;
            $seoMeta->og_image_secure_url = $request->og_image_secure_url;
            $seoMeta->fb_admins = $request->fb_admins;
            $seoMeta->og_image_type = $request->og_image_type;
            $seoMeta->twitter_card = $request->twitter_card;
            $seoMeta->twitter_site = $request->twitter_site;
            $seoMeta->twitter_title = $request->twitter_title;
            $seoMeta->twitter_description = $request->twitter_description;
            $seoMeta->twitter_image = $request->twitter_image;
            $seoMeta->twitter_creator = $request->twitter_creator;
            $seoMeta->canonical = $request->canonical;
            $seoMeta->meta_robots = $request->meta_robots;
            $seoMeta->alternate_hreflang = $request->alternate_hreflang;
            $seoMeta->save();

            $item->save();
            DB::commit();
            return redirect()->route('services.index')->with('success', 'Đã cập nhật dịch vụ');
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

        return redirect()->route('services.index')->with('success', 'Đã xóa dịch vụ');
    }
}
