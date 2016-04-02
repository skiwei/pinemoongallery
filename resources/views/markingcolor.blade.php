@extends('layouts.app')

@section('content')
	<div class='page-header text-center'>
		<h1>Markingcolor Paintings</h1>
	</div>
	<p>
		For the last 30 years Victor Wang has pioneered a new painting medium that applies powerful color qualities using marking inks on different types of paper. He calls the unique medium / technique "Markingcolor".
	</p>
	<p>
		At this electronic and digital ﻿age, all "Markingcolor" paintings are re-created from the originals to digital images. They are all prints of high quality digital pigment by Giclee printing technology. Since it uses pigment print, the paintings can be printed on canvas or doubleweight matte paper. The image stability of pigment printing is superior to that of any other method of printing, including traditional silver-halide or metal-based. Normally the prints can be kept fresh for a long time. Pigment Giclee prints of the paintings are commonly acceptable for art-collections since 1980s. Numerous examples of giclee prints can be found in New York City at the Metropolitan Museum, the Museum of Modern Art, and the Chelsea Galleries.
	</p>
	<p>
		Victor Wang not only is a great fine artist, but also a master of digital image creator himself. For all prints of Markingcolor paintings here, Wang goes through his unique re-creations for each one with his artistic eyes, manually highlights fine touch-up, artist prove (A/P), steel sealed, With limited edition, each painting "reprint" is a unique and valuable fine art collection.
	</p>
	<hr>
	<ul class='list-inline text-center'>
		@foreach ($categories as $key=>$value)
			<li>
				@if ($key == $category)
					<b>{{ $value }}</b>
					<?php $view = "markingcolor.$category" ?>
				@else
					<a href='/markingcolor/{{ $key }}'>{{ $value }}</a>
				@endif
			</li>
		@endforeach
	</ul>
	
	
	@include($view)	
@endsection
