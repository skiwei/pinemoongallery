@extends('layouts.app')

@section('content')
<h1 class='page-header text-center'>
	For Traders
</h1>

<div class='row'>
	<div class='col-md-3'>
		<br>
		<p>
		<a href="{{ url('/paintings/90') }}"><img src='/img/90.jpg'></a>
		</p>
		<ul class='list-inline text-center'>
			<li><img src='/img/calligraphy_nature.jpg'></li>
			<li><img src='/img/calligraphy_nothing.jpg'></li>
		</ul>
	</div>
	<div class='col-md-3'>
		<br>
		<p>
		<a href="{{ url('/paintings/91') }}"><img src='/img/91.jpg'></a>
		</p>
		<ul class='list-inline text-center'>
			<li><img src='/img/calligraphy_water.jpg'></li>
			<li><img src='/img/calligraphy_straight.jpg'></li>
		</ul>
	</div>
	<div class='col-md-3'>
		<h3>Philosophy</h3>
		<p>
		Trend is traders' best friend. We follow trend in trading, never fight against the trend. We must learn and act like water.
		</p>
		<p>
		<a href="{{ url('/paintings/92') }}"><img src='/img/92.jpg'></a>
		</p>
		<h3>Riding the strong waves</h3>
		<p>
		Last night spring water suddenly flooded the riverbank, Making heavy vessels float like feathers. In the past, I have exerted hard labor to push ships ahead. Today I rejoice, riding effortlessly on the strong waves.
		- Zhu Xi (1130-1202)
		</p>
	</div>
	<div class='col-md-3'>
		<h3>Paintings for Traders</h3>
		<ul>
			<li>Like that of water</li>
			<li>AbleTrend</li>
			<li>Riding the strong waves﻿</li>
			<li>Tao of Lao Tze</li>
			<li>Success</li>
			<li>Tao Calligraphy (4)</li>
		</ul>
		<hr>
		<h3>Our Gallery</h3>
		<p>
		Welcome to view our gallery with anticipation for new & exciting. In today's super connected world, even the counter culture has been assimilated into the mundane.  Yet here, you may once again be delighted by that you have truly never seen before.
		</p>
	</div>
</div>
@endsection