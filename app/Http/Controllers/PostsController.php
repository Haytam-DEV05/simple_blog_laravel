<?php

namespace App\Http\Controllers;
use App\Models\Post ;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create(){
        // $category = new Category();
        // $category->create([
        //     'name' => $request->name,
        //     'created_by' => '',
        // ]);
        // return redirect()->route('admin.index');
    }


    public function del_category(Request $request)
    {
        // $categorie = new Category();
        // $categorie = $categorie->find($request->id);
        // $categorie->delete();
        // return redirect()->route('admin.index');
    }
}
