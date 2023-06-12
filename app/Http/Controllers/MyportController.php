<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyportController extends Controller
{
    public function index(){
        return  view('myport.index');
    }
    public function contact(){
        return  view('myport.contact');
    }
    public function resume(){
        return  view('myport.resume');
    }
    public function project(){
        return  view('myport.projects');
    }
}
