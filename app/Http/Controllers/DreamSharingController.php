<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dreams;
use Auth;

class DreamSharingController extends Controller
{
    //

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

    // public function mydream_show(Request $request){
    //
    //
    //   $dream=Dreams::create([
    //     'share_time'=>$request->share_time,
    //   ]);
    //   return redirect('share_area.share');
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

      // $dreams=Dreams::where('share_time','NULL')->doesntExist();

      return view('share_area.share');
    }

    public function popage(){
      // $dreams=Dreams::find($id);
      return view('share_area.popage');
    }

    public function basic()
    {
      return view('basic.basic_result');
    }
    public function basic_update()
    {
      $user=Auth::user()->all();
      return view('basic.basic',['user'=>$user]);
    }
    public function basic_edit(Request $request)
    {
      Auth::user()->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'sex'=>$request->sex,
        'password'=>$request->password,
      ]);
      return redirect('basic_result.basic');
    }



}
