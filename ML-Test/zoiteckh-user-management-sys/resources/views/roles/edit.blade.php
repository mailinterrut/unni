@extends('layouts.app')

@section('content')
    <h1>Edit Role: {{ $role->name }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('roles.update', $role) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Role Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $role->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control">{{ $role->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Role</button>
    </form>
@endsection
