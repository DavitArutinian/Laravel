<form method="POST" action="{{ route('upload-profile-picture') }}" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="picture">Profile Picture</label>
        <input type="file" id="picture" name="picture" required>
    </div>
    @error('picture')
        <p class="text-danger">{{ $message }}</p>
    @enderror

    <div>
        <button type="submit">Upload</button>
    </div>
</form>
