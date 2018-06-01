<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DreamSharing夢享</title>
	<link rel="stylesheet" href="{{asset('css/css1.css')}}">
	<link rel="stylesheet" href="{{asset('css/normalize.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

	<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/html5shiv.js')}}"></script>
</head>
<body>
	<div class="container-fluid" id="c1">
		<div class="row" id="first">
			<div class="col-md-offset-2 col-md-1" id="home">
			<a href="index.html"><img src="image/logo1.png" alt="logo1" width="100px" height="80px"
			onmouseover="this.src='image/logo2.png';"
			onmouseout="this.src='image/logo1.png';"></a>
			</div>
			<div id="label">
				<div class="col-md-3 col-md-offset-6 s">
						<ul>
							<!-- <li><a href="index.html#c2">關於夢境</a></li> -->
							<li><a href="index.html#c3">夢享專區</a></li>
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

							<li><a href="{{url('register')}}">註冊</a></li>
							<a href="#" id="user">
  							<img src="image/user2.png" alt="member" id="member">
							</a>
						</ul>
				</div>
			</div>
		</div>
		<a href="index.html#c2"><img src="image/more1.png"
		onmouseover="this.src='image/more2.png';"
		onmouseout="this.src='image/more1.png';" id="downicon"></i></a>
	</div>
	<div class="container-fluid" id="c2">
		<img src="image/about.png" alt="about" id="about">
		<div id="content1">

		</div>
		<div id="content2">
			內容
		</div>
	</div>
	<div class="container-fluid" id="c3">
		<img src="image/area.png" alt="area" id="about">
		<div id="threepic">
			<a href="mydream.html" target="_blank"><img src="image/我的夢境1.png" alt="my dream" id="mydream"></a>
			<a href="analyze.html" target="_blank"><img src="image/我想解夢1.png" alt="analyze" id="analyze"></a>
			<a href="#"><img src="image/夢境分享區1.png" alt="share" id="share"></a>
		</div>
		<a href="index.html#c1" id="arrow"><img src="image/箭頭.png"
		onmouseover="this.src='image/箭頭2.png';"
		onmouseout="this.src='image/箭頭.png';"></a>
	</div>
</body>
</html>
