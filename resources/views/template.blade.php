<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web project</title>
</head>
<body>
    <p>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('blog') }}">Blog</a>
    </p>

    @auth
    <a href="{{ route('dashboard') }}">Dashboard</a>
    @else
    <a href="{{ route('login') }}">Dashboard</a>
    @endauth

    <hr>

    @yield('content')

</body>
</html>