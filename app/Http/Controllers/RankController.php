<?php

namespace App\Http\Controllers;

use App\Rank;
use Illuminate\Http\Request;
use App\User;

class RankController extends Controller
{
    public function getUser()
    {
        return User::all();
    }

    public function total()
    {
        $user = (array)User::all();
        Rank::totalRank($user);
        //dd($user);
        foreach ($user as $users)
        {
            // 此处有一个奇怪的bug
            return view('rank_total',compact('users'));
        }
    }
}
