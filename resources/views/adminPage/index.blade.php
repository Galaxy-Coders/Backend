<x-adminLayout.main>

    <x-slot:SideBarActiveIn>
        active
    </x-slot:SideBarActiveIn>
    <div class="container">

        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="mb-0">Kitoblar</h4>
                    <a class="btn btn-warning" href="{{ route('books.create') }}">Qo'shish</a>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <th scope="col">Sarlavha</th>
                                <th scope="col">Muallif</th>
                                <th scope="col">Sahifalar soni</th>
                                <th scope="col">Chop etilgan sana</th>
                                <th scope="col">Janri</th>
                                <th scope="col">Asar haqida</th>
                                <th scope="col"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>{{ $book->pages }}</td>
                                    <td>{{ $book->date }}</td>
                                    <td>{{ $book->ganre }}</td>
                                    <td style="width: 200px !important;overflow:hidden;">{{ $book->about }}</td>
                                    <td style="display: flex; justify-content: space-evenly;">
                                        <a class="btn btn-sm btn-success" href="{{ route('books.edit', ['book' => $book->id]) }}">
                                            <img src="./adminImg/edit.png" alt="edit icon" width="20px" height="20px">
                                        </a>
                                        <form action="{{ route('books.destroy', ['book' => $book->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-primary" onSubmit="return confirm('Rostdan ham ushbu kard olib tashlansinmi?')">
                                                <img src="./adminImg/delete.png" alt="delete icon" width="20px" height="20px">
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->

    </div>
    <!-- Content End -->

</x-adminLayout.main>