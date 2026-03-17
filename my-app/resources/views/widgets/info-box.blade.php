@extends('layouts.app')

@section('title', 'Info Box Widget')
@section('page_title', 'Info Box')

@section('breadcrumb')
    <li class="breadcrumb-item">Widgets</li>
    <li class="breadcrumb-item active">Info Box</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-3 col-sm-6">
        <div class="info-box">
            <span class="info-box-icon text-bg-primary"><i class="bi bi-cart-fill"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Orders</span>
                <span class="info-box-number">150</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="info-box">
            <span class="info-box-icon text-bg-success"><i class="bi bi-people-fill"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Users</span>
                <span class="info-box-number">1,410</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="info-box">
            <span class="info-box-icon text-bg-warning"><i class="bi bi-star-fill"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">2,000</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="info-box">
            <span class="info-box-icon text-bg-danger"><i class="bi bi-envelope-fill"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Messages</span>
                <span class="info-box-number">760</span>
            </div>
        </div>
    </div>
</div>
@endsection
