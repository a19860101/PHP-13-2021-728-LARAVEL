<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //
        $posts = Post::all();
        $posts = Post::orderBy('id','DESC')->get();
        // return view('post.index')->with(['posts' => $posts]);
        // return view('post.index',['posts' => $posts]);
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $categories = \App\Category::get();
        $categories = Category::get();
        return view('post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 方法一
        // $post = new Post;
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->category_id = $request->category_id;
        // $post->save();

        // 方法二
        // $post = new Post;
        // $post->fill([
        //     'title' => $request->title,
        //     'content' => $request->content,
        // ]);
        // $post->save();

        // 上船封面

        // return $request->file('cover')->store('images','public');
        // return $request->file('cover')->storeAs('images','qqq','public');

        if($request->file('cover')){
            $ext = $request->file('cover')->getClientOriginalExtension();
            $cover = Str::uuid().'.'.$ext;
            $request->file('cover')->storeAs('images',$cover,'public');
        }else{
            $cover = null;
        }
        // 方法三
        $post = new Post;
        $post->fill($request->all());
        $post->category_id = $request->category_id;
        $post->user_id = Auth::id();
        $post->cover = $cover;
        $post->save();

        //方法四
        // Post::create($request->all());

        return redirect('/');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        // return view('post.show',['post' => $post]);
        return view('post.show',compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $categories = \App\Category::get();
        // $categories = Category::get();
        return view('post.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->save();

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();

        return redirect()->route('post.index');
    }
}
