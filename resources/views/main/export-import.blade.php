@extends('layouts.main')

@section('main-body')

    <div id= "sidebarState" state="aside-open">

        @include('main.components.sidebar')

        <main class="d-flex flex-column position-absolute end-0 top-0 vw-80">

            @include('main.components.header')

            <section class="card mx-5 align-self-center d-flex justify-content-center" style="height: 80vh;">
                
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>

        @endif
        <div class="container mt-5 text-center">
            <h2 class="mb-4">
                Import Export Excel & CSV File
            </h2>
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <div class="custom-file text-left">
                        <input type="file" name="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile" id="customFileLabel">Choose file</label>
                    </div>
                </div>
                <button class="btn btn-primary">Import Penduduk</button>
                <a class="btn btn-success" href="{{ route('export-penduduk') }}">Export Penduduk</a>
            </form>
        </div>


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



