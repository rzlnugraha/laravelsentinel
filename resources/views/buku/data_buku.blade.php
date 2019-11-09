<table class="table">
    <thead>
    <tr>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th colspan="3"><center>Action</center></th>
    </tr>
    </thead>
    <tbody>
    @php
        $no = 1;
    @endphp
    @forelse ($buku as $item)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $item->judul_buku }}</td>
        <td>{{ $item->pengarang }}</td>
        <td>{{ $item->penerbit }}</td>
        <td>{{ $item->tahun_terbit }}</td>
        <td><a href="{{ route('book.show',$item->id) }}" class="btn btn-primary btn-xs mdi mdi-eye" title="Read"></a></td>
        <td><a href="{{ route('book.edit',$item->id) }}" class="btn btn-info btn-xs mdi mdi-pencil" title="Edit"></a></td>
        <td>
            <form action="{{ route('book.destroy',$item->id) }}" method="post">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-xs mdi mdi-delete" title="Delete" onclick="return confirm('Yakin hapus data?')"></button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="8"><center><strong>Data tidak ditemukan</strong></center></td>
    </tr>
    @endforelse
    </tbody>
</table>