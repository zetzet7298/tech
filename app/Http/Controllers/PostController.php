<?php

namespace App\Http\Controllers;

use AccountConstant;
use App\DataTables\PostDataTable;
use App\Models\Category;
use App\Models\Income;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\SeoMeta;
use App\Models\StructuredData;
use App\Models\User;
use App\Models\Withdrawal;
use DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $q = Post::with('author')->orderBy('updated_at', 'desc');
        if ($request->key) {
            $q->where('title', 'like', "%{$request->key}%");
        }
        if ($request->category_id) {
            $q->where('category_id', "{$request->category_id}");
        }
        $posts = $q->where('category_id', '<>', 1)->active()->paginate(10);
        $categories = Category::where('id', '<>', 1)->active()->get();
        return view('cms.posts.index', compact('posts', 'categories', 'request'));
    }

    public function create()
    {
        $action = 'create';
        $itemName = 'bài viết';
        $categories = Category::where('id', '<>', 1)->active()->get();
        return view('cms.posts._form', compact('action', 'itemName', 'categories'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            // Save Post
            $post = new Post();
            $post->title = $request->title;
            $post->category_id = $request->category_id;
            $post->slug = generateSlug($post->title);
            $post->summary = $request->summary;
            $post->content = $request->content;
            $post->author_id = auth()->id();
            if ($request->hasFile('thumbnail') && $path = upload_image3($post->slug, 'thumbnail', 'thumbnail')) {
                $post->thumbnail = $path;
            }
            $post->save();

            // Save SEO Meta
            $seoMeta = new SeoMeta();
            $seoMeta->post_id = $post->id;
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

            // Lưu thông tin dữ liệu có cấu trúc
            $structuredData = new StructuredData();
            $structuredData->post_id = $post->id;
            $structuredData->headline = $request->headline;
            $structuredData->image = $request->image; // Lưu dữ liệu JSON
            // $structuredData->date_published = $request->date_published;
            // $structuredData->date_modified = $request->date_modified;
            $structuredData->authors = $request->authors; // Lưu dữ liệu JSON
            $structuredData->save();
            DB::commit();
            return redirect()->route('posts.index')->with('success', 'Đã tạo bài viết và SEO Meta thành công');
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
        }

        return redirect()->route('posts.index');
    }

    public function edit($id)
    {
        $item = Post::with(['seoMeta', 'structuredData'])->findOrFail($id);
        // dd($item->seoMeta);
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
        $itemName = 'bài viết';
        $categories = Category::where('id', '<>', 1)->active()->get();
        $item->author_id = auth()->id();
        return view('cms.posts._form', compact('item', 'action', 'itemName', 'categories'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $post = Post::findOrFail($id);
            $post->title = $request->title;
            $post->category_id = $request->category_id;
            $post->slug = generateSlug($post->title);
            $post->summary = $request->summary;
            $post->content = $request->content;
            $post->author_id = auth()->id();
            if ($request->hasFile('thumbnail') && $path = upload_image3($post->slug, 'thumbnail', 'thumbnail')) {
                $post->thumbnail = $path;
            }
            $post->save();

            // Save SEO Meta
            $seoMeta = SeoMeta::where('post_id', $post->id)->first();
            if(empty($seoMeta)){
                $seoMeta = new SeoMeta();
            }
            $seoMeta->post_id = $post->id;
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

            // Lưu thông tin dữ liệu có cấu trúc
            $structuredData = StructuredData::where('post_id', $post->id)->first();
            if(empty($structuredData)){
                $structuredData = new StructuredData();
            }
            $structuredData->post_id = $post->id;
            $structuredData->headline = $request->headline;
            $structuredData->image = $request->image; // Lưu dữ liệu JSON
            // $structuredData->date_published = $request->date_published;
            // $structuredData->date_modified = $request->date_modified;
            $structuredData->authors = $request->authors; // Lưu dữ liệu JSON
            $structuredData->save();
            DB::commit();
            return redirect()->route('posts.index')->with('success', 'Đã cập nhật bài viết và SEO Meta thành công');
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

        return redirect()->route('posts.index')->with('success', 'Đã xóa bài viết');
    }
}
