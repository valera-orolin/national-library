<x-layout>
    <div class="login-container">
        <div class="login-panel">
            <h1>Login</h1>
            <form class="login-form" method="POST" action="/users/authenticate">
                @csrf
                <input class="input-text" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                <input class="input-text" type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                <input class="input-button" type="submit" value="Sign in">
            </form>
            <div class="c-line">
                <h3 class="lighter-text">Don't have an account?&nbsp</h3>
                <a class="white-link" href="/register"><h3 class="lighter-text">Register</h3></a>
            </div>
        </div>
    </div>
</x-layout>