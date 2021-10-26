<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\registerController;

class registerController extends Controller
{
    public function insertform()
    {
        return view('test');
            }
                public function insert(Request $request)
                {
                    $full_name = $request->input('full_name');
                    $email = $request->input('email');
                    $phone_number = $request->input('phone_number');
                    $password = $request->input('password');
                    $course_type = $request->input('course_type');
                    $data=array('full_name'=>$full_name,"email"=>$email,"phone_number"=>$phone_number,"password"=>$password,"course_type"=>$course_type);
                    DB::table('internform')->insert($data);
                    echo "Record inserted successfully.<br/>";
                    echo '<a href = "/insert">Click Here</a> to go back.';
                }
}


?>