@extends('layouts.app')

@section('title', 'General UI')
@section('page_title', 'General UI Elements')

@section('breadcrumb')
    <li class="breadcrumb-item">UI Elements</li>
    <li class="breadcrumb-item active">General</li>
@endsection

@section('content')
<div class="row">
    {{-- Buttons --}}
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-header"><h3 class="card-title">Buttons</h3></div>
            <div class="card-body">
                @foreach(['primary','secondary','success','danger','warning','info','light','dark'] as $btn)
                    <button type="button" class="btn btn-{{ $btn }} me-1 mb-1">{{ ucfirst($btn) }}</button>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Alerts --}}
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-header"><h3 class="card-title">Alerts</h3></div>
            <div class="card-body">
                @foreach(['primary','success','warning','danger'] as $alert)
                    <div class="alert alert-{{ $alert }}">This is a {{ $alert }} alert.</div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Badges --}}
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-header"><h3 class="card-title">Badges</h3></div>
            <div class="card-body">
                @foreach(['primary','secondary','success','danger','warning','info','light','dark'] as $badge)
                    <span class="badge text-bg-{{ $badge }} me-1">{{ ucfirst($badge) }}</span>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
