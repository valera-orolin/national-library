<x-layout>
    <div class="login-container">
        <div class="login-panel">
            <h1>Register</h1>
            <form class="login-form" method="POST" action="/users">
                @csrf
                <input class="input-text" type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                <input class="input-text" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                <input class="input-text" type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                <input class="input-text" type="password" name="password_confirmation" placeholder="Confirm Password" value="{{ old('password_confirmation') }}">
                <input class="input-button" type="submit" value="Sign up">
            </form>
            <div class="c-line">
                <h3 class="lighter-text">Already have an account?&nbsp</h3>
                <a class="white-link" href="/login"><h3 class="lighter-text">Login</h3></a>
            </div>
        </div>
    </div>
</x-layout>