<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- SITE TITLE -->
	<title>Hilux - Real Estate HTML Template</title>
	@include('landing.components.css')
</head>

<body data-spy="scroll" data-offset="80">

	<!-- START PRELOADER -->
	<div class="preloader">
		<div class="status">
			<div class="status-mes"></div>
		</div>
	</div>
	<!-- END PRELOADER -->

	@include('landing.partial.navbar')

	@yield('content')

	@include('landing.partial.footer')

	@include('landing.components.js')
</body>

</html>