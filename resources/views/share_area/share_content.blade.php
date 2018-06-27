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
    	  							<img src="{{asset('image/maleuser.png')}}" id="user">
    								</a>
    							@elseif (Auth::user()->sex=='F')
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
              <button type="submit" name="comment"><i class="far fa-comment-alt"> 回覆</i></button>
            </div><br>
            <form class="form-group" action="{{url('share_result')}}/{{$dreams->id}}" method="post">
              @csrf
              <textarea class="form-control" name="content" style="width:630px;height:100px;" row="5" placeholder="我想說...">
              </textarea>
              <input type="submit" name="" value="回復">
            </form>
        <hr>
        <div class="usercomment">
          <img src="{{asset('image/maleuser.png')}}" id="user"><b id="username">無敵鐵金剛</b>
          <div id="comment">
            我也做過類似的夢欸，我有記在我的夢境裡，但我夢到的不是梅花鹿，是獅子~~
          </div>
        </div>
        <hr>
        <div class="usercomment">
          <img src="image/femaleuser.png" id="user"><b id="username">好想吃壽司</b>
          <div id="comment">
            你森林裡沒有樹嗎?牠的鹿角怎麼沒有被樹枝勾住!哈哈
          </div>
        </div>
        <hr>
        <div class="usercomment">
          <img src="image/maleuser.png" id="user"><b id="username">你永遠不懂我傷悲</b>
          <div id="comment">
            我都沒夢過動物，但我有夢過我在森林。
          </div>
        </div>
        <hr>
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
