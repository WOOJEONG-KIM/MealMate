<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Meal Mate</title>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="/"><img src="{{ asset('img/mealmate_logo1.png') }}" alt="meal time logo" width="125px"></a>
                </div>
    
                <nav>
                    <ul>
                        <li><a href="/about" class="nav-link">ABOUT</a></li>
                        <li><a href="/menus" class="nav-link">MENUS</a></li>
                        <li><a href="/cart" class="nav-link">MY CART</a></li>
                        @if(auth()->user())
                            <li><a href="/orders" class="nav-link">{{ Auth::user()->name }}</a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">LOGOUT</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <li><a href="/login" class="nav-link">LOGIN</a></li>
                            <li><a href="/register" class="nav-link">REGISTER</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    @yield('content')

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-2">
                    <img src="{{ asset('img/mealmate_logo2.png') }}">
                    <p>Copyright 2024 Meal Mate</p>
                </div>
                <div class="footer-col-1">
                    <h3>Download our app</h3>
                    <p>Download app for android an ios</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog</li>
                        <li>Return Policy</li>
                        <li>Join Us</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Instagram</li>
                        <li>Twitter</li>
                        <li>Facebook</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
