@extends('master')
@section('title','Register')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card text-left">
                <div class="card-header">
                    Register a new user
                </div>
                <div class="card-body">
                    <form method="POST">
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="userName" class="bmd-label-floating">Name</label>
                            <input type="text" class="form-control" id="userName" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="userEmail" class="bmd-label-floating">Email address</label>
                            <input type="email" class="form-control" id="userEmail" name="email" value="{{ old('email') }}">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                        <div class="form-group">
                            <label for="userPassword" class="bmd-label-floating">Password</label>
                            <input type="password" class="form-control" id="userPassword" name="password">
                        </div>
                        <div class="form-group">
                            <label for="userPassword" class="bmd-label-floating">Confirm Password</label>
                            <input type="password" class="form-control" id="userPasswordConfirm" name="password_confirmation">
                        </div>

                        <button type="reset" class="btn btn-warning"><i class="fas fa-redo"></i> Reset</button>
                        <button type="submit" class="btn btn-primary btn-raised"><i class="fas fa-check    "></i> Submit</button>

                        <hr>
                        <a href="{{ url('/auth/redirect/github') }}" class="btn btn-outline-info"><i class="fab fa-github"></i> Github</a>
                        <a href="{{ url('/auth/redirect/linkedin') }}" class="btn btn-outline-info"><i class="fab fa-linkedin"></i> Linkedin</a>
                        <a href="{{ url('/auth/redirect/google') }}" class="btn btn-outline-info"><i class="fab fa-google"></i> Google</a>
                        <a href="{{ url('/auth/redirect/twitter') }}" class="btn btn-outline-info"><i class="fab fa-twitter"></i> Twitter</a>
                        <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-outline-info"><i class="fab fa-facebook"></i> Facebook</a>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    -0-
                </div>
                </div>
        </div>
    </div>
</div>
@endsection
