<?php

namespace App\Http\Controllers\alumni;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AlumniController extends Controller
{
    public function index(){
    	$user 	  = new User();
    	$alumnies = $user::all();
    	return view('alumni.index',['alumnies'=>$alumnies]);
    }
}
