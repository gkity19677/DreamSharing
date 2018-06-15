@extends('layouts.layout')
@section('content')

  <link rel="stylesheet" href="{{asset('css/mydream.css')}}">

<div class="container-fluid" id="c7">
  <div id="title">
    <center><h2>梅花鹿</h2></center>
  </div>
  <div class="col-md-offset-7 col-md-3 icon" >
      <ul>
        <li><a href="mydream_edit.html"><i class="fas fa-edit"></i></a></li>
        <li><a href="#"><i class="fas fa-trash-alt"></i></a></li>
        <li><a href="mydream.html"><i class="fas fa-reply"></i></a></li>
      </ul>
  </div>
	<div class="box box-primary" id="form">
        <div class="box-body">
					<div class="word" onclick="test()">
              <strong><i class="fas fa-calendar-alt"></i></i> 2018/5/20</strong>
              <br><br>
              <p><i class="fas fa-edit"></i>
                我在森林裡迷路，遇到一隻跟我一樣高的梅花鹿，我想要靠近看牠，
                可是他一直走、一直走，我的步伐再快都跟不上牠。
              </p>
					</div>
					<br><br><a class="btn btn-default pull-right" href="popage.html" role="button">發佈</a>
        </div>
  </div>
</div>
@endsection
