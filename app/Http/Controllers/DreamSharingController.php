<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dreams;
use App\Replys;
use App\Favorites;
use Auth;
use App\User;
use Carbon\Carbon;

class DreamSharingController extends Controller
{
    //

    public function mydream(){
      $dreams=Dreams::where('account',Auth::user()->account)->get();
      return view('mydream.mydream',['dreams'=>$dreams]);
    }

    public function mydream_create(){

      return view('mydream.mydream_add');
    }

    public function mydream_add(Request $request){
      $dream=Dreams::create([
        // 'id'=>Auth::user()->id,
        'account'=>Auth::user()->account,
        'title' =>$request->title ,
        'content'=>$request->content,
        'date'=>$request->date,
        
      ]);

      return redirect('mydream');
    }

    public function mydream_result($id){

      $dreams=Dreams::find($id);
      return view('mydream.mydream_result',['dreams'=>$dreams]);
    }

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

      // $dreams=Dreams::->doesntExist();
      $dreams=Dreams::where('share_time','<>','NULL')->orderBy('share_time', 'desc')->get();
      return view('share_area.share',['dreams'=>$dreams]);

    }


    public function share_result($id){
      $like=Favorites::where('account',Auth::user()->account)->where('article_id',$id)->where('flag','D')->first();

      $dreams=Dreams::find($id);
      $sex = $dreams->MyUser->sex;
      // $dreams=Dreams::where('account',Auth::user()->account);
      

      $replys=Replys::where('did', Auth::user()->id)->get();

      return view('share_area.share_content',['sex'=>$sex,'dreams'=>$dreams,'replys'=>$replys,'like'=>$like]);
    }

    public function keep(){
      $likes=Favorites::where('account',Auth::user()->account)->get();
      return view('share_area.keep',['likes'=>$likes]);
    }

    public function checklike(Request $request)
    {
      $likes=Favorites::create([
        'account'=>$request->account,
        'flag'=>$request->flag,
        'article_id'=>$request->article_id,
        // 'fid'=>Auth::user()->id,
      ]);

      return response()->json();
    }

    public function popage($id){
      $mytime =Carbon::now('Asia/Taipei');
      $mytime->toDateTimeString();
      Dreams::find($id)->update([
        'share_time'=>$mytime
      ]);


      return redirect('share');
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
        'account'=>$request->account,
        'name'=>$request->name,
        'email'=>$request->email,
      ]);
      return redirect('/basic_result');
    }

    public function message(Request $request,$id){
      $mytime =Carbon::now('Asia/Taipei');
      $mytime->toDateTimeString();
      $reply=Replys::create([
        'content'=>$request->content,
        'date'=>$mytime,
        'account'=>Auth::user()->account,
        'did'=>Auth::user()->id,
      ]);

      return redirect('/share_result/'.$id);
    }



}
