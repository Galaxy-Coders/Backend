<x-main>

  <div class="books">
    <div class="top">
      <h1>Kitoblar</h1>
      <div class="category">
        <ul>
          <li class="book_li"><button onclick="li_clicked(0)">Barchasi</button></li>
          <li class="book_li"><button onclick="li_clicked(1)">Eng ko'p o'qilgan</button></li>
          <li class="book_li"><button onclick="li_clicked(2)">Audioli kitoblar</button></li>
          <li class="book_li"><button onclick="li_clicked(3)">Yangi kitoblar</button></li>
        </ul>
      </div>
    </div>
    <div class="bottom">
      @foreach ($books as $book)
        <a href="{{ route('books.show', ['book'=>$book->id]) }}" class="card">
          <div class="card-top">
            <img src="/storage/{{ $book->cover }}" alt="">
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

  <script src="../Javascript/book.js"></script>
</x-main>