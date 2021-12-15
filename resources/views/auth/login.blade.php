@extends('layouts.login')



@section('content')

<form method="POST" action="{{ route('login') }}">

    @csrf
    <div class="form-group">
        <input type="email" class="form-control @error('email') is-invalid @enderror"
            placeholder="Enter your email address" value="{{ old('email') }}" name="email" autofocus
            autocomplete="email">
        @error('email')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div><!-- form-group -->
    <div class="form-group">
        <input type="password" class="form-control  @error('password') is-invalid @enderror"
            placeholder="Enter your password" name="password" autocomplete="current-password">
        @error('password')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div><!-- form-group -->
    <button type="submit" class="btn btn-info btn-block">Sign In</button>
</form>

@endsection
