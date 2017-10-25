<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function submit(Request $request,$id)
    {
        $action = $request->all();
        $action['user_id'] = Auth::user()->id;
        $action['question_id'] = $id;
        $action['status'] = "1";
        //dd($action);
        Task::create($action);

        $work['task_id'] = Task::all()->last()->id;
        Work::create($work);
        return redirect('/task');
    }

    public function user_index()
    {
        $task = Auth::user()->task;
        //dd($task);
        return view("task",compact('task'));
    }

    public function admin_index()
    {
        $task = Task::all();
        //dd($task);
        return view("admin.task",compact('task'));
    }
}
