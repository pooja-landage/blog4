<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Post;


class FrontController extends Controller
{
    public function getData()
    {   
        $all = Blog::all();
        $sport = Blog::where('tag_id',1)->get();
        $play = Blog::where('tag_id',1)->get();
        $business = Blog::where('tag_id',2)->get();
        $technology = Blog::where('tag_id',3)->get();
        $entertainment = Blog::where('tag_id',4)->get();
    
        $feat = Blog::all();
        // $view = Blog::all();
        $featured = Blog::where('tag_id',2)->get();
        $popular = Blog::where('tag_id',3)->get();
        $lastest = Blog::where('tag_id',4)->get();

        $viewed = Blog::where('tag_id',3)->get();
        $read = Blog::where('tag_id',4)->get();
        $recent = Blog::where('tag_id',2)->get();
        // dd($sport);
        // dd($sport);
        $posts = Post::all();
       

        return view('welcome',compact('play','sport','all','posts','technology','business','entertainment','feat','featured','popular','lastest','viewed','read','recent'));
        ;
    }

    public function blog($id)
    {
        
        $all = Blog::all();
        $blog = Blog::where('id',$id)->first();
        $sport = Blog::where('tag_id',1)->get();
        $business = Blog::where('tag_id',2)->get();
        $technology = Blog::where('tag_id',3)->get();
        $entertainment = Blog::where('tag_id',4)->get();
    
        $feat = Blog::all();
        // $view = Blog::all();
        $featured = Blog::where('tag_id',2)->get();
        $popular = Blog::where('tag_id',3)->get();
        $lastest = Blog::where('tag_id',4)->get();

        $viewed = Blog::where('tag_id',3)->get();
        $read = Blog::where('tag_id',4)->get();
        $recent = Blog::where('tag_id',2)->get();
        // dd($sport);
        // dd($sport);
        $posts = Post::all();
        $count = Blog::count();
        $string = 'Blogs';

        return view('single',compact('blog','sport','all','posts','technology','business','entertainment','feat','featured','popular','lastest','viewed','read','recent'));       ;
    }
    public function contact(Request $request)
    {
        return view('contact');
    }
    
}
