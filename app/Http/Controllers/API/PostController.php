<?php

namespace App\Http\Controllers\API;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        // return $posts;
        return PostResource::collection($posts);
    }
    public function show($id){
        $post = Post::findOrFail($id);
        return new PostResource($post);
    }

    public function store(PostRequest $request){
       Post::create($request->validated());
       return response()->json('post cereated is successfully');

    }
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if(is_null($post)){
            return response()->json(['status'=> 404,'message'=>'post is not found']);
        }
        $post->update($request->only('category_id','name','description'));
        return response()->json(['status'=> 200,'message'=>'post is successfully updated']);
    }

    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);
        if(is_null($post)){
            return response()->json(['status'=> 404,'message'=>'post is not found']);
        }
        $post->delete();
        return response()->json(['status'=> 200,'message'=>'post is successfully deleted']);
    }
   
}
