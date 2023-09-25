<x-layout>
    <div class="login-container">
        <div class="login-panel">
            <h1>Register</h1>
            <form class="login-form" method="POST" action="/users">
                @csrf
                <input class="input-text" type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                @error('name')
                    <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                @enderror

                <input class="input-text margin-top-3" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                @enderror

                <input class="input-text margin-top-3" type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                @error('password')
                    <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                @enderror

                <input class="input-text margin-top-3" type="password" name="password_confirmation" placeholder="Confirm Password" value="{{ old('password_confirmation') }}">
                @error('password_confirmation')
                    <h3 class="lighter-text margin-1" style="color: #a23526;">{{ $message }}</h3>
                @enderror

                <input class="input-button margin-top-3" type="submit" value="Sign up">
            </form>
            <div class="c-line">
                <h3 class="lighter-text">Already have an account?&nbsp</h3>
                <a class="white-link" href="/login"><h3 class="lighter-text">Login</h3></a>
            </div>
        </div>
    </div>
</x-layout>