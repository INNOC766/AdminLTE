@extends('layouts.app')

@section('title', 'Icons')
@section('page_title', 'Bootstrap Icons')

@section('breadcrumb')
    <li class="breadcrumb-item">UI Elements</li>
    <li class="breadcrumb-item active">Icons</li>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header"><h3 class="card-title">Bootstrap Icons</h3></div>
            <div class="card-body">
                <div class="row text-center">
                    @php
                        $icons = [
                            'bi-house-fill','bi-person-fill','bi-envelope-fill','bi-bell-fill',
                            'bi-cart-fill','bi-star-fill','bi-gear-fill','bi-search',
                            'bi-trash-fill','bi-pencil-fill','bi-eye-fill','bi-lock-fill',
                            'bi-check-circle-fill','bi-x-circle-fill','bi-info-circle-fill','bi-exclamation-triangle-fill',
                            'bi-bar-chart-fill','bi-pie-chart-fill','bi-graph-up','bi-table',
                            'bi-file-earmark-fill','bi-folder-fill','bi-download','bi-upload',
                        ];
                    @endphp
                    @foreach($icons as $icon)
                        <div class="col-6 col-md-3 col-lg-2 mb-3">
                            <i class="bi {{ $icon }} fs-3 d-block mb-1"></i>
                            <small class="text-secondary">{{ $icon }}</small>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
