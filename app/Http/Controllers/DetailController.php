<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($id){
        $detail = Blog::find($id);
        $fours = Blog::where('placement','four')->where('id','!=',$id)->latest('id')->paginate(8);
        return view('detail',[
            'detail'=>$detail,
            'fours'=>$fours

        ]);
    }
}
