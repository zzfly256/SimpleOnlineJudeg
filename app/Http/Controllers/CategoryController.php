<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view("admin.category",compact('category'));
    }
    public function add(Request $request)
    {
        $action = $request->all();
        //dd($category);
        Category::create($action);
        $category = Category::all();
        return redirect('/admin/category');
    }
    public function edit($id)
    {
        $cat_item = Category::findOrFail($id);
        $category = Category::all();
        return view("admin.category_edit",compact('category'))->with(['cat_item'=>$cat_item]);
    }
    public function update(Request $request,$id)
    {
        $action = Category::findOrFail($id);
        $action->update($request->all());
        return redirect('/admin/category');
    }
    public function delete($id)
    {
        $action = Category::findOrFail($id);
        $action->delete();
        return redirect('/admin/category');
    }

}
