<x-adminLayout.main>

    <x-slot:SideBarActiveIn>
        active
    </x-slot:SideBarActiveIn>

    <form action="{{ route("books.store") }}" method="POST" enctype="multipart/form-data" class="w-75 p-3 m-auto" style="background: #191C24;">
        @csrf
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputCover">Upload Cover</label>
            <input type="file" class="form-control border border-light" id="inputCover" name="cover">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputAudio">Upload audio</label>
            <input type="file" class="form-control border border-light" id="inputAudio" name="audio">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputDocument">Upload pdf</label>
            <input type="file" class="form-control border border-light" id="inputDocument" name="document">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control border border-light" id="title" name="title" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control border border-light" id="author" name="author" placeholder="Author">
        </div>
        <div class="mb-3">
            <label for="pages" class="form-label">Pages</label>
            <input type="text" class="form-control border border-light" id="pages" name="pages" placeholder="Pages">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="text" class="form-control border border-light" id="date" name="date" placeholder="Date">
        </div>
        <div class="mb-3">
            <label for="ganre" class="form-label">Ganre</label>
            <input type="text" class="form-control border border-light" id="ganre" name="ganre" placeholder="Ganre">
        </div>
        <div class="mb-3">
            <label for="about" class="form-label">About</label>
            <textarea class="form-control border border-light" id="about" rows="3" name="about"></textarea>
        </div>
        <input type="submit" value="Submit" class="btn btn-light">
    </form>

</x-adminLayout.main>