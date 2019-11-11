@extends('layouts.app')
@section('title','Dashboard Admin')
@push('style')
    
@endpush

@section('content')
    
<div class="content-wrapper">
    <div class="jumbotron">
        <h1 class="display-4">Hello, {{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}!</h1>
        <p class="lead">Ini Dashboard Admin.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
</div>

@endsection

@push('script')
    
@endpush