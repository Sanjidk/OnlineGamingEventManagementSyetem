<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class BlogController extends Controller
{

    public function blog()
    {

        return view('frontend.Blog.blog');

    }


    public function saveblog(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'game' => 'required',
            'message' => 'required',
        ]);

        $blogs = new Blog();
        $blogs->name = $request->name;
        $blogs->game = $request->game;
        $blogs->message = $request->message;
        $blogs->save();

        return redirect()->back()->with('success', 'Sucessfully Submitted');
    }



    // view blog list

    Public function showList()
    {
        $list=Blog::paginate(5);

        return view('frontend.Blog.list',compact('list'));

    }





// delete blog list

    public function deleteBlog($id)
    {
        $list=Blog::find($id)->delete();
        return redirect()->back()->with('message','Blog deleted sucessfully');

    }




}
