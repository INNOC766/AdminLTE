@extends('layouts.app')

@section('title', 'Cards Widget')
@section('page_title', 'Cards')

@section('breadcrumb')
    <li class="breadcrumb-item">Widgets</li>
    <li class="breadcrumb-item active">Cards</li>
@endsection

@section('content')
<div class="row">
    @foreach(['primary','success','warning','danger','info','secondary'] as $color)
    <div class="col-md-4 mb-4">
        <div class="card text-bg-{{ $color }}">
            <div class="card-header">{{ ucfirst($color) }} Card</div>
            <div class="card-body">
                <h5 class="card-title">Card Title</h5>
                <p class="card-text">This is a {{ $color }} card example built with AdminLTE and Bootstrap 5.</p>
                <a href="#" class="btn btn-light btn-sm">Read More</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
