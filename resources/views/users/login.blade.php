<x-layout>
    <div class="login-container">
        <div class="login-panel">
            <h1>Login</h1>
            <form class="login-form" method="POST" action="/users/authenticate">
                @csrf
                <input class="input-text" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                @enderror

                <input class="input-text margin-top-3" type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                @error('password')
                    <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                @enderror

                <input class="input-button margin-top-3" type="submit" value="Sign in">
            </form>
            <div class="c-line">
                <h3 class="lighter-text">Don't have an account?&nbsp</h3>
                <a class="white-link" href="/register"><h3 class="lighter-text">Register</h3></a>
            </div>
        </div>
    </div>
</x-layout>