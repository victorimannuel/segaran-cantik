@extends('layouts.main')

@section('main-body')

    <div id= "sidebarState" view="desktop" state="aside-open">

        @include('main.components.sidebar')

        <main class="d-flex flex-column position-absolute end-0 top-0 vw-80">

            @include('main.components.header')

            <section class=" mx-5 align-self-center align-items-center justify-content-start p-5" style="height: 80vh;">


                <form action="{{ route('import') }}" class="w-100 container" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(Session::has('success'))
                    <div class="alert alert-success fs-3 opacity-100">
                    @else
                    <div class="alert alert-success fs-3 opacity-0">
                    @endif
                        {{Session::get('success')}}
                    </div>
                    <div class="container d-flex flex-row justify-content-between w-100 align-items-between p-0">

                        <div class="me-5 w-50 p-5 card d-flex justify-content-between" >
                            <div class="text">
                                <h1><b>Export</b></h1>
                                <p class="fs-3 my-4">
                                    Untuk memastikan data yang telah diisikan di sini tidak hilang, anda bisa mendownload data tersebut dengan klik di bawah ini
                                </p>
                            </div>
                            <a class="btn btn-success btn-lg fs-3 my-4" href="{{ route('export-penduduk') }}">Export Data Penduduk</a>
                        </div>


                        <div class="ms-5 w-50 p-5 card d-flex justify-content-between" >
                            <div class="text">
                                <h1><b>Import</b></h1>
                                <p class="fs-3 my-4">Untuk mempermudah dalam penginputan data, anda dapat mengimport data tersebut di bawah ini
                                </p>

                            </div>

                            <div class="form-group d-flex flex-column justify-content-center">
                                <label for="customFile" class="form-label text-start fs-4">Pilih file Excel atau CSV</label>
                                <input class="form-control fs-4 form-control-lg " type="file" id="customFIle" name="file">
                            </div>
                            <button class="btn btn-primary btn-lg fs-3 my-4">Import Data Penduduk</button>
                        </div>
                    </div>
                </form>
            </section>

            <footer class="mt-5">

            </footer>
        </main>
</div>

@endsection


<script>
    document.getElementById('customFile').onchange = function () {
        var file = this.value.split("\\");
        document.getElementById('customFileLabel').innerHTML = file[file.length-1];
    };
</script>



