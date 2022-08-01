<div id="container-penduduk" class="container mw-100 mx-0 my-5 card p-0">
    <div class="row my-5">
        <div class="col-md-4">
            <form action="/tambah-penduduk">
                <button class="btn btn-primary btn-lg main-button">Tambah Data</button>
            </form>
        </div>
        <div class="col-md-4">
            <h1 class="text-center">
                <b>Data Warga Desa Segaran</b>
            </h1>
        </div>
        <div class="col-md-4 d-flex flex-row-reverse">
            <select id="pagination" style="height: 3rem;">--}}
                <option value="10" {{$items == 10 ? 'selected':''}}>10</option>
                <option value="25" {{$items == 25 ? 'selected':''}}>25</option>
                <option value="50" {{$items == 50 ? 'selected':''}}>50</option>
                <option value="75" {{$items == 75 ? 'selected':''}}>75</option>
                <option value="100" {{$items == 100 ? 'selected':''}} >100</option>
                <option value="200" {{$items == 200 ? 'selected':''}}>200</option>
            </select>
        </div>
    </div>
    <div class="fs-4">
        <form action="/search" method="POST" role="search">
            <div class="row w-100 justify-content-evenly">
                @csrf
                <div class="col-md-3 w-auto h-auto">
                    <select id="dusun" name="dusun" class="form-select">
                        <option selected value="DUSUN">DUSUN</option>
                        <option value="KRAJAN">KRAJAN</option>
                        <option value="SUMBERKOTES WETAN">SUMBERKOTES WETAN</option>
                        <option value="PUTAT">PUTAT</option>
                    </select>
                </div>
                <div class="col-md-3 w-auto h-auto">
                    <select id="rw" name="rw" class="form-select">
                        <option selected value="RW">RW</option>
                        @for ($i = 1; $i <= 9; $i++)
                            <option {{ $rw == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="col-md-3 w-auto h-auto">
                    <select id="rt" name="rt" class="form-select">
                        <option selected value="RT">RT</option>
                        @for ($i = 1; $i <= 30; $i++)
                            <option {{ $rt == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <div class="col-md-3 w-auto h-auto">
                    <div class="input-group">
                        <input type="text" value="{{ $q }}" class="form-control" name="q" placeholder="Cari Data">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </form>

        <div class="table-responsive py-5">
            <table id="list-penduduk" class="table table-hover">
                <thead class="h4">
                <tr>
                    <th scope="col" class="text-center pe-3"><b>No</b></th>
                    <th scope="col">Nomor KK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIK</th>
                    <th scope="col">RT</th>
                    <th scope="col">RW</th>
                    <th scope="col">Dusun</th>
                    <th scope="col">Validasi</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @php $i = 1; @endphp
                @foreach($penduduks as $penduduk)
                    <tr >
                        <td class="text-center pe-3"><b>{{ $i }}</b></td>
                        <td >{{ $penduduk->no_kk }}</td>
                        <td >{{ $penduduk->nama }}</td>
                        <td >{{ $penduduk->nik  }}</td>
                        <td >{{ $penduduk->rt }}</td>
                        <td >{{ $penduduk->rw }}</td>
                        <td >{{ $penduduk->dusun }}</td>
                        <td >{{ $penduduk->validasi }}</td>
                        <td >

                            <button type="button" class="btn btn-lg btn-dark"
                                    onclick="window.location='{{ route('view-penduduk.show', ['id_penduduk' => $penduduk->id])}}'"
                            >
                                Detail
                            </button>

                        </td>
                    </tr>
                    @php $i += 1; @endphp
                @endforeach
                </tbody>
            </table>

        </div>

        {{ $penduduks->links() }}


        <script>
            document.getElementById('pagination').onchange = function() {
                window.location = "{!! $penduduks->url(1) !!}&items=" + this.value;
            };
        </script>


    </div>
</div>
