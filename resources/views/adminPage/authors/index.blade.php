<x-adminLayout.main>
    <x-slot:SideBarActiveAt>
        active
    </x-slot:SideBarActiveAt>
    <div class="container">

        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="mb-0">Mualliflar</h4>
                    <a class="btn btn-warning" href="{{ route('authors.create') }}">Qo'shish</a>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <th scope="col">F.I.Sh</th>
                                <th scope="col">Tug'ilgan sana</th>
                                <th scope="col">Tug'ilgan joy</th>
                                <th scope="col">Muallif hayoti</th>
                                <th scope="col">Muallif ijodi</th>
                                <th scope="col"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($authors as $author)
                                <tr>
                                    <td>{{ $author->name }}</td>
                                    <td>{{ $author->birthDay }} - {{ $author->deathDay }}</td>
                                    <td>{{ $author->country }}</td>
                                    <td>{{ $author->bio }}</td>
                                    <td>{{ $author->creativityBio }}</td>
                                    <td style="display: flex; justify-content: space-evenly;">
                                        <a class="btn btn-sm btn-success" href="{{ route('authors.edit', ['author' => $author->id]) }}">
                                            <img src="/adminImg/edit.png" alt="edit icon" width="20px" height="20px">
                                        </a>
                                        <form action="{{ route('authors.destroy', ['author' => $author->id]) }}" method="POST">
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