@extends('layouts.layout')
@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">User Information</h2>
        <p class="text-center">
            <a class="fw-semibold text-primary mb-2" href="{{ url('/create-user') }}">
                Create User
            </a>
        </p>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td> {{ $user->name }} </td>
                        <td> {{ $user->email }} </td>
                        <td> {{ $user->mobile }} </td>
                        <td> {{ $user->password }} </td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
