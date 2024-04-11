@extends('administration.layout.app')

@section('content')
    <div class="container d-flex h-100">
        <div class="row justify-content-center align-items-center w-100 pt-5">
            <div class="col-md-6 ">
                <div class="d-flex justify-content-center pb-3">
                    <a class="logo" href="index.html">
                        <img class="img-fluid for-light" src="{{ asset('admin/assets/images/logo.png') }}" alt="looginpage"
                            style="max-width: 150px;">
                    </a>
                </div>

                <div class="card">
                    <div class="card-body bg-white rounded p-4">
                        <h2>Sign in to account</h2>
                        <p>Enter your email & password to login</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="text-end mt-3">
                                <button class="btn btn-success btn-block w-100" type="submit">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
