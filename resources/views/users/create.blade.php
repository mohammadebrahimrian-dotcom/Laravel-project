<div class="form-group">
    <label for="password">Password</label>

    <input
        type="password"
        name="password"
        id="password"
        minlength="8"
        required
    >

    @error('password')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="password_confirmation">Confirm Password</label>

    <input
        type="password"
        name="password_confirmation"
        id="password_confirmation"
        minlength="8"
        required
    >

    @error('password')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>