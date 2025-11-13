<x-guest-layout>
    <h2>Login to VØIDX.STUDIO</h2>

    <!-- Session Status -->
    @if (session('status'))
        <div class="session-status">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
            @error('email')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
            @error('password')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="form-group">
            <label style="display: flex; align-items: center;">
                <input id="remember_me" type="checkbox" name="remember" style="margin-right: 8px;">
                Remember me
            </label>
        </div>

        <button type="submit" class="btn-primary">
            Log in
        </button>

        <div class="auth-links">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgot your password?</a>
            @endif
            <br>
            <a href="{{ route('register') }}">Don't have an account? Register</a>
        </div>
    </form>
</x-guest-layout>
