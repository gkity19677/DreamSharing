@extends('layouts.layout')
@section('content')

	<div class="container-fluid" id="c1">
		<a href="#c2"><img src="image/more1.png"
		onmouseover="this.src='image/more2.png';"
		onmouseout="this.src='image/more1.png';" id="downicon"></i></a>
		<script type="text/javascript">
			$('.gomore').click(function(){
	    $('html,body').animate({scrollTop:$('#c2').offset().top},1500);
	    });
		</script>
	</div>
	<div class="container-fluid" id="c2">
		<img src="image/about1.png" id="aboutword">
		<div id="content1">
			<div id="con">
			<img src="image/羽毛2.png" id="feather">
			<p id="word">你經常做夢嗎?<br>
				人們普遍認為夢是與潛意識溝通的管道，<br>
				在不同的文化和不同的時代，人們對夢的含意也都有各種不同的看法。<br><br>
				弗洛伊德認為夢的內容是由無意識欲望的滿足塑造的，<br>
				重要的無意識欲望通常與童年時的記憶和經驗有關。<br>
				後來卡爾·榮格反對弗洛伊德的許多理論，<br>
				他將夢描述成給予做夢者的訊息，幫助做夢者自我改善，<br>
				他相信夢是在向做夢者揭示他們感情或者信仰上的問題和恐懼。<br><br>
				記錄夢、解讀夢、分享夢，三個步驟是「夢享」的主要宗旨，<br>
				有的人總是做惡夢，也有的人總是做美夢，不論是什麼樣的夢，<br>
				都可以來「夢享」尋找夢的解答！
			</p>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="c3">
		<img src="image/area.png" alt="area" id="about">
		<div id="threepic">
			<a href="{{url('mydream')}}" ><img src="image/我的夢境1.png" alt="my dream" id="mydream"></a>
			<a href="{{url('analyze')}}" ><img src="image/我想解夢1.png" alt="analyze" id="analyze"></a>
			<a href="#"><img src="image/夢境分享區1.png" alt="share" id="share"></a>
		</div>
		<div class="goTop">
		<a href="index.html#c0" id="arrow"><img src="image/箭頭.png"
		onmouseover="this.src='image/箭頭2.png';"
		onmouseout="this.src='image/箭頭.png';"></a>
		</div>
		<script type="text/javascript">
			$('.goTop').click(function(){
	    $('html,body').animate({scrollTop:$('layouts.layout#c0').offset().top},1500);
	    });
		</script>
	</div>

@endsection
