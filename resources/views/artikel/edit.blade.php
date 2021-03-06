@extends('layouts.app')
@section('title','Edit Buku '.$article->title)
@section('content')

<form action="{{ route('article.update',$article->id) }}" method="post" class="form-horizontal col-md-8" enctype="multipart/form-data">
    @csrf @method('PUT')
    @include('artikel.form', [
        'button' => 'Update',
        'type' => 'Submit'
    ])
</form>

@endsection