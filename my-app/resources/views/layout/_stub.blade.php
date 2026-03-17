{{--
    Generic layout variation stub.
    Each layout page extends the main app layout and passes a specific
    body class to alter layout behaviour via AdminLTE's CSS classes.

    Available AdminLTE body classes:
      layout-fixed          → Fixed header + sidebar
      layout-footer-fixed   → Fixed footer
      sidebar-mini          → Mini sidebar
      sidebar-collapse      → Collapsed sidebar by default
      layout-rtl            → Right-to-left

    Usage example (fixed-header layout):
      @extends('layouts.app')
      @section('body_class', 'layout-fixed')
--}}
@extends('layouts.app')

@section('title', $layoutTitle ?? 'Layout')
@section('page_title', $layoutTitle ?? 'Layout')

@section('breadcrumb')
    <li class="breadcrumb-item">Layout Options</li>
    <li class="breadcrumb-item active">{{ $layoutTitle ?? 'Layout' }}</li>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $layoutTitle ?? 'Layout' }}</h3>
            </div>
            <div class="card-body">
                <p>Layout variation: <strong>{{ $layoutTitle ?? 'Layout' }}</strong>.</p>
                <p>
                    This page uses the <code>{{ $bodyClass ?? '' }}</code> body class to
                    activate the chosen AdminLTE layout mode.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
