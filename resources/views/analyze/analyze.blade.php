@extends('layouts.layout')

@section('content')
	<link rel="stylesheet" href="{{asset('css/analyze.css')}}">

		<div class="container-fluid" id="c5">
			<div class="ana">
				<img src="image/ana.png" alt="">
			</div>
			<div class="toppic col-md-offset-2 col-md-10">
			<a href="{{url('person')}}" target="_blank" ><img src="image/personcircle2.png" id="ana1"
			onmouseover="this.src='image/personcircle1.png';"
			onmouseout="this.src='image/personcircle2.png';"></a>
			<a href="# target="_blank" ><img src="image/animalcircle2.png" id="ana2"
			onmouseover="this.src='image/animalcircle1.png';"
			onmouseout="this.src='image/animalcircle2.png';"></a>
			<a href="#" target="_blank" ><img src="image/ghostcircle2.png" id="ana3"
			onmouseover="this.src='image/ghostcircle1.png';"
			onmouseout="this.src='image/ghostcircle2.png';"></a>
		</div>
		<div class=" col-md-offset-3 col-md-9" >
			<a href="#" target="_blank" ><img src="image/eventcircle2.png" id="ana4"
			onmouseover="this.src='image/eventcircle1.png';"
			onmouseout="this.src='image/eventcircle2.png';"></a>
			<a href="#" target="_blank" ><img src="image/scenecircle2.png" id="ana5"
			onmouseover="this.src='image/scenecircle1.png';"
			onmouseout="this.src='image/scenecircle2.png';"></a>
		</div>
	</div>

@endsection
