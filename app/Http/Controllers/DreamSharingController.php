<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dreams;
use Auth;

class DreamSharingController extends Controller
{
    //
    public function index(){

      return view('mydream');
    }

    public function mydream(){
      $dreams=Dreams::all();
      return view('mydream.mydream',['dreams'=>$dreams]);
    }

    public function mydream_create(){

      return view('mydream.mydream_add');
    }

    public function mydream_add(Request $request){
      $dream=Dreams::create([
        'title' =>$request->title ,
        'content'=>$request->content,
        'date'=>$request->date,
        'account'=>Auth::user()->account,
      ]);

      return redirect('mydream');
    }

    public function mydream_result(){

      return view('mydream.mydream_result');
    }

    public function analyze(){
      return view('analyze.analyze');
    }
}
