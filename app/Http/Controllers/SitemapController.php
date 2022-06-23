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
        $sitemap = SitemapGenerator::create('https://trendingnewsupdates.co.ke/')->writeToFile('sitemap.xml');
        return $sitemap;
    }


    }
