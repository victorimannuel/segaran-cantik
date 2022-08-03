
@extends('layouts.landing')

@section('landing-body')
    <div class="container container-sm">
        <img src="{{ asset('assets/img/icons/segaran-icon.png') }}" alt="logo" width="48" height="48" />
        <p class="light">Segaran Admin</p>
        <h1 style="text-align: center;">Daftar ke Segaran Admin</h1>
        <p class="light">Masukkan Email, Nama, Kata Sandi di bawah</p>

        <form action="{{ route('register') }}" class="form" method="POST">
            @csrf
            <div class="my-4">
                {{-- <label for="" class="form-label fs-3">Email</label>     --}}
                <input type="email" name="email" class="form-control form-control-lg fs-3" id="inputEmail" aria-describedby="emailHelp" placeholder="Email">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="my-4">
                {{-- <label for="" class="form-label fs-3">Nama</label>     --}}
                <input type="text" name="name" class="form-control form-control-lg fs-3" id="inputNama" aria-describedby="namaHelp" placeholder="Nama">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="my-4">
                {{-- <label for="" class="form-label fs-3">Nama</label>     --}}
                <input type="text" name="jabatan" class="form-control form-control-lg fs-3" id="inputJabatan" aria-describedby="jabatanHelp" placeholder="Jabatan">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="my-4">
                {{-- <label for="" class="form-label fs-3">Password</label>     --}}
                <input type="Password" name="password" class="form-control form-control-lg fs-3" id="inputPassword" aria-describedby="PasswordHelp" placeholder="Kata Sandi">
                <div id="PasswordHelp" class="form-text"></div>
            </div>
            <div class="my-4">
                {{-- <label for="" class="form-label fs-3">Confirm Password</label>     --}}
                <input type="Password" name="password_confirmation" class="form-control form-control-lg fs-3" id="inputPassword" aria-describedby="PasswordHelp" placeholder="Konfirmasi Kata Sandi">
                <div id="PasswordHelp" class="form-text"></div>
            </div>


            <div class="d-grid gap-2 my-5">
                <button class="btn btn-lg btn-primary fs-3" type="submit">Daftar</button>
            </div>

        </form>
    </div>
@endsection


{{-- old version --}}
{{-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp"
           name="email">
    <div id="emailHelp" class="form-text"></div>
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama</label>
    <input type="text" class="form-control form-control-lg" id="exampleInputPassword1"
           name="name">
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
           name="password">
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
           name="password_confirmation">
</div> --}}
