@extends('layouts.app')
@section('title','Buku '.$article->title)
@push('style')
    
@endpush

@section('content')
    <div class="col-12 grid-margin">
        <div class="card">
        <div class="card-body">
            <h1 class="card-title mb-4">{{ $article->title }}</h2>
            <div class="fluid-container">
            <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                <div class="col-md-1">
                <img class="img-sm rounded-circle mb-4 mb-md-0" src="{{ asset('assets') }}/images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="ticket-details col-md-9">
                <div class="d-flex">
                    <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Author :</p>
                    <p class="text-primary mr-1 mb-0">{{ $article->author }}</p>
                </div>
                <p class="mb-0 ellipsis"></p>
                <p class="text-gray ellipsis mb-2">{{ $article->content }}
                </p>
                <div class="row text-gray d-md-flex d-none">
                    <div class="col-6 d-flex">
                    <small class="mb-0 mr-2 text-muted text-muted">Tanggal :</small>
                    <small class="Last-responded mr-2 mb-0 text-muted text-muted">{{ date('d F Y') }}</small>
                    </div>
                </div>
                </div>
                <div class="ticket-actions col-md-2">
                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Manage
                    </button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-history fa-fw"></i>Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-12 grid-margin">
            <div class="card">
            <div class="card-body">
                <h1 class="card-title mb-4">Komentar Disini</h2><hr>
                    <div class="fluid-container">
                        <form action="{{ route('komentar.store') }}" method="post" class="form-horizontal">
                                @csrf
                        <div class="form-group col-md-12">
                            <input type="hidden" name="article_id" value="{{ $article->id }}">
                            <label for="author" class="control-label">Nama</label>
                            <input type="text" name="user" id="author" class="form-control {{ $errors->has('user') ? ' is-invalid' : '' }}" placeholder="Nama Antum">
                            {!! $errors->first('user','<span class="invalid-feedback">:messages</span>') !!}
                        </div>
                        <div class="form-group col-md-12">
                            <label for="content" class="control-label">Konten</label>
                            <textarea name="content" rows="5" cols="10" id="content" class="form-control {{ $errors->has('content') ? ' is-invalid' : '' }}" placeholder="Nama Antum"></textarea>
                            {!! $errors->first('content','<span class="invalid-feedback">:messages</span>') !!}
                        </div>
                        <div class="form-group col-md-2">
                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                        </div>
                    </form>
                    <hr>
                    @forelse ($comment as $item)
                    <h1 class="card-title mb-4">Komentar Netizen</h2><hr>
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                        <div class="col-md-1">
                        <img class="img-sm rounded-circle mb-4 mb-md-0" src="{{ asset('assets') }}/images/faces/face1.jpg" alt="profile image">
                        </div>
                        <div class="ticket-details col-md-9">
                        <div class="d-flex">
                            <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Author :</p>
                            <p class="text-primary mr-1 mb-0">{{ $item->user }}</p>
                        </div>
                        <p class="mb-0 ellipsis"></p>
                        <p class="text-gray ellipsis mb-2">{{ $item->content }}
                        </p>
                        <div class="row text-gray d-md-flex d-none">
                            <div class="col-6 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Dibuat :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">{{ $item->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                        </div>
                    </div>
                @empty
                    <center><strong>Tidak ada komentar</strong></center>
                @endforelse
                </div>
            </div>
            </div>
        </div>
    <hr>
    @endsection

@push('script')
    
@endpush