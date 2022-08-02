@extends('layouts.main')

@section('main-body')

    <div id= "sidebarState" state="aside-open">

        @include('main.components.sidebar')

        <main class="d-flex flex-column position-absolute end-0 top-0 vw-80">

            @include('main.components.header')

            <section class="card mx-5 align-self-center align-items-center justify-content-start p-5" style="height: 80vh;">
                
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>

                @endif
                <h1 class="text-center mb-5">
                    <b>Export / Import Data</b>
                </h1>
                <p class="fs-3">
                    Disini anda bisa melakukan melakukan export terhadap
                </p>

                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group d-flex flex-column justify-content-center">
                        <label for="customFile" class="form-label text-start fs-3">Pilih file Excel atau CSV</label>
                        <input class="form-control fs-3" type="file" id="customFIle" name="file">
                    </div>
                    <button class="btn btn-primary btn-lg">Import Penduduk</button>
                    <a class="btn btn-success btn-lg" href="{{ route('export-penduduk') }}">Export Penduduk</a>
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



