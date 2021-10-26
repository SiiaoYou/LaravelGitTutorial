<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\ViewRegisterController;
use App\Http\Requests;

class ViewRegisterController extends Controller
{
    //
    public function index(){
        $users = DB::select('select * from internform');
        return view('viewRegister',['users'=>$users]);
        }
}

?>