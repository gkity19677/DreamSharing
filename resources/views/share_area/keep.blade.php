@extends('layouts.layout')
@section('content')
  <link rel="stylesheet" href="{{asset('css/keep.css')}}">

  <div class="container-fluid" id="c12">
  <div id="mydream">
    <img src="{{asset('image/keep.png')}}">
  </div>

	<div class="box box-primary" id="form">
        <div class="box-body">
					<div class="word" onclick="test()">

              <p class="text-muted" >
                <b>梅花鹿</b>
              </p>
					</div>
              <hr>
					<div class="word" onclick="test()">

              <p class="text-muted">
								<b>一條很長的蛇</b>
							</p>
					</div>
              <hr>
					<div class="word" onclick="test()">

              <p class="text-muted">
								<b>三隻死掉的小鳥</b>
							</p>
					</div>
        </div>
  </div>
	<img src="{{asset('image/keep1.png')}}" id="pic1">
	<img src="{{asset('image/keep2.png')}}" id="pic2">
</div>
<script language="javascript">
function test() {　
　document.location.href='share_content.html';
}
</script>

@endsection
