<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        // 后台题库设置首页
        $question = Question::all();
        return view("admin.question",compact('question'));
    }
    public function create(Request $request)
    {
        // 添加题库页面
        return view("admin.question_add");
    }
    public function add(Request $request)
    {
        // 添加题库动作
        $action = $request->all();
        //dd($action);
        Question::create($action);
        return redirect('/admin/question');
    }
    public function show($id)
    {
        // 编辑题库页面
        $ques_item = Question::findOrFail($id);
        return view("admin.question_show",compact('ques_item'));
    }
    public function edit($id)
    {
        // 编辑题库页面
        $ques_item = Question::findOrFail($id);
        return view("admin.question_edit",compact('ques_item'));
    }
    public function update(Request $request,$id)
    {
        // 编辑题库更新动作
        $action = Question::findOrFail($id);
        $action->update($request->all());
        return redirect('/admin/question');
    }
    public function delete($id)
    {
        // 删除题库
        $action = Question::findOrFail($id);
        $action->delete();
        return redirect('/admin/question');
    }
    public function user_index($id)
    {
        // 前台显示
        $question = Question::findOrFail($id);
        return view("question_show",compact('question'));
    }

    public function user_submit($id)
    {
        // 前台显示
        $question = Question::findOrFail($id);
        return view("question_submit",compact('question'));
    }

}
