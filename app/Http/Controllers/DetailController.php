<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($id,$name){
        $detail = Blog::where('id',$id)->orWhere('title',$name)->first();
        $on = Blog::where('placement','one')->latest('id')->first();
        $son = Blog::where('placement','seven')->latest('id')->first();
        $trend = Blog::where('placement','eight')->latest('id')->first();
        $tren = Blog::where('placement','four')->latest('id')->first();
        $eights = Blog::where('placement','eight')->where('id','!=',$id)->latest('id')->paginate(8);
        $sixs = Blog::where('category',$detail->category)->where('id','!=',$id)->latest('id')->paginate(2);
        $backlinks = Blog::where('placement','three')->where('id','!=',$id)->latest('id')->paginate(3);
        return view('detail',[
            'on'=>$on,
            'son'=>$son,
            'trend'=>$trend,
            'tren'=>$tren,
            'detail'=>$detail,
            'eights'=>$eights,
            'sixs'=>$sixs,
            'backlinks'=>$backlinks

        ]);
    }
    public function search(){
        $eights = Blog::where('placement','eight')->latest('id')->paginate(8);
        return view('search',[
            'eights'=>$eights,
        ]);
    }
    public function sear(Request $request){
        $on = Blog::where('placement','one')->latest('id')->first();
        $son = Blog::where('placement','seven')->latest('id')->first();
        $trend = Blog::where('placement','eight')->latest('id')->first();
        $tren = Blog::where('placement','four')->latest('id')->first();
        $eights = Blog::where('placement','eight')->latest('id')->paginate(8);
        $search = $request->input('searchBlog');
        $searchBlogs = Blog::where('title','like',"%$search%")->get();
        return view('search',[
            'searchBlogs'=>$searchBlogs,
            'search'=>$search,
            'eights'=>$eights,
            'on'=>$on,
            'son'=>$son,
            'trend'=>$trend,
            'tren'=>$tren,
        ]);
    }
}
