<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class WorkMasterViewController extends Controller
{
    public function index() 
    {
        $users = DB::select('select * from work_masters');
        return view('workmasterview',['users'=>$users]);
     }
}
