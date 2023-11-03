<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <title>Library</title>
</head>
<body>

    <header class="container sb-line">
        <div class="c-line">
            <a href="/"><img class="logo-img" src="{{ asset('img/logo.png') }}" alt="Логотип"></a>
            <a href="/"><h2>NATIONAL LIBRARY<br>OF BELARUS</h2></a>
        </div>
        <div class="nav-links nav-links-line">
            <a class="link-animation" href="/about"><h2>About</h2></a>
            <a class="link-animation" href="/books"><h2>Books</h2></a>
            <a class="link-animation" href="/events"><h2>Events</h2></a>
            <a class="link-animation" href="/posts"><h2>Blog</h2></a>
        </div>
        @auth
            <div class="sb-line login">
                <h2 class="username">{{ auth()->user()->name }}</h2>
                <form method="POST" action="/logout">
                    @csrf
                    <input class="input-button bolder-text" type="submit" value="Logout">
                </form>
            </div>
        @else
            <a href="/login"><h2 class="input-button bolder-text">Login</h2></a>
        @endauth
    </header>

    <div class="container message-container">
        @include('flash::message')
    </div>

    <script>
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>

    {{ $slot }}

    <div class="footer">
        <div class="container">
            <div class="newsletter-line">
                <div class="sb-line">
                    <h1>Stay up-to-date with our newsletter</h1>
                    <form class="sb-line" method="POST" action="/newsletter">
                        @csrf
                        @method('PUT')
                        <input class="input-text" type="text" name="name" placeholder="First Name">
                        <input class="input-text" type="email" name="email" placeholder="Email">
                        <input class="input-button" type="submit" value="Submit">
                    </form>
                </div>
            </div>
            <hr class="margin-top-3">
            <div class="sb-line margin-top-3">
                <h2 class="author">Developed by Valeryia Matveyeva in 2023</h2>
                <div class="sb-line icons">
                    <a href="mailto:matveyeva.valeryia@gmail.com"><i class="fas fa-envelope"></i></a>
                    <a href="https://github.com/valera-orolin"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/valeryia-matveyeva-765036293/"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>