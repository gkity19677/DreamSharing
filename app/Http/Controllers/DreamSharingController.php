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

    public function mydream_result($id){

      $dreams=Dreams::find($id);
      return view('mydream.mydream_result',['dreams'=>$dreams]);
    }

    // public function mydream_delete(Dreams $dream){
    //
    //   $dream->delete();
    //   return redirect('mydream');;
    // }

    public function mydream_edit($id){
      $dreams=Dreams::find($id);
      return view('mydream.mydream_edit',['dreams'=>$dreams]);
    }
    public function mydream_update(Request $request)
    {
      Dreams::where('id', $request->id)->update([
        'content'=>$request->content,
      ]);
      return redirect('mydream_result/'.$request->id);
    }
    public function mydream_delete($id)
    {
      $dream = Dreams::find($id);
      $dream->delete();
      return redirect('mydream');
    }



    

    public function share(){

      return view('share_area.share');
    }
}
