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
        if(Auth::user()):
        $task = Auth::user()->task()->orderBy('created_at', 'desc')->get();
        //dd($task);
        return view("task",compact('task'));
        else:
            return redirect('/');
        endif;
    }

    public function admin_index()
    {
        $task = Task::orderBy('created_at', 'desc')->get();
        //dd($task);
        return view("admin.task",compact('task'));
    }
}
