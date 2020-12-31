@extends('layouts.app')

@section('content')
  <header class="py-3">
    <div class="container-fluid">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h2>Create New User</h2>
        </div>
        <div>
          <a href="{{ route('users.index') }}" class="btn btn-success">Return</a>
        </div>
      </div>
    </div>
  </header>
  <!-- Main Content -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Create User
          </div>
          <div class="card-body">
            <form action="{{ route('users.store') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" />
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
              </div>
              @foreach ($roles as $role)
                <div class="form-group">
                  <label for="{{ $role->name }}">
                    <input type="checkbox" name="{{ $role->name }}" id="{{ $role->name }}" value="{{ $role->id }}">
                    <span class="pl-2">{{ $role->display_name }}</span>
                  </label>
                </div>
              @endforeach
              <div class="form-group">
                <button class="btn btn-success">Create</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
