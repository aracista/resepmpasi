@extends('layouts.app')

@section('body')
<!-- <div class="container fluid"> -->
    <div class="row" style="margin-top: 100px;">
        <div class="col-md-8">
                <div class="login-card">
                    <img src="{{asset('img/logo.png')}}" class="profile-img-card">
                        <p class="profile-name-card"> </p>
                            <form class="form-signin" method="post" action="{{ route('login') }}">
                                @csrf
                                <span class="reauth-email"></span>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email"  value="{{ old('email') }}" name="email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="alert alert-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required>

                                 @if ($errors->has('password'))
                                    <span class="alert alert-danger" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <div class="checkbox">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </form>
                </div>   
        </div>
    </div>
<!-- </div> -->
@endsection
