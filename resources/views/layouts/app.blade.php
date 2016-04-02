<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pinemoon Gallery</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href='/style.css' rel='stylesheet'>

</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}" style='font-family:Lobster; font-size:30px'>
                	<span class='text-primary'>Pinemoon Gallery</span>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/markingcolor') }}">Markingcolor Paintings</a></li>
                    <li><a href="{{ url('/newsong') }}">New Song Paintings</a></li>
                    <li><a href="{{ url('/traders') }}">For Traders</a></li>
                    <li><a href="{{ url('/paintings') }}">Our Paintings</a></li>
                    <li><a href="{{ url('/aboutus') }}">About Us</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
	
	<div class='container'>
		<div class='affix' style='right:5px;width:120px;'>
			<p><img src='/img/logo.jpg'></p>
			<ul class='list-group'>
				<li class='list-group-item' style='background:#f5f5f5'>
					<a href="{{ url('/markingcolor/flowers') }}">Flowers</a>
				</li>
                <li class='list-group-item' style='background:#f5f5f5'>
                	<a href="{{ url('/markingcolor/landscape') }}">Landscape</a>
               </li>
                <li class='list-group-item' style='background:#f5f5f5'>
                	<a href="{{ url('/markingcolor/abstract') }}">Abstract</a>
                </li>
                <li class='list-group-item' style='background:#f5f5f5'>
                	<a href="{{ url('/markingcolor/dance') }}">Dance</a>
                </li>
                <li class='list-group-item' style='background:#f5f5f5'>
                	<a href="{{ url('/markingcolor/lines') }}">Lines</a>
                </li>
                <li class='list-group-item' style='background:#f5f5f5'>
                	<a href="{{ url('/markingcolor/h-v') }}">H-V</a>
                </li>
                <li class='list-group-item' style='background:#f5f5f5'>
                	<a href="{{ url('/markingcolor/animals') }}">Animals</a>
                </li>
                <li class='list-group-item' style='background:#f5f5f5'>
                	<a href="{{ url('/newsong') }}">New Song</a>
                </li>
                <li class='list-group-item' style='background:#f5f5f5'>
                	<a href="{{ url('/traders') }}">Trading</a>
                </li>
            </ul>
        </div>
		@yield('content')
	</div>
	<footer>
		<div class='container'>
			<div class='row'>
				<div class='col-md-5 col-md-offset-1'>
					Copyright &copy; {{ date('Y') }} - Pinemoon Fine Art Gallery<br>
					20954 Corsair Blvd, Hayward, CA 94545<br>
					510-962-5904<br>
					<a href='mailto:sales@pinemoongallery.com'>sales@pinemoongallery.com</a>
				</div>
				<div class='col-md-5'>
					Pinemoon Fine Art Gallery<br>
					This gallery is featuring contemporary fine art including marking color fine art paintings and high-resolution digital Chinese Song Dynastty style paintings.
				</div>
		</div>
	</footer>
	
    <!-- JavaScripts -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
