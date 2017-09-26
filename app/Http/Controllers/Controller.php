<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // 首页
    public function welcome()
    {
        return view("welcome");
    }
    // 用户个人资料修改
    public function user_edit()
    {
        $user = User::findOrFail(Auth::user()->id);
        return view("user",compact('user'));
    }
    // 用户个人资料修改-执行
    public function user_update(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $action = $request->all();
        // 判断密码项是否为空
        if(empty($action['password'])){
            // 删除关联数组密码项
            unset($action['password']);
        }else{
            // 密码加密
            $action['password']=bcrypt($action['password']);
        }
        // 打印出结果用于检查
        //dd($action);
        $user->update($action);
        return view("user",compact('user'));
    }
}
