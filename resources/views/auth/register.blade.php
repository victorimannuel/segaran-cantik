
@extends('layouts.landing')

@section('landing-body')
    <div class="container container-sm">
        <img src="{{ asset('assets/img/icons/segaran-icon.png') }}" alt="logo" width="48" height="48" />
        <p class="light">Dashboard Segaran</p>
        <h1 style="text-align: center;">Sign Up to Dashboard Segaran</h1>
        <p class="light">Masukkan Email, Nama, Password di bawah</p>
        
        <form action="{{ route('register') }}" class="form" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="email">
                <div id="emailHelp" class="form-text"></div>
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama</label>
                <input type="text" class="form-control-lg" id="exampleInputPassword1"
                name="name">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control-lg" id="exampleInputPassword1"
                name="password">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control-lg" id="exampleInputPassword1"
                name="password-confirmation">
              </div>
            
              
              <div class="d-grid gap-2 mb-3">
                <button class="btn btn-lg btn-primary" type="submit">Sign Up</button>
              </div>

        </form>
    </div>
@endsection
