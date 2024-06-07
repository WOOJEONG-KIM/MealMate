<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>Meal Mate</title>
    
    <link rel = "stylesheet" href = "/css/main.css">
    
    <link rel = "preconnect" href = "https://fonts.googleapis.com">
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>
    

<body>
    <div class = "header">
    <div class = "container">
        <div class = "navbar">
            <div class = "logo">
                <a href = "index.html"><img src = "img/mealmate_logo1.png" alt = "meal time logo" width = "125px"></a>
            </div>
    
            <nav>
                <ul>
                    <li><a href = "#">ABOUT</a></li>
                    <li><a href = "#">MENUS</a></li>
                    <li><a href = "#">MY CART</a></li>
                </ul>
            </nav>
        </div>

        <div class = "row">
            <div class = "col-2">
                <h1>Welcome!</h1>
                <p>Experience the joy of simple cooking<br>with fresh ingredients</p>
                <a href = "" class = "button">ABOUT</a> 
            </div>
            <div class = "col-2">
                <img src = "img/Intro1.jpg" alt = "meal table">
            </div>
        </div>
    </div>
    </div>

        @yield('content')

   <!--==== footer ====-->
   <div class = "footer">
        <div class = "container">
            <div class = "row">
                <div class = "footer-col-2">
                    <img src = "img/mealmate_logo2.png">
                    <p>Copyright 2024 Meal Mate</p>
                </div>
                <div class = "footer-col-1">
                    <h3>Download our app</h3>
                    <p>Download app for android an ios</p>
                </div>
                
                <div class = "footer-col-3">
                    <h3>Useful link</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog</li>
                        <li>Return Policy</li>
                        <li>Join Us</li>
                    </ul>
                </div>
                <div class = "footer-col-4">
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