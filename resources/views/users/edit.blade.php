<div class="form-group">
    <label for="password">New Password (Optional)</label>

    <input
        type="password"
        name="password"
        id="password"
        minlength="8"
        placeholder="Leave blank to keep old password"
    >

    @error('password')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>