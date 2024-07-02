<?php

// SitemapController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [
            ['loc' => 'https://hongnhanbinhhung.com/', 'lastmod' => '2024-06-05T12:37:37+00:00', 'priority' => '1.00'],
            ['loc' => 'https://hongnhanbinhhung.com/cam-nang-du-lich-dao-binh-hung', 'lastmod' => '2024-06-05T12:37:37+00:00', 'priority' => '0.90'],
            ['loc' => 'https://hongnhanbinhhung.com/khach-san-binh-hung', 'lastmod' => '2024-06-05T12:37:37+00:00', 'priority' => '0.90'],
            ['loc' => 'https://hongnhanbinhhung.com/lich-trinh-binh-hung', 'lastmod' => '2024-06-05T12:37:37+00:00', 'priority' => '0.80'],
            // Thêm các URL khác vào đây
        ];

        return response()->view('sitemap.index', ['urls' => $urls])
            ->header('Content-Type', 'text/xml');
    }
}
