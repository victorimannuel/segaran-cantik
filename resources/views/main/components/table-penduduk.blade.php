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
        @foreach($penduduks as $penduduk)
            <tr >
                <td class="text-center pe-3"><b>{{ $penduduk->id }}</b></td>
                <td >{{ $penduduk->no_kk }}</td>
                <td >{{ $penduduk->nama }}</td>
                <td >{{ $penduduk->nik  }}</td>
                <td >{{ $penduduk->rt }}</td>
                <td >{{ $penduduk->rw }}</td>
                <td >{{ $penduduk->dusun }}</td>
                <td >{{ $penduduk->validasi }}</td>
                <td >

                    <button type="button" class="btn btn-lg btn-dark"
                            onclick="window.location='{{ route('edit-penduduk.show', ['id_penduduk' => $penduduk->id])}}'"
                    >
                        Detail
                    </button>

                </td>
            </tr>
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
