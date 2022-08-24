
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
            <div class="my-4 h-100">
                <select class="selectpicker form-control" style="height: 3.5rem; font-size: 0.875em;" id="jabatan" name="jabatan">
                    <option selected >Jabatan</option>
                    <option value="PUSAT">PUSAT</option>
                    <option value="KASUN KRAJAN">KASUN KRAJAN</option>
                    <option value="KASUN PUTAT">KASUN PUTAT</option>
                    <option value="KASUN SUMBERBANTENG">KASUN SUMBERBANTENG</option>
                    <option value="KASUN SUMBERJABON">KASUN SUMBERJABON</option>
                    <option value="KASUN SUMBERKOTES KULON">KASUN SUMBERKOTES KULON</option>
                    <option value="KASUN SUMBERKOTES WETAN">KASUN SUMBERKOTES WETAN</option>
                </select>
            </div>
            {{-- <div class="my-4">
                <input type="Password" name="password" class="form-control form-control-lg fs-3" id="inputPassword" aria-describedby="PasswordHelp" placeholder="Kata Sandi">
                <div id="PasswordHelp" class="form-text"></div>
            </div> --}}
            
            <div id="password" class="input-group my-3">
                <input type="password" class="form-control form-control-lg fs-3 text-opacity-50 py-2" id="inputPassword" name="password" placeholder="Kata Sandi" >
                <button class=" card d-flex justify-content-center align-items-center" type="button" id="button-addon2">
                    <img class="password-toggle" src="{{ asset('assets/img/icons/show.png') }}" alt="logo" width="30" height="30" />
                    <img class="password-toggle" src="{{ asset('assets/img/icons/hide.png') }}" hidden alt="logo" width="30" height="30" />
                </button>
            </div>

            <div class="my-4">
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
