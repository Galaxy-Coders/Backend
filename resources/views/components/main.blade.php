<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badiiyat</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/styles/book.css">
    <link rel="stylesheet" href="/styles/books.css">
    <link rel="stylesheet" href="/styles/author.css">
    <link rel="stylesheet" href="/styles/authors.css">
    <link rel="stylesheet" href="/styles/shelf-book.css">
    <link rel="stylesheet" href="/styles/profile.css">
    <link rel="stylesheet" href="/responsive/resposive.css">
    <link rel="shortcut icon" href="/imgs/kitob.svg" type="image/x-icon">
</head>

<body>
    <nav class="nav-fixed">
        <div class="nav-logo">
            <a href="{{ route('index') }}">badiiyat</a>
        </div>
        <ul class="ul-desktop">
            <li><a href="{{ route('index') }}">Bosh sahifa</a></li>
            <li onmouseover="subCategoryIn()" onmouseout="subCategoryOut()">
                <a href="{{ route('booksPage') }}">Kitoblar</a>
            </li>
            <div class="sub-category" onmouseover="subCategoryIn()" onmouseout="subCategoryOut()">
                <a href="{{ route('booksPage') }}">Jadidlar adabiyoti</a>
                <a href="{{ route('booksPage') }}">Sovet adabiyoti</a>
                <a href="{{ route('booksPage') }}">Mustaqillik davri adabiyoti</a>
                <a href="{{ route('booksPage') }}">Temuriylar davri adabiyoti</a>
                <a href="{{ route('booksPage') }}">Jahon adabiyoti</a>
            </div>
            <li><a href="{{ route('authorsPage') }}">Mualliflar</a></li>
            <li><a href="{{ route('index') }}#contact-us">Biz bilan bog'lanish</a></li>
        </ul>
        @auth
            <div class="Sprofile">
                <div class="showProfile">
                    <img src="/imgs/profile.png" alt="profile" width="30px">
                    <a href="{{ route('profile.edit', ['id' => auth()->user()->id]) }}" class="btn">{{ auth()->user()->name }}</a>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" name="logout" value="Chiqish">
                </form>
            </div>
        @else
            <div class="profile">
                <a href="{{ route('signin') }}" class="log">Kirish</a>
                <a href="{{ route('signup') }}" class="sign">Ro'yxatdan o'tish</a>
            </div>
        @endauth
        <div class="gamburger-menu"></div>
    </nav>

    <div class="header-fixer">
        <div class="top">
            <div class="profile">
                <button class="log"><a href="">Log in</a></button>
                <button class="sign"><a href="">Sign up</a></button>
            </div>
            <div class="clear-btn"></div>
        </div>
        <div class="center">
            <ul class="ul-tablet">
                <li><a href="#">Bosh sahifa</a></li>
                <li><a href="#">Kitoblar</a>
                </li>
                <li><a href="#">Maqolalar</a></li>
                <li><a href="./pages/authors.html">Mualliflar</a></li>
                <li><a href="#contact-us">Forum</a></li>
            </ul>
        </div>
    </div>

    {{ $slot }}


    <footer>
        <div class="foot-logo">
            <a href="{{ route('index') }}">badiiyat</a>
        </div>

        <p class="center">
            Biz bilan bog'lanish | +998 90 781 79 49
        </p>

        <div class="right">
            <a href="youtube.com" class="logo-con">
                <img width="40" src="/imgs/youtube.svg" alt="">
                <p>You Tube</p>
            </a>
            <a href="t.me/" class="logo-con">
                <img width="35" src="/imgs/Telegram.svg" alt="">
                <p>Telegram</p>
            </a>
            <a href="instagram.com" class="logo-con">
                <img width="35" src="/imgs/insta.svg" alt="">
                <p>Instagram</p>
            </a>
            <a href="twitter.com" class="logo-con">
                <img width="40" src="/imgs/twitter.svg" alt="">
                <p>Twitter</p>
            </a>
        </div>

    </footer>

    <script src="/script.js"></script>
    <script src="/Javascript/book.js"></script>>
</body>

</html>