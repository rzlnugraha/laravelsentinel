@extends('layouts.app')
@section('title','Edit Buku '.$book->judul_buku)
@section('content')

<form action="{{ route('book.update',$book->id) }}" method="post" class="form-horizontal col-md-8">
    @csrf @method('PUT')
    @include('layouts.form', [
        'button' => 'Update'
    ])
</form>

@endsection