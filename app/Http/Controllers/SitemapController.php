<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Spatie\Sitemap\SitemapGenerator;

class SitemapController extends Controller
{
    public function sitemap()
    {
        $path = '/var/www/html/blog/public';
        SitemapGenerator::create('https://example.com')->writeToFile($path);

    }


    }
