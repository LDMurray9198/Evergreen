<!doctype html>
<html>

<head>
<title> Evergreen Assessment - @yield('title')</title>
</head>

<body>
<div class="container">
	<header class="row">
		@include('includes.header')
	</header>
	<div id="main" class="row">
		@yield('content')
	</div>
</div>
</body>

</html>