<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    public static function totalRank($array)
    {
        usort($array, function($x , $y){
            if(($x['level'] * 7 + $x['total'] * 3)==($y['level'] * 7 + $y['total'] * 3))
                return 0 ;
            else if(($x['level'] * 7 + $x['total'] * 3)<($y['level'] * 7 + $y['total'] * 3))
                return 1;
            else
                return -1;
        });
    }

}
