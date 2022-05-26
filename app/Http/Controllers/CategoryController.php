<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        return view('category');
    }
    public function index(){
        $ones = Blog::where('placement','one')->get();
        $twos = Blog::where('placement','two')->get();
        $threes = Blog::where('placement','three')->paginate(8);
        $fours = Blog::where('placement','four')->paginate(8);
        return view('welcome',[
            'ones'=>$ones,
            'twos'=>$twos,
            'threes'=>$threes,
            'fours'=>$fours
        ]);
    }
}
