<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/superfish.css')}}">

	<link rel="stylesheet" href="{{asset('js/modernizr-2.6.2.min.js')}}"> -->

	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!-- Modernizr JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-3">Home</a>
            </li>
            <li>
                <a href="{{route('dashboard')}}" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="{{route('posts')}}" class="p-3">Make Donations</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
            <li>
                <a href="" class="p-3">{{auth()->user()->name}}</a>
            </li>
            <li>
            <form action="{{route('logout')}}" method="post" class="p-3 inline">
            @csrf
            <button type="submit" class="p-3">Logout</button>
            </form>
            </li>
            @endauth

            @guest
            <li>
                <a href="{{route('login')}}" class="p-3">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-3">Register</a>
            </li>
            @endguest



        </ul>
    </nav>
    @yield('content')
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../../../public/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../../../public/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../../../public/js/jquery.waypoints.min.js"></script>
	<script src="../../../public/js/sticky.js"></script>

	<!-- Stellar -->
	<script src="../../../public/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="../../../public/js/hoverIntent.js"></script>
	<script src="../../../public/js/superfish.js"></script>

	<!-- Main JS -->
	<script src="../../../public/js/main.js"></script>
</html>
