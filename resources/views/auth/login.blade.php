{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Session Status -->--}}
{{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <!-- Remember Me -->--}}
{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-button class="ml-3">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
{{--    <link rel="stylesheet" href="styles.css" />--}}
{{--    <link rel="stylesheet" href="/segaran-cantik/public/assets/styles/login.css" />--}}
    <link rel="stylesheet" href="{{ asset('assets/styles/login2.css') }}" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Segaran App | Login</title>
</head>
<body>
<div class="container">
    <div class="container2">
{{--        <img src="Vector.png" alt="logo" width="36rem" height="36rem" />--}}
        <img src="{{ asset('assets/img/icons/segaran-vector.png') }}" alt="logo" width="36rem" height="36rem" />
    </div>
    <p class="a">Dashboard Segaran</p>
    <h1>Login to Dashboard Segaran</h1>
    <p class="b">Masukkan Email dan Password di bawah</p>
    <div class="container3">
        <form action="{{ route('login') }}" class="form" method="POST">
            @csrf
            <div>
                <label for="email">EMAIL</label>
            </div>

            <div>
{{--                <input type="text" name="email" id="email" placeholder="E-mail" class="form-control form-control-sm" method="POST" />--}}
                <input type="text" name="email" id="email" placeholder="E-mail" class="form-control form-control-sm"/>
            </div>

            <div>
                <label for="password">PASSWORD</label>
            </div>

            <div>
{{--                <input id="password-field" type="password" class="form-control form-control-sm" name="password" placeholder="Password" method="POST" />--}}
                <input id="password" type="password" class="form-control form-control-sm" name="password" placeholder="Password"/>

                <i class="bi bi-eye-slash" id="togglePassword" onclick="showpass()"></i>
            </div>
            <div class="fmn">
                <label class="switch">
                    <input type="checkbox" id="remember_me"/>
                    <span class="slider round"></span>
                </label>
                <label for="" style="font-size: 0.6rem">ingat saya</label>
                <a style="color: #2489f4; margin-left: 40%; font-size: 0.7rem" href="{{ route('password.request') }}">lupa password?</a>
            </div>
            <div>
                <input
                    type="submit"
                    value="MASUK"
                    style="font-family: 'Poppins'; width: 7.5rem; height: 1.5rem; margin-top: 10%; margin-left: 28%; color: white; border-radius: 5px; border-width: 0px; background-color: #2489f4; cursor: pointer"
                />
            </div>
        </form>
    </div>
</div>
</body>
<script>
    function showpass() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
            document.getElementById("togglePassword").className = "bi bi-eye";
        } else {
            x.type = "password";
            document.getElementById("togglePassword").className = "bi bi-eye-slash";
        }
    }
</script>
</html>

