
@extends('layouts.landing')

@section('landing-body')
    <div class="container">
        <img src="{{ asset('assets/img/icons/segaran-icon.png') }}" alt="logo" width="48" height="48" />
        <p class="light">Segaran Admin</p>
        <h1 style="text-align: center;">Log In ke Segaran Admin</h1>
        <p class="form-label light">Masukkan Email dan Password di bawah</p>

        <form action="{{ route('login') }}" class="form" method="POST">
            @csrf
            <div class="my-3">
                <input type="email" name="email" class="form-control form-control-lg fs-3 py-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email anda">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="my-3">
                <input type="password" class="form-control form-control-lg fs-3 text-opacity-50 py-2" id="exampleInputPassword1" name="password" placeholder="Password" >
            </div>

            <div class="row mb-4 fs-3">
                <div class="col d-flex justify-content-start">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Ingat saya </label>
                    </div>
                </div>

                <div class="col text-end">
                    <!-- Simple link -->
                    <a href={{ route('password.request') }}>Lupa password?</a>
                </div>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-lg btn-primary  fs-3" type="submit">Login</button>
            </div>

        </form>
    </div>
@endsection
