@extends('layouts.app')
@section('title','Data Buku')
@push('style')
    
@endpush

@section('content')
<div class="card col-lg-12">
    <div class="card-body">
        <h4 class="card-title">Data Buku</h4>
        <div class="table-responsive">
          <ul class="list-inline">
            <li class="list-inline-item">
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#exampleModal">
                  <a class="mdi mdi-plus" title="Tambah Data"></a>
              </button>
            </li>
            <li class="list-inline-item">
              <form action="{{ route('cari') }}" method="get" class="form-inline">
                @csrf
                <label for="cari" class="control-label ml-5 mr-3"><strong>Cari</strong></label>
                <input type="text" name="cari" id="cari" class="form-control" placeholder="Cari">
                <button class="btn btn-primary btn-xs" type="submit">Cari</button>
              </form>
            </li>
          </ul>
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
            @foreach ($buku as $item)
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
            @endforeach
        </tbody>
    </table>
</div>
<p style="">{{ $buku->links() }}</p>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('book.store') }}" method="post">
            @csrf
            @include('layouts.form', [
                'book' => new App\Book,
                'button' => 'Save'
            ])
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('script')
    
@endpush