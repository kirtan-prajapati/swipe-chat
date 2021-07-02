@extends('layouts.chatapp')

@section('content')

<!-- Start of Sign In -->
<div class="main order-md-1">
    <div class="start">
        <div class="container">
            <div class="col-md-12">
                <div class="content">
                    <h1>Sign in to Swipe</h1>
                    <div class="third-party">
                        <button class="btn item bg-blue">
                            <i class="material-icons">pages</i>
                        </button>
                        <button class="btn item bg-teal">
                            <i class="material-icons">party_mode</i>
                        </button>
                        <button class="btn item bg-purple">
                            <i class="material-icons">whatshot</i>
                        </button>
                    </div>
                    <p>or use your email account:</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" required value="{{ old('email') }}" name="email">
                            <button class="btn icon"><i class="material-icons">mail_outline</i></button>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required name="password">
                            <button class="btn icon"><i class="material-icons">lock_outline</i></button>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn button">Sign In</button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <div class="callout">
                            <span>Don't have account? <a href="sign-up.html">Create Account</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Sign In -->
<!-- Start of Sidebar -->
<div class="aside order-md-2">
    <div class="container">
        <div class="col-md-12">
            <div class="preference">
                <h2>Hello, Friend!</h2>
                <p>Enter your personal details and start your journey with Swipe today.</p>
                <a href="{{route('register')}}" class="btn button">Sign Up</a>
            </div>
        </div>
    </div>
</div>
<!-- End of Sidebar -->

@endsection
