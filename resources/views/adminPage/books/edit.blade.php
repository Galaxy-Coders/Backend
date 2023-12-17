<x-adminLayout.main>

    <x-slot:SideBarActiveIn>
        active
    </x-slot:SideBarActiveIn>

    <form action="{{ route("books.update", ['book' => $book->id]) }}" method="POST" enctype="multipart/form-data" class="w-75 p-3 m-auto" style="background: #191C24;">
        @method('PUT')
        @csrf
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputCover">Upload Cover</label>
            <input type="file" class="form-control border border-light" id="inputCover" name="cover" value="{{ $book->cover }}">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputAudio">Upload audio</label>
            <input type="file" class="form-control border border-light" id="inputAudio" name="audio" value="{{ $book->audio }}">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputDocument">Upload pdf</label>
            <input type="file" class="form-control border border-light" id="inputDocument" name="document" value="{{ $book->document }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control border border-light" id="title" name="title" placeholder="Title" value="{{ $book->title }}">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control border border-light" id="author" name="author" placeholder="Author" value="{{ $book->author }}">
        </div>
        <div class="mb-3">
            <label for="pages" class="form-label">Pages</label>
            <input type="text" class="form-control border border-light" id="pages" name="pages" placeholder="Pages" value="{{ $book->pages }}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="text" class="form-control border border-light" id="date" name="date" placeholder="Date" value="{{ $book->date }}">
        </div>
        <div class="mb-3">
            <label for="ganre" class="form-label">Ganre</label>
            <input type="text" class="form-control border border-light" id="ganre" name="ganre" placeholder="Ganre" value="{{ $book->ganre }}">
        </div>
        <div class="mb-3">
            <label for="about" class="form-label">About</label>
            <textarea class="form-control border border-light" id="about" rows="3" name="about">{{ $book->about }}</textarea>
        </div>
        <input type="submit" value="Submit" class="btn btn-light">
    </form>

</x-adminLayout.main>