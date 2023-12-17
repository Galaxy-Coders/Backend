<x-adminLayout.main>

    <x-slot:SideBarActiveAt>
        active
    </x-slot:SideBarActiveAt>

    <form action="{{ route("authors.store") }}" method="POST" enctype="multipart/form-data" class="w-75 p-3 m-auto" style="background: #191C24;">
        @csrf
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputImage">Upload Image</label>
            <input type="file" class="form-control border border-light" id="inputImage" name="image">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control border border-light" id="name" name="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="birthDay" class="form-label">Birth Day</label>
            <input type="text" class="form-control border border-light" id="birthDay" name="birthDay" placeholder="Birth Day">
        </div>
        <div class="mb-3">
            <label for="deathDay" class="form-label">Death Day</label>
            <input type="text" class="form-control border border-light" id="deathDay" name="deathDay" placeholder="Death Day">
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control border border-light" id="country" name="country" placeholder="Country">
        </div>
        <div class="mb-3">
            <label for="bio" class="form-label">Bio</label>
            <textarea class="form-control border border-light" id="bio" rows="3" name="bio"></textarea>
        </div>
        <div class="mb-3">
            <label for="creativityBio" class="form-label">Creativity Bio</label>
            <textarea class="form-control border border-light" id="creativityBio" rows="3" name="creativityBio"></textarea>
        </div>
        <input type="submit" value="Submit" class="btn btn-light">
    </form>

</x-adminLayout.main>