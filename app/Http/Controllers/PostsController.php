<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostsController extends Controller
{
    public function create(Request $request)
    {
        $post = new Post();
        $image = $request->file('image');
        $fileName = $image->getClientOriginalName();
        $image->move('images', $fileName);
        $post->create([
            'image' => $fileName,
            'title' => $request->title,
            'content' => $request->content_text,
            'category' => $request->category,
            'created_by' => auth()->user()->id,
        ]);
        return Redirect()->route('admin.posts');

    }


    public function del_post(Request $request)
    {
        $psot = new Post();
        $psot->find($request->id)->delete();
        return Redirect()->route('admin.posts');

        // $post = Post::find($request->id);
        // $post->delete();
    }
}
