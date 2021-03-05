<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return response()->json($posts);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        // Post::create([
        //     //nama_attribut_model => //request si user
        //     'title' => $request->title,
        //     'slug' => \Str::slug($request->title),
        //     'desc' => $request->desc
        // ]);
        $attr = $request->all();
        $attr['slug'] = \Str::slug($request->title);
        Post::create($attr);
        return redirect('/');
    }
}
