@extends('layouts.landing')

@section('landing-body')
    <div class="container">
        <img src="{{ asset('assets/img/icons/segaran-icon.png') }}" alt="logo" width="48" height="48" />
        <p class="light">Segaran Admin</p>
        <h1>Atur Ulang Kata Sandi</h1>
        <p class="light">Masukkan Email di bawah ini</p>

{{--        <form action="{{ route('login') }}" class="form" method="POST">--}}
        <form action="{{ route('password.email') }}" class="form" method="POST">
            @csrf
            <div class="">
                <input type="email" name="email" class="form-control form-control-lg fs-3 mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email anda">
                <div id="emailHelp" class="form-text"></div>
                <div id="emailHelp" class="form-text">Kita tidak akan membagikan email pada siapapun.</div>
            </div>

            <div class="row mb-4">
            </div>


            <div class="d-grid gap-2">
                <button name="send" class="btn btn-lg btn-primary fs-3" type="button">Reset</button>
            </div>
        </form>
    </div>
@endsection
