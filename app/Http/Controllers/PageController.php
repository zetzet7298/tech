<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Storage;

class PageController extends Controller
{
    //
    public function index(Request $request) {
        return view('pages.trangchu');
    }
    public function duan(Request $request) {
        return view('pages.trangchu');
    }
    public function dichvu(Request $request) {
        return view('pages.trangchu');
    }
    public function tintuc(Request $request) {
        return view('pages.trangchu');
    }
    public function nhansu(Request $request) {
        return view('pages.trangchu');
    }
    public function lienhe(Request $request) {
        return view('pages.trangchu');
    }
    public function gioithieu(Request $request) {
        return view('pages.trangchu');
    }
    public function json(Request $request) {
        // Đọc nội dung tệp JSON từ storage
        $jsonContent = Storage::disk('local')->get('data.json');

        // Chuyển đổi nội dung JSON thành mảng
        $data = json_decode($jsonContent, true);

        // Trả về phản hồi JSON
        return response()->json($data);
    }
}
