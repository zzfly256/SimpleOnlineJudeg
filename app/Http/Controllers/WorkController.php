<?php

namespace App\Http\Controllers;

use App\Question;
use App\Task;
use App\User;
use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function count()
    {
        return Work::count();
    }
    public function get()
    {
        $count = Work::count();
        if($count>0) {
            $result = Task::findOrFail(Work::all()->first()->task_id);
            $result->update(['status' => 2]);
            $action = Work::all()->first();
            $action->delete();
            return $result;
        }
        else{
            return ['id'=>'0'];
        }
    }

    public function update($id,$status)
    {
        $action = Task::findOrFail($id);

        if($action->update(['status'=>$status]))
        {
            //dd($action);
            return "true";
        }else{
            return "false";
        }
    }

    public function question($id)
    {
        return Question::findOrFail($id);
    }

    public function upgrade($id,$level)
    {
        $action = User::findOrFail($id);
        if($action->update(['level'=>(int)($action->level+$level),'total'=>(int)($action->total+1)]))
        {
            return "true";
        }else{
            return "false";
        }
    }

    public function admin_index()
    {
        $work = Work::orderBy('created_at', 'desc')->get();
        //dd($task);
        return view("admin.work",compact('work'));
    }

}
