<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','wai')</title>
</head>
<body>
    <ul>
        <li><a href="php">PHP Page</a></li>
        <li><a href="js">JS Page</a></li> 
    </ul>
    @yield('content')
</body>
</html>