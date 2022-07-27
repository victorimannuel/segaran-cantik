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
                <input type="email" class="form-control-lg form-control form-control-lg form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
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
