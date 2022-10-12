<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Category;
class CategoryController extends Controller
{
    public function index(){
        $categories = Category::where('category_id', 0)->with('childrenCategories')->get();
        return view('products.categories', compact('categories'));
    }

    public function create(Request $request){
        $data = new Category();
        $data->category_id = $request->category_id ?? false;
        $data->save();
        $data->seo()->createMany($request->seo);
        $data->childrenCategories();
        return to_route('categories');
    }

}
