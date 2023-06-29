<?php

namespace App\Http\Controllers\page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    // Controller untuk page
    public function index(){
    	return view('welcome');
    }

    public function contact(){
    	return view('page.contact');
    }
}
