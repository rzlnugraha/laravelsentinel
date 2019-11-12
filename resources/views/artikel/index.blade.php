@extends('layouts.app')
@section('title','Data Artikel')
@push('style')
    
@endpush

@section('content')
<div class="card col-lg-12">
    <div class="card-body">
        <h4 class="card-title">Data Artikel</h4>
        <div class="table-responsive">
        <ul class="list-inline">
          <li class="list-inline-item">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#exampleModal">
                <a class="mdi mdi-plus" title="Tambah Data"></a>
            </button>
          </li>
          <li class="list-inline-item">
            <form class="form-inline" style="margin-left:620px">
              <div class="form-group">
                <label for="cari" class="control-label ml-5 mr-3"><strong>Cari</strong></label>
                <input style="border-radius:5px;" type="text" name="cari" id="cari" class="form-control search" placeholder="Cari">
              </div>
            </form>
          </li>
        </ul>
        <div class="data-artikel">
          @include('artikel.list')
        </div>
    </table>
</div>
<p style="">{{ $artikel->links() }}</p>
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
        <form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('artikel.form', [
                'article' => new App\Article,
                'button' => 'Save',
                'type' => 'submit'
            ])
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('script')
    
@endpush