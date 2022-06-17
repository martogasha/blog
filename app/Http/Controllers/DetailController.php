<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($id){
        $detail = Blog::find($id);
        $eights = Blog::where('placement','eight')->where('id','!=',$id)->latest('id')->paginate(8);
        $sixs = Blog::where('category',$detail->category)->where('id','!=',$id)->latest('id')->paginate(2);
        $backlinks = Blog::where('placement','three')->where('id','!=',$id)->latest('id')->paginate(3);
        return view('detail',[
            'detail'=>$detail,
            'eights'=>$eights,
            'sixs'=>$sixs,
            'backlinks'=>$backlinks

        ]);
    }
}
