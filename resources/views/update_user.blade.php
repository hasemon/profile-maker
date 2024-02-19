@extends('layouts.layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Update Registration Form</h2>
                <p class="text-center">
                    <a class="fw-semibold text-primary mb-2" href="{{ url('/') }}">
                        Go back Home
                    </a>
                </p>
                <form method="POST" action="{{ route('user.update', $user->id) }}">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"  value="{{ $user->name }}"  >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value=" {{ $user->email }} ">
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" id="mobile" name="mobile"  value="{{ $user->mobile }}" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{  $user->password }}"  >
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
