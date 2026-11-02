<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <header>
        <h1>DEFAULT HEADER PAGE</h1>
        <img src="{{ asset('images/screenshot.png') }}" alt="Slack page screenshot">
        @yield('header')
        @include('sidemenu')
    </header>

    <main>
        @yield('maincontent')
    </main>

    <footer>
        <p>THIS IS THE DEFAULT FOOTER</p>
        @yield('footercontent')
    </footer>
</body>
</html>
