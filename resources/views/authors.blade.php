<x-main>

  <div class="authors">
    <div class="top">
      <h1>Mualliflar</h1>
      <div class="category">
        <ul>
          <li class="author_li"><button onclick="li_clicked(0)">Barchasi</button></li>
          <li class="author_li"><button onclick="li_clicked(1)">Temuriylar davri</button></li>
          <li class="author_li"><button onclick="li_clicked(2)">Jadid adabiyoti</button></li>
          <li class="author_li"><button onclick="li_clicked(3)">Sovet davri</button></li>
          <li class="author_li"><button onclick="li_clicked(4)">Mustaqillik davri</button></li>
          <li class="author_li"><button onclick="li_clicked(5)">Jahon adab iyoti</button></li>
        </ul>
      </div>
    </div>
    <div class="bottom">
        @foreach ($authors as $author)
            <a href="{{ route('authors.show', ['author'=>$author->id]) }}" class="card">
                <div class="card-top">
                    <img src="/storage/{{ $author->image }}" alt="">
                </div>
                <div class="card-bottom">
                    <div class="author-info">
                        <h2>{{ $author->name }}</h2>  
                        <p>{{ $author->birthDay }}-{{ $author->deathDay }}</p>
                    </div>
                    <div class="card-info">
                        <div>
                            <img src="../imgs/kitob.svg" alt="">
                            <p>34</p>
                        </div>
                        <div>
                            <img src="../imgs/naushnik.svg" alt="">
                            <p>13</p>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
  </div>

  <script src="../Javascript/book.js"></script>

</x-main>