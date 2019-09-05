<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{


    public function searchlist()
    {
        $phone = \App\User::find(2)->post;



       // foreach ($phone as $ph) {
            //echo $ph->title;
       // }
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


}
