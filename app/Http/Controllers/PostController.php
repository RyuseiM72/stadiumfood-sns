<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Cloudinary;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('post.index',['post' => $post]);
    }
    
    public function create()
    {
        return view('post.create');
    }
    
    public function store(Request $request)
    {
        $post = new Post();
        
            if ($file = $request->image){
                $fileName = time() . $file->getClientOriginalName();
                $target_path = public_path('uploads/');
                $file->move($target_path, $fileName);
            }else{
                $fileName = null;
            }
            
            $post->title = $request->input('title');
            $post->image = $fileName;
            $post->description = $request->input('description');
            $post->user_id = Auth::id();
            
            $post->save();
            
            return view('post.index');
    }
    
     public function cloudinary()
    {
        return view('post.create');
    }

    public function cloudinary_store(Request $request)
    {
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        dd($image_urll);  //画像のURLを画面に表示
    }
}
