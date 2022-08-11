<div id="container-penduduk" class="container mw-100 mx-0 my-5 card p-0">
    <div class="row justify-content-between p-5">
        <div class="col-md-4">
            <a href="../kegiatan/tambah">
                <button class="btn btn-primary btn-lg button main-button">Tambah Data</button>
            </a>
        </div>

        <div class="col-md-8 w-auto m-auto">
            <h1 class="text-center">
                <b>Kegiatan Tahunan Desa Segaran</b>
            </h1>
        </div>
        <div class="col-md-4 d-flex flex-row-reverse">
            <select id="pagination" class="form-select fw-normal" name="pagination">
                <option value="10" {{$items == 10 ? 'selected':''}}>10</option>
                <option value="25" {{$items == 25 ? 'selected':''}}>25</option>
                <option value="50" {{$items == 50 ? 'selected':''}}>50</option>
                <option value="75" {{$items == 75 ? 'selected':''}}>75</option>
                <option value="100" {{$items == 100 ? 'selected':''}} >100</option>
                <option value="200" {{$items == 200 ? 'selected':''}}>200</option>
            </select>
        </div>

    </div>
    <form action="/kegiatan/search" id="table-operation" class="d-flex justify-content-between my-2 px-5" method="GET" role="search">

        <span class="input-group-text border-rounded bg-white w-50" id="search-addon">
            <img src="{{ asset('assets/img/icons/search-icon.png') }}" width=20 alt="">
            <input type="search" id="queryKegiatan" class="form-control border border-0 rounded p-0 ps-2" placeholder="CARI DATA" value="{{ $pencarianKegiatan['queryKegiatan'] }}" name="queryKegiatan"/>
        </span>

        <select id="search_tahun" name="tahun" class="mx-3 form-select">
            <option selected value="TAHUN">Tahun</option>
            @for ($i = 2018; $i <= 2030; $i++)
            <option {{ $pencarianKegiatan['tahun'] == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>

    </form>

    <div class="table-responsive py-5 fs-4 d-flex flex-column justify-content-center">
        <div class="mx-5">
            {{ $kegiatans->links() }}
        </div>
        <table id="list-penduduk" class="table table-hover">
            <thead class="h4">
            <tr>
                <th scope="col" class="text-center pe-3"><b>No</b></th>
                <th scope="col">Nama Kegiatan</th>
                <th scope="col">Tanggal</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @php $i = 1; @endphp
            @foreach($kegiatans as $kegiatan)
                <tr>
                    <td class="text-center pe-3"><b>{{ $i }}</b></td>
                    <td >{{ $kegiatan->nama_kegiatan }}</td>
                    <td >{{ $kegiatan->tgl }}</td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td ></td>
                    <td >

                        <button type="button" class="btn btn-lg btn-dark button"
                                onclick="window.location='{{ route('kegiatan.read', ['id_kegiatan' => $kegiatan->id])}}'"
                        >
                            Detail
                        </button>

                    </td>
                </tr>
                @php $i += 1; @endphp
            @endforeach
            </tbody>
        </table>
        <div class="mx-5">
            {{ $kegiatans->links() }}
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript">
        document.getElementById('pagination').onchange = function() {
            window.location = "{!! $kegiatans->url(1) !!}&items=" + this.value;
        };
        document.getElementById('search_tahun').onchange = function() {
            this.form.submit();
        };
    </script>

</div>
