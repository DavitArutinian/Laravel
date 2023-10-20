<form method="POST" action="{{ route('contact') }}">
    @csrf

    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
    </div>
    @error('name')
        <p class="text-danger">{{ $message }}</p>
    @enderror

    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    </div>
    @error('email')
        <p class="text-danger">{{ $message }}</p>
    @enderror

    <div>
        <label for="message">Message</label>
        <textarea id="message" name="message" required>{{ old('message') }}</textarea>
    </div>
    @error('message')
        <p class="text-danger">{{ $message }}</p>
    @enderror

    <div>
        <button type="submit">Submit</button>
    </div>
</form>
