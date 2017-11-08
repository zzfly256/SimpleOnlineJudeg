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
        return $array;
    }

    public static function userRank($user,$checkname)
    {
        $user = Rank::totalRank($user);
        for($row = 0 ; $row < count($user) ; $row++){
        if(strcmp($checkname,$user[$row]['name'])==0){
            echo $row+1;
            break;
        }
        }
    }

    public static function schoolRank($user)
    {
        $user = Rank::totalRank($user);
        $school = array();
        for($row = 0 ; $row < count($user) ; $row++){
            if(array_key_exists($user[$row]['school'], $school)==false){
                $school[$user[$row]['school']] = $user[$row]['total'] ;
            }
            else{
                $school[$user[$row]['school']]+= $user[$row]['total'] ;
            }
        }
        arsort($school);
        return $school;
    }
}
