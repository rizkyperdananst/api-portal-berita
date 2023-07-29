<?php

namespace App\Http\Controllers\API;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostShowResource;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        // return response()->json(['data' => $posts]); // jika menggunakan yang ini maka yang dikembalikan semua data
        return PostResource::collection($posts); // jika kita menggunakan api resource kita bisa mengembalikan data sesuka hati kita sesuai yang do return Resources/PostResource.php;
    }

    public function show($id)
    {
        $post = Post::with('writer:id,username')->findOrFail($id);

        return new PostShowResource($post);
    }
}
