@extends('layouts.app')

@section('title', 'Timeline')
@section('page_title', 'Timeline')

@section('breadcrumb')
    <li class="breadcrumb-item">UI Elements</li>
    <li class="breadcrumb-item active">Timeline</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header"><h3 class="card-title">Timeline Example</h3></div>
            <div class="card-body">
                <div class="timeline">
                    <div class="time-label">
                        <span class="text-bg-danger">{{ now()->format('d M Y') }}</span>
                    </div>
                    <div>
                        <i class="bi bi-envelope-fill bg-primary"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="bi bi-clock-fill"></i> 12 mins ago</span>
                            <h3 class="timeline-header"><a href="#">New message</a> from Admin</h3>
                            <div class="timeline-body">
                                Welcome to AdminLTE 4 with Laravel! This is a timeline entry.
                            </div>
                        </div>
                    </div>
                    <div>
                        <i class="bi bi-person-fill bg-success"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="bi bi-clock-fill"></i> 3 hours ago</span>
                            <h3 class="timeline-header">New user registered</h3>
                        </div>
                    </div>
                    <div>
                        <i class="bi bi-cart-fill bg-warning"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="bi bi-clock-fill"></i> 1 day ago</span>
                            <h3 class="timeline-header">New order placed</h3>
                            <div class="timeline-body">Order #1042 — $320.00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
