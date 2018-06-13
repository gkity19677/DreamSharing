<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DreamSharingController extends Controller
{
    //
    public function index(){

      return view('mydream');
    }

    public function mydream(){

      return view('mydream.mydream');
    }

    public function analyze(){
      return view('analyze.analyze');
    }
}
