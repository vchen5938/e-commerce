<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        flash("Welcome Abroad")->success();
        return view('welcome');
    }

    public function createsession(){
        session(['name'=>'Vincent', 'age'=>'18', 'ary'=>['Zack', 'Vincent']]);
    }
    public function getsession(Request $request){
        return $request->session()->all();
        
    }

    public function delsession(Request $request){
        return $request->session()->flush();
        
    }
    public function flashData(Request $request){
        return $request->session()->flash('name','null');
    } 
}
