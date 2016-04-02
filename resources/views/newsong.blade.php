@extends('layouts.app')

@section('content')
<h1 class='page-header text-center'>
	New Song Paintings
</h1>
<p>
	These paintings are featuring Victor Wang's fine art works of last 30 years. Wang was born in China in 1934. He's former professor at the Guangzhou Academy of Fine Arts in China, member of the China Artists Association, oil painter, watercolorist, and art critic. In I980 he immigrated to the US, created his unique "Markingcolor" and "New Song Dynasty" paintings since then. He's the founder of Chinese artists association in Washington State.
</p>
<br>
<div class='row'>
	<div class='col-md-4'>
		<a href="{{ url('/paintings/85') }}"><img src='/img/85.jpg'></a>
	</div>
	<div class='col-md-4'>
		<a href="{{ url('/paintings/86') }}"><img src='/img/86.jpg'></a>
	</div>
	<div class='col-md-4'>
		<a href="{{ url('/paintings/87') }}"><img src='/img/87.jpg'></a>
	</div>
</div>
<br>
<div class='row'>
	<div class='col-md-6'>
		<a href="{{ url('/paintings/88') }}"><img src='/img/88.jpg'></a>
	</div>
	<div class='col-md-6'>
		<a href="{{ url('/paintings/89') }}"><img src='/img/89.jpg'></a>
	</div>
</div>
@endsection
