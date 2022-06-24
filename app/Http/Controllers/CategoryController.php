<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Jorenvh\Share\Share;

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
        $trend = Blog::where('placement','eight')->latest('id')->first();
        $tren = Blog::where('placement','four')->latest('id')->first();
        $one = Blog::where('placement','one')->latest('id')->first();
        $on = Blog::where('placement','one')->latest('id')->first();
        $son = Blog::where('placement','seven')->latest('id')->first();
        $twos = Blog::where('placement','two')->latest('id')->get();
        $threes = Blog::where('placement','three')->latest('id')->paginate(6);
        $four = Blog::where('placement','four')->latest('id')->first();
        $fives = Blog::where('placement','five')->latest('id')->paginate(3);
        $sixs = Blog::where('placement','six')->latest('id')->paginate(2);
        $sevens = Blog::where('placement','seven')->latest('id')->paginate(2);
        $eights = Blog::where('placement','eight')->latest('id')->paginate(8);
        return view('welcome',[
            'one'=>$one,
            'on'=>$on,
            'son'=>$son,
            'twos'=>$twos,
            'threes'=>$threes,
            'four'=>$four,
            'fives'=>$fives,
            'sixs'=>$sixs,
            'sevens'=>$sevens,
            'eights'=>$eights,
            'trend'=>$trend,
            'tren'=>$tren,
        ]);
    }
    public function facebook(){
            Share::currentPage()->facebook();
    }
}
