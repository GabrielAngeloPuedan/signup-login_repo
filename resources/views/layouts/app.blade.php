
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
</head>
<body>

    <div class="container">
        @yield('content')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('appointments') }}">Appointments</a>
            
<a href="{{ route('login') }}" class="text-green-600">Log In</a>
<a href="{{ route('register') }}" class="text-green-600">Sign Up</a>
        </li>
    </div>

    <!-- Regular User Links -->


</body>
</html>