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

    public function analyzebykind($kind){



      // $dreams=Dreams::find($id);
      $ana=Analysis::where('kind',$kind)->first();

      $titles = Analysis::where('kind',$kind)->select('title','id')->get();
      return view('analyze.kind',['ana'=>$ana,'titles'=>$titles]);
    }
    public function analyze_person_post(Request $request)
    {
      $ana=Analysis::find($request->id);
  		return response()->json(array(
  			'ana'=>$ana,
  		));
    }
}
