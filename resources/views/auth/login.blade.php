
@extends('layouts.landing')

@section('landing-body')
    <div class="container">
        <img src="{{ asset('assets/img/icons/segaran-icon.png') }}" alt="logo" width="48" height="48" />
        <p class="light">Dashboard Segaran</p>
        <h1 style="text-align: center;">Log In to Dashboard Segaran</h1>
        <p class="form-label light">Masukkan Email dan Password di bawah</p>
        
        <form action="{{ route('login') }}" class="form" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1">
              </div>
            
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Ingat saya </label>
                  </div>
                </div>
            
                <div class="col">
                  <!-- Simple link -->
                  <a href={{ route('password.request') }}>Lupa password?</a>
                </div>
              </div>
            
            <div class="d-grid gap-2">
                <button class="btn btn-lg btn-primary" type="submit">Login</button>
            </div>

        </form>
    </div>
@endsection
