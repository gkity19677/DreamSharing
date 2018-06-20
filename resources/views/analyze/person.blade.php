@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="{{asset('css/analyze.css')}}">

<div class="container-fluid" id="backcolor">
  <br>
  <button type="button" name="button" class="button">家人</button><br>
  <button type="button" name="button" class="button">朋友</button><br>
  <button type="button" name="button" class="button">老人</button><br>
  <button type="button" name="button" class="button">現任</button><br>
  <button type="button" name="button" class="button">前任</button><br>
  <button type="button" name="button" class="button">明星</button>
  <div class="analyze_content">
    <div id="familyword">
    夢見與父母一起走路，表示願望能達成，受長輩提拔。<br><br>
    夢見媽媽很慈祥、和藹可親的對微笑，是代表你最近的運勢都很旺，<br>
    不論在工作上、感情上、生活上都能很順心。<br><br>
    夢到爸爸過世，代表你在不久後可能會接獲到好消息。如果爸爸在夢中有交待你任何事情、<br>
    留下什麼話給你，你一定要記住，並馬上去做，將有意想不到的驚喜出現。<br><br>
    夢見自己和兄弟姐妹遊玩，可能你將因為志趣相投而結交新朋友，並有機會成為知己。<br><br>
    夢見自己與兄弟姐妹合力做某些事情，表示工作或學習有顯著進步。<br>
    以往難纏的科目，將全部都有好分數;也有可能被老師當眾褒揚，使你神采飛揚。<br><br>
    夢見自己和兄弟姐妹爭吵，好事，預示你可能會得到意外之財，發財致富。
    </div>
  </div>
  <img src="{{asset('image/rain.png')}}" id="rain">
  <img src="{{asset('image/umgirl.png')}}" id="umgirl">
</div>

@endsection
