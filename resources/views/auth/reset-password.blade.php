{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

        <!-- Validation Errors -->
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}
@extends('layouts.landing')

@section('landing-body')
    <div class="container container-sm">
        <img src="{{ asset('assets/img/icons/segaran-icon.png') }}" alt="logo" width="48" height="48" />
        <h1 style="text-align: center;">Masukkan password baru</h1>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
{{--                <x-label for="email" :value="__('Email')" />--}}
                <input id="email" class="form-control form-control-lg fs-3" type="email" placeholder="Email" name="email" required autofocus />
{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />--}}
            </div>

            <!-- Password -->
            <div class="mt-4">
{{--                <x-label for="password" :value="__('Password')" />--}}
                <input id="password" class="form-control form-control-lg fs-3" placeholder="Password Baru" type="password" name="password" required />

{{--                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />--}}
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}
                <input id="password_confirmation" class="form-control form-control-lg fs-3"
                         type="password" placeholder="Konfirmasi Password Baru"
                         name="password_confirmation" required />
{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                         type="password"--}}
{{--                         name="password_confirmation" required />--}}
            </div>

{{--            <div class="flex items-center justify-end mt-4">--}}
            <div class="d-grid gap-2 mt-4">
                <button name="send" class="btn btn-lg btn-primary fs-3" type="submit">Reset Password</button>
                {{--                <x-button>--}}
{{--                    {{ __('Reset Password') }}--}}
{{--                </x-button>--}}
            </div>
        </form>
    </div>
@endsection
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}
