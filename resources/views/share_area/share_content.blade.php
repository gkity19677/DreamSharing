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
                  @if($sex=='M')
    								<a href="{{url('basic_result')}}">
    	  							<img src="{{asset('image/maleuser.png')}}" id="user">
    								</a>
    							@elseif ($sex=='F')
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
              @if ($like==null)
                <button type="submit" class="col-md-2 like" name="keep"><i id="heart" class="far fa-heart" > 收藏</i></button>
              @else
                <button type="submit" class="col-md-2 like"><i id="heart" class="fas fa-heart" > 收藏</i></button>
              @endif


            </div><br>
            <form class="form-group " action="{{url('share_result')}}/{{$dreams->id}}" method="post">
              @csrf

              <textarea class="form-control" name="content" style="width:630px;height:100px;" row="5" placeholder="我想說..."></textarea>
              <button type="submit" class="col-md-offset-9 reply" name="comment"><i class="far fa-comment-alt"> 回覆</i></button>
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
    <meta name="_token" content="{{ csrf_token() }}"/>
    <script language="javascript">
    $("button[name='keep']").click(function(){
      var flag ='D';
      var btn =$("button[name='keep']");
      var id= {{$dreams->id}};
      var account = "{{ Auth::user()->account }}";
      $.ajax({
        type : 'post',
        url : "{{url('keep')}}",
        data : {
          flag:flag,
          article_id:id,
          account:account,
        },
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success: function (data) {
          console.log(123);
          $("#heart").toggleClass("far",false);
          $("#heart").toggleClass("fas",true);
          $("button[name='keep']").attr("name","");
        },
        error: function(xhr, type){
          alert('出錯惹！');
        }
      });
    });
    </script>
    @endsection
