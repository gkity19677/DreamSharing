<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Analysis;
use Auth;

class AnalyzeController extends Controller
{

    //
    public function analyze(){
      return view('analyze.analyze');
    }

    public function analyze_person(){

      // $dreams=Dreams::find($id);
      $anas=Analysis::all();

      // for ($i=1; $i <3 ; $i++) {
      //   // code...
      //   $anas=Analysis::where('id', $i);
      // }
      return view('analyze.person',['anas'=>$anas]);
    }
}
