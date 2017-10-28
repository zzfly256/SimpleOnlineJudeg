<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RankController extends Controller
{
    public function getUser()
    {
        return User::all();
    }
}
