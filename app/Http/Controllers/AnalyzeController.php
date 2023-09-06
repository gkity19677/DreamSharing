<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Analysis;
use Auth;
use App\Favorites;
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
      $like = Favorites::where('fid',Auth::user()->id)->where('article_id',$request->id)->where('flag','A')->first();
  		return response()->json(array(
  			'ana'=>$ana,
        'like'=>$like,
  		));
    }
}
