<table class="table table-hover">
    <thead class="table-dark">
        <tr>
        <th scope="col">id</th>
        <th scope="col">nama pengaju</th>
        <th scope="col">nama barang</th>
        <th scope="col">tanggal pengajuan</th>
        <th scope="col">qty</th>
        <th scope="col">terpenuhi</th>
        <th scope="col">action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($pengajuan_barang as $p)
        <tr>
                <th scope="row">1</th>
                <td>{{$p->nama_pengaju }}</td>
                <td>{{ $p->nama_barang }}</td>
                <td>{{ $p->tanggal_pengajuan }}</td>
                <td>{{ $p->qty }}</td>
                <td><input type="checkbox"></td>
                <td>
                    <button type="button" class="btn btn-success btn-edit" data-bs-toggle="modal" data-bs-target="#modalEdit" data-id="{{ $p->id }}" data-nama_pengaju="{{ $p->nama_pengaju }}" data-nama_barang="{{ $p->nama_barang }}" data-tanggal_pengajuan="{{ $p->tanggal_pengajuan }}" data-qty="{{ $p->qty }}">edit</button>

                    <form action="barang/{{ $p->id }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">hapus</button>
                    </form>
                </td>

            </tr>
            @endforeach
    </tbody>
</table>


