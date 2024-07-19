<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = 'uploads/' . $filename;

            // Lưu file vào thư mục 'public/uploads'
            $file->move(public_path('uploads'), $filename);

            return response()->json(['location' => url($filePath)]);
        }

        return response()->json(['location' => '']);
    }
}
