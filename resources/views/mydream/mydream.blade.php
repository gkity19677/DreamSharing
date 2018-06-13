@extends('layouts.layout')

@section('content')
  <link rel="stylesheet" href="{{asset('css/mydream.css')}}">

<div class="container-fluid" id="c7">
  <div id="mydream">
    <img src="image/mydream.png">
  </div>
  <div class="col-md-offset-8 col-md-2 icon" >
      <ul>
        <li><a href="mydream_add.html"><i class="fas fa-plus"></i></a></li>
        <li><a href="mydream.html"><i class="fas fa-trash-alt"></i></a></li>
      </ul>
  </div>
	<div class="box box-primary" id="form">
        <div class="box-body">
					<div class="word" onclick="test()">
              <strong><i class="fas fa-calendar-alt"></i> 2018/5/20</strong>
              <p class="text-muted" >
                <b>梅花鹿</b>
              </p>
					</div>
              <hr>
					<div class="word" onclick="test()">
              <strong><i class="fas fa-calendar-alt"></i> 2018/5/21</strong>
              <p class="text-muted">
								<b>一條很長的蛇</b>
							</p>
					</div>
              <hr>
					<div class="word" onclick="test()">
              <strong><i class="fas fa-calendar-alt"></i> 2018/5/22</strong>
              <p class="text-muted">
								<b>三隻死掉的小鳥</b>
							</p>
					</div>
        </div>
  </div>
</div>
<script language="javascript">
function test() {　
　document.location.href='mydream_result.html';
}
</script>

@endsection
