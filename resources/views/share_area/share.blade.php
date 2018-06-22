@extends('layouts.layout')
@section('content')

<link rel="stylesheet" href="{{asset('css/share_area.css')}}">
  <script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>

  <div class="container-fluid" id="c8">
    <div id="topimg">
      <img src="image/sharetopimg.png">
    </div>
    <div class="typebutton">
      <button onclick="location.href='popage.html'" type="submit" id="b0">我要分享</button>
      <button type="submit" name="button1" value="1" id="b1">人</button>
      <button type="submit" name="button2" value="2" id="b2">動物</button>
      <button type="submit" name="button3" value="3" id="b3">靈異</button>
      <button type="submit" name="button4" value="4" id="b4">事件</button>
      <button type="submit" name="button5" value="5" id="b5">場景</button>
    </div>
    <div class="box box-primary" id="form">
          <div class="box-body">
            {{-- @foreach ($dreams as $dream)
              <a id="a_{{$dream->id}}" href="mydream_result\{{$dream->id}}"></a>
                @csrf
                <div class="word" dream_id="{{$dream->id}}">
                    <img src="image/femaleuser.png" id="user">
                    <strong><i class="fas fa-calendar-alt"></i>{{$dream->share_time}}</strong>
                    <p class="text-muted" >
                      <b>{{$dream->title}}</b>
                    </p>
                </div>
                  <hr>
            @endforeach --}}
            <div class="word" onclick="test()">
                <p class="text-muted" >
                  <img src="image/femaleuser.png" id="user">
                  <b>梅花鹿</b><br>
                  我在森林裡迷路，遇到一隻跟我一樣高的梅花鹿，我想要靠近看牠，
                  可是他一直走、一直走，我的步伐再快都跟不上牠。
                </p>
            </div><hr>
            <div class="word" onclick="test()">
                <p class="text-muted">
                  <img src="image/maleuser.png" id="user">
                  <b>一條很長的蛇</b><br>
                  我居然在山上，有一條很長的蛇壓在我身上，我怕牠會咬我所以我不敢動...
                </p>
            </div><hr>
            <div class="word" onclick="test()">
                <p class="text-muted">
                  <img src="image/femaleuser.png" id="user">
                  <b>三隻死掉的小鳥</b><br>
                  我常常夢到死掉的小鳥，昨天突然一次出現三隻，不知道代表什麼意思，有人可以告訴我嗎?
                </p>
            </div><hr>
          </div>
    </div>

    <script language="javascript">
      $('.word').click(function() {
        var id = $(this).attr("dream_id");
        document.getElementById("a_"+id).click();
      });
    </script>
    </div>
@endsection
