<div class="table-responsive py-5">
    <table id="list-penduduk" class="table table-hover">
        <thead>
        <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col">Nomor KK</th>
            <th scope="col">Nama</th>
            <th scope="col">NIK</th>
            <th scope="col">RT</th>
            <th scope="col">RW</th>
            <th scope="col">Dusun</th>
            <th scope="col">Validasi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($penduduks as $penduduk)
            <tr onclick="window.location='{{ route('edit-penduduk.show', ['id_penduduk' => $penduduk->id])}}'" role="button" >
                <td class="text-center">{{ $penduduk->id }}</td>
                <td >{{ $penduduk->no_kk }}</td>
                <td >{{ $penduduk->nama}}</td>
                <td >{{ $penduduk->nik }}</td>
                <td >{{ $penduduk->rt}}</td>
                <td >{{ $penduduk->rw}}</td>
                <td >{{ $penduduk->dusun}}</td>
                <td >{{ $penduduk->validasi}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $penduduks->links() }}
</div>

