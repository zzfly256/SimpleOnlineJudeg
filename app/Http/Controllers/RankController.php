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
        //$user = json_decode(file_get_contents("http://127.0.0.1/api/user"),true);
        $user = json_decode(json_encode(User::all()),true);
        $user = Rank::totalRank($user);
        return view('rank_total',compact('user'));
    }

    public function user($id)
    {
        $userTarget = User::findOrFail($id);
        $user = (array)User::all();
        foreach ($user as $users)
        {
            // 此处有一个奇怪的bug
            Rank::userRank($users,$userTarget->name);
        }
    }

    public function school()
    {
        $user = (array)User::all();
        foreach ($user as $users)
        {
            // 此处有一个奇怪的bug
            $school = Rank::schoolRank($users);
            return view('rank_school',compact('school'));
        }

    }
}
