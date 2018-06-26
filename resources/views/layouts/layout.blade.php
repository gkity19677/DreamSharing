<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DreamSharing夢享</title>
	<link rel="stylesheet" href="{{asset('css/index.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/normalize.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

	<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/html5shiv.js')}}"></script>
</head>
<body>
	<div class="container-fluid" id="c0">
		<div class="row" id="first">
			<div class="col-md-offset-2 col-md-1" id="home">
			<a href="{{url('index')}}"><img src="{{asset('image/logo1.png')}}" alt="logo1" width="100px" height="80px"
			onmouseover="this.src='{{asset('image/logo2.png')}}';"
			onmouseout="this.src='{{asset('image/logo1.png')}}';"></a>
			</div>
			<div id="label">
				<div class="col-md-4 col-md-offset-5 col-sm-6">
						<ul>
							<!-- <li><a href="index.html#c2">關於夢境</a></li> -->
							<li><a href="{{url('index#c3')}}" class="gomoremore">夢享專區</a></li>
							<script type="text/javascript">
								$('.gomoremore').click(function(){
						    $('html,body').animate({scrollTop:$('#c3').offset().top},1500);
						    });
							</script>
							<li><a href="{{url('keep')}}">我的收藏</a></li>
							@if (!Auth::check())
								<li><a href="{{url('login')}}">登入</a></li>
							@else
								<li>
								<a class="dropdown-item" href="{{ route('logout') }}"
									 onclick="event.preventDefault();
																 document.getElementById('logout-form').submit();">
										{{ __('登出') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
								</form>

								</li>
							@endif


							@if(Auth::user()->sex=='M')
								<a href="{{url('basic_result')}}">
	  							<img src="{{asset('image/maleuser.png')}}" alt="member" id="member">
								</a>
							@elseif (Auth::user()->sex=='F')
								<a href="{{url('basic_result')}}">
	  							<img src="{{asset('image/femaleuser.png')}}" alt="member" id="member">
								</a>
							@endif
						</ul>
				</div>
			</div>
		</div>
	</div>
  <section class="content">
    @yield('content')
  </section>

</body>
</html>
