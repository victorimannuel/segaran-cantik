<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import Export Excel & CSV File</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
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
</body>
<script>
    document.getElementById('customFile').onchange = function () {
        var file = this.value.split("\\");
        document.getElementById('customFileLabel').innerHTML = file[file.length-1];
    };
</script>

</html>
