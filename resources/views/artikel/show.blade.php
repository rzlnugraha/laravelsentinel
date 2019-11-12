@extends('layouts.app')
@section('title','Buku '.$article->title)
@push('style')
    
@endpush

@section('content')
    <div class="col-12 grid-margin">
        <div class="card">
        @include('artikel.data_artikel')
        </div>
    </div>
    <div class="col-12 grid-margin">
            <div class="card">
            <div class="card-body">
                <h1 class="card-title mb-4">Komentar Disini</h2><hr>
                    <div class="fluid-container">
                        <form id="add-komentar" class="form-horizontal">
                            @csrf
                            <div class="form-group col-md-12">
                                <input type="hidden" id="artikel_id" name="article_id" value="{{ $article->id }}">
                                <label for="author" class="control-label">Nama</label>
                                <input type="text" name="user" id="author" class="form-control {{ $errors->has('user') ? ' is-invalid' : '' }}" placeholder="Nama Antum" value="{{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}">
                                {!! $errors->first('user','<span class="invalid-feedback">:messages</span>') !!}
                            </div>
                            <div class="form-group col-md-12">
                                <label for="content" class="control-label">Konten</label>
                                <textarea name="content" rows="5" cols="10" id="content" class="form-control {{ $errors->has('content') ? ' is-invalid' : '' }}" placeholder="Mau komen apa?"></textarea>
                                {!! $errors->first('content','<span class="invalid-feedback">:messages</span>') !!}
                            </div>
                            <div class="form-group col-md-2">
                                <button class="btn btn-primary btn-sm" type="button" id="save">Save</button>
                            </div>
                        </form>
                    <hr>
                    <div class="data-komentar">
                        <h1 class="card-title mb-4">Komentar Netizen</h2><hr>
                        @include('artikel.komentar')
                    </div>
                    {{ $comments->links() }}
                </div>
            </div>
            </div>
        </div>
    <hr>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Article</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form class="form-rubah-artikel" action="{{ route('article.update',$article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                @include('artikel.form', [
                    'artikel' => new App\Article,
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