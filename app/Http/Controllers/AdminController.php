<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function blog(){
        $blogs = Blog::where('id','>',0)->latest('id')->get();
        return view('admin.blog',[
            'blogs'=>$blogs
        ]);
    }
    public function addBlog(){
        return view('admin.addBlog');
    }
    public function editB(Request $request){
        $edit = Blog::find($request->id);
        $edit->placement = $request->input('placement');
        $edit->category=$request->input('category');
        $edit->title=$request->input('title');
        $edit->detailOne=$request->input('detailOne');
        $edit->quote=$request->input('quote');
        $edit->detailTwo=$request->input('detailTwo');

        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $edit->image = $filename;
        }
        if ($request->imageOne) {
            $file = $request->file('imageOne');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $edit->imageOne = $filename;
        }
        if ($request->imageTwo) {
            $file = $request->file('imageTwo');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $edit->imageTwo = $filename;
        }
        $edit->save();
        return redirect()->back()->with('success','Blog Edited Success');

    }
    public function editBlog($id){
        $edit = Blog::find($id);
        return view('admin.edit',[
            'edit'=>$edit
        ]);
    }
    public function dBlog($id){
        $edit = Blog::find($id);
        $edit->delete();
        return redirect(url('blog'))->with('success','Blog Deleted Success');

    }
    public function storeBlog(Request $request){
        $pictures = new Blog();
        $pictures->placement = $request->input('placement');
        $pictures->category = $request->input('category');
        $pictures->title = $request->input('title');
        $pictures->detailOne = $request->input('detailOne');
        $pictures->quote = $request->input('quote');
        $pictures->detailTwo = $request->input('detailTwo');

        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $pictures->image = $filename;
        }
        if ($request->imageOne) {
            $file = $request->file('imageOne');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $pictures->imageOne = $filename;
        }
        if ($request->imageTwo) {
            $file = $request->file('imageTwo');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $pictures->imageTwo = $filename;
        }

        $pictures->save();
        return redirect(url('blog'))->with('success','Blog Posted Success');
    }
}
