{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-label for="name" :value="__('Name')" />--}}

{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password_confirmation" required />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('assets/styles/signup2.css') }}" />

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Segaran App | Sign Up</title>
</head>
<body>
<div class="container">
    <div class="container2">
        <img src="{{ asset('assets/img/icons/segaran-vector.png') }}" alt="logo" width="36rem" height="36rem" />
    </div>
    <p class="a">Dashboard Segaran</p>
    <h1>Sign Up to Dashboard Segaran</h1>
    <p class="b">Masukkan Email dan Password di bawah</p>
    <div class="container3">
        <form action="{{ route('register') }}" class="form" method="POST">
            @csrf

            <div>
                <label for="name">NAMA</label>
            </div>
            <div>
                <input type="text" name="name" id="name" placeholder="Nama" class="form-control form-control-sm"/>
            </div>

            <div>
                <label for="email">EMAIL</label>
            </div>
            <div>
                <input type="text" name="email" id="email" placeholder="E-mail" class="form-control form-control-sm"/>
            </div>

{{--            <div>--}}
{{--                <label for="nik">NIK</label>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <input type="text" name="nik" id="nik" placeholder="NIK" class="form-control form-control-sm" method="POST" />--}}
{{--            </div>--}}

            <div>
                <label for="password">PASSWORD</label>
            </div>
            <div>
                <input id="password" type="password" class="form-control form-control-sm" name="password" placeholder="Password"/>

                <i class="bi bi-eye-slash" id="togglePassword" onclick="showpass()"></i>
            </div>

            <div>
                <label for="password_confirmation">KONFIRMASI PASSWORD</label>
            </div>
            <div>
                <input id="password_confirmation" type="password" class="form-control form-control-sm" name="password_confirmation" placeholder="Password"/>

                <i class="bi bi-eye-slash" id="togglePassword" onclick="showpass()"></i>
            </div>

            <div class="fmn">
                <label class="switch">
                    <input type="checkbox" />
                    <span class="slider round"></span>
                </label>
                <label for="" style="font-size: 0.7rem">ingat saya</label>
                <a style="color: #2489f4; margin-left: 55%; font-size: 0.7rem" href="{{ route('login') }}">login</a>
            </div>

            <div>
                <input
                    type="submit"
                    value="DAFTAR"
                    style="font-family: 'Poppins'; width: 7.5rem; height: 1.5rem; margin-top: 10%; margin-left: 28%; color: white; border-radius: 5px; border-width: 0px; background-color: #2489f4; cursor: pointer"
                />
            </div>
        </form>
    </div>
</div>
</body>
<script>
    function showpass() {
        var x = document.getElementById("password-field");
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
