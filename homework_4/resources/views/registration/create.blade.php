<form method="POST" action="{{ route('register') }}">
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
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>
    @error('password')
        <p class="text-danger">{{ $message }}</p>
    @enderror

    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>
    @error('confirm_password')
        <p class="text-danger">{{ $message }}</p>
    @enderror

    <div>
        <button type="submit">Register</button>
    </div>
</form>
