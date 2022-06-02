<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        return view('category');
    }
    public function news(){
        $news = Blog::where('category','news')->latest('id')->paginate(8);
        $fours = Blog::where('placement','four')->latest('id')->paginate(8);
        return view('news',[
            'news'=>$news,
            'fours'=>$fours
        ]);
    }
    public function entertainment(){
        $news = Blog::where('category','entertainment')->latest('id')->paginate(8);
        $fours = Blog::where('placement','four')->latest('id')->paginate(8);
        return view('entertainment',[
            'news'=>$news,
            'fours'=>$fours
        ]);
    }
    public function sports(){
        $news = Blog::where('category','sports')->latest('id')->paginate(8);
        $fours = Blog::where('placement','four')->latest('id')->paginate(8);
        return view('sports',[
            'news'=>$news,
            'fours'=>$fours
        ]);
    }
    public function tech(){
        $news = Blog::where('category','tech')->latest('id')->paginate(8);
        $fours = Blog::where('placement','four')->latest('id')->paginate(8);
        return view('tech',[
            'news'=>$news,
            'fours'=>$fours
        ]);
    }
    public function lifestyle(){
        $news = Blog::where('category','lifestyle')->latest('id')->paginate(8);
        $fours = Blog::where('placement','four')->latest('id')->paginate(8);
        return view('lifestyle',[
            'news'=>$news,
            'fours'=>$fours
        ]);
    }
    public function business(){
        $news = Blog::where('category','business')->latest('id')->paginate(8);
        $fours = Blog::where('placement','four')->latest('id')->paginate(8);
        return view('business',[
            'news'=>$news,
            'fours'=>$fours
        ]);
    }
    public function index(){
        $ones = Blog::where('placement','one')->latest('id')->get();
        $twos = Blog::where('placement','two')->latest('id')->get();
        $threes = Blog::where('placement','three')->latest('id')->paginate(6);
        $fours = Blog::where('placement','four')->latest('id')->paginate(8);
        return view('welcome',[
            'ones'=>$ones,
            'twos'=>$twos,
            'threes'=>$threes,
            'fours'=>$fours
        ]);
    }
}
