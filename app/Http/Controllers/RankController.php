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
        foreach ($user as $item)
        {
            foreach ($item as $item) {
                print_r($item->name);
            }

        }
    }
}
