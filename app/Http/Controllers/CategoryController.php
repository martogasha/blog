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
