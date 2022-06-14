<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($id){
        $detail = Blog::find($id);
        $eights = Blog::where('placement','eight')->where('id','!=',$id)->latest('id')->paginate(8);
        return view('detail',[
            'detail'=>$detail,
            'eights'=>$eights

        ]);
    }
}
