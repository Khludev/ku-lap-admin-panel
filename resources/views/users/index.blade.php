@extends('lap::layouts.auth')

@section('title', 'Users')
@section('child-content')
    <div class="row mb-3">
        <div class="col-md">
            <h2 class="mb-0 text-dark">@yield('title')</h2>
        </div>
        <div class="col-md-auto mt-2 mt-md-0">
            @can('Create Users')
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Create User</a>
            @endcan
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            {!! $html->table() !!}
        </div>
    </div>
@endsection

@push('scripts')
    {!! $html->scripts() !!}
@endpush