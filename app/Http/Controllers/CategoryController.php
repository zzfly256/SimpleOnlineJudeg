<?php

namespace App\Http\Controllers;

use App\Category;
use App\Question;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // 后台题库设置首页
        $category = Category::all();
        return view("admin.category",compact('category'));
    }
    public function add(Request $request)
    {
        // 添加题库动作
        $action = $request->all();
        //dd($category);
        Category::create($action);
        $category = Category::all();
        return redirect('/admin/category');
    }
    public function edit($id)
    {
        // 编辑题库页面
        $cat_item = Category::findOrFail($id);
        $category = Category::all();
        return view("admin.category_edit",compact('category'))->with(['cat_item'=>$cat_item]);
    }
    public function update(Request $request,$id)
    {
        // 编辑题库更新动作
        $action = Category::findOrFail($id);
        $action->update($request->all());
        return redirect('/admin/category');
    }
    public function delete($id)
    {
        // 删除题库
        $action = Category::findOrFail($id);
        $action->delete();
        return redirect('/admin/category');
    }

    public function user_index($id)
    {
        $category = Category::findOrFail($id);
        $question_id = explode(",",$category->question);
        //dd($question_id);
        $question = [];
        foreach ($question_id as $value)
        {  
            $question_value = Question::findOrFail($value);
            array_push($question,$question_value);
        }
        return view('category',compact('category'))->with(["question"=>$question]);
    }

}
