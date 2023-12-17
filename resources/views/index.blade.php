<x-main>
    
    <div class="head-bg"></div>

    <header>
        <div class="slider">
            <div class="slides">
                <a href="#" class="one">
                    <h1>Temuriylar davri adabiyoti</h1>
                </a>
                <a href="#" class="two">
                    <h1>Jadidlar davri adabiyoti</h1>
                </a>
                <a href="#" class="three">
                    <h1>Sovet davri adabiyoti</h1>
                </a>
                <a href="#" class="four">
                    <h1>Jahon adabiyoti</h1>
                </a>
            </div>
            <div class="slider-control">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
                <div class="four"></div>
            </div>
        </div>
        
        <div class="search-bar">
            <h1>Qidirish</h1>
            <div class="s-bottom">
                <input class="search-inp" placeholder="Adiblar, kitoblar, audiolar, maqolalar..." type="search"
                    required>
                <button type="submit">Izlash</button>
            </div>
        </div>
    </header>

    <div class="main-books">
        <div class="top">
            <h1>Bizning kitoblar</h1>
        </div>
        <div class="bottom">
            @foreach ($books as $book)
                <a href="{{ route('books.show',['book'=>$book->id]) }}" class="card">
                    <div class="card-top">
                        <img src="./storage/{{ $book->cover }}" alt="">
                    </div>
                    <div class="card-bottom">
                        <h2>{{ $book->title }}</h2>
                        <span>{{ $book->author }}</span>
                        <div>
                            <img src="../imgs/star.svg" alt="">
                            <h3> <b>4.1</b> • <strong>3400</strong> ta fikrlar</h3>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="compony-info">
        <div class="container">
            <div>
                <img src="./imgs/pen-nib-svgrepo-com.svg" alt="">
                <p>Yozuvchilar</p>
                <h1>{{ $authors }}</h1>
            </div>
            <div>
                <img src="./imgs/kitob.svg" alt="">
                <p>Kitoblar</p>
                <h1>{{ count($books) }}</h1>
            </div>
            <div>
                <img src="./imgs/naushnik.svg" alt="">
                <p>Audio kitoblar</p>
                <h1>{{ count($files) }}</h1>
            </div>
            <div>
                <img src="./imgs/profile.svg" alt="">
                <p>Kitobxonlar</p>
                <h1>{{ count($users) }}</h1>
            </div>
        </div>
    </div>

    <div class="contact-us" id="contact-us">
        <div class="top">
            <h1>Biz bilan aloqa</h1>
        </div>
        <div class="bottom">
            <div class="right">
                <form>
                    <input type="text" placeholder="Ism familiyangizni kriting..." required>
                    <input type="number" placeholder="Telefon raqamingizni kiriting..." required>
                    <textarea name="" id="" cols="30" rows="10" required placeholder="Izoh qoldiring..."></textarea>
                    <button type="submit">Jonatish</button>
                </form>
            </div>
        </div>
    </div>

</x-main>