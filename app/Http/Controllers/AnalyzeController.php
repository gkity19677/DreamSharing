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
      $ana=Analysis::where('kind','person')->first();

      $titles = Analysis::where('kind','person')->select('title','id')->get();
      return view('analyze.person',['ana'=>$ana,'titles'=>$titles]);
    }
    public function analyze_person_post(Request $request)
    {
      $ana=Analysis::find($request->id);
  		return response()->json(array(
  			'ana'=>$ana,
  		));
    }
}
