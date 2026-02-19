<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoriesController extends Controller
{
    public function create(Request $request)
    {
        $category = new Category();
        $category->create([
            'name' => $request->name,
            'created_by' => '',
        ]);
        return redirect()->route('admin.index');
    }


    public function del_category(Request $request)
    {
        $categorie = new Category();
        $categorie = $categorie->find($request->id);
        $categorie->delete();
        return redirect()->route('admin.index');
    }
}
