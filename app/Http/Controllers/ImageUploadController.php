<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    // public function upload(Request $request)
    // {
    //     if ($request->hasFile('file')) {
    //         $file = $request->file('file');
    //         $filename = time() . '_' . $file->getClientOriginalName();
    //         $filePath = 'uploads/' . $filename;

    //         // Lưu file vào thư mục 'public/uploads'
    //         $file->move(public_path('uploads'), $filename);

    //         return response()->json(['location' => url($filePath)]);
    //     }

    //     return response()->json(['location' => '']);
    // }
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $path = $file->store('public/uploads');
            $filename = basename($path);

            $url = Storage::url($path);
            $response = [
                'uploaded' => 1,
                'fileName' => $filename,
                'url' => $url
            ];

            return response()->json($response);
        }

        return response()->json(['uploaded' => 0, 'error' => ['message' => 'File upload failed.']]);
    }
}
