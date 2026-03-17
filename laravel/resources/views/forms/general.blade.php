@extends('layouts.app')

@section('title', 'General Forms')
@section('page_title', 'General Form Elements')

@section('breadcrumb')
    <li class="breadcrumb-item">Forms</li>
    <li class="breadcrumb-item active">General</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header"><h3 class="card-title">General Elements</h3></div>
            <div class="card-body">
                <form>
                    @csrf
                    <div class="mb-3">
                        <label for="inputText" class="form-label">Text Input</label>
                        <input type="text" class="form-control" id="inputText" placeholder="Enter text" />
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email Input</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter email" />
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" />
                    </div>
                    <div class="mb-3">
                        <label for="inputSelect" class="form-label">Select</label>
                        <select class="form-select" id="inputSelect">
                            <option selected>Choose...</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputTextarea" class="form-label">Textarea</label>
                        <textarea class="form-control" id="inputTextarea" rows="3"></textarea>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="checkDefault" />
                        <label class="form-check-label" for="checkDefault">Checkbox</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header"><h3 class="card-title">Input Groups</h3></div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                    <input type="text" class="form-control" placeholder="Username" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="number" class="form-control" placeholder="Amount" />
                    <span class="input-group-text">.00</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
