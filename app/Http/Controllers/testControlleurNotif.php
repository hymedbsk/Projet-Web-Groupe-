<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class testControlleurNotif extends Controller
{
    function main(){
        $totalCount = DB::table('users')->where('accountChecked', 0)->count();
        return view('/testNotif')->with(['totalCount'=>$totalCount]);
    }
}
