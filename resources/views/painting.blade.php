@extends('layouts.app')

@section('content')
	<div class='row'>
		<div class='col-md-6'>
			<p>
				<img src='/img/{{ $painting->id }}.jpg'>
			</p>
		</div>
		<div class='col-md-6'>
			<h1 class='page-header text-center'>
				{{ $painting->name }}
			</h1>
			<p>
				{{ $painting->description }}
			</p>
			<p>
				<b>If you are interested in this painting, please contact us at <a href='mailto:sales@pinemoongallery.com'>sales@pinemoongallery.com</a>.</b>
			</p>
		</div>
	</div>	
@endsection
