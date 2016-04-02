@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-2">
		<p><a href="{{ url('/paintings/1') }}"><img src='/img/1.jpg'></a></p>
		<p><a href="{{ url('/paintings/2') }}"><img src='/img/2.jpg'></a></p>
		<p><a href="{{ url('/paintings/4') }}"><img src='/img/4.jpg'></a></p>  
		<p><a href="{{ url('/paintings/5') }}"><img src='/img/5.jpg'></a></p>
		<p><a href="{{ url('/paintings/8') }}"><img src='/img/8.jpg'></a></p>
	</div>
    <div class='col-md-7'>
    	<div class='row'>
    		<div class='col-md-7'>
    			<p><img src='/img/work.png'></p>
    		</div>
    		<div class='col-md-5'>
    			<p><img src='/img/in_front_of_sam.jpg'></p>
    		</div>
    	</div>
    	<br>
    	<div class='well'>
    		<h3 class='text-center' style='margin-top:0'>
    			Home of the fine art paintings at digital age
    		</h3>
    		<p>
    			These paintings are featuring Victor Wang's fine art works of last 30 years. Wang was born in China in 1934. He's former professor at the Guangzhou Academy of Fine Arts in China, member of the China Artists Association, oil painter, watercolorist, and art critic. In I980 he immigrated to the US, created his unique "Markingcolor" and "New Song Dynasty" paintings since then. He's the founder of Chinese artists association in Washington State.
    		</p>
    		<ul class='list-inline text-center'>
    			<li><a href="{{ url('/markingcolor') }}">What's Markingcolor?</a></li>
    			<li><a href="{{ url('/newsong') }}">What's New Song Paintings?</a>
    		</ul>
    	</div>
    	<p><a href="{{ url('/paintings/6') }}"><img src='/img/6.jpg'></a></p>
    </div>
    <div class='col-md-3'>
    	<p><img src='/img/crystal.png'></p>
    	<p><a href="{{ url('/paintings/3') }}"><img src='/img/3.jpg'></a></p>
    	<p><a href="{{ url('/paintings/7') }}"><img src='/img/7.jpg'></a></p>
    	<p><a href="{{ url('/paintings/9') }}"><img src='/img/9.jpg'></a></p>
    </div>
</div>
@endsection
