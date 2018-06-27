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
                  @if($dreams->MyUser->sex=='M')
    								<a href="{{url('basic_result')}}">
    	  							<img src="{{asset('image/maleuser.png')}}" id="user">
    								</a>
    							@elseif ($dreams->MyUser->sex=='F')
    								<a href="{{url('basic_result')}}">
    	  							<img src="{{asset('image/femaleuser.png')}}" id="user">
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
              
            </div><br>
            <form class="form-group" action="{{url('share_result')}}/{{$dreams->id}}" method="post">
              @csrf
              <button type="submit" name="comment"><i class="far fa-comment-alt"> 回覆</i></button>
              <textarea class="form-control" name="content" style="width:630px;height:100px;" row="5" placeholder="我想說...">
              </textarea>
            </form>
        <hr>
        @foreach ($replys as $reply)
          <div class="usercomment">
            @csrf
            @if ($reply->MyUser->sex == 'M')
                <img src="{{asset('image/maleuser.png')}}" id="user">
            @else
              <img src="{{asset('image/femaleuser.png')}}" id="user">
            @endif

            <b id="username">{{$reply->MyUser->name}}</b>
            <div id="comment">
              {{$reply->content}}
            </div>
          </div>
          <hr>

        @endforeach
      </div>
      </div>
  		<img src="{{asset('image/sharebg.png')}}" id="pic1">
    </div>
    <script language="javascript">
    function keep(){
      document.getElementById("heart").className="fas fa-heart";
    }
    </script>
    @endsection
