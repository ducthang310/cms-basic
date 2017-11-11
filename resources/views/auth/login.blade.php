@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <main class="admin-auth">
        <div class="container">
            <div class="row">
                <form class="admin-auth__form card" action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}

                    <h4 class="admin-auth__title">Sign in</h4>
                    <div class="card-content row" style="margin-bottom: 0">
                        <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" name="email" id="email" class="validate" value="{{ old('email') }}" required autofocus>
                            <label for="email">Email</label>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" name="password" id="password" class="validate" required>
                            <label for="password">Password</label>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-field col s12">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">Remember Me</label>
                        </div>
                        <div class="input-field col s12">
                            <a class="right link-gray admin-auth__second-link" href="{{route('password.request')}}">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="card-action center">
                        <button class="btn-large waves-effect waves-light btn-primary" type="submit" name="action">Login</button>
                    </div>
                    <a href="{{route('register')}}" class="link-gray register-link">Register an account</a>
                </form>
            </div>
        </div>
    </main>
@endsection



@push('footer-scripts')
    <script type="text/javascript">
        $(document).ready(function () {

        });
    </script>
@endpush