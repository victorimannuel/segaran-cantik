@extends('layouts.main')

@section('main-body')

    <div id= "sidebarState" state="aside-closed">

        @include('main.components.sidebar')

        <main class="d-flex flex-column position-absolute end-0 top-0 vw-80">

            @include('main.components.header')

            <section class="mx-5 align-self-center d-flex justify-content-center card p-5">
                <!-- Success message -->
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form class="form-penduduk pb-5" method="post" action="{{ route('') }}">
                    <!-- CROSS Site Request Forgery Protection -->
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_kk">NOMOR KK</label>
                                <input type="text" class="form-control" placeholder="Nomor KK" id="no_kk" name="no_kk">
                                <!-- Error -->
                                @if ($errors->has('no_kk'))
                                    <div class="error">
                                        {{ $errors->first('no_kk') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!--  col-md-6   -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_kk">VALIDASI</label>
                                <input type="text" class="form-control" placeholder="Validasi" id="validasi" name="validasi">
                            </div>
                        </div>
                    </div>

                </form>

            </section>

            <footer class="mt-5">

            </footer>
        </main>
    </div>

@endsection
