@extends('layouts.app')

@section('title', 'Simple Table')
@section('page_title', 'Simple Table')

@section('breadcrumb')
    <li class="breadcrumb-item">Tables</li>
    <li class="breadcrumb-item active">Simple</li>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Example Table</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $rows = [
                                ['John Doe',    'john@example.com',    'Admin',  'Active'],
                                ['Jane Smith',  'jane@example.com',    'Editor', 'Active'],
                                ['Bob Johnson', 'bob@example.com',     'User',   'Inactive'],
                                ['Alice Brown', 'alice@example.com',   'User',   'Active'],
                                ['Eve Wilson',  'eve@example.com',     'Editor', 'Active'],
                            ];
                        @endphp
                        @foreach($rows as $i => $row)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $row[0] }}</td>
                            <td>{{ $row[1] }}</td>
                            <td>{{ $row[2] }}</td>
                            <td>
                                <span class="badge text-bg-{{ $row[3] === 'Active' ? 'success' : 'secondary' }}">
                                    {{ $row[3] }}
                                </span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
