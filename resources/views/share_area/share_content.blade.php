@extends('layouts.layout')
@section('content')

  <link rel="stylesheet" href="{{asset('css/share_content.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>

    <div class="container-fluid" id="c9">
      <div class="box box-primary" id="form">
            <div class="box-body">
    					<div>
                <p class="text-muted" >
                  @if(Auth::user()->sex=='M')
    								<a href="{{url('basic_result')}}">
    	  							<img src="{{asset('image/maleuser.png')}}" alt="member" id="member">
    								</a>
    							@elseif (Auth::user()->sex=='F')
    								<a href="{{url('basic_result')}}">
    	  							<img src="{{asset('image/femaleuser.png')}}" alt="member" id="member">
    								</a>
    							@endif
                <b id="topic">{{$dreams->title}}</b>
                <div class="col-md-offset-10 col-md-2 icon" >
                    <ul>
                      <li><a href="{{url('share')}}"><i class="fas fa-reply"></i></a></li>
                    </ul>
                </div>

                <b>{{$dreams->share_time}}</b>
                <br><br>
                {!!$dreams->content!!}
              </p><br>
              <button type="submit" name="keep"><i id="heart" onclick="keep()" class="far fa-heart" > 收藏</i></button>
              <button type="submit" name="comment"><i class="far fa-comment-alt"> 回覆</i></button>
            </div><br>
              <div class="form-group">
                <textarea class="form-control" style="width:630px;height:100px;" row="5" placeholder="我想說..."></textarea>
              </div>
              <hr>
            </div>
      </div>
  		<img src="image/sharebg.png" id="pic1">
    </div>
    <script language="javascript">
    function keep(){
      document.getElementById("heart").className="fas fa-heart";
    }
    </script>
    @endsection
