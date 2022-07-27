{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('assets/styles/login2.css') }}" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Segaran App | Login</title>
</head>
<body>
<div class="container">
    <div class="container2">
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
                <input type="text" name="email" id="email" placeholder="E-mail" class="form-control-lg form-control-lg-sm"/>
            </div>

            <div>
                <label for="password">PASSWORD</label>
            </div>

            <div>
                <input id="password" type="password" class="form-control-lg form-control-lg-sm" name="password" placeholder="Password"/>

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

</html> --}}

@extends('layouts.landing')

@section('landing-body')
    <div class="container">
        <img src="{{ asset('assets/img/icons/segaran-icon.png') }}" alt="logo" width="48" height="48" />
        <p class="light">Dashboard Segaran</p>
        <h1>Atur Ulang Kata Sandi</h1>
        <p class="light">Masukkan Email di bawah ini</p>
        
        <form action="{{ route('login') }}" class="form" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Kita tidak akan membagikan email pada siapapun.</div>
            </div>
            
            <div class="row mb-4">
            </div>
            

            <div class="d-grid gap-2">
                <button class="btn btn-lg btn-primary" type="button">Reset</button>
            </div>
        </form>
    </div>
@endsection
