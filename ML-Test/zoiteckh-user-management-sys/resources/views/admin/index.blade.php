@extends('layouts.app')

@section('content')
    <h1>Admin List</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->role->name }}</td>
                    <td>
                        <a href="{{ route('admin.edit', $admin) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('admin.destroy', $admin) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this admin?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('admin.create') }}" class="btn btn-primary">Add New Admin</a>
@endsection
