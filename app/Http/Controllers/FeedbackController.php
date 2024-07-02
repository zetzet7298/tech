<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use DB;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    public function index()
    {
        $feedbacks = Feedback::orderBy('id', 'desc')->get();
        return view('admin.feedbacks.index', compact('feedbacks'));
    }

    public function create()
    {
        return view('admin.feedbacks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // 'company' => 'required',
            'content' => 'required',
        ]);
        DB::beginTransaction();

        try {
            $feedback = new Feedback();
            $feedback->name = $request->name;
            // $feedback->company = $request->company;
            $feedback->content = $request->content;
            $feedback->index = $request->index;
            
            if (request()->hasFile('image') && $path = upload_image2('image', 'image')) {
                $feedback->image = $path;
            }
            if (request()->hasFile('slide_1') && $path = upload_image2('slide_1', 'slide_1')) {
                $feedback->slide_1 = $path;
            }
            if (request()->hasFile('slide_2') && $path = upload_image2('slide_2', 'slide_2')) {
                $feedback->slide_2 = $path;
            }

            $feedback->save();
            DB::commit();
            return redirect()->route('feedbacks.index')->with('success', 'Đã tạo feedback');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }
    }

    public function edit($id)
    {
        $feedback = Feedback::find($id);
        return view('admin.feedbacks.edit', compact('feedback'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            // 'company' => 'required',
            'content' => 'required',
        ]);
        DB::beginTransaction();

        try {
            $feedback = Feedback::find($id);
            $feedback->name = $request->name;
            // $feedback->company = $request->company;
            $feedback->content = $request->content;
            $feedback->index = $request->index;
            
            if (request()->hasFile('image') && $path = upload_image2('image', 'image')) {
                $feedback->image = $path;
            }
            if (request()->hasFile('slide_1') && $path = upload_image2('slide_1', 'slide_1')) {
                $feedback->slide_1 = $path;
            }
            if (request()->hasFile('slide_2') && $path = upload_image2('slide_2', 'slide_2')) {
                $feedback->slide_2 = $path;
            }

            $feedback->save();
            DB::commit();
            return redirect()->route('feedbacks.index')->with('success', 'Đã cập nhật feedback');
        } catch (\Exception $e) {
            dd($e);
            report($e);
            return redirect()->back()->with("error", "Cập nhật thất bại");
            DB::rollback();
        }
    }

    public function show($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();
        return redirect()->route('feedbacks.index')->with('success', 'Đã xóa feedback');
    }
}
