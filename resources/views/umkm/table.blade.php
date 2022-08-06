<div id="container-penduduk" class="container mw-100 mx-0 my-5 card p-0">
    <div class="row justify-content-between p-5">
        <div class="col-md-4">
            <a href="/dashboard/penduduk/tambah">
                <button class="btn btn-primary btn-lg button main-button">Tambah Data</button>
            </a>
        </div>

        <div class="col-md-8 w-auto m-auto">
            <h1 class="text-center">
                <b>UMKM Desa Segaran</b>
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
    <form action="/search" id="table-operation" class="d-flex justify-content-between my-2 px-5" method="GET" role="search">

        <span class="input-group-text border-rounded bg-white w-50" id="search-addon">
            <img src="{{ asset('assets/img/icons/search-icon.png') }}" width=20 alt="">
            <input type="search" id="q" class="form-control border border-0 rounded p-0 ps-2" placeholder="CARI DATA" value="{{ $pencarian['q'] }}" name="q" onkeyup="{{ route('penduduk.search') }}"/>
        </span>

        <select id="rt" name="rt" class="mx-3 form-select">
            @php
                $rt = [
                    'krajan' => [1,2,3,4,5,6,7,8,9],
                    'putat' => [10,11,12,13],
                    'sumberbanteng' => [14,15,16,17,18,19],
                    'sumberjabon' => [29,30],
                    'sumberkotes kulon' => [20,21,22,23,24],
                    'sumberkotes wetan' => [25,26,27,28],
                ];
                $rw = [
                    'krajan' => [1,2,3],
                    'putat' => [4],
                    'sumberbanteng' => [5,6],
                    'sumberjabon' => [7],
                    'sumberkotes kulon' => [8],
                    'sumberkotes wetan' => [9],
                ];
            @endphp
            <option selected value="RT">RT</option>
            @if($jabatan == 'PUSAT')
            @for ($i = 1; $i <= 30; $i++)
                <option {{ $pencarian['rt'] == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
            @endfor
            @endif
            @if($jabatan == 'KASUN KRAJAN')
            @for ($i = 1; $i <= 9; $i++)
                <option {{ $pencarian['rt'] == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
            @endfor
            @endif
            @if($jabatan == 'KASUN PUTAT')
                @for ($i = 10; $i <= 13; $i++)
                    <option {{ $pencarian['rt'] == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                @endfor
            @endif
            @if($jabatan == 'KASUN SUMBERBANTENG')
                @for ($i = 14; $i <= 19; $i++)
                    <option {{ $pencarian['rt'] == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                @endfor
            @endif
            @if($jabatan == 'KASUN SUMBERJABON')
                @for ($i = 29; $i <= 30; $i++)
                    <option {{ $pencarian['rt'] == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                @endfor
            @endif
            @if($jabatan == 'KASUN SUMBERKOTES KULON')
                @for ($i = 20; $i <= 24; $i++)
                    <option {{ $pencarian['rt'] == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                @endfor
            @endif
            @if($jabatan == 'KASUN SUMBERKOTES WETAN')
                @for ($i = 25; $i <= 28; $i++)
                    <option {{ $pencarian['rt'] == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                @endfor
            @endif
        </select>

        <select id="rw" name="rw" class="mx-3 form-select">
            <option selected value="RW">RW</option>
            @if($jabatan == 'PUSAT')
            @for ($i = 1; $i <= 9; $i++)
                <option {{ $pencarian['rw'] == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
            @endfor
            @endif
            @if($jabatan == 'KASUN KRAJAN')
                @for ($i = 1; $i <= 3; $i++)
                    <option {{ $pencarian['rw'] == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                @endfor
            @endif
            @if($jabatan == 'KASUN PUTAT')
                @for ($i = 4; $i <= 4; $i++)
                    <option {{ $pencarian['rw'] == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                @endfor
            @endif
            @if($jabatan == 'KASUN SUMBERBANTENG')
                @for ($i = 5; $i <= 6; $i++)
                    <option {{ $pencarian['rw'] == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                @endfor
            @endif
            @if($jabatan == 'KASUN SUMBERJABON')
                @for ($i = 7; $i <= 7; $i++)
                    <option {{ $pencarian['rw'] == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                @endfor
            @endif
            @if($jabatan == 'KASUN SUMBERKOTES KULON')
                @for ($i = 8; $i <= 8; $i++)
                    <option {{ $pencarian['rw'] == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                @endfor
            @endif
            @if($jabatan == 'KASUN SUMBERKOTES WETAN')
                @for ($i = 9; $i <= 9; $i++)
                    <option {{ $pencarian['rw'] == $i ? 'selected':'' }} value="{{ $i }}">{{ $i }}</option>
                @endfor
            @endif
        </select>

        <select id="dusun" name="dusun" class="ms-3 form-select">
            @if($jabatan == 'PUSAT')
            <option selected value="DUSUN" {{$jabatan == 'PUSAT'? 'enabled':'disabled'}}>DUSUN</option>
            @endif
            @if($jabatan == 'PUSAT' || $jabatan == 'KASUN KRAJAN')
            <option {{ $pencarian['dusun'] == "KRAJAN" ? 'selected':'' }} value="KRAJAN" {{$jabatan == 'KASUN KRAJAN' || $jabatan == 'PUSAT' ? 'enabled':'disabled'}}>KRAJAN</option>
            @endif
            @if($jabatan == 'PUSAT' || $jabatan == 'KASUN PUTAT')
            <option {{ $pencarian['dusun'] == "PUTAT" || $jabatan == 'KASUN PUTAT' ? 'selected':'' }} value="PUTAT" {{$jabatan == 'KASUN PUTAT' || $jabatan == 'PUSAT'? 'enabled':'disabled'}}>PUTAT</option>
            @endif
            @if($jabatan == 'PUSAT' || $jabatan == 'KASUN SUMBERBANTENG')
            <option {{ $pencarian['dusun'] == "SUMBERBANTENG" ? 'selected':'' }} value="SUMBERBANTENG" {{$jabatan == 'KASUN SUMBERBANTENG' || $jabatan == 'PUSAT'? 'enabled':'disabled'}}>SUMBERBANTENG</option>
            @endif
            @if($jabatan == 'PUSAT' || $jabatan == 'KASUN SUMBERJABON')
            <option {{ $pencarian['dusun'] == "SUMBERJABON" ? 'selected':'' }} value="SUMBERJABON" {{$jabatan == 'KASUN SUMBERJABON' || $jabatan == 'PUSAT'? 'enabled':'disabled'}}>SUMBERJABON</option>
            @endif
            @if($jabatan == 'PUSAT' || $jabatan == 'KASUN SUMBERKOTES KULON')
            <option {{ $pencarian['dusun'] == "SUMBERKOTES KULON" ? 'selected':'' }} value="SUMBERKOTES KULON" {{$jabatan == 'KASUN SUMBERKOTES KULON' || $jabatan == 'PUSAT'? 'enabled':'disabled'}}>SUMBERKOTES KULON</option>
            @endif
            @if($jabatan == 'PUSAT' || $jabatan == 'KASUN SUMBERKOTES WETAN')
            <option {{ $pencarian['dusun'] == "SUMBERKOTES WETAN" ? 'selected':'' }} value="SUMBERKOTES WETAN" {{$jabatan == 'KASUN SUMBERKOTES WETAN' || $jabatan == 'PUSAT'? 'enabled':'disabled'}}>SUMBERKOTES WETAN</option>
            @endif
        </select>

    </form>

    <div class="table-responsive py-5 fs-4 d-flex flex-column justify-content-center">
        <div class="mx-5">
            {{ $penduduks->links() }}
        </div>
        <table id="list-penduduk" class="table table-hover">
            <thead class="h4">
            <tr>
                <th scope="col" class="text-center pe-3"><b>No</b></th>
                <th scope="col">Nama UMKM</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Kontak</th>
                <th scope="col"></th>
                <th scope="col" class="pe-4"></th>
                <th scope="col" class="pe-4"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @php $i = 1; @endphp
            @foreach($penduduks as $index => $penduduk)
                <tr>
                    <td class="text-center pe-3"><b>{{ $i }}</b></td>
                    <td >{{ $penduduk->no_kk }}</td>
                    <td >{{ $penduduk->validasi }}</td>
                    <td >{{ $penduduk->nama }}</td>
                    <td >{{ $penduduk->nik  }}</td>
                    <td >{{ $penduduk->rt }}</td>
                    <td >{{ $penduduk->rw }}</td>
                    <td >{{ $penduduk->dusun }}</td>
                    <td >

                        <button type="button" class="btn btn-lg btn-dark button"
                                onclick="window.location='{{ route('penduduk.read', ['id_penduduk' => $penduduk->id])}}'"
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
            {{ $penduduks->links() }}
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
{{--    <script>--}}
    <script type="text/javascript">
        document.getElementById('pagination').onchange = function() {
            window.location = "{!! $penduduks->url(1) !!}&items=" + this.value;
        };
            // $('#search').on('keyup',function(){
        document.getElementById('q').on('keyup',function(){
            $value = $(this).val();
            $.ajax({
            type    : 'get',
            url     : '{{URL::to('search')}}',
            data    : {'search':$value},
            success : function(data){
                $('tbody').html(data);
            }
            });
        })
    {{--<script type="text/javascript">--}}
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    {{--</script>--}}


        {{--document.getElementById('q').onchange = function onchangePencarian() {--}}
        {{--    console.log('asdasdsa');--}}
        {{--    {{ redirect()->route('penduduk.search') }}--}}
        {{--};--}}
        {{--var jabatan = [--}}
        {{--    'KASUN PUTAT',--}}
        {{--    'KASUN SUMBERBANTENG',--}}
        {{--    'KASUN SUMBERJABON',--}}
        {{--    'KASUN SUMBERKOTES WETAN',--}}
        {{--    'KASUN SUMBERKOTES KULON',--}}
        {{--];--}}
        {{--console.log({{ $jabatan }});--}}
        {{--if ({{ $jabatan }} in jabatan) {--}}
        {{--    var selectable = [--}}
        {{--        'dusun',--}}
        {{--    ];--}}
        {{--    for (let i = 0; i < selectable.length; i++) {--}}
        {{--        document.getElementById(selectable[i]).prop("disabled", isdisabled);--}}
        {{--        document.getElementById(selectable[i]).toggleClass("my-read-only-class", isdisabled);--}}
        {{--        document.getElementById(selectable[i]).find("option").prop("hidden", isdisabled);--}}
        {{--    }--}}
        {{--}--}}
    </script>


</div>
