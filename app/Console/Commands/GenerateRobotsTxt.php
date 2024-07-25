<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateRobotsTxt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:robots';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the robots.txt file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $app_url = env('APP_URL');
        $content = <<<EOT
        User-agent: *
        Disallow: /privacy-policy
        Disallow: /assets/
        Sitemap: ${app_url}sitemap.xml
        EOT;
        File::put(public_path('robots.txt'), $content);

        $this->info('robots.txt has been generated successfully.');
 
        return 0;
    }
}