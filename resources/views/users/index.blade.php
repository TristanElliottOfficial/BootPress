@extends('layouts.app')

@section('content')
  <header class="py-3">
    <div class="container-fluid">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h2>Users</h2>
        </div>
        <div>
          <a href="{{ route('users.create') }}" class="btn btn-primary">Create New User</a>
        </div>
      </div>
    </div>
  </header>
  <!-- Main Content -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <b-table striped borderless hover :items="{{ $users }}"></b-table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
