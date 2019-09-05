<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //搜索结果页
    public function search()
    {
       // var_dump($query);exit;
        return view('post/search');
    }

    //搜索结果页
    public function searchlist()
    {
        $phone = \App\Post::find(2)->user;

        var_dump($phone);
        exit;
        $query = request('query');
        $validator = $this->validate(request(), [
            'query' => 'required',
        ]);
        $posts = \App\Post::search($query)->paginate(10);
        // var_dump($query);exit;
        return view('post/searchlist', compact('posts', 'query'));
    }

    public function index()
    {
        echo "index";
    }

    public function show(Post $post)
    {
        PostResource::withoutWrapping();
        $data = Post::query()->paginate(10);


        //$data = DB::table('posts')
          //  ->leftJoin('users', 'users.id', '=', 'posts.user_id')
           // ->select('posts.user_id','posts.title', 'posts.content')
           // ->orderBy('posts.id','desc')->get();

        return response()->json([
            'code' => 1,
            'msg' => 'success',
            'data' => json_decode( PostResource::collection($data)->tojson())
        ]);
    }

    public function create()
    {
        echo 'show';
    }

    public function store()
    {
        echo 'show';
    }

    public function edit()
    {
        echo 'show';
    }

    public function update()
    {
        echo 'show';
    }

    public function delete()
    {
        echo 'show';
    }
}
