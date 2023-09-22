<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Library</title>
</head>
<body>

    <header class="container sb-line">
        <div class="c-line">
            <a href="/"><img class="logo-img" src="{{ asset('img/logo.png') }}" alt="Логотип"></a>
            <a href="/"><h2>NATIONAL LIBRARY<br>OF BELARUS</h2></a>
        </div>
        <nav class="nav-links nav-links-line">
            <a href="about.html"><h2>About</h2></a>
            <a href="books.html"><h2>Books</h2></a>
            <a href="/events"><h2>Events</h2></a>
            <a href="/posts"><h2>Blog</h2></a>
        </nav>
        <div class="login">
            @auth
                <div class="sb-line">
                    <h2 class="username">{{ auth()->user()->name }}</h2>
                    <form method="POST" action="/logout">
                        @csrf
                        <input class="input-button bolder-text" type="submit" value="Logout">
                    </form>
                </div>
            @else
                <a href="/login"><h2 class="input-button">Login</h2></a>
            @endauth
        </div>
    </header>

    {{ $slot }}

    <div class="footer">
        <div class="container">
            <div class="newsletter-line">
                <div class="sb-line">
                    <h1>Stay up-to-date with our newsletter</h1>
                    <form class="sb-line" action="">
                        <input class="input-text" type="text" name="" id="" placeholder="First Name">
                        <input class="input-text" type="email" name="" id="" placeholder="Email">
                        <input class="input-button" type="submit" value="Submit">
                    </form>
                </div>
            </div>
            <hr class="margin-top-3">
            <div class="sb-line margin-top-3">
                <h2 class="author">Developed by Valeryia Matveyeva in 2023</h2>
                <div class="sb-line icons">
                    <a href=""><i class="fas fa-envelope"></i></a>
                    <a href=""><i class="fab fa-github"></i></a>
                    <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script src="js/text-trimmer.js"></script>

</body>
</html>